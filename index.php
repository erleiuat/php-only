<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![end if]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![end if]-->

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <style>
    :root {
        --primary: #1976d2;
        --primary-dark: #004ba0;
        --primary-light: #63a4ff;
        --bg: #0b0b0b;
        --bg-light: #282828;
        --font: #edecec;
    }
    h1, h2, h3, h4, h5, p {
        margin: 0px;
        color: var(--font);
        font-family: sans-serif;
    }
    body {
        margin: 0px;
        background-color: var(--bg);
        color: var(--font);
    }

    .container {
        width: 100%;
        min-height:200px;
    }

    .content {
        width: 1200px;
        padding-top: 100px;
        padding-right: 30px;
        padding-bottom: 30px;
        padding-left: 50px;
        margin-left: auto;
        margin-right: auto;
        background-color: var(--bg-light);
        min-height:500px;
    }
</style>

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
