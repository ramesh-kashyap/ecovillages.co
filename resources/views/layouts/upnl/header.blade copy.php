<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecovillages - User</title>
    <meta name="title" Content="Ecovillages - Referrals">
    <meta name="description"
        content="Ecovillages is a leading investment management company that specializes in managing various assets.">
    <meta name="keywords" content="Ecovillages,asset,management,investment,roi,interest,farm,crypto">
    <link rel="shortcut icon" href="{{asset('')}}assets/images/ecovillage.png"
        type="image/x-icon">


    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Ecovillages - Referrals">

    <meta itemprop="name" content="Ecovillages - Referrals">
    <meta itemprop="description"
        content="Ecovillages is a leading investment management company that specializes in managing various assets.">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Asset Management And Investment System">
    <meta property="og:description"
        content="Ecovillages is a leading investment management company that specializes in managing various assets.">

    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1180">
    <meta property="og:image:height" content="600">
    <meta property="og:url" content="https://script.viserlab.com/Ecovillages/user/referrals">

    <meta name="twitter:card" content="summary_large_image">

    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">-->

    <!--<link href="https://script.viserlab.com/Ecovillages/assets/global/css/bootstrap.min.css" rel="stylesheet">-->
    <!--<link href="https://script.viserlab.com/Ecovillages/assets/global/css/all.min.css" rel="stylesheet">-->
    <!--<link rel="stylesheet" href="https://script.viserlab.com/Ecovillages/assets/global/css/line-awesome.min.css" />-->
    <!--<link rel="stylesheet" href="https://script.viserlab.com/Ecovillages/assets/templates/basic/css/select2.min.css">-->
    <!--<link rel="stylesheet" href="https://script.viserlab.com/Ecovillages/assets/templates/basic/css/lightcase.css">-->
    <!--<link rel="stylesheet" href="https://script.viserlab.com/Ecovillages/assets/templates/basic/css/flatpickr.min.css">-->
    <!--<link rel="stylesheet" href="https://script.viserlab.com/Ecovillages/assets/templates/basic/css/main.css?v1">-->
    <!--<link rel="stylesheet" href="https://script.viserlab.com/Ecovillages/assets/templates/basic/css/custom.css">-->

    <!--<link href="https://script.viserlab.com/Ecovillages/assets/global/css/jquery.treeView.css" rel="stylesheet"-->
    <!--    type="text/css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link href="/user-asset/global/css/bootstrap.min.css" rel="stylesheet">
    <link href="/user-asset/global/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/user-asset/global/css/line-awesome.min.css" />
    <link rel="stylesheet" href="/user-asset/templates/basic/css/select2.min.css">
    <link rel="stylesheet" href="/user-asset/templates/basic/css/lightcase.css">
    <link rel="stylesheet" href="/user-asset/templates/basic/css/flatpickr.min.css">
    <link rel="stylesheet" href="/user-asset/templates/basic/css/main.css">
    <link rel="stylesheet" href="/user-asset/templates/basic/css/custom.css">
    <link href="https://script.viserlab.com/Ecovillages/assets/global/css/jquery.treeView.css" rel="stylesheet"
        type="text/css">


    <style>
        .countdown {
            width: 200px;
            margin: 0 auto;
        }

        .progress-sm {
            height: 12px;
            max-width: 240px;
            margin: 0 auto;
        }

        @media (max-width: 991px) {
            .countdown {
                width: auto;
                margin: 0 0 0 auto;
            }

            .progress-sm {
                margin: 0 0 0 auto;
            }
        }
    </style>

    <link rel="stylesheet"
        href="https://script.viserlab.com/Ecovillages/assets/templates/basic/css/color.php?color=02a730&secondColor=00290c">
</head>

