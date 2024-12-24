<!DOCTYPE html>
<html>

    <head>
        <title>ข้อ 4</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <style>
        body{
            background-color: rgb(144, 238, 144);
            background-image: url('https://media.tenor.com/98WE9gVEogYAAAAj/transparent-thinking.gif');
            background-repeat: no-repeat;
            background-position: right;
            background-attachment: fixed;
        }
    </style>

    <body>
        <div class="container mt-5">
            <form method="post" action="http://localhost/88823665-camp-66/php_04.php">
                <div class="mb-3">
                    <h1>โปรแกรมแสดงเลขคู่เลขคี่</h1>
                </div>
                <div class="mb-3">
                    <label for="formControlInput1" class="form-label">ตัวเลขตัวแรก</label>
                    <input name="number1" type="number" class="form-control" id="formControlInput1" placeholder="0">
                </div>
                <div class="mb-3">
                    <label for="formControlInput2" class="form-label">ตัวเลขตัวสุดท้าย</label>
                    <input name="number2" type="number" class="form-control" id="formControlInput2" placeholder="0">
                </div>
                <div class="mb-2">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
                <div class="mb-3">
                    <button class="btn btn-secondary" type="reset">Reset</button>
                </div>
            </form>
        </div>
        <div class="container">
            <?php
            if (isset($_POST['number1']) and isset($_POST['number2'])) {
                $start = $_POST['number1'];
                $end = $_POST['number2'];
                echo "<h1>แสดงข้อมูลตัวเลข $start - $end </h1>";

                echo '<div class = "row">';
                echo '<div class = "col h2 text-end">';
                for ($i = $start; $i <= $end; $i++) {
                    echo "$i";
                    echo '<br>';
                }
                echo '</div>';

                echo '<div class = "col h2 text-start">';
                for ($i = $start; $i <= $end; $i++) {
                    if ($i % 2 == 0) {
                        echo 'เป็นเลขคู่';
                    } else {
                        echo 'เป็นเลขคี่';
                    }
                    echo "<br>";
                }
                echo '<div>';
                echo '</div>';
            }
            ?>
        </div>
    </body>
</html>