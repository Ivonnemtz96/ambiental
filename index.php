<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Inicio';
$inicio = 'current-menu-item';
include('includes/head.php');
?>

<body class="home">
    <?
        include('includes/preloader.php');
    ?>
    <div id="page" class="full-page">
        <?php
        include('includes/header.php');
        include('modules/index.php');
        include('includes/footer.php');
        ?>
    </div>
    <?php 
    include('includes/scripts.php');
    ?>

</body>

</html>