<body>
    <!-- <div class="preloader">
        <div class="loader-p"></div>
    </div> -->

    <!--==================== Preloader End ====================-->
    <!--==================== Overlay Start ====================-->
    <div class="body-overlay"></div>
    <!--==================== Overlay End ====================-->

    <!--==================== Sidebar Overlay End ====================-->
    <div class="sidebar-overlay"></div>
    <!--==================== Sidebar Overlay End ====================-->

    <!-- ==================== Scroll to Top End Here ==================== -->
    <a class="scroll-top"><i class="fas fa-angle-up"></i></a>
    <!-- ==================== Scroll to Top End Here ==================== -->



    <div class="dashboard position-relative">
        <div class="dashboard__inner flex-wrap">

            <div class="sidebar-menu">
                <span class="sidebar-menu__close d-lg-none d-block"><i class="fas fa-times"></i></span>

                <div class="sidebar-logo">
                    <a href="{{route('index')}}" class="sidebar-logo__link"><img src="{{asset('')}}assets/images/ecovillage.png" alt="" /></a>
                </div>

                <ul class="sidebar-menu-list">
                    <li class="sidebar-menu-list__item active">
                        <a href="{{route('user.dashboard')}}" class="sidebar-menu-list__link">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <path
                                        d="M0.888889 8.88889H6.22222C6.71111 8.88889 7.11111 8.48889 7.11111 8V0.888889C7.11111 0.4 6.71111 0 6.22222 0H0.888889C0.4 0 0 0.4 0 0.888889V8C0 8.48889 0.4 8.88889 0.888889 8.88889ZM0.888889 16H6.22222C6.71111 16 7.11111 15.6 7.11111 15.1111V11.5556C7.11111 11.0667 6.71111 10.6667 6.22222 10.6667H0.888889C0.4 10.6667 0 11.0667 0 11.5556V15.1111C0 15.6 0.4 16 0.888889 16ZM9.77778 16H15.1111C15.6 16 16 15.6 16 15.1111V8C16 7.51111 15.6 7.11111 15.1111 7.11111H9.77778C9.28889 7.11111 8.88889 7.51111 8.88889 8V15.1111C8.88889 15.6 9.28889 16 9.77778 16ZM8.88889 0.888889V4.44444C8.88889 4.93333 9.28889 5.33333 9.77778 5.33333H15.1111C15.6 5.33333 16 4.93333 16 4.44444V0.888889C16 0.4 15.6 0 15.1111 0H9.77778C9.28889 0 8.88889 0.4 8.88889 0.888889Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <span class="text">Dashboard</span>
                        </a>
                    </li>

                    <!-- <li class="sidebar-menu-list__item has-dropdown ">
                        <a href="javascript:void(0)" class="sidebar-menu-list__link">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18"
                                    fill="none">
                                    <path
                                        d="M11.2 4.68662C10.1334 3.98442 9.02224 3.55777 8 3.55777C6.97776 3.55777 5.86665 3.98442 4.80002 4.68662C2.25776 6.33999 0 9.52218 0 12.1089C0 15.9755 4.77333 17.78 8 17.78C11.2267 17.78 16 15.9755 16 12.1089C16 9.52218 13.7422 6.33999 11.2 4.68662ZM7.65332 10.2244H8.42666C9.55556 10.2244 10.48 11.1844 10.48 12.3577C10.48 13.2378 9.95557 13.9933 9.21779 14.3133C9.17335 14.7488 8.80004 15.1044 8.3378 15.1044C8.3378 15.1044 8.3378 15.1044 8.3289 15.1044C7.93779 15.0955 7.6089 14.8378 7.49334 14.4822H6.48C5.99112 14.4822 5.59111 14.0822 5.59111 13.5933C5.59111 13.1044 5.99112 12.7044 6.48 12.7044H8.42667C8.57781 12.7044 8.70222 12.5444 8.70222 12.3577C8.70222 12.1622 8.57782 12.0022 8.42667 12.0022H7.65333C6.51558 12.0022 5.5911 11.0511 5.5911 9.87776C5.5911 8.73996 6.42666 7.82443 7.49333 7.74441C7.59999 7.37998 7.93777 7.11333 8.33778 7.11333C8.73779 7.11333 9.07557 7.37109 9.18223 7.73556H9.59108C10.08 7.73556 10.48 8.13551 10.48 8.62445C10.48 9.11333 10.08 9.51333 9.59108 9.51333H7.65332C7.50222 9.51333 7.36886 9.67333 7.36886 9.85996C7.36887 10.0733 7.50222 10.2244 7.65332 10.2244Z"
                                        fill="currentColor" />
                                    <path
                                        d="M3.14615 1.16667C2.91508 1.57552 2.87059 2.06446 3.03948 2.5089C3.2706 3.10444 3.62618 3.63776 4.08836 4.0911C4.15949 4.03776 4.23951 3.98443 4.31059 3.94C4.48837 3.82445 4.65726 3.71778 4.83506 3.62001C5.92837 2.99778 7.01284 2.66889 7.9995 2.66889C8.98616 2.66889 10.0706 2.99778 11.1639 3.62001C11.3417 3.71778 11.5106 3.82444 11.6884 3.94C11.7595 3.98444 11.8395 4.03777 11.9106 4.0911C12.3728 3.63776 12.7195 3.10444 12.9506 2.5089C13.1284 2.06446 13.0839 1.57552 12.8529 1.16667C12.595 0.713329 12.1417 0.402236 11.6084 0.31332C9.21728 -0.10444 6.78172 -0.10444 4.39061 0.31332C3.85731 0.402236 3.40396 0.713329 3.14615 1.16667Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <span class="text">My Investment</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul class="sidebar-submenu-list">

                                <li class="sidebar-submenu-list__item ">
                                    <a href="{{route('user.invest')}}" class="sidebar-submenu-list__link">
                                        <span class="text">Investment</span>
                                    </a>
                                </li>

                                <li class="sidebar-submenu-list__item ">
                                    <a href="#" class="sidebar-submenu-list__link">
                                        <span class="text">Investment Report</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li> -->

                    <li class="sidebar-menu-list__item has-dropdown ">
                        <a href="javascript:void(0)" class="sidebar-menu-list__link">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.4 0H3.6C1.62 0 0 1.6 0 3.55556C0 5.06667 0.9 6.31111 2.25 6.84444V3.55556C2.25 3.2 2.43 2.84444 2.61 2.57778C2.79 2.31111 3.24 2.22222 3.6 2.22222H14.4C14.76 2.22222 15.12 2.4 15.39 2.57778C15.66 2.75556 15.75 3.2 15.75 3.55556V6.84444C17.1 6.31111 18 5.06667 18 3.55556C18 1.6 16.38 0 14.4 0ZM14.4 14.2222V3.55556H3.6V14.2222C3.6 15.2 4.41 16 5.4 16H12.6C13.59 16 14.4 15.2 14.4 14.2222ZM8.28 8.35556L7.65 8.97778C7.38 9.24444 6.93 9.24444 6.66 8.97778C6.39 8.71111 6.39 8.26667 6.66 8L7.83 6.84444C8.46 6.22222 9.45 6.22222 10.08 6.84444L11.25 8C11.52 8.26667 11.52 8.71111 11.25 8.97778C10.98 9.24444 10.53 9.24444 10.26 8.97778L9.63 8.35556V12.0889C9.63 12.4444 9.36 12.8 8.91 12.8C8.46 12.8 8.19 12.5333 8.19 12.0889V8.35556H8.28Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <span class="text">Add Money</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul class="sidebar-submenu-list">
                                <li class="sidebar-submenu-list__item ">
                                    <a href="{{route('user.invest')}}" class="sidebar-submenu-list__link">
                                        <span class="text">Deposit</span>
                                    </a>
                                </li>
                                <li class="sidebar-submenu-list__item ">
                                    <a href="{{route('user.DepositHistory')}}" class="sidebar-submenu-list__link">
                                        <span class="text">Deposit History</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="sidebar-menu-list__item has-dropdown ">
                        <a href="javascript:void(0)" class="sidebar-menu-list__link">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.4 0H3.6C1.62 0 0 1.6 0 3.55556C0 5.06667 0.9 6.31111 2.25 6.84444V3.55556C2.25 3.2 2.43 2.84444 2.61 2.57778C2.79 2.31111 3.24 2.22222 3.6 2.22222H14.4C14.76 2.22222 15.12 2.4 15.39 2.57778C15.66 2.75556 15.75 3.2 15.75 3.55556V6.84444C17.1 6.31111 18 5.06667 18 3.55556C18 1.6 16.38 0 14.4 0ZM14.4 14.2222V3.55556H3.6V14.2222C3.6 15.2 4.41 16 5.4 16H12.6C13.59 16 14.4 15.2 14.4 14.2222ZM8.28 8.35556L7.65 8.97778C7.38 9.24444 6.93 9.24444 6.66 8.97778C6.39 8.71111 6.39 8.26667 6.66 8L7.83 6.84444C8.46 6.22222 9.45 6.22222 10.08 6.84444L11.25 8C11.52 8.26667 11.52 8.71111 11.25 8.97778C10.98 9.24444 10.53 9.24444 10.26 8.97778L9.63 8.35556V12.0889C9.63 12.4444 9.36 12.8 8.91 12.8C8.46 12.8 8.19 12.5333 8.19 12.0889V8.35556H8.28Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <span class="text">Activate Id</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul class="sidebar-submenu-list">
                                <li class="sidebar-submenu-list__item ">
                                    <a href="{{route('user.topup')}}" class="sidebar-submenu-list__link">
                                        <span class="text">Topup</span>
                                    </a>
                                </li>
                                <li class="sidebar-submenu-list__item ">
                                    <a href="{{route('user.topupHistory')}}" class="sidebar-submenu-list__link">
                                        <span class="text">Topup History</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-menu-list__item has-dropdown ">
                        <a href="javascript:void(0)" class="sidebar-menu-list__link">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16"
                                    fill="none">
                                    <path
                                        d="M3.55555 0H14.2222C16.1778 0 17.7778 1.6 17.7778 3.55555C17.7778 5.06666 16.8889 6.31111 15.5555 6.84444V3.55555C15.5555 3.2 15.3778 2.84444 15.2 2.57778C15.0222 2.31111 14.5778 2.22222 14.2222 2.22222H3.55555C3.2 2.22222 2.84444 2.4 2.57778 2.57778C2.31111 2.75555 2.22222 3.2 2.22222 3.55555V6.84444C0.888888 6.31111 0 5.06666 0 3.55555C0 1.6 1.6 0 3.55555 0Z"
                                        fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.2233 3.55556V14.2222C14.2233 15.2 13.4233 16 12.4455 16H5.33442C4.35664 16 3.55664 15.2 3.55664 14.2222V3.55556H14.2233ZM7.55664 10.2222L8.17886 10.8444V7.11111C8.17886 6.75556 8.44553 6.4 8.88997 6.4C9.33442 6.4 9.60108 6.66667 9.60108 7.11111V10.8444L10.2233 10.2222C10.49 9.95556 10.9344 9.95556 11.2011 10.2222C11.4677 10.4889 11.4677 10.9333 11.2011 11.2L10.0455 12.3556C9.4233 12.9778 8.44553 12.9778 7.82331 12.3556L6.66775 11.2C6.40108 10.9333 6.40108 10.4889 6.66775 10.2222C6.93442 9.95556 7.28997 9.95556 7.55664 10.2222Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <span class="text">Withdraw</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul class="sidebar-submenu-list">
                                <li class="sidebar-submenu-list__item ">
                                    <a href="{{route('user.paymentledger')}}" class="sidebar-submenu-list__link">
                                        <span class="text">Withdraw Ledger</span>
                                    </a>
                                </li>
                                <li class="sidebar-submenu-list__item ">
                                    <a href="{{route('user.Withdraw-History')}}" class="sidebar-submenu-list__link">
                                        <span class="text">Withdraw History</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    @php
                    $user = Auth::user();
                    @endphp
                    <li class="sidebar-menu-list__item has-dropdown ">
                        <a href="javascript:void(0)" class="sidebar-menu-list__link">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18"
                                    fill="none">
                                    <path
                                        d="M16.7188 2.28125C16.4271 1.92708 16.4271 1.57292 16.7188 1.21875C17.0729 0.927083 17.4271 0.927083 17.7812 1.21875L19.7812 3.21875C19.9271 3.36458 20 3.54167 20 3.75C20 3.95833 19.9271 4.13542 19.7812 4.28125L17.7812 6.28125C17.4271 6.57292 17.0729 6.57292 16.7188 6.28125C16.4271 5.92708 16.4271 5.57292 16.7188 5.21875L17.4375 4.5H12C11.5417 4.45833 11.2917 4.20833 11.25 3.75C11.2917 3.29167 11.5417 3.04167 12 3H17.4375L16.7188 2.28125ZM3.28125 12.7812L2.5625 13.5L3.28125 12.7812L2.5625 13.5H8C8.45833 13.5417 8.70833 13.7917 8.75 14.25C8.70833 14.7083 8.45833 14.9583 8 15H2.5625L3.28125 15.7188C3.57292 16.0729 3.57292 16.4271 3.28125 16.7812C2.92708 17.0729 2.57292 17.0729 2.21875 16.7812L0.21875 14.7812C0.0729167 14.6354 0 14.4583 0 14.25C0 14.0417 0.0729167 13.8646 0.21875 13.7188L2.21875 11.7188C2.57292 11.4271 2.92708 11.4271 3.28125 11.7188C3.57292 12.0729 3.57292 12.4271 3.28125 12.7812ZM3 3H10.5625H3H10.5625C10.4375 3.22917 10.375 3.47917 10.375 3.75C10.3958 4.20833 10.5521 4.59375 10.8438 4.90625C11.1562 5.19792 11.5417 5.35417 12 5.375H15.6562C15.5312 5.9375 15.6771 6.44792 16.0938 6.90625C16.4271 7.21875 16.8125 7.375 17.25 7.375C17.6875 7.375 18.0729 7.21875 18.4062 6.90625L19 6.3125V13C18.9792 13.5625 18.7812 14.0312 18.4062 14.4062C18.0312 14.7812 17.5625 14.9792 17 15H9.4375C9.5625 14.7708 9.625 14.5208 9.625 14.25C9.60417 13.7917 9.44792 13.4062 9.15625 13.0938C8.84375 12.8021 8.45833 12.6458 8 12.625H4.34375C4.46875 12.0625 4.32292 11.5521 3.90625 11.0938C3.57292 10.7812 3.1875 10.625 2.75 10.625C2.3125 10.625 1.92708 10.7812 1.59375 11.0938L1 11.7188V5C1.02083 4.4375 1.21875 3.96875 1.59375 3.59375C1.96875 3.21875 2.4375 3.02083 3 3ZM5 5H3H5H3V7C3.5625 6.97917 4.03125 6.78125 4.40625 6.40625C4.78125 6.03125 4.97917 5.5625 5 5ZM17 11C16.4375 11.0208 15.9688 11.2188 15.5938 11.5938C15.2188 11.9688 15.0208 12.4375 15 13H17V11ZM10 12C10.5417 12 11.0417 11.8646 11.5 11.5938C11.9583 11.3229 12.3229 10.9583 12.5938 10.5C12.8646 10.0208 13 9.52083 13 9C13 8.47917 12.8646 7.97917 12.5938 7.5C12.3229 7.04167 11.9583 6.67708 11.5 6.40625C11.0417 6.13542 10.5417 6 10 6C9.45833 6 8.95833 6.13542 8.5 6.40625C8.04167 6.67708 7.67708 7.04167 7.40625 7.5C7.13542 7.97917 7 8.47917 7 9C7 9.52083 7.13542 10.0208 7.40625 10.5C7.67708 10.9583 8.04167 11.3229 8.5 11.5938C8.95833 11.8646 9.45833 12 10 12Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <span class="text">Profit Summary</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul class="sidebar-submenu-list">

                                <li class="sidebar-submenu-list__item ">
                                    <a href="{{route('user.level-income')}}" class="sidebar-submenu-list__link">
                                        <span class="text">Farming Income</span>
                                    </a>
                                </li>
                                @if($user->event == 1)
                                <li class="sidebar-submenu-list__item ">
                                    <a href="{{route('user.direct-bonus')}}" class="sidebar-submenu-list__link">
                                        <span class="text">Referral Income</span>
                                    </a>
                                </li>

                                <li class="sidebar-submenu-list__item ">
                                    <a href="{{route('user.roi-bonus')}}" class="sidebar-submenu-list__link">
                                        <span class="text">Reccuring Income</span>
                                    </a>
                                </li>
                                <li class="sidebar-submenu-list__item ">
                                    <a href="{{route('user.reward-bonus')}}" class="sidebar-submenu-list__link">
                                        <span class="text">Reward Bonus</span>
                                    </a>
                                </li>
                                <li class="sidebar-submenu-list__item ">
                                    <a href="{{route('user.contract-bonus')}}" class="sidebar-submenu-list__link">
                                        <span class="text">Contract Profite Bonus</span>
                                    </a>
                                </li>
                                <li class="sidebar-submenu-list__item ">
                                    <a href="{{route('user.samerankprofite')}}" class="sidebar-submenu-list__link">
                                        <span class="text">Same Rank Profit Sharing</span>
                                    </a>
                                </li>
                                <li class="sidebar-submenu-list__item ">
                                    <a href="{{route('user.salary_income')}}" class="sidebar-submenu-list__link">
                                        <span class="text">Salary Income</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </li>




                    @if($user->event == 1)

                    <li class="sidebar-menu-list__item has-dropdown ">
                        <a href="javascript:void(0)" class="sidebar-menu-list__link">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="5" r="3" />
                                    <circle cx="5" cy="19" r="3" />
                                    <circle cx="19" cy="19" r="3" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m-7 4l7-4m7 4l-7-4" />
                                </svg>
                            </span>


                            <span class="text">My Networks</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul class="sidebar-submenu-list">
                                <li class="sidebar-submenu-list__item ">
                                    <a href="{{route('user.referral-team')}}" class="sidebar-submenu-list__link">
                                        <span class="text">Direct Team</span>
                                    </a>
                                </li>
                                <li class="sidebar-submenu-list__item ">
                                    <a href="{{route('user.level-team')}}" class="sidebar-submenu-list__link">
                                        <span class="text">Level Team</span>
                                    </a>
                                </li>

                                <li class="sidebar-submenu-list__item ">
                                    <a href="{{route('user.tree-view')}}" class="sidebar-submenu-list__link">
                                        <span class="text">Tree Team</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    @endif
                    <!-- <li class="sidebar-menu-list__item ">
                        <a href="{{route('user.transaction')}}" class="sidebar-menu-list__link">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18"
                                    fill="none">
                                    <path
                                        d="M16.7188 2.28125C16.4271 1.92708 16.4271 1.57292 16.7188 1.21875C17.0729 0.927083 17.4271 0.927083 17.7812 1.21875L19.7812 3.21875C19.9271 3.36458 20 3.54167 20 3.75C20 3.95833 19.9271 4.13542 19.7812 4.28125L17.7812 6.28125C17.4271 6.57292 17.0729 6.57292 16.7188 6.28125C16.4271 5.92708 16.4271 5.57292 16.7188 5.21875L17.4375 4.5H12C11.5417 4.45833 11.2917 4.20833 11.25 3.75C11.2917 3.29167 11.5417 3.04167 12 3H17.4375L16.7188 2.28125ZM3.28125 12.7812L2.5625 13.5L3.28125 12.7812L2.5625 13.5H8C8.45833 13.5417 8.70833 13.7917 8.75 14.25C8.70833 14.7083 8.45833 14.9583 8 15H2.5625L3.28125 15.7188C3.57292 16.0729 3.57292 16.4271 3.28125 16.7812C2.92708 17.0729 2.57292 17.0729 2.21875 16.7812L0.21875 14.7812C0.0729167 14.6354 0 14.4583 0 14.25C0 14.0417 0.0729167 13.8646 0.21875 13.7188L2.21875 11.7188C2.57292 11.4271 2.92708 11.4271 3.28125 11.7188C3.57292 12.0729 3.57292 12.4271 3.28125 12.7812ZM3 3H10.5625H3H10.5625C10.4375 3.22917 10.375 3.47917 10.375 3.75C10.3958 4.20833 10.5521 4.59375 10.8438 4.90625C11.1562 5.19792 11.5417 5.35417 12 5.375H15.6562C15.5312 5.9375 15.6771 6.44792 16.0938 6.90625C16.4271 7.21875 16.8125 7.375 17.25 7.375C17.6875 7.375 18.0729 7.21875 18.4062 6.90625L19 6.3125V13C18.9792 13.5625 18.7812 14.0312 18.4062 14.4062C18.0312 14.7812 17.5625 14.9792 17 15H9.4375C9.5625 14.7708 9.625 14.5208 9.625 14.25C9.60417 13.7917 9.44792 13.4062 9.15625 13.0938C8.84375 12.8021 8.45833 12.6458 8 12.625H4.34375C4.46875 12.0625 4.32292 11.5521 3.90625 11.0938C3.57292 10.7812 3.1875 10.625 2.75 10.625C2.3125 10.625 1.92708 10.7812 1.59375 11.0938L1 11.7188V5C1.02083 4.4375 1.21875 3.96875 1.59375 3.59375C1.96875 3.21875 2.4375 3.02083 3 3ZM5 5H3H5H3V7C3.5625 6.97917 4.03125 6.78125 4.40625 6.40625C4.78125 6.03125 4.97917 5.5625 5 5ZM17 11C16.4375 11.0208 15.9688 11.2188 15.5938 11.5938C15.2188 11.9688 15.0208 12.4375 15 13H17V11ZM10 12C10.5417 12 11.0417 11.8646 11.5 11.5938C11.9583 11.3229 12.3229 10.9583 12.5938 10.5C12.8646 10.0208 13 9.52083 13 9C13 8.47917 12.8646 7.97917 12.5938 7.5C12.3229 7.04167 11.9583 6.67708 11.5 6.40625C11.0417 6.13542 10.5417 6 10 6C9.45833 6 8.95833 6.13542 8.5 6.40625C8.04167 6.67708 7.67708 7.04167 7.40625 7.5C7.13542 7.97917 7 8.47917 7 9C7 9.52083 7.13542 10.0208 7.40625 10.5C7.67708 10.9583 8.04167 11.3229 8.5 11.5938C8.95833 11.8646 9.45833 12 10 12Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <span class="text">Transaction</span>
                        </a>
                    </li> -->
                    <!-- 
                    <li class="sidebar-menu-list__item ">
                        <a href="{{route('user.refer')}}" class="sidebar-menu-list__link">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="5" r="3" />
                                    <circle cx="5" cy="19" r="3" />
                                    <circle cx="19" cy="19" r="3" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m-7 4l7-4m7 4l-7-4" />
                                </svg>
                            </span>
                            <span class="text">Referrals</span>
                        </a>
                    </li> -->


                    <li class="sidebar-menu-list__item has-dropdown ">
                        <a href="javascript:void(0)" class="sidebar-menu-list__link">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="13" viewBox="0 0 20 13"
                                    fill="none">
                                    <path
                                        d="M4.25 3.4375H14.875V9.8125H4.25V3.4375ZM17 0.25C18.1621 0.25 19.125 1.21289 19.125 2.375V5.03125C18.2285 5.03125 17.5312 5.76172 17.5312 6.625C17.5312 7.52148 18.2285 8.21875 19.125 8.21875V10.875C19.125 12.0703 18.1621 13 17 13H2.125C0.929688 13 0 12.0703 0 10.875V8.21875C0.863281 8.21875 1.59375 7.52148 1.59375 6.625C1.59375 5.76172 0.863281 5.03125 0 5.03125V2.375C0 1.21289 0.929688 0.25 2.125 0.25H17ZM3.1875 9.8125C3.1875 10.4102 3.65234 10.875 4.25 10.875H14.875C15.4395 10.875 15.9375 10.4102 15.9375 9.8125V3.4375C15.9375 2.87305 15.4395 2.375 14.875 2.375H4.25C3.65234 2.375 3.1875 2.87305 3.1875 3.4375V9.8125Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <span class="text">Support Ticket</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul class="sidebar-submenu-list">
                                <li class="sidebar-submenu-list__item ">
                                    <a href="{{route('user.ticket')}}" class="sidebar-submenu-list__link">
                                        <span class="text">Create New</span>
                                    </a>
                                </li>

                                <li class="sidebar-submenu-list__item ">
                                    <a href="{{route('user.ticket-status')}}" class="sidebar-submenu-list__link">
                                        <span class="text">My Ticket</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-menu-list__item has-dropdown ">
                        <a href="javascript:void(0)" class="sidebar-menu-list__link">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                    <path
                                        d="M17.4023 6.12109C17.543 6.4375 17.4375 6.75391 17.1914 7L15.6797 8.37109C15.7148 8.65234 15.75 8.96875 15.75 9.25C15.75 9.56641 15.7148 9.88281 15.6797 10.1641L17.1914 11.5352C17.4375 11.7812 17.543 12.0977 17.4023 12.4141C17.2617 12.8359 17.0859 13.2227 16.875 13.6094L16.6992 13.8906C16.4531 14.2773 16.207 14.6641 15.9258 15.0156C15.7148 15.2617 15.3633 15.332 15.0469 15.2266L13.1133 14.6289C12.6211 14.9805 12.0938 15.2617 11.5664 15.5078L11.1094 17.5117C11.0391 17.8281 10.793 18.0742 10.4766 18.1445C9.98438 18.2148 9.49219 18.25 8.96484 18.25C8.47266 18.25 7.98047 18.2148 7.48828 18.1445C7.17188 18.0742 6.92578 17.8281 6.85547 17.5117L6.39844 15.5078C5.87109 15.2617 5.34375 14.9805 4.85156 14.6289L2.91797 15.2266C2.60156 15.332 2.25 15.2617 2.03906 15.0156C1.75781 14.6641 1.51172 14.2773 1.26562 13.8906L1.08984 13.6094C0.878906 13.2227 0.703125 12.8359 0.5625 12.4141C0.421875 12.0977 0.527344 11.7812 0.773438 11.5352L2.28516 10.1641C2.25 9.88281 2.25 9.56641 2.25 9.25C2.25 8.96875 2.25 8.65234 2.28516 8.37109L0.773438 7C0.527344 6.75391 0.421875 6.4375 0.5625 6.12109C0.703125 5.69922 0.878906 5.3125 1.08984 4.92578L1.26562 4.64453C1.51172 4.25781 1.75781 3.87109 2.03906 3.51953C2.25 3.27344 2.60156 3.20312 2.91797 3.30859L4.85156 3.90625C5.34375 3.55469 5.87109 3.23828 6.39844 3.02734L6.85547 1.02344C6.92578 0.707031 7.17188 0.460938 7.48828 0.390625C7.98047 0.320312 8.47266 0.25 9 0.25C9.49219 0.25 9.98438 0.320312 10.4766 0.390625C10.793 0.460938 11.0391 0.707031 11.1094 1.02344L11.5664 3.02734C12.0938 3.23828 12.6211 3.55469 13.1133 3.90625L15.0469 3.30859C15.3633 3.20312 15.7148 3.27344 15.9258 3.51953C16.207 3.87109 16.4531 4.25781 16.6992 4.64453L16.875 4.92578C17.0859 5.3125 17.2617 5.69922 17.4023 6.12109ZM9 12.0625C10.5469 12.0625 11.8125 10.832 11.8125 9.25C11.8125 7.70312 10.5469 6.4375 9 6.4375C7.41797 6.4375 6.1875 7.70312 6.1875 9.25C6.1875 10.832 7.41797 12.0625 9 12.0625Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <span class="text">Setting</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul class="sidebar-submenu-list">
                                <li class="sidebar-submenu-list__item ">
                                    <a href="{{route('user.profile')}}" class="sidebar-submenu-list__link">
                                        <span class="text">Profile Setting</span>
                                    </a>
                                </li>
                                <li class="sidebar-submenu-list__item ">
                                    <a href="{{route('user.BankDetail')}}" class="sidebar-submenu-list__link">
                                        <span class="text">Bank Details</span>
                                    </a>
                                </li>

                                <li class="sidebar-submenu-list__item ">
                                    <a href="{{route('user.ChangePass')}}" class="sidebar-submenu-list__link">
                                        <span class="text">Security</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="sidebar-menu-list__item" id="main-content">
                        <a href="javascript:void(0);" class="sidebar-menu-list__link log-out" onclick="openPopup()">
                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="17" viewBox="0 0 19 17"
                                    fill="none">
                                    <path
                                        d="M3.375 16.125C1.47656 16.125 0 14.6133 0 12.75V3.75C0 1.88672 1.47656 0.375 3.375 0.375H5.625C6.22266 0.375 6.75 0.902344 6.75 1.5C6.75 2.13281 6.22266 2.625 5.625 2.625H3.375C2.74219 2.625 2.25 3.15234 2.25 3.75V12.75C2.25 13.3828 2.74219 13.875 3.375 13.875H5.625C6.22266 13.875 6.75 14.4023 6.75 15C6.75 15.6328 6.22266 16.125 5.625 16.125H3.375ZM17.7188 7.65234C18.0703 7.96875 18.0703 8.56641 17.7188 8.84766L12.6562 13.6289C12.4102 13.875 12.0586 13.9102 11.7422 13.8047C11.4258 13.6641 11.25 13.3477 11.25 13.0312V10.5H6.75C6.11719 10.5 5.625 10.0078 5.625 9.375V7.125C5.625 6.52734 6.11719 6 6.75 6H11.25V3.46875C11.25 3.15234 11.4258 2.83594 11.7422 2.69531C12.0586 2.58984 12.4102 2.625 12.6562 2.87109L17.7188 7.65234Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <span class="text">Logout</span>
                        </a>

                    </li>
                </ul>
            </div>
            <div class="dashboard__right">

                <div class="dashboard-header">
                    <div class="container-fluid">
                        <div class="dashboard-header-wrapper">
                            <div class="dashboard-header-left">
                                <div class="d-xl-none">
                                    <button class="navigation-bar">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                                <div class="page-title d-none d-xl-block">
                                    <a href="#" class="page-title-link text-white">
                                        <span>
                                            <img style="background-color: white;width: 16px;
                                      height: 16px;
                                   padding: 1px;
                                   border-radius: 50%;"
                                                src="{{asset('')}}user/images/person.png"
                                                alt="" />
                                        </span>
                                        {{ Auth::user()->username }}
                                    </a>
                                </div>
                            </div>
                            <div class="dashboard-header-right">

                                <div class="dropdown user-dropdown">
                                    <button class="lang-box-btn" data-bs-toggle="dropdown">
                                        <span class="user-info-wrapper">
                                            <span class="user-info-thumb">
                                                <img class="fit-image"
                                                    src="{{asset('')}}user-asset/images/male3-512.webp"
                                                    alt="" />
                                            </span>
                                            <span class="user-info-content d-none d-sm-block">
                                                <span class="name">{{ Auth::user()->name }} {{ Auth::user()->lastname }}

                                                </span>
                                            </span>
                                            <span class="user-info-arrow">
                                                <img
                                                    src="{{asset('')}}user/images/down.png"
                                                    alt="" />
                                            </span>
                                        </span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li class="user-dropdown-item">
                                            <a href="{{route('user.profile')}}" class="user-dropdown-link">
                                                <span class="icon">
                                                    <i class="fa-solid fa-user"></i>
                                                </span>
                                                <span class="text">Profile</span>
                                            </a>
                                        </li>
                                        <!-- <li class="user-dropdown-item">
                                <a href="#" class="user-dropdown-link">
                                    <span class="icon">
                                        <i class="fa-solid fa-lock"></i>
                                    </span>
                                    <span class="text">Change Password</span>
                                </a>
                            </li>
                            <li class="user-dropdown-item">
                                <a href="#" class="user-dropdown-link">
                                    <span class="icon">
                                        <i class="fa-solid fa-qrcode"></i>
                                    </span>
                                    <span class="text">2FA Security</span>
                                </a>
                            </li> -->

                                        <li class="user-dropdown-item" id="main-content">

                                            <a href="javascript:void(0);" class="user-dropdown-link" onclick="openPopup()">
                                                <span class="icon">
                                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                                </span>
                                                <span class="text">Logout</span>
                                            </a>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main content wrapper -->

                <!-- Popup Overlay -->
                <div id="popupOverlay" style="
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    width: 100vw;
    background-color: rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(5px);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 1000;
