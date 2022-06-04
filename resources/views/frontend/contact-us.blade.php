@extends('layoutFrontend.header')
        @section('style')
        <link rel="stylesheet" href="{{("website/css/contact.css")}}">
        @endsection
@section('content')
        <!-- Start Home -->
        @if(session('message'))
    <div class="alert alert-danger">{{session('message')}}</div>
   @endif

   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
              <!-- Start Contact Header -->
              <section class="contact-header">
                <div class="container">
                    <div class="section-header">
                        <h2>تواصل معنا لمزيد من المعلومات</h2>
                        <p>تواصل معنا عبر المعلومات التاليه للاستفسارات والأجوبه عن كل ما تريد معرفته حول كوفيد-19 بكل سهوله.</p>
                    </div>
                    <div class="contact-content">
                        <div class="cont-box small-width">
                            <div class="icon-box">
                                <div class="i-container center-flex">
                                    <i class="uil uil-headphones-alt" style="color: #00A3FF"></i>
                                </div>
                            </div>
                            <div class="text-cont-box">
                                <h4>للتواصل عبر التليفون الأرضي</h4>
                                <div class="cont-num-box">
                                    <span>0502375493</span>
                                    <span>0405596229</span>
                                    <span>036655873</span>
                                    <span>060739563</span>
                                </div>
                            </div>
                        </div>
                        <div class="cont-box small-width">
                            <div class="icon-box">
                                <div class="i-container center-flex">
                                    <i class="uil uil-mobile-android" style="color: #FF0000"></i>
                                </div>
                            </div>
                            <div class="text-cont-box">
                                <h4>للتواصل عبر الهاتف المحمول</h4>
                                <div class="cont-num-box">
                                    <span>0107683663</span>
                                    <span>0117683855</span>
                                    <span>0158477558</span>
                                    <span>0126578833</span>
                                </div>
                            </div>
                        </div>
                        <div class="cont-box big-width">
                            <div class="icon-box">
                                <div class="i-container center-flex">
                                    <i class="uil uil-at" style="color: #00FF8F"></i>
                                </div>
                            </div>
                            <div class="text-cont-box">
                                <h4>للتواصل عبر البريد الالكتروني</h4>
                                <div class="cont-num-box">
                                    <span>ahm645@hotmail.com</span>
                                    <span>delta-hos@gmail.com</span>
                                    <span>delta747@outlook.com</span>
                                    <span>ahm848@petalmail.com</span>
                                </div>
                            </div>
                        </div>
                        <form action="{{route('storecontact-us')}}" method="post" class="contact-box big-width">
                            @csrf
                            <div class="contact-heading same-style">
                                <h3>للتواصل عبر ارسال رساله متضمنه البيانات الشخصيه</h3>
                            </div>
                            <div class="contact-infos same-style">
                                <input name="username" class="three-width" type="text" placeholder="الاسم"   value="{{auth()->user()->name}}" readOnly>
                                <input name="age" class="three-width" type="text" placeholder="السن">
                                <input name="address" class="two-width" type="text" placeholder="العنوان">
                                <input name="email" class="two-width" type="email" placeholder="البريد الالكتروني" value="{{auth()->user()->email}}" readOnly>
                                <textarea class="one-width" name="message" id="" cols="" rows="" placeholder="ادخل نص الرساله...."></textarea>
                            </div>
                            <div class="send-btn-container same-style">
                                <input type="submit" value="ارسال">
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!-- End Contact Header -->

            <!-- Start Designer -->
            <section class="designer">
                <div class="container">
                    <div class="section-header">
                        <h4>تم تطوير هذا الموقع بواسطه أحمد محمد.</h4>
                    </div>
                </div>
            </section>

        @endsection



