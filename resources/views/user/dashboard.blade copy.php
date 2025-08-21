<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<div class="dashboard-body">

    <div class="container-fluid">
        <div class="flex-between mb-32 gap-3">
            <h2 class="fs-30">Dashboard</h2>

            @if(Auth::user()->event==0)
            <div class="flex-align gap-2">
                <a data-toggle="modal" data-target="#exampleModalLong" class="btn btn--base btn--sm">Became A Distributor</a>
            </div>

            @endif

        </div>
        <div class="notice"></div>
        <!-- <div class="row justify-content-center">
                <div class="col-md-12">

                    <div class="alert alert--info mb-3" role="alert">
                        <div class="alert__icon"><i class="fas fa-exclamation-circle"></i>
                        </div>
                        <div class="alert__content">
                            <h6 class="alert__title">KYC Verification Required</h6>
                            <p class="alert__desc">Complete KYC to unlock the full potential of our platform! KYC helps us verify your identity and keep things secure. It is quick and easy just follow the on-screen instructions. Get started with KYC verification now! <a href="https://script.viserlab.com/viserasset/user/kyc-form">Click Here to Submit Documents</a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="alert alert--danger mb-3" role="alert">
                        <div class="alert__icon"><i class="fas fa-exclamation-triangle"></i></div>
                        <div class="alert__content">
                            <h6 class="alert__title">Empty Balance</h6>
                            <p class="alert__desc"><i>Your balance is empty. Please make <a href="https://script.viserlab.com/viserasset/user/deposit" class="link-color">deposit</a> for your next investment.</i></p>
                        </div>
                    </div>




                    <div class="alert alert--warning mb-3" role="alert">
                        <div class="alert__icon"><i class="fas fa-user-lock"></i>
                        </div>
                        <div class="alert__content">
                            <h6 class="alert__title">2FA Authentication</h6>
                            <p class="alert__desc"><i>To keep safe your account, Please enable <a href="https://script.viserlab.com/viserasset/user/twofactor" class="link-color">2FA</a> security.</i>
                                It will make secure your account and balance.</p>
                        </div>
                    </div>

                </div>
            </div> -->



        <div class="mb-4">
            <div class="row gy-4">
                <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="24" height="24" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                <g>
                                    <g fill="currentColor">
                                        <path
                                            d="M18 7h.75a.75.75 0 0 0-.75-.75zm0 4h-.75zM6 7v-.75a.75.75 0 0 0-.75.75zm11.25 0v4h1.5V7zm0 4v8h1.5v-8zM16 20.25H8v1.5h8zM6.75 19V7h-1.5v12zM6 7.75h12v-1.5H6zm0-4h12v-1.5H6zM2.75 7A3.25 3.25 0 0 1 6 3.75v-1.5A4.75 4.75 0 0 0 1.25 7zM6 10.25A3.25 3.25 0 0 1 2.75 7h-1.5A4.75 4.75 0 0 0 6 11.75zM21.25 7A3.25 3.25 0 0 1 18 10.25v1.5A4.75 4.75 0 0 0 22.75 7zm1.5 0A4.75 4.75 0 0 0 18 2.25v1.5A3.25 3.25 0 0 1 21.25 7zm-5.5 12c0 .69-.56 1.25-1.25 1.25v1.5A2.75 2.75 0 0 0 18.75 19zM8 20.25c-.69 0-1.25-.56-1.25-1.25h-1.5A2.75 2.75 0 0 0 8 21.75zM13.47 13.116a.75.75 0 1 0 1.06-1.06zm-.763-1.823-.53.53zm-1.414 0 .53.53zm-1.823.763a.75.75 0 1 0 1.06 1.06zm1.78 4.53a.75.75 0 0 0 1.5 0zm1.5-5a.75.75 0 0 0-1.5 0zm1.78.47-1.293-1.293-1.06 1.06 1.293 1.293zm-3.767-1.293L9.47 12.055l1.06 1.061 1.293-1.293zm2.474 0a1.75 1.75 0 0 0-2.474 0l1.06 1.06a.25.25 0 0 1 .354 0zm-.487 5.823v-5h-1.5v5z"
                                            fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <div class="widget-card__content">
                            <p class="title">Available Balance</p>
                            <h5 class="count">{{ currency() }}{{ number_format(Auth::user()->available_balance(), 2) }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet">
                                <path d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1" />
                                <path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4" />
                            </svg>
                        </span>
                        <div class="widget-card__content">
                            <p class="title">Total Deposit </p>
                            <h5 class="count">{{ currency() }} {{ Auth::user()->investments->sum('amount') }} </h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet">
                                <path d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1" />
                                <path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4" />
                            </svg>
                        </span>
                        <div class="widget-card__content">
                            <p class="title">Top Up Balance </p>
                            <h5 class="count">{{ currency() }} {{ number_format(Auth::user()->FundBalance(), 2) }} </h5>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet-minimal">
                                <path d="M17 14h.01" />
                                <path d="M7 7h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14" />
                            </svg>
                        </span>
                        <div class="widget-card__content">
                            <p class="title">Interest Wallet</p>
                            <h5 class="count">{{ currency() }}0.00 </h5>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="24" height="24" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                <g>
                                    <path
                                        d="M11.18 23.938c-.854.975.62 2.305 1.499 1.325a20.45 20.45 0 0 1 7.764-5.381c.3-.057.671.168 1.02.118.483-.01 11.874.067 11.931-.119a20.313 20.313 0 0 1 7.227 4.815.999.999 0 0 0 .719.304c.843.027 1.344-1.095.719-1.696-2.024-2.089-4.4-3.71-7.047-4.881.49-.87.46-1.953-.006-2.82C38.859 13.076 42.204 4.77 35.21 4H18.63c-1.24 0-2.4.55-3.185 1.507-2.525 3.264.728 8.159 3.389 10.095-.463.864-.498 1.942-.012 2.81-2.878 1.26-5.56 3.179-7.641 5.526zM21.465 18c-1.312-.023-1.318-1.98 0-2h10.912c1.312.02 1.318 1.976 0 2zm-3.483-6.085c-1.266-1.732-2.697-5.646.649-5.915h16.58c3.344.269 1.917 4.184.648 5.915a8.884 8.884 0 0 1-2.388 2.314A2.971 2.971 0 0 0 32.376 14H21.464c-.383 0-.748.093-1.094.23a8.87 8.87 0 0 1-2.389-2.315zM4 53.27c-.075 3.62 3.117 6.802 6.73 6.73h19.98a1 1 0 1 0 0-2H10.73a4.698 4.698 0 0 1-3.344-1.389c-2.365-2.213-1.527-6.477 1.455-7.685.505-.209.747-.85.506-1.34-2.745-5.744-2.518-12.894.578-18.411a1 1 0 0 0-1.75-.97C6.379 31.445 5.43 35.161 5.43 38.95c0 2.988.579 5.881 1.721 8.616-.42.268-.814.583-1.177.946A6.67 6.67 0 0 0 4 53.27zM59.165 40.236c-1.03-.094-2.031-.457-2.44-1.523-.457-.987.012-2.007.66-2.775a1 1 0 0 0-.108-1.288l-3.927-3.928a.998.998 0 0 0-1.288-.107l-.583.416c-1.27.978-3.388.134-3.597-1.49l-.118-.706a1 1 0 0 0-.987-.835h-5.554a1 1 0 0 0-.987.835l-.118.707c-.202 1.593-2.309 2.484-3.598 1.489-.549-.43-1.228-.938-1.87-.309l-3.927 3.928c-.619.645-.135 1.307.308 1.871.98 1.27.133 3.388-1.491 3.597l-.705.118a1 1 0 0 0-.835.986v5.556a1 1 0 0 0 .835.986l.706.118c1.595.205 2.486 2.305 1.49 3.598-.429.547-.936 1.229-.308 1.87l3.927 3.928a1 1 0 0 0 1.288.107c1.798-1.665 4.205-.677 4.298 1.78a1 1 0 0 0 .987.835h5.554a1 1 0 0 0 .987-.835l.118-.706c.203-1.594 2.306-2.485 3.598-1.49.547.429 1.227.936 1.87.309l3.927-3.928a1 1 0 0 0 .108-1.288c-1.664-1.797-.678-4.205 1.78-4.298a1 1 0 0 0 .835-.986v-5.556a1 1 0 0 0-.835-.986zM58 45.933c-2.892.471-4.456 4.205-2.734 6.6l-2.733 2.733c-2.373-1.709-6.127-.182-6.6 2.734h-3.866c-.277-1.402-1.223-2.559-2.585-3.121a4.24 4.24 0 0 0-4.015.387l-2.733-2.733c.797-1.191.943-2.683.373-4.049A4.234 4.234 0 0 0 30 45.934v-3.867c2.892-.471 4.456-4.205 2.734-6.6l2.733-2.733c2.378 1.71 6.125.181 6.6-2.734h3.866c.471 2.892 4.202 4.456 6.6 2.734l2.733 2.733c-1.708 2.376-.183 6.124 2.734 6.6v3.866z"
                                        fill="currentColor" opacity="1" data-original="currentColor"></path>
                                    <path d="M51.042 39.146a1 1 0 0 0-.416 1.352c2.69 4.81-1.108 11.13-6.626 11.002-4.014.086-7.586-3.481-7.5-7.5-.128-5.516 6.193-9.318 11.001-6.626a1 1 0 0 0 1.353-.416c.87-1.874-3.655-2.458-4.854-2.458-5.238 0-9.5 4.262-9.5 9.5.498 12.587 18.498 12.597 19 0 .007-1.193-.594-5.728-2.458-4.854z" fill="currentColor" opacity="1" data-original="currentColor"></path>
                                    <path d="M43.466 41.795h2.67c1.313-.02 1.316-1.978 0-2H45v-.184c-.087-1.469-2.188-1.232-2 .232-3.072.6-2.688 5.103.466 5.157.54.05 1.644-.25 1.67.603 0 .332-.27.602-.602.602h-2.67a1 1 0 1 0 0 2H43c-.138 1.574 2.185 1.554 2-.048 3.072-.6 2.688-5.103-.466-5.157h-1.068c-.787-.003-.788-1.201 0-1.205z" fill="currentColor" opacity="1" data-original="currentColor"></path>
                                </g>
                            </svg>
                        </span>
                        <div class="widget-card__content">
                            <p class="title">Total Invest</p>
                            <h5 class="count">{{ currency() }}0.00 </h5>
                        </div>
                    </div>
                </div> -->
                <!-- 
                <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ticket">
                                <path d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z" />
                                <path d="M13 5v2" />
                                <path d="M13 17v2" />
                                <path d="M13 11v2" />
                            </svg>
                        </span>
                        <div class="widget-card__content">
                            <p class="title">Total Ticket </p>
                            <h5 class="count">{{Auth::user()->total_tickets}}
                            </h5>
                        </div>
                    </div>
                </div> -->


                <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-loader">
                                <path d="M12 2v4" />
                                <path d="m16.2 7.8 2.9-2.9" />
                                <path d="M18 12h4" />
                                <path d="m16.2 16.2 2.9 2.9" />
                                <path d="M12 18v4" />
                                <path d="m4.9 19.1 2.9-2.9" />
                                <path d="M2 12h4" />
                                <path d="m4.9 4.9 2.9 2.9" />
                            </svg>
                        </span>
                        <div class="widget-card__content">
                            <p class="title">Refferal Income</p>
                            <h5 class="count">{{ currency() }}
                                {{ number_format(Auth::user()->refer_bonus->sum('comm'), 2) }}
                            </h5>
                        </div>
                    </div>
                </div>
                <!--                 
                <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="24" height="24" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                <g>
                                    <g fill="currentColor">
                                        <path
                                            d="M18 7h.75a.75.75 0 0 0-.75-.75zm0 4h-.75zM6 7v-.75a.75.75 0 0 0-.75.75zm11.25 0v4h1.5V7zm0 4v8h1.5v-8zM16 20.25H8v1.5h8zM6.75 19V7h-1.5v12zM6 7.75h12v-1.5H6zm0-4h12v-1.5H6zM2.75 7A3.25 3.25 0 0 1 6 3.75v-1.5A4.75 4.75 0 0 0 1.25 7zM6 10.25A3.25 3.25 0 0 1 2.75 7h-1.5A4.75 4.75 0 0 0 6 11.75zM21.25 7A3.25 3.25 0 0 1 18 10.25v1.5A4.75 4.75 0 0 0 22.75 7zm1.5 0A4.75 4.75 0 0 0 18 2.25v1.5A3.25 3.25 0 0 1 21.25 7zm-5.5 12c0 .69-.56 1.25-1.25 1.25v1.5A2.75 2.75 0 0 0 18.75 19zM8 20.25c-.69 0-1.25-.56-1.25-1.25h-1.5A2.75 2.75 0 0 0 8 21.75zM13.47 13.116a.75.75 0 1 0 1.06-1.06zm-.763-1.823-.53.53zm-1.414 0 .53.53zm-1.823.763a.75.75 0 1 0 1.06 1.06zm1.78 4.53a.75.75 0 0 0 1.5 0zm1.5-5a.75.75 0 0 0-1.5 0zm1.78.47-1.293-1.293-1.06 1.06 1.293 1.293zm-3.767-1.293L9.47 12.055l1.06 1.061 1.293-1.293zm2.474 0a1.75 1.75 0 0 0-2.474 0l1.06 1.06a.25.25 0 0 1 .354 0zm-.487 5.823v-5h-1.5v5z"
                                            fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <div class="widget-card__content">
                            <p class="title">Total Deposits</p>
                            <h5 class="count">{{ currency() }} {{ Auth::user()->investments->sum('amount') }}  </h5>
                        </div>
                    </div>
                </div> -->



                <!-- <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-dashed">
                                <path d="M10.1 2.182a10 10 0 0 1 3.8 0" />
                                <path d="M13.9 21.818a10 10 0 0 1-3.8 0" />
                                <path d="M17.609 3.721a10 10 0 0 1 2.69 2.7" />
                                <path d="M2.182 13.9a10 10 0 0 1 0-3.8" />
                                <path d="M20.279 17.609a10 10 0 0 1-2.7 2.69" />
                                <path d="M21.818 10.1a10 10 0 0 1 0 3.8" />
                                <path d="M3.721 6.391a10 10 0 0 1 2.7-2.69" />
                                <path d="M6.391 20.279a10 10 0 0 1-2.69-2.7" />
                            </svg>
                        </span>
                        <div class="widget-card__content">
                            <p class="title">Pending Withdrawals</p>
                            <h5 class="count"> </h5>
                        </div>
                    </div>
                </div> -->


                <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet-cards">
                                <rect width="18" height="18" x="3" y="3" rx="2" />
                                <path d="M3 9a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2" />
                                <path d="M3 11h3c.8 0 1.6.3 2.1.9l1.1.9c1.6 1.6 4.1 1.6 5.7 0l1.1-.9c.5-.5 1.3-.9 2.1-.9H21" />
                            </svg>
                        </span>
                        <div class="widget-card__content">
                            <p class="title">Farming Income </p>
                            <h5 class="count">{{ currency() }} {{ number_format(Auth::user()->level_bonus->sum('comm'), 2) }}
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-2m-1-1h5m-5 0a2 2 0 1 1 0-4m5 4v-4" />
                            </svg>
                        </span>
                        <div class="widget-card__content">
                            <p class="title">Recurring Income</p>
                            <h5 class="count">{{ currency() }} {{ number_format(Auth::user()->dailyIncentive->sum('comm'), 2) }} </h5>
                        </div>
                    </div>
                </div>



                <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-2m-1-1h5m-5 0a2 2 0 1 1 0-4m5 4v-4" />
                            </svg>
                        </span>
                        <div class="widget-card__content">
                            <p class="title">Salary Income</p>
                            <h5 class="count">{{ currency() }} {{ number_format(Auth::user()->salaryBonus->sum('comm'), 2) }} </h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-2m-1-1h5m-5 0a2 2 0 1 1 0-4m5 4v-4" />
                            </svg>
                        </span>
                        <div class="widget-card__content">
                            <p class="title">Contract Profit Sharing</p>
                            <h5 class="count">{{ currency() }} {{ number_format(Auth::user()->contractpBonus->sum('comm'), 2) }} </h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-2m-1-1h5m-5 0a2 2 0 1 1 0-4m5 4v-4" />
                            </svg>
                        </span>
                        <div class="widget-card__content">
                            <p class="title">Same Rank Profit Sharing</p>
                            <h5 class="count">{{ currency() }} {{ number_format(Auth::user()->samerankBonus->sum('comm'), 2) }} </h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3v18h18M3 16l5-5 4 4 6-6 3 3" />
                            </svg>
                        </span>
                        <div class="widget-card__content">
                            <p class="title">Direct Team </p>
                            <h5 class="count">{{ $user_direct }}</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-2m-1-1h5m-5 0a2 2 0 1 1 0-4m5 4v-4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 20l3 3 5-5" />
                            </svg>

                        </span>
                        <div class="widget-card__content">
                            <p class="title">Level Team </p>
                            <h5 class="count">{{$totalTeam}} </h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-2m-1-1h5m-5 0a2 2 0 1 1 0-4m5 4v-4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 20l3 3 5-5" />
                            </svg>

                        </span>
                        <div class="widget-card__content">
                            <p class="title">Team
                                Business</p>
                            <h5 class="count">{{ currency() }} {{number_format($team_business,2)}} </h5>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-md-4 col-xxl-3">
                    <div class="widget-card">
                        <span class="widget-card__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="24" height="24" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                <g>
                                    <g fill="currentColor">
                                        <path
                                            d="M18 7h.75a.75.75 0 0 0-.75-.75zm0 4h-.75zM6 7v-.75a.75.75 0 0 0-.75.75zm11.25 0v4h1.5V7zm0 4v8h1.5v-8zM16 20.25H8v1.5h8zM6.75 19V7h-1.5v12zM6 7.75h12v-1.5H6zm0-4h12v-1.5H6zM2.75 7A3.25 3.25 0 0 1 6 3.75v-1.5A4.75 4.75 0 0 0 1.25 7zM6 10.25A3.25 3.25 0 0 1 2.75 7h-1.5A4.75 4.75 0 0 0 6 11.75zM21.25 7A3.25 3.25 0 0 1 18 10.25v1.5A4.75 4.75 0 0 0 22.75 7zm1.5 0A4.75 4.75 0 0 0 18 2.25v1.5A3.25 3.25 0 0 1 21.25 7zm-5.5 12c0 .69-.56 1.25-1.25 1.25v1.5A2.75 2.75 0 0 0 18.75 19zM8 20.25c-.69 0-1.25-.56-1.25-1.25h-1.5A2.75 2.75 0 0 0 8 21.75zM14.53 15.53a.75.75 0 1 0-1.06-1.06zm-3.237.763.53-.53zm-.763-1.823a.75.75 0 1 0-1.06 1.06zM12.75 11a.75.75 0 0 0-1.5 0zm-1.5 5a.75.75 0 0 0 1.5 0zm2.22-1.53-1.293 1.293 1.06 1.06 1.293-1.293zm-1.647 1.293L10.53 14.47l-1.06 1.06 1.293 1.293zm.354 0a.25.25 0 0 1-.354 0l-1.06 1.06a1.75 1.75 0 0 0 2.474 0zM11.25 11v5h1.5v-5z"
                                            fill="currentColor" opacity="1" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <div class="widget-card__content">
                            <p class="title">Total Withdraw</p>
                            <h5 class="count"> {{ currency() }}
                                {{ number_format(Auth::user()->withdraw(), 2) }}
                            </h5>
                        </div>




                    </div>
                </div>

            </div>
        </div>


        @php
        $user = Auth::user();
        @endphp
        @if($user->event == 1)
        <div class="card custom--card mb-4">
            <div class="card-body">
                <div class="col-md-12 mb-4">
                    <label class="form--label">Referral Link</label>
                    <div class="input-group style-left">
                        <input type="text" name="text"
                            class="form-control form--control md-style referralURL"
                            value="{{ url('/register') }}?ref={{ auth()->user()->username }}"
                            readonly>
                        <button class="input-group-text copytext copyBoard" id="copyBoard"> <i
                                class="fa fa-copy"></i> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endif
</div>
</div>



<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Dear {{ Auth::user()->name }},</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Welcome to EcoVillage! We’re delighted to have you join our growing community committed to sustainable living and chemical-free farming.</p></br>

                <p>Your decision to be a part of EcoVillage reflects a powerful commitment to organic agriculture, environmental wellness, and the empowerment of local farming communities. Together, we are cultivating a future that thrives on harmony with nature and responsible land stewardship.</p></br>

                <p>At EcoVillage, we’re dedicated to providing outstanding support to ensure your journey with us is smooth, rewarding, and inspiring. If you have any questions, feedback, or need assistance at any point, please feel free to call us at +91 7508640347 or email us at info@ecovillages.co.in. Our team is always here to help.</p></br>
                <p>Thank you once again for being part of this movement. With your support, we’re one step closer to creating a truly sustainable and thriving future.</p></br>

                <p>Warm regards,</p></br>
                <p>EcoVillage</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-moderns" data-dismiss="modal">Close</button>

                <form action="{{ route('user.event') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn-modern">Confirm</button>
                </form>

                <style>
                    .btn-modern {
                        background: linear-gradient(135deg, #4e54c8, #8f94fb);
                        color: #fff;
                        border: none;
                        padding: 10px 20px;
                        font-weight: 600;
                        border-radius: 8px;
                        box-shadow: 0 4px 14px rgba(78, 84, 200, 0.4);
                        transition: all 0.3s ease;
                    }

                    .btn-modern:hover {
                        background: green;
                        box-shadow: 0 6px 20px rgba(78, 84, 200, 0.6);
                        transform: translateY(-2px);
                    }

                    .btn-modern:active {
                        transform: scale(0.98);
                    }
                </style>



                <style>
                    .btn-moderns {
                        background: red;
                        color: #fff;
                        border: none;
                        padding: 10px 20px;
                        font-weight: 600;
                        border-radius: 8px;
                        box-shadow: 0 4px 14px rgba(78, 84, 200, 0.4);
                        transition: all 0.3s ease;
                    }

                    .btn-moderns:hover {
                        background: red;
                        box-shadow: 0 6px 20px rgba(78, 84, 200, 0.6);
                        transform: translateY(-2px);
                    }

                    .btn-moderns:active {
                        transform: scale(0.98);
                    }
                </style>


            </div>
        </div>
    </div>
</div>




<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
    <div class="col-xl-3 col-xxl-3 col-lg-3 col-sm-3">
        <div class="widget-stat card">
            <div class="card-body p-4">
                <div class="media ai-icon">
                    <span class="me-3 bgl-primary text-primary">
                        <!-- <i class="ti-user"></i> -->
                        <svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </span>
                    <div class="media-body">
                        <p class="mb-1">Patient</p>
                        <h4 class="mb-0">3280</h4>
                        <span class="badge badge-primary">+3.5%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-xxl-3 col-lg-3 col-sm-3">
        <div class="widget-stat card">
            <div class="card-body p-4">
                <div class="media ai-icon">
                    <span class="me-3 bgl-primary text-primary">
                        <!-- <i class="ti-user"></i> -->
                        <svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </span>
                    <div class="media-body">
                        <p class="mb-1">Patient</p>
                        <h4 class="mb-0">3280</h4>
                        <span class="badge badge-primary">+3.5%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-xxl-3 col-lg-3 col-sm-3">
        <div class="widget-stat card">
            <div class="card-body p-4">
                <div class="media ai-icon">
                    <span class="me-3 bgl-primary text-primary">
                        <!-- <i class="ti-user"></i> -->
                        <svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </span>
                    <div class="media-body">
                        <p class="mb-1">Patient</p>
                        <h4 class="mb-0">3280</h4>
                        <span class="badge badge-primary">+3.5%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
        <div class="widget-stat card">
            <div class="card-body p-4">
                <div class="media ai-icon">
                    <span class="me-3 bgl-primary text-primary">
                        <!-- <i class="ti-user"></i> -->
                        <svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </span>
                    <div class="media-body">
                        <p class="mb-1">Patient</p>
                        <h4 class="mb-0">3280</h4>
                        <span class="badge badge-primary">+3.5%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-xxl-3 col-lg-3 col-sm-3">
        <div class="widget-stat card bg-warning">
            <div class="card-body p-4">
                <div class="media">
                    <span class="me-3">
                        <i class="la la-user"></i>
                    </span>
                    <div class="media-body text-white">
                        <p class="mb-1">New Students</p>
                        <h3 class="text-white">245</h3>
                        <div class="progress mb-2 bg-primary">
                            <div class="progress-bar progress-animated bg-light" style="width: 50%"></div>
                        </div>
                        <small>50% Increase in 25 Days</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
















