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
                <li><a href="/manager">product list</a></li>
                <li><a href="/manager/addProduct">add new product</a></li>
                <li><a href="#c">companies</a></li>
                <li><a href="#c">categories</a></li>
            </ul>
        </div>

        <!-- content -->
        <div>
            @section('content')
            @show
        </div>
    </body>
</html>
