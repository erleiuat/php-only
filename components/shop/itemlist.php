<?php

include_once './include/database.php';
$database = new Database();

if(isset($_GET['subcategory'])){
    $items = $database->readItems($_GET['category'], $_GET['subcategory']);
    $subcategorie = $database->readSubcategory($_GET['category'], $_GET['subcategory']);
} else {
    $items = $database->readItems($_GET['category']);
}

$categorie = $database->readCategory(false, $_GET['category']);


$item_list = "";

if($items->rowCount()>0){
    while ($row = $items->fetch(PDO::FETCH_ASSOC)) {

        extract($row);
        $item_list .= "
        <a href='?item=".$id."'>
        <div class='card flaoters'>
        <div class='imageContainer'>
        <img src='media/shop/items/".$image."' alt='Item' style='width:100%'>
        </div>
        <div class='card-container'>
        <h4><b>".$title."</b></h4>
        <p>".$price.".-</p>
        </div>
        </div>
        </a>
        ";

    }
}

?>

<div class="list-header">
    <h2>
        <?php

        echo $categorie['title'].' ('.$categorie['itemcount'].')';

        if(isset($_GET['subcategory'])){
            echo ' - '.$subcategorie['title'].' ('.$subcategorie['itemcount'].')';
        }

        ?>
    </h2>
    <select id="soflow">
        <option value="">Sort</option>
        <option value="volvo">Price (Low to High)</option>
        <option value="volvo">Price (High to Low)</option>
        <option value="volvo">Rating (Best to Worst)</option>
        <option value="volvo">Rating (Worst to Best)</option>
        <option value="volvo">Name (A to Z)</option>
        <option value="volvo">Name (Z to A)</option>
    </select>
</div>

<div class="shop-items flaoters">
    <?php echo $item_list; ?>
</div>

<style>

    select#soflow {

        border-radius: 2px;
        background-color: var(--primary);
        background-position: 97% center;
        background-repeat: no-repeat;
        border: 1px solid var(--primary-dark);
        color: var(--font);
        font-size: inherit;
        overflow: hidden;
        padding: 5px 10px;
        text-overflow: ellipsis;
        white-space: nowrap;
        margin-right: 40px;
        width: 150px;
    }

    .list-header h2 {
        float: left;
    }
    .list-header select {
        float: right;
    }
    .card {
        box-shadow: 0px 0px 10px -20px rgba(255,255,255,0.41);
        transition: 0.3s;
        background-color: var(--primary);
        width: 23%;
        margin: 5px;
    }

    .card:hover {
        box-shadow: 0px 0px 10px 5px rgba(255,255,255,0.41);
        cursor: pointer;
    }

    .card img {
        top: 50%;
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        margin: 0;
        position: absolute;
    }

    .imageContainer {
        height: 200px;
        position: relative;
        overflow: hidden;
    }

    .card-container {
        padding: 12px 16px;
    }
    .shop-items {
        display:inline;
        margin-left: auto;
        margin-right: auto;
        padding-top: 40px;
        height: auto;
    }
    .shop-items a {
        text-decoration: none;
    }
</style>
