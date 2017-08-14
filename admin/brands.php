<?php
?>

<?php
require_once '../core/init.php';
include 'includes/head.php';
include  'includes/navigation.php';
//get brands from database

$sql = "SELECT * from brand ORDER BY brand";
$result = $db->query($sql);

?>
<h2 class="text-center">Brands</h2>
<table class="table table-bordered table-striped table-auto">
    <thead>
    <th></th>
    <th>Brand</th>
    <th></th>
    </thead>
    <tbody>
    <?php while ($brand = mysqli_fetch_assoc($result)){?>
    <tr>
        <td><a href="brands.php?edit=<?php echo $brand['id'];?>" class="btn btn-xl btn-default"><span class="glyphicon glyphicon-pencil"></span></a> </td>
        <td><?php echo $brand['brand'];?></td>
        <td><a href="brands.php?delete=<?php echo $brand['id'];?>" class="btn btn-xl btn-default"><span class="glyphicon glyphicon-remove-sign"></span></a></td>
    </tr>
    <?php } ?>
    </tbody>
</table>


<?php
include 'includes/footer.php';
?>
