<!DOCTYPE html>
    <html dir="rtl">
    <head>
        <title>@yield('title')</title>
        <meta charset="UTF-8">
    </head>

    <body>
        <!-- categories menu -->
        <div>
            <ul>
                <!-- TODO dynamic li maker by the categories that selected by database ************** -->
                <li><a href="#a">laptop</a></li>
                <li><a href="#b">phones</a></li>
                <li><a href="#c">head phones</a></li>
            </ul>
        </div>

        <!-- content -->
        <div>
            @section('content')
            @show
        </div>
    </body>
</html>
