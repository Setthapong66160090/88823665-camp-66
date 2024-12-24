<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ข้อ 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>
    body{
        background-color: rgb(201, 152, 255);
        background-image: url('https://media.tenor.com/inBElPtAMpIAAAAj/sabio-einstein.gif');
        background-position: right;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 25%;
    }
  </style>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class = "container">
    <?php
        $num = 100;
        ?>
        <h1>แสดงข้อมูลตัวเลข 1-<?php echo $num ?></h1>
        <div class = "row">
            <div class = "col h2 text-end">
                <?php
                for($i=1; $i<=$num; $i++){
                    echo $i;
                    echo "<br>";
                }
                ?>
            </div>
            <div class = "col h2 text-start">
                <?php
                for($i=1; $i<=$num; $i++){
                    if ($i%2==0){
                        echo " เป็นเลขคู่";
                        echo "<br>";
                    }else{
                        echo " เป็นเลขคี่";
                        echo "<br>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
  </body>
</html>