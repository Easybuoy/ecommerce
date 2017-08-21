<?php
require_once 'core/init.php';
include 'includes/head.php';
include 'includes/navigation.php';
include 'includes/slider.php';
include 'includes/leftsidebar.php';

?>
<?php
$sql = "SELECT * FROM products WHERE featured = 1";
$featuredProducts = $db->query($sql);
?>





    <!--main content-->
    <div class="col-md-8">
        <div class="row">
            <h2 class="text-center">Products</h2>
            <?php while ($products = mysqli_fetch_assoc($featuredProducts)){?>

            <div class="col-sm-3 text-center">
                <h4><?php echo $products['title']?></h4>
                <img src="<?php echo $products['image'];?>" alt="<?php echo $products['title']?>" class="img-thumb" />
                <p class="list-price text-danger">List Price: <s>$<?php echo $products['list_price'];?></s></p>
                <p class="price">Our Price: $<?php echo $products['price'];?></p>
                <button class="btn btn-sm btn-success" onclick="modalDetails(<?= $products['id'];?>)">Details</button>
            </div>
            <?php }?>
        </div>

    </div>

<?php
include 'includes/rightsidebar.php';
include 'includes/footer.php';
?>
