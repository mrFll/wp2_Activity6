
<?php

use Illuminate\Support\Facades\Auth;
$user = Auth::user();


?>
<!DOCTYPE html>
    <html dir="rtl">
        <head>
            <title>@yield('title')</title>
            <meta charset="UTF-8">
            <link href="css/customerTemplateStyle.css" rel="stylesheet">

        </head>

        <body>
            <!-- logo and site name -->
            <div id="header_div">
                <!-- TODO get this data from database *********************************** -->
                <img src="../shop.png" alt="shop logo" id="logo">
                <h1 id="site_name">شاپکیپر</h1>

                <a href="#e">ورود</a>
                <a href="#q">ثبت نام</a>
            </div>

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

            <!-- site details -->
            <div>
                <!-- TODO get this data from database *********************************** -->
                <p>سایت شاپکیپر در سال 1990 تاسیس شد و در سال های گذشته جزو برترین سایت های فروش انلاین بوده</p>
                <p>شماره تماس: 09171047949 ادرس دفتر: شیراز خیابان زند - هتل پارسیان - واحد 23</p>
            </div>

        </body>

    </html>
