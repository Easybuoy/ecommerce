<?php
$sql  = "SELECT * FROM categories WHERE parent = 0";
$pquery = $db->query($sql);
?>

<!-- Top Nav Bar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
                <!--                <span class="sr-only">Toggle Navigation </span>-->
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href=""  class="navbar-brand"><img id=class="img-responsive2" src="images/logo.png" style="max-width: 150px; margin-top: -30px; "> </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <div class="navbar-header">
                <ul class="nav navbar-nav">
                    <?php while ($parent = mysqli_fetch_assoc($pquery)) {?>
                    <?php
                    $parent_id = $parent['id'];
                    $sql2 = "SELECT * FROM categories WHERE parent = '$parent_id'";
                    $cquery = $db->query($sql2);
                    ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $parent['category'];?><span class="caret"></span></a>
                        <ul class="dropdown-menu role="menu">
                    <?php while ($child = mysqli_fetch_assoc($cquery))  :?>
                    <li><a href="#"><?php echo $child['category'];?></a></li>
                    <?php endwhile; ?>
                </ul>
                </li>
                <?php }?>
            </div>

            <div class="navbar-header navbar-right">
                <ul class="nav navbar-nav">
                    <li><a href="">Signin</a> </li>
                    <li><a href="">Signup</a> </li>
                </ul>
            </div>

        </div>

    </div>
</nav>

