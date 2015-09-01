<!DOCTYPE html>
<html>
    <head>
        <title>@yield('page_title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="header">
                    <p><img src="/images/468x60.gif" alt="A Logo"></p>
                </div>
                <div class="col-sm-2">
                    <ul id="nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="/products">Products</a></li>
                        <li></li>
                        <li></li>
                        <li><a href="/admin">admin</a></li>
                    </ul>
                </div>

                <div class="col-sm-8">
                    <h1>@yield('page_heading')</h1>
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
