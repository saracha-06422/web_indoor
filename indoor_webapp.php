<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php include ('header.php');?>
    <?php
    $room = file_get_contents("test.txt",0,NULL,0,6);
    $coor = file_get_contents("test.txt",0,NULL,6,5);
    $router1 = file_get_contents("test.txt",0,NULL,11,5);
    $router2 = file_get_contents("test.txt",0,NULL,16,5);
    ?>
    
    <h3 class="room">Position : <?php echo $room; ?></h3>

    <figure class="snip2">
        <img src="xbee3.jpg" alt="">
        <figcaption>
            <h3 class="title1">Xbee1</h3>
            <h3 class="title2"><?php echo $router1; ?></h3>
            <h3 class="title3">router1</h3>
        </figcaption>
        <a href="#"></a>
    </figure>
    <figure class="snip2">
        <img src="xbee3.jpg" alt="">
        <figcaption>
            <h3 class="title1">Xbee2</h3>
            <h3 class="title2"><?php echo $router2; ?></h3>
            <h3 class="title3">router2</h3>
        </figcaption>
        <a href="#"></a>
    </figure>
    <figure class="snip2">
        <img src="xbee3.jpg" alt="">
        <figcaption>
            <h3 class="title1">Xbee3</h3>
            <h3 class="title2"><?php echo $coor; ?></h3>
            <h3 class="title3">coordinator</h3>
        </figcaption>
        <a href="#"></a>
    </figure>
</body>
</html>
