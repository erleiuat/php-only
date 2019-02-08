<h1>Shop</h1>

<?php
if(isset($_GET['category'])){
    include('./components/shop/sidenav.php');
    include('./components/shop/itemlist.php');
} else {
    include('./components/shop/categorylist.php');
}
?>

<link rel="stylesheet" href="./css/shop.css" />
