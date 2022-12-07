<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Galería';
$galeria = 'current-menu-item';
include('includes/head.php');
?>

<body class="home">
    <?php 
    include('includes/preloader.php')
    ?>
    <div id="page" class="full-page">
        <?php
        include('includes/header.php');
        include('modules/galeria.php');
        include('includes/footer.php');
        ?>
    </div>
    <?php 
    include('includes/scripts.php');
    ?>

</body>

</html>