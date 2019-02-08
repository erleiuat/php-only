<?php

    include_once './include/database.php';
    $database = new Database();
    $items = $database->readCategories();
    $item_list = "";

    if($items->rowCount()>0){
        while ($row = $items->fetch(PDO::FETCH_ASSOC)) {

            extract($row);

            $item_list .= "
            <a href='?page=shop&category=".$title."&subcategory=false'>
            <div class='card flaoters'>
            <img src='media/categories/".$image."' alt='Category' style='width:100%'>
            <div class='card-container'>
            <h4><b>".$title."</b></h4>
            <p>12'741 Articles</p>
            </div>
            </div>
            </a>
            ";

        }
    }

?>

<h2>Categories</h2>
<div class="card-list">
    <?php echo $item_list; ?>
</div>

<style>
.flaoters{
    display:inline-block;
}
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
.card-list {
    display:inline;
    margin-left: auto;
    margin-right: auto;
    padding-top: 40px;
    height: auto;
}
.card-list a {
    text-decoration: none;
}
</style>