">
                    <div style="
    background: #ffffff;
    padding: 30px 25px;
    border-radius: 10px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    text-align: center;
    width: 320px;
    font-family: 'Segoe UI', sans-serif;
    position: relative;
    transition: all 0.3s ease;
">

                        <!-- Close Button -->
                        <button onclick="closePopup()" style="
        position: absolute;
        top: 10px;
        right: 10px;
        border: none;
        background: transparent;
        font-size: 18px;
        cursor: pointer;
        color: #888;
    ">&times;</button>

                        <!-- Title -->
                        <h3 style="margin-top: 10px; font-size: 22px; color: #333;">Logout</h3>

                        <!-- Message -->
                        <p style="font-size: 15px; color: #555;">Are you sure you want to log out?</p>

                        <!-- Logout Button -->
                        <a href="{{ route('logout') }}" style="
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #ff4d4d;
        color: white;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        font-size: 14px;
        transition: background 0.3s ease;
    " onmouseover="this.style.backgroundColor='#e60000'" onmouseout="this.style.backgroundColor='#ff4d4d'">
                            <i class="fa-solid fa-arrow-right-from-bracket" style="margin-right: 8px;"></i>
                            Logout
                        </a>

                    </div>

                </div>
                <script>
                    function openPopup() {
                        document.getElementById('main-content').style.filter = 'blur(5px)';
                        document.getElementById('popupOverlay').style.display = 'flex';
                    }

                    function closePopup() {
                        document.getElementById('main-content').style.filter = 'none';
                        document.getElementById('popupOverlay').style.display = 'none';
                    }
                </script>