<html lang="en" class="h-100" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:image" content="https://fillow.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Register</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="https://starcodekh.github.io/Admin-Dashboard-Template-Bootstrap-5/images/favicon.png">
    <link href="{{asset('')}}users/css/style.css" rel="stylesheet">

</head>

<body class="vh-100" data-typography="poppins" data-theme-version="dark" data-layout="vertical" data-nav-headerbg="color_9" data-headerbg="color_9" data-sidebar-style="full" data-sibebarbg="color_9" data-sidebar-position="fixed" data-header-position="fixed" data-container="wide" direction="ltr" data-primary="color_9">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
										<a href="{{route('index')}}"><img src="{{asset('')}}assets/img/logo/ecovillage.png" width="150" height="70" alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                    <form action="{{ route('registers') }}" method="post" style="margin-top:28px;">
                                        @csrf

                                        @php
                                        $sponsor = @$_GET['ref'];
                                        $pos = @$_GET['pos'];
                                        $name = \App\Models\User::where('username', $sponsor)->first();
                                        @endphp

                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Sponsor</strong></label>
                                            <input type="text" name="sponsor" class="form-control" value="{{ old('sponsor', request('ref')) }}" placeholder="username">
                                            <p id="usernameExist"><?= $name ? $name->name : '' ?></p>

                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Name</strong></label>
                                            <input type="text" name="name" class="form-control" placeholder="hello@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>phone</strong></label>
                                            <input type="text" name="phone" class="form-control" placeholder="hello@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="text" name="email" class="form-control" placeholder="hello@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control" value="">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><str`ong>Confirm Password</str></label>
                                            <input type="password" name="password_confirmation" class="form-control" value="">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="{{route('login')}}">Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
	Scripts
***********************************-->
    <!-- Required vendors -->
    <!-- <script src="{{asset('')}}users/vendor/global/global.min.js"></script>
    <script src="{{asset('')}}users/js/custom.min.js"></script>
    <script src="{{asset('')}}users/js/dlabnav-init.js"></script>
    <script src="{{asset('')}}users/js/styleSwitcher.js"></script> -->

</body>

</html>