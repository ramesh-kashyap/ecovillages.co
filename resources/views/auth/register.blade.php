<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <!-- All Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>



    <!-- Mobile Specific -->    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="assets/images/fav-icon/icon.png">


    <!-- Page Title Here -->
    <title>Ecovillages</title>



    <link href="{{asset('')}}assets/css/style1.css" rel="stylesheet">
<style>

.custom-phone-input {
    width: 501px;
    padding-left: 81px;
}

@media (max-width: 768px) {
    .custom-phone-input {
        width: 262px;
        padding-left: 20px;
    }
}

</style>

</head>

<body class="vh-100" data-typography="cairo" data-theme-version="dark" data-layout="vertical" data-nav-headerbg="color_1" data-headerbg="color_1" data-sidebar-style="full" data-sidebarbg="color_1" data-sidebar-position="fixed" data-header-position="fixed" data-container="wide" direction="ltr" data-primary="color_1">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-lg-6 col-md-7 col-sm-12 mx-auto align-self-center">
                    <div class="login-form">
                        <div class="text-center">
                <a href="#"><img src="{{asset('')}}assets/images/ecovillage.png" alt="logo"style="width: 120px;height:auto;margin-top:30px;filter:'brightnesh(0.55) invert(0)'"></a>

                            <h3 class="title" style="margin-top:20px;">Sign up your account</h3>
                            <!--<p>Sign in to your account to start using Ecovillages</p>-->
                        </div>
                        <!-- @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                            @endforeach
                        </div>
                        @endif -->
                        

                        <form action="{{ route('registers') }}" method="post"style="margin-top:28px;">
                            @csrf
                            
                              @php
                                            $sponsor = @$_GET['ref'];
                                            $pos = @$_GET['pos'];
                                            $name = \App\Models\User::where('username', $sponsor)->first();
                                        @endphp

                            <div class="mb-4">
                                <label class="mb-1 text-dark">Sponsor</label>
                                <input type="text" name="sponsor" class="form-control check_sponsor_exist" data-response="usernameExist" placeholder="Sponsor ID" value="{{ old('sponsor', request('ref')) }}" required>
                                   <p id="usernameExist"><?= $name ? $name->name : '' ?></p>
                            </div>
                           
                            
                            <div class="mb-4">
                                <label class="mb-1 text-dark">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}" required>
                            </div>

                           
                           
                             <div class="mb-4">
                                <label class="mb-1 text-dark">phone</label><br>
                                <input id="phone" type="tel" name="phone" class="form-control custom-phone-input" placeholder="Enter your phone number" value="{{ old('email') }}"maxlength="10"  required >
                                <input type="hidden" id="country_code" name="country_code">
                            </div>
                            <div class="mb-4">
                                <label class="mb-1 text-dark">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email ID" value="{{ old('email') }}" required>
                            </div>

                            <div class="mb-4 position-relative">
                                <label class="mb-1 text-dark">Password</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                                <span class="show-pass eye" onclick="togglePassword('password', this)">
                                    <i class="fa fa-eye-slash"></i>
                                </span>
                            </div>

                            <div class="mb-4 position-relative">
                                <label class="mb-1 text-dark">Confirm Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm your password" required>
                                <span class="show-pass eye" onclick="togglePassword('password_confirmation', this)">
                                    <i class="fa fa-eye-slash"></i>
                                </span>
                            </div>

                            <div class="form-check mb-4">
                                <input type="checkbox" class="form-check-input" id="customCheckBox1" required>
                                <label class="form-check-label" for="customCheckBox1">Remember my preference</label>
                            </div>

                            <div class="mb-4 text-end">
                                <a href="{{ route('login') }}" class="btn-link text-primary">Sign In</a>
                            </div>

                            <div class="text-center mb-4">
                                <button type="submit" class="btn btn-primary btn-block" style="background-color:rgb(73, 175, 69);">Sign Up</button>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- <div class="col-xl-6 col-lg-6">
                    <div class="pages-left h-100" data-theme-version="dark">
                        <div class="login-content">
                            <a href="index.html"><img src="images/logo-full.png" class="mb-3" alt=""></a>

                            <p style="color: #fff;">Your true value is determined by how much more you give in value than you take in payment. ...</p>
                        </div>
                        <div class="login-media text-center"style="filter: invert(84%) sepia(88%) saturate(747%) hue-rotate(85deg) brightness(60%) contrast(139%)
">
                            <img src="{{asset('')}}assets/images/login.png" alt="">
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

</body>
@include('partials.notify')
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
 <script>
        $('.check_sponsor_exist').keyup(function(e) {
            var ths = $(this);
            var res_area = $(ths).attr('data-response');
            var sponsor = $(this).val();
            // alert(sponsor); 
            $.ajax({
                type: "POST",
                url: "{{ route('getUserName') }}",
                data: {
                    "user_id": sponsor,
                    "_token": "{{ csrf_token() }}",
                },
                success: function(response) {
                    // alert(response);      
                    if (response != 1) {
                        // alert("hh");
                        $(".submit-btn").prop("disabled", false);
                        $('#' + res_area).html(response).css('color', '#fff').css('font-weight', '800')
                            .css('margin-buttom', '10px');
                    } else {
                        // alert("hi");
                        $(".submit-btn").prop("disabled", true);
                        $('#' + res_area).html("Sponsor ID Not exists!").css('color', 'red').css(
                            'margin-buttom', '10px');
                    }
                }
            });
        });
    </script>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->

<script>
  const input = document.querySelector("#phone");
  const iti = window.intlTelInput(input, {
    initialCountry: "in",
    separateDialCode: true,
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
  });

  input.addEventListener("input", function () {
    const countryCode = iti.getSelectedCountryData().dialCode;
    document.querySelector("#country_code").value = "+" + countryCode;
  });

  // Also set on init (in case value pre-filled)
  document.addEventListener("DOMContentLoaded", function () {
    const countryCode = iti.getSelectedCountryData().dialCode;
    document.querySelector("#country_code").value = "+" + countryCode;
  });
</script>


<script src="vendor/global/global.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/dlabnav-init.js"></script>

</html>