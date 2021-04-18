<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include ('header.php');?>
    <div class= "con">
    <div class="mar2">
    <figure class="snip3">
        <img src="https://images.pexels.com/photos/1624895/pexels-photo-1624895.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        <figcaption>
            <h3>network topology</h3>
            <h5>Cluster tree topology</h5>
            <blockquote>
                <p>โครงสร้างของ network ที่เราเลือกมาใช้ใน Project นี้ คือ Cluster tree topology โดยที่เรามี Enddevice 1 ตัว Router 2 ตัว และ Coordinator 1 ตัว ซึ่งการทำงานจะส่งผ่านข้อมูลจาก Router ไปยัง Coordinator</p>
            </blockquote>
        </figcaption>
        <a href="#"></a>
    </figure>
    <figure class="snip3">
        <img src="https://images.pexels.com/photos/1448561/pexels-photo-1448561.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="">
        <figcaption>
            <h3>equipment</h3>
            <h5>Xbee, Arduino, Raspbery pi</h5>
            <blockquote>
                <p>อุปกรณ์ที่ใช้ใน Project นี้มี 3 อย่าง 1.Xbee 2.Arduino 3.Raspbery pi โดยการความคุม xbee จะถูกควบคุมโดย Arduino แล้วส่งข้อมูลไปแสดงผลที่ webserver ซึ่งมี Raspbery pi เป็น Server</p>
            </blockquote>
        </figcaption>
        <a href="#"></a>
    </figure>
    <figure class="snip3">
        <img src="https://images.pexels.com/photos/132700/pexels-photo-132700.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        <figcaption>
            <h3>Signal value</h3>
            <h5>TOFB, RSSI</h5>
            <blockquote>
                <p>ค่าที่ใช้ในการหาตำแหน่งมีหลายค่า แต่ค่าที่ดูแหมาะกับ Project ของเราก็คือ RSSI กับ TOFB ซึ่งค่า RSSI อุปกรณ์ xbee เรามีอยู่แล้ว เราสามารถวัดค่า RSSI ได้เลย ส่วน TOFB ต้องใช้วิธีการเขียน code เพื่อหาค่าความต่างของเวลาเริ่มต้น กับสิ้นสุดการรับส่งข้อมูลระหว่าง xbee</p>
            </blockquote>
        </figcaption>
        <a href="#"></a>
    </figure>
    <figure class="snip3">
        <img src="tofb.jpg" alt="">
        <figcaption>
            <h3>The experiment</h3>
            <h5>distance, Signal value</h5>
            <blockquote>
                <p>เราใช้ค่า TOFB เพราะว่าค่า RSSI จากการที่เราได้ทดลองปรากฎว่าไม่สามรถรับส่งสัญญาณได้เมื่อระยะน้อยกว่า 3 เมตร ยังไม่พอในระยะอื่นก็มีการเหวี่ยงของค่าเป็นอย่างมาก จึงไม่สามารถนำมาใช้ได้ ส่วนค่า TOFB นั้นเราได้ทำการทดลองเก็บข้อมูลจากระยะ 1,5,10,25,50 เมตร โดยพบว่าค่าจะมากขึ้นเมื่อ xbee อยู่ห่างกันมากขึ้น</p>
            </blockquote>
        </figcaption>
        <a href="#"></a>
    </figure>
</div>
</div>
</body>
</html>