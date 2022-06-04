

<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>دلتا هوس</title>
        <!-- Css Styles -->

        <link rel="stylesheet" href="{{asset("website/css/styles.css")}}">
        @yield('style')

        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <!-- Iconscout -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"rel="stylesheet">
    </head>
    <body>
        <!-- Start Header -->
        <header class="header">
            <div class="logo-box">
                <a href="index.html" class="logo center-flex">delta-hos</a>
            </div>
            <div class="search-box search-nav">
                <input type="search" placeholder="ابحث عن أي شئ تريده...">
                <i class="uil uil-search"></i>
            </div>
           @include('layoutFrontend.navbar')
            <div class="menu-box">
                <i class="uil uil-bars"></i>
                <div class="menu-items">
                    <div class="items-container">
                        <ul class="menu-links">
                            <li><a href="index.html" class="center-flex">الصفحه الرئيسيه</a></li>
                            <li><a href="articles.html" class="center-flex">المقالات</a></li>
                            <li><a href="{{route('contact-us')}}" class="center-flex">تواصل معنا</a></li>
                        </ul>
                        <a href="#" class="menu-btn center-flex btn secondary-btn">احجزالان</a>
                    </div>
                </div>
            </div>
        </header>
@yield('content')

@extends('layoutFrontend.footer')
