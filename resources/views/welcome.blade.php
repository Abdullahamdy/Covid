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
                        </div>
                        <a href="start.html" class="get-started center-flex btn primary-btn">ابدأ</a>
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
                        <div class="box">
                            <div class="main-content">
                                <div class="icon-box">
                                    <div class="i-container center-flex">
                                        <i class='bx bxs-virus bx-tada' style='color:#ff0000'></i>
                                    </div>
                                </div>
                                <div class="text-container">
                                    <h4>الاصابه بالعدوى</h4>
                                    <p>من المرجح أن اصابتك بالعدوى قد تكون ناجمه عن مخالطتك بالأخرين لذا احرص على الابتعاد الكافي عن الأخرين.</p>
                                </div>
                            </div>
                            <div class="number-box center-flex">
                                <span>1</span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="main-content">
                                <div class="icon-box">
                                    <div class="i-container center-flex">
                                        <i class='bx bxs-brain bx-tada' style='color:#00a2ff'></i>
                                    </div>
                                </div>
                                <div class="text-container">
                                    <h4>تحقق من اصابتك</h4>
                                    <p>قم بالدخول على الموقع الرسمي لمنظمه الصحه العالميه أو المؤسسه الصحيه التابعه لبلدك وتحقق من الأعراض الناجمه عن الاصابه بكوفيد-19.</p>
                                </div>
                            </div>
                            <div class="number-box center-flex">
                                <span>2</span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="main-content">
                                <div class="icon-box">
                                    <div class="i-container center-flex">
                                        <i class='bx bx-capsule bx-tada' style='color:#be00ff'></i>
                                    </div>
                                </div>
                                <div class="text-container">
                                    <h4>أخد لقاحات أو أدويه</h4>
                                    <p>احذر فان تناول أي لقاحات أو أدويه دون علم الطبيب قد تؤدي الى مشاكل خطيره قد تصل الى الوفاه لذا احرص على متابعه طبيبك باستمرار لأخذ استشارته.</p>
                                </div>
                            </div>
                            <div class="number-box center-flex">
                                <span>3</span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="main-content">
                                <div class="icon-box">
                                    <div class="i-container center-flex">
                                        <i class='bx bxs-ambulance bx-tada' style='color:#ffdd00'></i>
                                    </div>
                                </div>
                                <div class="text-container">
                                    <h4>الاتصال بالطوارئ</h4>
                                    <p>في حال اشتدت عليك الأعراض أو لم تستطع التأكد من اصابتك بكوفيد-19 اتصل بالطوارئ فورا لتقديم المساعده.</p>
                                </div>
                            </div>
                            <div class="number-box center-flex">
                                <span>4</span>
                            </div>
                        </div>
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
                        <div class="box">
                            <input type="radio" name="accordion" id="accordion1">
                            <label for="accordion1">
                                <span>ما الذي يحدث للأشخاص المصابين بكوفيد-19؟</span>
                                <div class="nav-box center-flex">
                                    <i class='bx bx-plus' ></i>
                                </div>
                            </label>
                            <div class="answer-box">
                                <span>يتعافى من المرض معظم الأشخاص (نحو 80%) الذين تظهر عليهم الأعراض دون الحاجة إلى العلاج في المستشفى. ويصاب نحو 15% منهم بمضاعفات خطيرة ويحتاجون إلى الأكسجين، ويصبح 5% منهم في حالة حرجة ويحتاجون إلى العناية المركزة.</span>
                            </div>
                        </div>
                        <div class="box">
                            <input type="radio" name="accordion" id="accordion2">
                            <label for="accordion2">
                                <span>هل هناك أثار طويله الأجل لكوفيد-19؟</span>
                                <div class="nav-box center-flex">
                                    <i class='bx bx-plus' ></i>
                                </div>
                            </label>
                            <div class="answer-box">
                                <span>تستمر معاناة بعض الأشخاص الذين أُصيبوا بكوفيد- 19 من الأعراض ، سواء احتاجوا إلى دخول المستشفى أم لا، بما في ذلك الشعور بالإجهاد والأعراض التنفسية والعصبية.

                                    وتعمل المنظمة مع شبكتها التقنية العالمية للتدبير العلاجي السريري لكوفيد-19 والباحثين ومجموعات المرضى في جميع أنحاء العالم، لتصميم الدراسات وإجرائها على المرضى الذين تجاوزوا المسار الأولي الحاد للمرض، بغية تحديد نسبة المرضى الذين يصابون بآثار طويلة الأجل ومدة استمرار هذه الآثار وأسباب حدوثها. وسوف تُستخدم هذه الدراسات في تطوير المزيد من الإرشادات الخاصة برعاية المرضى.</span>
                            </div>
                        </div>
                        <div class="box">
                            <input type="radio" name="accordion" id="accordion3">
                            <label for="accordion3">
                                <span>متى ينبغي لي أن أخضع لاختبار الكشف عن كوفيد-19؟</span>
                                <div class="nav-box center-flex">
                                    <i class='bx bx-plus' ></i>
                                </div>
                            </label>
                            <div class="answer-box">
                                <span>ينبغي فحص كل شخص تظهر عليه أعراض، قدر الإمكان. ويمكن للأشخاص غير المصابين بأعراض الذين خالطوا عن كثب شخصاً مصاباً أو يُحتمل أن يكون مصاباً، أن ينظروا أيضاً في الخضوع للاختبار - اتصل بالسلطات الصحية المحلية واتّبع إرشاداتها.</span>
                            </div>
                        </div>
                        <div class="box">
                            <input type="radio" name="accordion" id="accordion4">
                            <label for="accordion4">
                                <span>ما هى توصيات منظمه الصحه العالميه للبلدان؟</span>
                                <div class="nav-box center-flex">
                                    <i class='bx bx-plus' ></i>
                                </div>
                            </label>
                            <div class="answer-box">
                                <span>تشجع المنظمة جميع البلدان على تعزيز ترصّد حالات العدوى التنفسية الحادة الوخيمة (SARI) وتوخي الدقة في استعراض أي أنماط غير اعتيادية لهذه الحالات أو حالات الالتهاب الرئوي، وإبلاغ المنظمة بأي حالات إصابة بفيروس كورونا المستجد، سواء كانت هذه الحالات مؤكدة أم مشتبهاً بها.كما تُشجّع البلدان على مواصلة تعزيز تأهبها للطوارئ الصحية وفقاً للوائح الصحية الدولية (2005).</span>
                            </div>
                        </div>
                    </div>
                    <div class="image-accordion-container center-flex">
                        <img src="images/accordion-1.png" alt="Accordio Image">
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
                    <div class="serv-box big">
                        <div class="icon-box">
                            <div class="i-container center-flex">
                                <i class='bx bxs-bed' style='color:#ff0004'></i>
                            </div>
                        </div>
                        <div class="text-box-container">
                            <h4>العنايه الصحيه</h4>
                            <p>نهتم بصحه المريض جيدا من جميع الجوانب ونجري له فحوصات دوريه على مدار الأسبوع للتأكد من الشفاء التام من جميع الأمراض.</p>
                        </div>
                    </div>
                    <div class="serv-box small">
                        <div class="icon-box">
                            <div class="i-container center-flex">
                                <i class='bx bxs-injection' style='color:#ffca00'></i>
                            </div>
                        </div>
                        <div class="text-box-container">
                            <h4>الأدويه واللقاحات</h4>
                            <p>يوجد لدينا جميع الأدويه المستخدمه في علاج جميع الأمراد والموصى بها من منظمه الصحه العالميه والخاضعه الى هيئه الرقابه الدوائيه المصريه ومصرح التعامل بها.</p>
                        </div>
                    </div>
                    <div class="serv-box small">
                        <div class="icon-box">
                            <div class="i-container center-flex">
                                <i class='bx bxs-first-aid' style='color:#0dff00'></i>
                            </div>
                        </div>
                        <div class="text-box-container">
                            <h4>الاسعافات الأوليه</h4>
                            <p>نقدم لق خدمه الاسعافات الأوليه المجانيه على مدار 24 ساعه لتفادي الوقوع الاصابات التي قد تؤدي الى الوفاه.</p>
                        </div>
                    </div>
                    <div class="serv-box small">
                        <div class="icon-box">
                            <div class="i-container center-flex">
                                <i class='bx bxs-clinic' style='color:#0043ff'></i>
                            </div>
                        </div>
                        <div class="text-box-container">
                            <h4>العادات المتنقله</h4>
                            <p>منذ أن أطلقت الحكومه المصريه برنامج العيادات المتنقله كنا من أوائل المساهمين في هذا البرنامج وأطلقنا قوافل ضخمه في جميع أنحاء الجمهوريه.</p>
                        </div>
                    </div>
                    <div class="serv-box big">
                        <div class="icon-box">
                            <div class="i-container center-flex">
                                <i class='bx bxs-blanket' style='color:#00f7ff'></i>
                            </div>
                        </div>
                        <div class="text-box-container">
                            <h4>الخدمات الترفيهيه</h4>
                            <p>نقدم خدمات ترفيهيه للمرضي للحد من الأثار النفسيه الناتجه عن الاصابه بكوفيد-19 ويتمثل ذلك في ممارسه جميع الأنشطه التفاعليه التي ينعكس أثرها على المريض.</p>
                        </div>
                    </div>
                    <div class="serv-box small">
                        <div class="icon-box">
                            <div class="i-container center-flex">
                                <i class='bx bxs-dryer' style='color:#ff00e1'></i>
                            </div>
                        </div>
                        <div class="text-box-container">
                            <h4>العنايه الشخصيه</h4>
                            <p>يوجد لدينا جليسات للعمل على مدار 24 ساعه لتقديم الخدمات الشخصيه الى مرضانا.</p>
                        </div>
                    </div>
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

                            <input name = "name" class="three-width" type="text" placeholder="الاسم ">
                            <input name = "age" class="three-width" type="number" placeholder="السن">
                            <input name = "address"class="two-width" type="text" placeholder="العنوان">
                            <input name = "national_id"class="two-width" type="text" placeholder="الرقم القومي">
                        </div>
                    </div>
                    <div class="contact-info">
                        <div class="heading">
                            <h4>وسائل الاتصال</h4>
                        </div>
                        <div class="all-content">
                            <input name = "email" class="three-width" type="text" placeholder="البريد الالكتروني">
                            <input name = "phone" class="three-width" type="text" placeholder="رقم الهاتف">
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
                            <input class="two-width" name = "surgeries_before"type="text" placeholder="هل قمت باجراء عمليه جراحيه من قبل؟">
                            <input class="two-width"name ="serious_injuries_before" type="text" placeholder="هل أصبت باصابات خطيره من قبل؟">
                            <input class="three-width" name="blood_type" type="text" placeholder="فصيله الدم">
                            <input class="three-width" name="glucose_measurement" type="text" placeholder="مقياس السكر">
                            <input class="three-width" name="pressure_gauge" type="text" placeholder="مقياس الضغط">
                        </div>
                    </div>
                    <div class="submit-and-reset">
                        <input class="submit center-flex btn primary-btn" type="submit" value="تم">
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


