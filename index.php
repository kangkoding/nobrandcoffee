<?php
require('./view/layout/header.php');
?>
    <?php
    if (empty($_GET)) {
        include "./view/home.php";
    } else {
        switch ($_GET['page']) {
            case 'about':
                include './view/about.php';
                break;
            case 'location':
                include './view/location.php';
                break;
            case 'shop':
                include './view/shop.php';
                break;
            default:
                include './view/home.php';
                break;
        }
    }
    ?>
<?php
require('./view/layout/footer.php');
?>