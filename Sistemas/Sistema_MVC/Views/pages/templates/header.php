<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL ?>css/style.css">
    <title><?php echo self::titulo ?></title>
</head>
<body>
<header>
    <div class="container">
        <div class="logo">
            <h2><a href="<?php echo INCLUDE_PATH ?>">Saite MVC</a></h2>
        </div>
        <nav class="menu">
        
            <?php
                foreach($this->menuItems as $key => $value){
                    echo '<a href="'.INCLUDE_PATH.strtolower($value).'">'.$value.'</a>';
                }
            ?>
        </nav>
        <div class="clear"></div>
    </div><!--container-->
</header>