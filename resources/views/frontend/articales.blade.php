@extends('layoutFrontend.header')
        <!-- End Header -->
@section('content')
        <!-- Start Home -->

        <!-- Start Articles Header -->
        <section class="articles-header">
            <div class="container">
                <div class="content-articles-container">
                    <h1>اقرأ مزيد من المقالات التي تحتوي على معلومات قيمه حول كوفيد-19 نقدمها لك كخدمه مجانيه</h1>
                    <p>نوفر لك مصادر محليه ودوليه للحصول على مقالات حول كوفيد-19 لتكون على درايه بكل المستجدات وتجنب الوقوع في الأخبار الكاذبه والشائعات التي قد تودي بحياتك وحياه من حولك.</p>
                    <a href="#articles-content" class="drop-down center-flex">
                        <i class="uil uil-angle-down"></i>
                    </a>
                </div>
            </div>
            <div class="image-articles-content center-flex">
                <img src="{{asset("website/images/articles-header-4.webp")}}" alt="Articles Header Image">
            </div>
        </section>
        <!-- End Articles Header -->

        <!-- Start Articles Content -->
        <section class="articles-content" id="articles-content">
            <div class="container">
                <div class="section-header">
                    <h2>اكتشف المقالات حول فيروس كوفيد-19 بكل سهوله</h2>
                    <p>لكي تتجنب الشائعات والمعلومات المغلوطه نقدم لك المقالات المحليه والدوليه حول فيروس كوفيد-19 لقرائتها والاستفاده منها.</p>
                </div>
                <div class="articles-content-container">
                    @foreach($articales as $articale)
                    @foreach($articale->image as $img)

                    <div class="art-box">
                        <div class="art-image-box center-flex">
                            <img src="@if(isset($img->filename)){{asset("Attachments/Articales/".$img->filename)}}@endif" alt="Youm7 Image">
                        </div>
                        <div class="art-text-box">
                            <div class="art-text-content">
                                <h3>{{$articale->tittle}}</h3>
                                <p>{{$articale->text}}</p>
                            </div>
                        </div>
                        <div class="art-link-box">
                            <a href="https://www.youm7.com/story/2022/3/19/%D8%A7%D9%84%D8%B5%D8%AD%D8%A9-%D9%85%D8%AA%D9%88%D8%B3%D8%B7-%D8%A7%D9%84%D8%A5%D8%B5%D8%A7%D8%A8%D8%A7%D8%AA-%D8%A7%D9%84%D9%8A%D9%88%D9%85%D9%89-%D8%A8%D9%83%D9%88%D8%B1%D9%88%D9%86%D8%A7-788-%D8%AD%D8%A7%D9%84%D8%A9-%D9%8812-%D9%88%D9%81%D8%A7%D8%A9-%D8%A5%D9%86%D9%81%D9%88%D8%AC%D8%B1%D8%A7%D9%81/5697379" class="go-to-page  center-flex" target="_blank">اذهب الى صفحه المقال</a>
                        </div>
                    </div>
                   @endforeach
                   @endforeach
                </div>
            </div>
        </section>
        <!-- End Articles Content -->

        <!-- Start Designer -->
        <section class="designer">
            <div class="container">
                <div class="section-header">
                    <h4>تم تطوير هذا الموقع بواسطه أحمد محمد.</h4>
                </div>
            </div>
        </section>
        <!-- End Designer -->
        @endsection
        <!-- End Designer -->


