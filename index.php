<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![end if]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![end if]-->

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Stylessheets -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/content.css" />

</head>
<body>
    <div class="container">
        <?php include('components/header/index.php') ?>

        <div class="content">
            <?php

                if(isset($_GET['page'])){
                    include('views/'.$_GET['page'].'.php');
                } else if(isset($_GET['item'])){
                    include('views/item.php');
                } else {
                    include('views/home.php');
                }

            ?>
        </div>

        <?php include('components/footer/index.php') ?>
    </div>
</body>
</html>
