<h1>Shop</h1>

<?php
if(isset($_GET['category'])){
    include('./components/shop/sidenav.php');
    include('./components/shop/itemlist.php');
} else {
    include('./components/shop/categorylist.php');
}
?>

<style>
.sidenav {
    min-height: 200px;
    width: 20%;
    float: left;
    padding-top: 10px;
}
.sidenav a {
    text-decoration: none;
    color: var(--font);
    font-family: sans-serif;
}

.shop-items {
    min-height: 200px;
    width: 80%;
    padding-top: 10px;
}

.flaoters{
    display:inline-block;
}
</style>
