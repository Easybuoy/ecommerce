<?php
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css.css">

<body>
    <div class="container-fluid" >
        <div class="row">
            <div id="div1" class="col-md-6">
    <div>
                <iframe width="450px" height="250" src="https://www.youtube.com/embed/HAMPkKbBbnA?autoplay=1" frameborder="0" allowfullscreen></iframe>
</div>

            </div>
            <div class="col-md-6 form">
                <form class="form-group">
                    <div class="input-group mb15">
                        <span class=input-group-addon><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" id="inputSuccess1"/>
                    </div>
                    <?php echo "<br/>"?>
                    <div class="input-group mb15">
                        <span class=input-group-addon><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="text" class="form-control" id="inputSuccess2"/>
                    </div>
                    <?php echo "<br/>"?>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-success">Sign In <i class="fa fa-angle-right ml5"></i></button>
                    </div>
                    <a href="http://www.sociallenderng.com/">Click to redirect back to SocialLender</a>
                </form>

            </div>

        </div>

    </div>
</body>


</html>
