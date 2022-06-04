
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>تسجيل</title>
        <!-- Start Styles -->
        <link rel="stylesheet" href="{{asset('website/css/start.css')}}">
        <!-- Boxicons -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <!-- Iconscout -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- Cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form action="/client-register" method="post">
                    @csrf
                    <h1>قم بانشاء حساب</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="social"><i class="fa fa-google"></i></a>
                        <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
                    </div>
                    <span>او قم بالتسجيل عن طريق:</span>
                    <input type="text" name="name" placeholder="الاسم" required>
                    <input type="email" name="email" placeholder="البريد الالكتروني" required>
                    <input type="password" name="password" placeholder="كلمه السر" required>
                    <button>تسجيل</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="/clientLogin" method="post">
                    @csrf
                    <h1>تسجيل الدخول</h1>
                    <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fa fa-google"></i></a>
                    <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
                </div>
                <span>او قم بتسجيل الدخول عن طريق:</span>
                <input type="email" name="email" placeholder="البريد الالكتروني" required>
                <input type="password" name="password" placeholder="كلمه المرور" required>
                <a href="#">هل نسيت كلمه السر؟</a>

                <button type="submit">تسجيل الدخول</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>اهلا بعودتك</h1>
                        <p>قم بتسجيل الدخول لكي تكون على تواصل معنا</p>
                        <button class="ghost" id="signIn">تسجيل الدخول</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>مرحبا</h1>
                        <p>قم بادخال بياناتك للدخول</p>
                        <button class="ghost" id="signUp">تسجيل</button>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            const signUpButton = document.getElementById('signUp');
            const signInButton = document.getElementById('signIn');
            const container = document.getElementById('container');

            signUpButton.addEventListener('click', () => {
                container.classList.add("right-panel-active");
            });
            signInButton.addEventListener('click', () => {
                container.classList.remove("right-panel-active");
            });
        </script>
    </body>
</html>
