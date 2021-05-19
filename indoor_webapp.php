<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="room_style.css" type="text/css">
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


    <div class="boxroom">
        <div class="room_1">
            <h2>ROOM A</h2>
            <?php 
            if ( $room == 'Room A'){
                echo '<div class="center">
                <span class="pointer"></span>
                <span class="pulse"></span>
                </div>';
            }
            ?>
        </div>
        <div class="room_2">
            <h2>ROOM B</h2>
            <?php 
                if ( $room == 'Room B'){
                    echo '<div class="center">
                    <span class="pointer"></span>
                    <span class="pulse"></span>
                    </div>';
                }
            ?>
        </div>
        <div class="room_3">
            <h2>ROOM C</h2>
            <?php 
                if ( $room == 'Room C'){
                    echo '<div class="center">
                    <span class="pointer"></span>
                    <span class="pulse"></span>
                    </div>';
                }
            ?>
        </div>
    </div>
    <div class="dis">
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
    </div>
   
</body>
</html>
