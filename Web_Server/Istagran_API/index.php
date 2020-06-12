
<?php
$request = file_get_contents('https://www.instagram.com/cesar_henrique_ramos/?__a=1');
$obj = json_decode($request);
echo '<pre>';
//print_r($obj);
echo '</pre>';
$img = $obj->graphql->user->edge_owner_to_timeline_media->edges[1]->node->display_url;
echo '<pre>';
//print_r($img);
echo '</pre>';
/*for($i=1; $i <=10; $i++){
    $img = $obj->graphql->user->edge_owner_to_timeline_media->edges[$i]->node->display_url;
    echo '<img src="'.$img.'" alt="">';
}*/
//thumbnail_src
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    for($i=0; $i <7; $i++){
        $img = $obj->graphql->user->edge_owner_to_timeline_media->edges[$i]->node->display_url;
        echo '<img src="'.$img.'" alt="">';
    }
    ?>
</body>
</html>