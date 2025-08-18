<!--**********************************
    Content body start
***********************************-->
@include('layouts.upnl.header')


<div class="dashboard-body">

    <div class="container-fluid">
        <div class="flex-between mb-32 gap-3">
            <h2 class="fs-30">Referrals</h2>
        </div>

        <div class="card custom--card">
            <div class="card-body">
                <div class="col-md-12 mb-4">
                    <label class="form--label">Referral Link</label>
                    <div class="input-group style-left">
                        <input type="text" name="text"
                            class="form-control form--control md-style referralURL"
                          value="{{ url('/register') }}?reference={{ auth()->user()->username }}"
                            readonly>
                        <button class="input-group-text copytext copyBoard" id="copyBoard"> <i
                                class="fa fa-copy"></i> </button>
                    </div>
                </div>
                <div class="treeview-container">
                    <ul class="treeview">
                        <li class="items-expanded"> Rameshk Kashyap ( rameshk036 )
                            <ul class="firstList">
                                <li>Rajat Kumar ( rajat036 )
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

</div>
</div>




<script>
    "use strict";
    const colors = {
        success: '#28c76f',
        error: '#eb2222',
        warning: '#ff9f43',
        info: '#1e9ff2',
    }

    const icons = {
        success: 'fas fa-check-circle',
        error: 'fas fa-times-circle',
        warning: 'fas fa-exclamation-triangle',
        info: 'fas fa-exclamation-circle',
    }

    const notifications = [];
    const errors = [];


    const triggerToaster = (status, message) => {
        iziToast[status]({
            title: status.charAt(0).toUpperCase() + status.slice(1),
            message: message,
            position: "topRight",
            backgroundColor: '#fff',
            icon: icons[status],
            iconColor: colors[status],
            progressBarColor: colors[status],
            titleSize: '1rem',
            messageSize: '1rem',
            titleColor: '#474747',
            messageColor: '#a2a2a2',
            transitionIn: 'obunceInLeft'
        });
    }

    if (notifications.length) {
        notifications.forEach(element => {
            triggerToaster(element[0], element[1]);
        });
    }

    if (errors.length) {
        errors.forEach(error => {
            triggerToaster('error', error);
        });
    }

    function notify(status, message) {
        if (typeof message == 'string') {
            triggerToaster(status, message);
        } else {
            $.each(message, (i, val) => triggerToaster(status, val));
        }
    }
</script>

<script src="https://script.viserlab.com/viserasset/assets/global/js/jquery.treeView.js"></script>
<script>
    (function($) {
        "use strict"
        $('.treeview').treeView();
        $('.copyBoard').on('click', function() {
            var copyText = document.getElementsByClassName("referralURL");
            copyText = copyText[0];
            copyText.select();
            copyText.setSelectionRange(0, 99999);

            /*For mobile devices*/
            document.execCommand("copy");
            copyText.blur();
            this.classList.add('copied');
            setTimeout(() => this.classList.remove('copied'), 1500);
        });
    })(jQuery);
</script>

<script>
    (function($) {
        "use strict";
        $(".langSel").on("change", function() {
            window.location.href = "https://script.viserlab.com/viserasset/change/" + $(this).val();
        });

        $('.policy').on('click', function() {
            $.get('https://script.viserlab.com/viserasset/cookie/accept', function(response) {
                $('.cookies-card').addClass('d-none');
            });
        });

        $('.select2').each(function(index, element) {
            $(element).select2();
        });


        $('.select2-basic').each(function(index, element) {
            $(element).select2({
                dropdownParent: $(element).closest('.select2-parent')
            });
        });

        setTimeout(function() {
            $('.cookies-card').removeClass('hide')
        }, 2000);

        var inputElements = $('[type=text],[type=password],select,textarea');
        $.each(inputElements, function(index, element) {
            element = $(element);
            element.closest('.form-group').find('label').attr('for', element.attr('name'));
            element.attr('id', element.attr('name'))
        });


        $.each($('input:not([type=checkbox]):not([type=hidden]), select, textarea'), function(i, element) {

            if (element.hasAttribute('required')) {
                $(element).closest('.form-group').find('label').addClass('required');
            }

        });

        $('.showFilterBtn').on('click', function() {
            $('.responsive-filter-card').slideToggle();
        });

        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[title], [data-title], [data-bs-title]'))
        tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });


        let disableSubmission = false;
        $('.disableSubmission').on('submit', function(e) {
            if (disableSubmission) {
                e.preventDefault()
            } else {
                disableSubmission = true;
            }
        });

        Array.from(document.querySelectorAll('table')).forEach(table => {
            let heading = table.querySelectorAll('thead tr th');
            Array.from(table.querySelectorAll('tbody tr')).forEach((row) => {
                Array.from(row.querySelectorAll('td')).forEach((colum, i) => {
                    colum.setAttribute('data-label', heading[i].innerText)
                });
            });
        });

    })(jQuery);
</script>

<script>
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5fe0b9b2a8a254155ab5421d/1eq2tap1m';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>

<script>
    if (window.top != window.self) {
        document.body.innerHTML += '<div style="position:fixed;top:0;width:100%;z-index:9999999;background:#f8d7da;color:#721c24;text-align:center; padding: 20px;"><p style="font-size:20px; font-weight: bold;">You are using this website under an external iframe!!</p><p style="font-size:16px; margin-top: 20px;">for a better experience, please browse directly instead of an external iframe.</p><a href="' + window.self.location + '" target="_blank" style=" margin-top:20px; color: #fff;background-color: #dc3545; padding: 5px 10px; border-radius: 5px; text-decoration: none;">Browse Directly</a></div>';
    }
</script>


<script>
    adroll_adv_id = "YXRNNTO7ZBAMFBH67UUE5M";
    adroll_pix_id = "MMQQDWGN25EXPHGRPA3NLR";
    adroll_version = "2.0";
    (function(w, d, e, o, a) {
        w.__adroll_loaded = true;
        w.adroll = w.adroll || [];
        w.adroll.f = ['setProperties', 'identify', 'track'];
        var roundtripUrl = "https://s.adroll.com/j/" + adroll_adv_id +
            "/roundtrip.js";
        for (a = 0; a < w.adroll.f.length; a++) {
            w.adroll[w.adroll.f[a]] = w.adroll[w.adroll.f[a]] || (function(n) {
                return function() {
                    w.adroll.push([n, arguments])
                }
            })(w.adroll.f[a])
        }
        e = d.createElement('script');
        o = d.getElementsByTagName('script')[0];
        e.async = 1;
        e.src = roundtripUrl;
        o.parentNode.insertBefore(e, o);
    })(window, document);
    adroll.track("pageView");
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1ME4K0RD7K"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-1ME4K0RD7K');
</script>

</body>

</html>

<!-- @include('layouts.upnl.footer') -->

<!--**********************************
    Content body end
***********************************-->