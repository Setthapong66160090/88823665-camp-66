<!DOCTYPE html>
<html>

    <head>
        <title>ข้อ 3</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <style>
        body{
            background-color: rgb(173, 216, 230);
            background-image: url('https://media.tenor.com/wH5d4XFttxEAAAAj/dudu-writing-dudu-homework.gif');
            background-size: 15%;
            background-position: right;
            background-repeat: no-repeat;
        }
    </style>

    <body>
        <div class="container mt-5">
            <form method="post" action="http://localhost/88823665-camp-66/php_03.php">
                <div class="mb-3">
                    <h1>โปรแกรมแสดงแม่สูตรคูณ</h1>
                </div>
                <div class="mb-3">
                    <label for="formControlInput1" class="form-label">แม่สูตรคูณ</label>
                    <input name="number" type="number" class="form-control" id="formControlInput1" placeholder="1">
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
            if (isset($_POST['number'])) {
                $num = $_POST['number'];
                echo "<h1>สูตรคูณแม่ $num </h1>";

                echo '<div class = "row">';
                echo '<div class = "col h2 text-end">';
                for ($i = 1; $i <= 12; $i++) {
                    echo "$num" . " x " . "$i" . " = ";
                    echo '<br>';
                }
                echo '</div>';

                echo '<div class = "col h2 text-start">';
                for ($i = 1; $i <= 12; $i++) {
                    echo $num * $i;
                    echo "<br>";
                }
                echo '<div>';
                echo '</div>';
            }
            ?>
        </div>
    </body>
</html>