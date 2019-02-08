<?php

include_once './include/database.php';
$database = new Database();
$subcats = $database->readSubcategory($_GET['category']);
$subcat_list = "<li><a href='?page=shop&category=".$_GET['category']."'>All</a></li>";

if($subcats->rowCount()>0){
    while ($row = $subcats->fetch(PDO::FETCH_ASSOC)) {

        extract($row);
        $subcat_list .= "
        <li><a href='?page=shop&category=".$_GET['category']."&subcategory=".$id."'>".$title." (".$itemcount.")</a></li>
        ";

    }
}

?>

<div class="sidenav flaoters">
    <ul>
        <?php echo $subcat_list; ?>
    </ul>
</div>
