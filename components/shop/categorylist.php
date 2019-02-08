<?php

include_once './include/database.php';
$database = new Database();
$category_list = "";
$type_list = "";

$typeItems = $database->readType();

if(isset($_GET['type'])){
    $categorieItems = $database->readCategory($_GET['type']);
} else {
    $categorieItems = $database->readCategory();
}


if($typeItems->rowCount()>0){
    while ($row = $typeItems->fetch(PDO::FETCH_ASSOC)) {

        extract($row);

        if(isset($_GET['type']) && $_GET['type'] == $id){
            $active = ' active ';
        } else {
            $active = '';
        }

        $type_list .= "<a href='?page=shop&type=".$id."'><button class='tablinks".$active."'>".$title."</button></a>";

    }
}

if($categorieItems->rowCount()>0){
    while ($row = $categorieItems->fetch(PDO::FETCH_ASSOC)) {

        extract($row);
        $category_list .= "
        <a href='?page=shop&category=".$id."'>
        <div class='card flaoters'>
        <img src='media/shop/categories/".$image."' alt='Category' style='width:100%'>
        <div class='card-container'>
        <h4><b>".$title."</b></h4>
        <p>".$itemcount." Items</p>
        </div>
        </div>
        </a>
        ";

    }
}

?>

<h2>Categories</h2>

<div class="tab">
    <?php echo $type_list; ?>
</div>

<div class="card-list">
    <?php echo $category_list; ?>
</div>

<style>
.tab {
    overflow: hidden;
    background-color: var(--bg);
    margin-top: 30px;
}

.tab button {
    background-color: inherit;
    float: left;
    color: var(--font);
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
}

.tab button:hover {
    background-color: var(--primary-dark);
}

.tab button.active {
    background-color: var(--primary-dark);
}

.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}

.flaoters{
    display:inline-block;
}
.card {
    box-shadow: 0px 0px 10px -20px rgba(255,255,255,0.41);
    transition: 0.3s;
    background-color: var(--primary-dark);
    width: 23.9%;
    margin: 5px;
}

.card:hover {
    box-shadow: 0px 0px 10px 5px rgba(255,255,255,0.41);
    cursor: pointer;
}

.card-container {
    padding: 2px 16px;
}
.card-list {
    display:inline;
    margin-left: auto;
    margin-right: auto;
    height: auto;
}
.card-list a {
    text-decoration: none;
}
</style>
