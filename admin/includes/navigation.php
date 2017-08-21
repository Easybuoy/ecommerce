<?php
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
            <a href="/ecommerce/admin/index.php"  class="navbar-brand"><img id=class="img-responsive2" src="../images/logo.png" style="max-width: 150px; margin-top: -30px; "> </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <div class="navbar-header">
                <ul class="nav navbar-nav">
                    <li><a href="brands.php">Brands</a></li>
                    <li><a href="categories.php">Categories</a></li>
<!--                    <li class="dropdown">-->
<!--                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">--><?php //echo $parent['category'];?><!--<span class="caret"></span></a>-->
<!--                        <ul class="dropdown-menu role="menu">-->
<!--                    <li><a href="#">--><?php //echo $child['category'];?><!--</a></li>-->

                </ul>
                </li>
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
