<head>
    <title>Laravel</title>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&family=Taviraj:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<style>
    body {
        font-family: "Itim";
        background-color: rgb(173, 216, 230);
        background-image: url('https://media.tenor.com/wH5d4XFttxEAAAAj/dudu-writing-dudu-homework.gif'), url('https://media.tenor.com/inBElPtAMpIAAAAi/sabio-einstein.gif');
        background-size: 20%, 30%;
        background-position: right, left;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .text-center {
        justify-content: center;

    }
</style>

<body>
    <div class="container mt-5">
        <form method="post" action="{{url('/mycontroller')}}">
            @csrf
            <div class="mb-3">
                <h1 style="font-size: 36pt;" class="text-center">✖️โปรแกรมแสดงแม่สูตรคูณ✖️</h1>
            </div>
            <div class="mb-3 row align-items-center text-center">
                <label for="inputNumber" class="col-form-label col-sm-3 text-end" style="font-size: 16pt;">ใส่ตัวเลขแม่สูตรคูณ</label>
                <div class="col-sm-2">
                    <input type="number" class="form-control" name="inputNumber" id="inputNumber" placeholder="1">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col"><input class="btn btn-secondary float-end" type="reset" value="Reset"></div>
                <div class="col"><input class="btn btn-success float-start" type="submit" value="Submit"></div>
            </div>
        </form>
        @if (!empty($multitable))
        <div class="mb-2">
            @foreach($multitable as $item)
            <h2 class="text-center">{{ $item }}</h2>
            <br>
            @endforeach
        </div>
        @endif
    </div>
</body>