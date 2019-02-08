<?php



?>

<h2></h2>

<div class="shop-items flaoters">
    <?php

    for($i=0;$i<10;$i++){
        echo "
        <a href='?item=65441'>
        <div class='card flaoters'>
        <img src='media/categories/shoes.jpg' alt='Category' style='width:100%'>
        <div class='card-container'>
        <h4><b>Nike Bibabu</b></h4>
        <p>€125</p>
        </div>
        </div>
        </a>
        ";
    }

    ?>
</div>

<style>
.card {
    box-shadow: 0px 0px 10px -20px rgba(255,255,255,0.41);
    transition: 0.3s;
    background-color: var(--primary-dark);
    width: 23%;
    margin: 5px;
}

.card:hover {
    box-shadow: 0px 0px 10px 5px rgba(255,255,255,0.41);
    cursor: pointer;
}

.card-container {
    padding: 2px 16px;
}
.shop-items {
    display:inline;
    margin-left: auto;
    margin-right: auto;
    padding-top: 40px;
    height: auto;
}
</style>
