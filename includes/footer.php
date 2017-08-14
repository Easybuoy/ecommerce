<?php
?>

</div>

<footer class="text-center" id="footer">&copy; Copyright 2017 Quest Store</footer>


<script>
    function modalDetails(id) {
        var data = {"id" : id};
        jQuery.ajax({
            url : <?php echo BASEURL;?>+'includes/modaldetails.php',
            method: "post",
            data : data,
            success : function (data) {
                jQuery('body').append(data);
                jQuery('#details-modal').modal('toggle');
            },
            error : function () {
                alert("Something went wrong!");
            }
        });
    }

</script>

<script rel="script" src="js/jquery-3.2.1.js"></script>
<script rel="script" src="js/bootstrap.js"></script>


</body>

</html>

