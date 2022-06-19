@extends('layoutFrontend.header')
        <!-- End Header -->
@section('content')
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session()->has('msg'))
<div class="alert alert-danger">
    <ul>
       {{ session()->get('msg')}}
    </ul>
</div>
@endif
@if(session()->has('msgeSuccess'))
<div class="alert alert-success">
    <ul>
       {{ session()->get('msgeSuccess')}}
    </ul>
</div>
@endif


        <!-- Start Home -->
        <section class="home">
            <a href="#" class="book-now center-flex primary-btn">احجز الان</a>
            <div class="text-home-container">
                <div class="container">
                    <div class="content">
                        <h1>احمي نفسك وعائلتك ومن حولك من تبعات كوفيد-19</h1>
                        <p>نحن سوف نأخدك في رحله عبر موقعنا الالكتروني للتعرف على كوفيد-19 وكيفيه الوقايه منه بسهوله ومعرفه أخر الأخبار والمستجدات العالميه والمحليه من خلال مقالات ومصادر عالميه كمنظمه الصحه العالميه التي تعد المصدر الأكثر وثوقا في العالم بالاضافه الى ما تخرجه لنا الهيئه الصحيه التابعه لبلدك.</p>
                        <div class="search-box search-home">
                            <input type="search" placeholder="ابحث عن أي شئ تريده...">
                            <i class="uil uil-search"></i>

                        </div><form method="post" action="{{route('logout')}}">


                            @csrf
                        <button  class="btn btn-primary center-flex btn primary-btn">تسجيل الخروج</button>
                        </form>
                        <span>اذا شعرت بأي أعراض قد توحي باصابتك من فضلك توجه الى أقرب مستشفى.</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Home -->

        <!-- Start Health Org -->
        <section class="health-org">
            <div class="container">
                <a href="https://www.who.int/" class="slogan-box center-flex" target="_blank">
                    <img src="{{asset("website/images/who.svg")}}" alt="World Health Organization">
                </a>
                <a href="https://www.care.gov.eg/EgyptCare/index.aspx" class="slogan-box center-flex" target="_blank">
                    <img src="{{asset("website/images/moh-egy.svg")}}" alt="Egyptian Ministry of Health">
                </a>
                <a href="https://www.egyptianrc.org/Arabic/home" class="slogan-box center-flex" target="_blank">
                    <img src="{{asset("website/images/erc.png")}}" alt="Egyptian Red C">
                </a>
            </div>
        </section>
        <!-- End Health Org -->

        <!-- Start About -->
        <section class="about">
            <div class="container">
                <div class="section-header">
                    <h2>ما هو كوفيد-19 وكيف تحمي نفسك منه؟</h2>
                    <p>كوفيد-19 هو المرض الناجم عن فيروس كورونا المُستجد المُسمى فيروس كورونا-سارس- 2. وقد اكتشفت المنظمة هذا الفيروس المُستجد لأول مرة في 31 كانون الأول/ ديسمبر 2019، بعد الإبلاغ عن مجموعة من حالات الالتهاب الرئوي الفيروسي في يوهان بجمهورية الصين الشعبية.</p>
                </div>
                <div class="info-container">
                    <div class="text-box">
                        <h3>ماذا تفعل في حال شعرت بأي أعراض تشيرالى اصابتك؟</h3>
                        <p>في حال شعرت بأى أعراض تشير الى اصابتك بكوفيد-19 يجب عليك التأكد من أن هذه الأعراض ناجمه عن كوفيد-19 وللتأكد من ذلك اتبع الخطوات الموجوده بالأسفل ولمزيد من المعلومات قم بالضغط على زر مزيد حول كوفيد-19 بالأسفل</p>
                        <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public?gclid=EAIaIQobChMIpaid_ofT9gIVEtxRCh2gNAHmEAAYASABEgLmyfD_BwE" class="get-info center-flex btn primary-btn" target="_blank">مزيد حول كوفيد-19</a>
                    </div>
                    <div class="step-box">
                        @inject('feelingContagiouses', 'App\Models\FeelingContagious')
                      @foreach($feelingContagiouses->get() as $key=>$felling)
                        <div class="box">
                            <div class="main-content">
                                <div class="icon-box">
                                    <div class="i-container center-flex">
                                        <i class='bx bxs-virus bx-tada' style='color:#ff0000'></i>
                                    </div>
                                </div>
                                <div class="text-container">
                                    <h4>{{$felling->tittle}}</h4>
                                <p>{{$felling->text}}.</p>
                                </div>
                            </div>
                            <div class="number-box center-flex">
                                <span>{{++$key}}</span>
                            </div>
                        </div>
@endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- End About -->

        <!-- Start Article -->
        <section class="article">
            <div class="container">
                <div class="section-header">
                    <h2>هل تحتاج المزيد من المقالات حول كوفيد-19؟</h2>
                    <p>اطلع على جميع المقالات حول كوفيد-19 من جميع المصادر والمنظمات العالميه الرسميه.</p>
                </div>
                <div class="real-content">
                    <div class="image-article-container center-flex">
                        <img src="{{asset("website/images/article-9.webp")}}" alt="Article Image">
                    </div>
                    <div class="text-article-container">
                        <h3>سوف نوفر لك جميع المصادر التي قد تعود بالنفع على صحتك وصحه من حولك</h3>
                        <p>قد تؤدي قراءتك لمزيد من المقالات حول كوفيد-19 الى تجنبك الأسباب التي قد تودي الى اصابتك أو الحصول على معلومات أكثر وأدق لافادتك.</p>
                        <a href="{{Route("articale-page")}}" class="more-article center-flex btn primary-btn">اذهب الى المقالات</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Article -->

        <!-- Start Accordion -->
        <section class="accordion">
            <div class="container">
                <div class="section-header">
                    <h2>أسئله هامه حول كوفيد-19</h2>
                    <p>اطلع على هذه الأسئله فانها تقدم معلومات قيمه ومفيده جدا عن كوفيد-19 قد تهمك.</p>
                </div>
                <div class="main-accordion-content">
                    <div class="questions-box">
                  @inject('infectedpepoles','App\Models\InfectedPeople' )
                   @foreach ($infectedpepoles->get() as $key => $infectedpepole)
                   <div class="box">
                    <input type="radio" name="accordion" id="accordion{{$key}}">
                    <label for="accordion{{$key}}">
                        <span>{{$infectedpepole->tittle}}؟</span>
                        <div class="nav-box center-flex">
                            <i class='bx bx-plus'></i>
                        </div>
                    </label>
                    <div class="answer-box">
                     <span>{{$infectedpepole->text}}</span>
                </div>
                </div>
                   @endforeach

                    </div>
                    <div class="image-accordion-container center-flex">
                        <img src="{{asset('Attachments/products/5vFpdZtjYhHt0Pt9Y6ZU25R421qRcCCdZSrjJycG.png')}}" alt="Accordio Image">
                    </div>
                </div>
            </div>
        </section>
        <!-- End Accordion -->

        <!-- Start Contact -->
        <section class="contact">
            <div class="container">
                <div class="text-contact-container">
                    <h3>اذا كنت تريد الحصول على مزيد من المساعده قم بالضغط على زر تواصل معنا بالأسفل</h3>
                    <p>مؤسساتنا تعمل على مدار 24 ساعه في جميع فروعنا لتقديم افضل خدمه للمريض ونحن حريصين كل الحرص على الوصول بالمريض الى بر الأمان وأن نتخطى معه محنته المرضيه ونتمنى لمرضانا الشفاء العاجل.</p>
                    <a href="contact.html" class="find-contact center-flex btn primary-btn">
                        <span>تواصل معنا</span>
                        <i class="uil uil-phone"></i>
                    </a>
                </div>
                <div class="image-contact-container center-flex">
                    <img src="{{asset("website/images/branches-1.webp")}}" alt="Branches Image">
                </div>
            </div>
        </section>
        <!-- End Contact -->

        <!-- Start Services -->
        <section class="services">
            <div class="container">
                <div class="section-header">
                    <h2>اطلع على مزيد من المعلومات حول الخدمات التي نقدمها لعملائنا</h2>
                    <p>يوجد لدينا جانب من الخدمات التي نقدمها للمريض مثل الرعايه الصحيه والخدمات الترفيهيه والاسعافات الأوليه والمزيد</p>
                </div>
                <div class="serv-box-container">
                @inject('Serveces','App\Models\Servece')
                  @foreach ($Serveces->get() as $serve)

                    <div class="serv-box small">
                        <div class="icon-box">
                            <div class="i-container center-flex">
                                <i class='bx bxs-clinic' style='color:#0043ff'></i>
                            </div>
                        </div>
                        <div class="text-box-container">
                            <h4>{{$serve->tittle}}</h4>
                          <p>{{$serve->text}}</p>
                         </div>
                    </div>
                   @endforeach
                </div>
            </div>
        </section>
        <!-- End Services -->

        <!-- Start Register -->
        <section class="register">
            <div class="container">
                <div class="section-header">
                    <h2>قم بالتسجيل في برنامج تلقي لقاح كوفيد-19 لحمايه نفسك ومن حولك</h2>
                    <p>احرص على تناول اللقاحات المضاده لكوفيد-19 لحمايه نفسك ومن حولك من الاصابه مره أخرى بهذا المرض.</p>
                </div>
                <form action="{{route('patient-create')}}" method="post" class="register-form">
                    @csrf
                    <div class="form-header">
                        <span>املأ هذه الاستماره للتسجيل</span>
                    </div>
                    <div class="personal-details">
                        <div class="heading">
                            <h4>المعلومات الشخصيه</h4>
                        </div>
                        <div class="all-content">

                            <input value="{{ old('name') }}" name = "name" class="three-width" type="text" placeholder="الاسم ">
                            <input value="{{ old('age') }}"name = "age" class="three-width" type="number" placeholder="السن">
                            <input value="{{ old('address') }}" name = "address"class="two-width" type="text" placeholder="العنوان">
                            <input value="{{ old('national_id') }}" name = "national_id"class="two-width" type="text" placeholder="الرقم القومي">
                        </div>
                    </div>
                    <div class="contact-info">
                        <div class="heading">
                            <h4>وسائل الاتصال</h4>
                        </div>
                        <div class="all-content">
                            <input value="{{ old('email') }}" name = "email" class="three-width" type="text" placeholder="البريد الالكتروني">
                            <input value="{{ old('phone') }}" name = "phone" class="three-width" type="text" placeholder="رقم الهاتف">
                        </div>
                    </div>
                    <div class="health-status">
                        <div class="heading">
                            <h4>هل تعاني من أي أمراض مزمنه؟</h4>
                        </div>
                        <div class="all-content">
                            <div class="yeas-answer-box center-flex">
                                <input type="radio" name="is_have_chronic_disease" id="yeas-answer" value="1">
                                <label for="yeas-answer">نعم</label>
                            </div>
                            <input type="hidden" name="is_avalible" value="1">
                            <div class="no-answer-box center-flex">
                                <input type="radio" name="is_have_chronic_disease" id="no-answer"value="0">
                                <label for="no-answer">لا</label>
                            </div>
                        </div>
                    </div>
                    <div class="medical-info">
                        <div class="heading">
                            <h4>المعلومات الطبيه</h4>
                        </div>
                        <div class="all-content">
                            <input class="two-width" value="{{old('surgeries_before')}}"  name = "surgeries_before"type="text" placeholder="هل قمت باجراء عمليه جراحيه من قبل؟">
                            <input class="two-width" value=" {{old('serious_injuries_before')}}" name ="serious_injuries_before" type="text" placeholder="هل أصبت باصابات خطيره من قبل؟">
                            <input class="three-width" value="{{old('blood_type')}}"  name="blood_type" type="text" placeholder="فصيله الدم">
                            <input class="three-width" value="{{old('glucose_measurement')}}"  name="glucose_measurement" type="text" placeholder="مقياس السكر">
                            <input class="three-width" value="{{old('pressure_gauge')}}"  name="pressure_gauge" type="text" placeholder="مقياس الضغط">
                        </div>
                    </div>
                    <div class="submit-and-reset">
                        <input class="submit center-flex btn btn-primary" type="submit" value="تم">
                        <input class="reset center-flex btn" type="reset" value="اعاده تلقيم">
                    </div>
                </form>
            </div>
        </section>
        <!-- End Register -->

        <!-- Start Designer -->
        <section class="designer">
            <div class="container">
                <div class="section-header">
                    <h4>تم تطوير هذا الموقع بواسطه أحمد محمد.</h4>
                </div>
            </div>
        </section>
        @endsection
        <!-- End Designer -->


