<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <title>@yield('title')</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: gray;
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .error-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .error-code {
            font-size: 5rem;
            font-weight: bold;
        }

        .error-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .search-box {
            display: flex;
            justify-content: center;
            margin-top: 1rem;
        }
    </style>
</head>

<body>
    <div class="error-container">
        <div class="error-code @if (trim($__env->yieldContent('code')) == '404') text-warning
            @elseif(trim($__env->yieldContent('code')) == '500') text-danger @else text-light @endif">
            @yield('code')
        </div>
        <div class="error-title">
            @yield('title')
        </div>
        <p>@yield('message')</p>
        <a href="{{ url('/') }}" class="btn btn-light mt-2">Return to Dashboard</a>
        <div class="search-box">
            <input type="text" class="form-control" placeholder="Search">
            <button class="btn btn-light ms-2">
                <i class="bi bi-search"></i>
            </button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
