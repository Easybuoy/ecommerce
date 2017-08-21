<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/ecommerce/core/init.php';
include 'includes/head.php';
include 'includes/navigation.php';

$sql = "SELECT * FROM categories WHERE parent = 0";
$result = $db->query($sql);
$errors = array();

//Delete Category


//Process Form
if(isset($_POST) && !empty($_POST)){
    $parent = sanitize($_POST['parent']);
    $category = sanitize($_POST['category']);
    $sqlform = "SELECT * FROM categories WHERE category = '$category' AND parent = '$parent'";
    $fresult = $db->query($sqlform);
    $count = mysqli_num_rows($fresult);
    //if category is blank
    if($category == ''){
        $errors[] .= 'Category cannot be left blank';
    }
    //if exists in database
    if($count > 0){
        $errors[] .= $category.' already exits. Please choose a new category';
    }

    //Display Error Or Update Database
    if(!empty($errors)){
        //display error
        $display = err($errors); ?>
    <script>
        jQuery('document').ready(function () {
            jQuery('#errors').html('<?=$display;?>')
        });
    </script>

    <?php
    }
    else{
        //update database
        $updatesql = "INSERT INTO categories (category, parent) VALUES('$category','$parent') ";
        $db->query($updatesql);
        header('Location: categories.php');
    }
}
?>
<h2 class="text-center">Categories</h2><hr>
<div class="row">
    <!-- Form Table-->
    <div class="col-md-6">
       <form class="form" action="categories.php" method="post">
            <div class="form-group">
                <legend>Add A Category</legend>
                <div id="errors"></div>
                <label for="parent">Parent</label>
                <select class="form-control" name="parent" id="parent">
                    <option value="0">Parent</option>
                    <?php while ($parent = mysqli_fetch_assoc($result)){?>
                        <option value="<?php echo $parent['id']?>"><?=$parent['category'];?></option>
                    <?php }?>
                </select>
            </div>
           <div class="form-group">
               <label for="category">Category</label>
               <input type="text" class="form-control" id="category" name="category">
           </div>
           <div class="form-group">
               <input type="submit" value="Add Category" class="btn btn-success">
           </div>
       </form>
    </div>
    <!-- Category Table-->
    <div class="col-md-6">
        <table class="table table-bordered">
            <thead>
            <th>Category</th>
            <th>Parent</th>
            <th></th>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT * FROM categories WHERE parent = 0";
            $result = $db->query($sql);
            while ($parent = mysqli_fetch_assoc($result)){
                $parent_id = (int)$parent['id'];
                $sql2 = "SELECT * FROM categories WHERE parent = '$parent_id'";
                $cresult = $db->query($sql2);

                ?>
            <tr class ="bg-primary">
                <td><?php echo $parent['category'];?></td>
                <td>Parent</td>
                <td>
                    <a href="categories.php?edit=<?=$parent['id']?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil" </a>
                    <a href="categories.php?delete=<?=$parent['id']?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-remove-sign" </a>
                </td>
            </tr>
                <?php while($child = mysqli_fetch_assoc($cresult)){?>
                    <tr class ="bg-info">
                        <td><?php echo $child['category'];?></td>
                        <td><?=$parent['category'];?></td>
                        <td>
                            <a href="categories.php?edit=<?=$child['id']?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil" </a>
                            <a href="categories.php?delete=<?=$child['id']?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-remove-sign" </a>
                        </td>
                    </tr>
                    <?php }?>
            <?php }?>
            </tbody>
        </table>
    </div>
</div>


<?php include 'includes/footer.php';
?>
