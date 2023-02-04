

<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8" />
    <title>Login | All In One Marketing Service</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="{{asset('dist/css/app.v1.css')}}" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <style type="text/css">html {
            overflow-y: scroll;
            background: url({{asset('dist/img/bk.png')}}) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

    </style>
    <div id="google_translate_element" align="right"></div><script type="text/javascript">
        // function googleTranslateElementInit() {
        //   new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
        // }
    </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</head>
<body>
<section id="content" class="m-t-lg wrapper-md animated fadeInUp">
    <div class="container aside-xl">
        <section class="m-b-lg">
            <div class="text-center">
                <img src="images/logo.png" style="width: 150px; height: 150px;" alt="Majesty">
            </div>
            <header class="wrapper text-center"> <strong><h2 style="color: white;">Sign in to to see stats</h2></strong> </header>
            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="list-group">
                    <div class="list-group-item">
                        <input type="email" placeholder="Enter your Email" class="form-control @error('enagic_email') is-invalid @enderror no-border" name="enagic_email" autofocus required>

                        @error('enagic_email')
                        <span class="invalid-feedback" role="alert" style="alignment: left">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="list-group-item">
                        <input type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror no-border" autocomplete="current-password" name="password" required>

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
                <div class="text-center m-t m-b"><a href="#"><small style="color:#ffffff;">Forgot password?</small></a> | <a href="{{route('register')}}"><small style="color:#ffffff;">Don't Have Account?</small></a></div>
                <div class="line line-dashed"></div>
                <a href="{{route('register')}}" class="btn btn-lg btn-success btn-block">Create an account</a>
            </form>
        </section>
    </div>
</section>
<!-- footer -->
<footer id="footer">
    <div class="text-center padder">
        <p> <small style="color:#ffffff;">Powered By - All In One Marketing Service</small> </p>
    </div>
</footer>
<!-- / footer -->
<!-- Bootstrap -->
<!-- App -->
<script src="{{asset('dist/js/app.v1.js')}}"></script>
<script src="{{asset('dist/js/app.plugin.js')}}"></script>
</body>
</html>
