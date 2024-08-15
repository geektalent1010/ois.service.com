<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#003366" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'BUDDIES') }} @yield('title')</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/font.css') }}" />

    <link href="{{ asset('css/bootstrap_4.1.3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/util.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link href="{{ asset('plugin/bootstrap-toastr/toastr.css') }}" rel="stylesheet" type="text/css" />

    @yield('PAGE_LEVEL_STYLES')
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap_4.1.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugin/combodate-1.0.7/combodate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugin/bootstrap-toastr/toastr.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KX83Z102NF"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-KX83Z102NF');
    </script>
</head>

<body>
    @include('_includes.navbar')

    @yield('PAGE_START')

    @yield('PAGE_CONTENT')

    @yield('PAGE_END')

    @include('_includes.bottomBar')

    @if (@isset($modalData))

        @if (@isset($modalData[0]))
            @include('_includes.disclaimer', ['data' => $modalData[0]->content])
        @endif
        @if (@isset($modalData[1]))
            @include('_includes.terms_use', ['data' => $modalData[1]->content])
        @endif
        @if (@isset($modalData[2]))
            @include('_includes.privacy_policy', ['data' => $modalData[2]->content])
        @endif
        @if (@isset($modalData[3]))
            @include('_includes.data_policy', ['data' => $modalData[3]->content])
        @endif

    @endif


    @include('_includes.chatbot')

    @include('_includes.cookies')

    @include('_includes.offices')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            easing: 'ease-out-back',
            duration: 1000
        });
        $(".intro-section").on('scroll', AOS.refreshHard);
        $(".services-section").on('scroll', AOS.refreshHard);
        $(".innovation-section").on('scroll', AOS.refreshHard);
        $(".security-section").on('scroll', AOS.refreshHard);
        $(".reach-section").on('scroll', AOS.refreshHard);

        function setCookie(name, value, days) {
            let expires = "";
            if (days) {
                let date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }

        function getCookie(name) {
            let nameEQ = name + "=";
            let ca = document.cookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        function removeCookie(name) {
            document.cookie = name + '=; Max-Age=-99999999;';
        }
    </script>

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    @yield('PAGE_LEVEL_SCRIPTS')
    <!-- END PAGE LEVEL SCRIPTS -->


    <script>
        const privacy_modal = document.querySelector(".privacy-modal");
        const terms_modal = document.querySelector(".terms-modal");
        const data_modal = document.querySelector(".data-modal");
        const disclaimer_modal = document.querySelector('.disclaimer-modal')
        const cookie_modal = document.querySelector(".cookie-modal");
        const office_modal = document.querySelector(".office-modal");
        const chatbot_modal = document.querySelector(".chatbot-modal");
        const nis_visa_modal = document.querySelector(".nis-visa-modal");

        const privacy_trigger = document.querySelector(".privacy-trigger");
        const terms_trigger = document.querySelector(".terms-trigger");
        const data_trigger = document.querySelector(".data-trigger");

        function toggleDisclaimer() {
            disclaimer_modal.classList.toggle("show-modal");
        }

        function togglePrivacy() {
            privacy_modal.classList.toggle("show-modal");
        }

        function toggleTerms() {
            terms_modal.classList.toggle("show-modal");
        }

        function toggleData() {
            data_modal.classList.toggle("show-modal");
        }

        function toggleCookieModal() {
            cookie_modal.classList.toggle("show-modal");
        }

        function toggleChatbotModal() {
            chatbot_modal.classList.toggle("show-modal");
        }

        function toggleNisVisaModal() {

            if (!localStorage.getItem('isVisible')) {
                nis_visa_modal.classList.toggle("show-modal");
                localStorage.setItem('isVisible', JSON.stringify(true));
            } else {
                window.location.href = '{{ route('application.index') }}'
            }
        }

        function windowOnClick(event) {
            if (event.target === privacy_modal) {
                togglePrivacy();
            } else if (event.target === terms_modal) {
                toggleTerms();
            } else if (event.target === data_modal) {
                toggleData();
            } else if (event.target === cookie_modal) {
                toggleCookieModal();
            } else if (event.target === office_modal) {
                $('.office-modal').removeClass('show-modal');
            } else if (event.target === chatbot_modal) {
                toggleChatbotModal();
            } else if (event.target === nis_visa_modal) {
                toggleNisVisaModal();
            } else if (event.target === disclaimer_modal) {
                toggleDisclaimer();
            }
        }

        // privacy_trigger.addEventListener("click", togglePrivacyModal);
        // terms_trigger.addEventListener("click", toggleTermsModal);
        // data_trigger.addEventListener("click", toggleDataModal);

        window.addEventListener("click", windowOnClick);

        $('.setting').on('click', function() {
            $('.cookie-settings').removeClass('d-none');
        })

        if (!getCookie('cookieAll')) {
            $('.cookie-modal').addClass('show-modal');
        }
        if (getCookie('cookieNecessary')) {
            $('.necessary-cookie').addClass('d-none');
        }
        if (getCookie('cookieTargeting')) {
            $('.target-cookie').addClass('d-none');
        }
        if (getCookie('cookiePerformance')) {
            $('.performance-cookie').addClass('d-none');
        }
        if (getCookie('cookieFunctional')) {
            $('.functional-cookie').addClass('d-none');
        }

        $('.accept-all').on('click', function() {
            setCookie('cookieAll', true, 365);
            $('.cookie-modal').addClass('d-none');
        })
        $('.decline-all').on('click', function() {
            removeCookie('cookieAll');
            $('.cookie-modal').addClass('d-none');
        })
        $('.accept-necessary').on('click', function() {
            setCookie('cookieNecessary', true, 365);
            $('.necessary-cookie').addClass('d-none');
        })
        $('.decline-necessary').on('click', function() {
            removeCookie('cookieNecessary');
            $('.necessary-cookie').addClass('d-none');
        })
        $('.accept-targeting').on('click', function() {
            setCookie('cookieTargeting', true, 365);
            $('.target-cookie').addClass('d-none');
        })
        $('.decline-targeting').on('click', function() {
            removeCookie('cookieTargeting');
            $('.target-cookie').addClass('d-none');
        })
        $('.accept-performance').on('click', function() {
            setCookie('cookiePerformance', true, 365);
            $('.performance-cookie').addClass('d-none');
        })
        $('.decline-performance').on('click', function() {
            removeCookie('cookiePerformance');
            $('.performance-cookie').addClass('d-none');
        })
        $('.accept-functional').on('click', function() {
            setCookie('cookieFunctional', true, 365);
            $('.functional-cookie').addClass('d-none');
        })
        $('.decline-functional').on('click', function() {
            removeCookie('cookieFunctional');
            $('.functional-cookie').addClass('d-none');
        })
        if (getCookie('cookieNecessary') && getCookie('cookieTargeting') && getCookie('cookiePerformance') && getCookie(
                'cookieFunctional')) {
            $('.cookie-modal').removeClass('show-modal');
        }

        const countries = [{
                name: 'India',
                cities: [{
                        name: 'Bangalore',
                        street: 'No. 14/2, Rajesh Chambers, Brunton Road',
                        town: 'Craig Park Layout',
                        phone: '0091 8800530119',
                        email: 'INFODELHI@OISSERVICES.COM'
                    },
                    {
                        name: 'New Delhi',
                        street: 'Plot No.4, Institutional Area, Malcha Marg',
                        town: 'Chanakyapuri',
                        phone: '0091 8800530119',
                        email: 'INFODELHI@OISSERVICES.COM'
                    },
                ]
            },
            {
                name: 'Egypt',
                cities: [{
                    name: 'Cairo',
                    street: 'Elnoor Street, Eldoki',
                    town: 'Giza',
                    phone: '0020 02 376627293',
                    email: 'INFODELHI@OISSERVICES.COM'
                }]
            },
            {
                name: 'Italy',
                cities: [{
                    name: 'Roma',
                    street: 'Via Sicilia, 30',
                    town: 'Roma',
                    phone: '39642012121',
                    email: 'inforome@oisservices.com'
                }]
            },
            {
                name: 'Lebanon',
                cities: [{
                    name: 'Beirut',
                    street: 'JNAH FACING RAFIC HARIRI HOSPITAL,MAIS 6 BLDG',
                    town: 'APT12',
                    phone: '+9611845138',
                    email: 'infobeirut@oisservices.com'
                }]
            },
            {
                name: 'Netherlands',
                cities: [{
                    name: 'The Hague',
                    street: 'Koningin Juliana Plein 10',
                    town: 'The Hague Central station',
                    phone: '0031 7089 15324',
                    email: 'infothehague@oisservices.com'
                }]
            },
            {
                name: 'Turkey',
                cities: [{
                    name: 'Ankara',
                    street: 'Ugur Mumcunun Sokagl, Büyükesat Mahallesi',
                    town: 'Cankaya',
                    phone: '(0312) 4382175',
                    email: 'infoankara@oisservices.com'
                }]
            },
            {
                name: 'United Arab Emirates',
                cities: [{
                    name: 'Dubai',
                    street: 'Cluster I, Silver Tower, Office 22A',
                    town: 'Jumeirah Lakes Towers',
                    phone: '97142765448',
                    email: 'infodubai@oisservices.com'
                }]
            },
            {
                name: 'United Kingdom',
                cities: [{
                    name: 'London',
                    street: '56-57 Fleet Street',
                    town: 'London',
                    phone: '2078320000',
                    email: 'info@oisservices.com'
                }]
            },
            {
                name: 'China',
                cities: [{
                        name: 'Beijing',
                        street: 'No.16 Xin Yuan Li Street',
                        town: 'Chaoyang District',
                        phone: '8610 84004549',
                        email: 'oisservicesbj@163.com'
                    },
                    {
                        name: 'Guangzhou',
                        street: 'No.29 Jianshe6malu',
                        town: 'Yuexiu District',
                        phone: '8620 37812021',
                        email: 'oisservicesgz@163.com'
                    },
                    {
                        name: 'Shanghai',
                        street: 'No.2911 North Zhongshan Road',
                        town: 'Putuo District',
                        phone: '0086 16621335462',
                        email: 'shoisservices@163.com'
                    }
                ]
            },
            {
                name: 'United States',
                cities: [{
                        name: 'Atlanta GA',
                        street: '918 Holcomb Bridge Rd Ste 204',
                        town: 'Atlanta',
                        phone: '0086 16621335462',
                        email: 'shoisservices@163.com'
                    },
                    {
                        name: 'Houston TX',
                        street: '9894 Bissonnet Street Ste 745',
                        town: 'Houston',
                        phone: '0086 16621335462',
                        email: 'shoisservices@163.com'
                    },
                    {
                        name: 'Los Angeles CA',
                        street: '5757 West Century Blvd Ste 718',
                        town: 'Los Angeles',
                        phone: '8620 37812021',
                        email: 'oisservicesgz@163.com'
                    },
                    {
                        name: 'New York NY',
                        street: '370 Lexington Avenue Ste 613',
                        town: 'New York',
                        phone: '8620 37812021',
                        email: 'oisservicesgz@163.com'
                    },
                    {
                        name: 'Washington DC',
                        street: '11900 Parklawn Drive Ste 160 Rockville MD',
                        town: 'Washington',
                        phone: '8610 84004549',
                        email: 'oisservicesbj@163.com'
                    },
                ]
            },
            {
                name: 'Austria',
                cities: [{
                    name: 'Vienna',
                    street: '',
                    town: '',
                    phone: '',
                    email: ''
                }]
            },
            {
                name: 'Belgium',
                cities: [{
                    name: 'Brussels',
                    street: '',
                    town: '',
                    phone: '',
                    email: ''
                }]
            },
            {
                name: 'Canada',
                cities: [{
                    name: 'Ottawa',
                    street: '',
                    town: '',
                    phone: '',
                    email: ''
                }]
            },
            {
                name: 'Germany',
                cities: [{
                    name: 'Berlin',
                    street: '',
                    town: '',
                    phone: '',
                    email: ''
                }]
            },
            {
                name: 'Ireland',
                cities: [{
                    name: 'Dublin',
                    street: '',
                    town: '',
                    phone: '',
                    email: ''
                }]
            },
            {
                name: 'Japan',
                cities: [{
                    name: 'Tokyo',
                    street: '',
                    town: '',
                    phone: '',
                    email: ''
                }]
            },
            {
                name: 'Kenya',
                cities: [{
                    name: 'Nairobi',
                    street: '',
                    town: '',
                    phone: '',
                    email: ''
                }]
            },
            {
                name: 'Saudi Arabia',
                cities: [{
                        name: 'Jeddah',
                        street: '',
                        town: '',
                        phone: '',
                        email: ''
                    },
                    {
                        name: 'Riyadh',
                        street: '',
                        town: '',
                        phone: '',
                        email: ''
                    },
                    {
                        name: 'Mecca',
                        street: '',
                        town: '',
                        phone: '',
                        email: ''
                    }
                ]
            },
            {
                name: 'South Korea',
                cities: [{
                    name: 'Seoul',
                    street: '',
                    town: '',
                    phone: '',
                    email: ''
                }]
            },
            {
                name: 'Spain',
                cities: [{
                    name: 'Madrid',
                    street: '',
                    town: '',
                    phone: '',
                    email: ''
                }]
            },
            {
                name: 'Sweden',
                cities: [{
                    name: 'Stockholm',
                    street: '',
                    town: '',
                    phone: '',
                    email: ''
                }]
            },
            {
                name: 'Switzerland',
                cities: [{
                    name: 'Bern',
                    street: '',
                    town: '',
                    phone: '',
                    email: ''
                }]
            },
            {
                name: 'Dominica',
                cities: [{
                    name: 'Dominica',
                    street: '',
                    town: '',
                    phone: '',
                    email: ''
                }]
            },
            {
                name: 'Malaysia',
                cities: [{
                    name: 'Malaysia',
                    street: '',
                    town: '',
                    phone: '',
                    email: ''
                }]
            },
            {
                name: 'Mauritius',
                cities: [{
                    name: 'Mauritius',
                    street: '',
                    town: '',
                    phone: '',
                    email: ''
                }]
            },
            {
                name: 'Morocco',
                cities: [{
                    name: 'Morocco',
                    street: '',
                    town: '',
                    phone: '',
                    email: ''
                }]
            },
            {
                name: 'Nigeria',
                cities: [{
                    name: 'Nigeria',
                    street: '',
                    town: '',
                    phone: '',
                    email: ''
                }]
            },
        ];

        let selectedCityIndex = 0;
        let countryInfo;
        let country;

        function showOfficeModal(selected_country) {
            country = selected_country;
            countryInfo = countries.filter(country => country.name === selected_country);

            selectedCityIndex = 0;
            updateModalContent(selected_country, countryInfo[0].cities[selectedCityIndex]);

            $('.office-modal').addClass('show-modal');
            $('.country-name').text(selected_country);

            // $('.left-arrow').addClass('d-none');
            // $('.right-arrow').addClass('d-none');

            // if (countryInfo[0].cities.length > 1) {
            //     $('.right-arrow').removeClass('d-none');
            // }
        }

        $('.left-arrow').on('click', () => {
            if (selectedCityIndex > 0) {
                $('.right-arrow').removeClass('d-none');
                selectedCityIndex--;
                updateModalContent(country, countryInfo[0].cities[selectedCityIndex]);
            }
            // if (selectedCityIndex == 0) {
            //     $('.left-arrow').addClass('d-none');
            // }
        });

        $('.right-arrow').on('click', () => {
            if (selectedCityIndex < countryInfo[0].cities.length - 1) {
                selectedCityIndex++;
                $('.left-arrow').removeClass('d-none');
                updateModalContent(country, countryInfo[0].cities[selectedCityIndex]);
            }
            // if (selectedCityIndex == countryInfo[0].cities.length - 1) {
            //     $('.right-arrow').addClass('d-none');
            // }
        });

        function updateModalContent(country, city) {
            const {
                name,
                street,
                town,
                phone,
                email
            } = city;
            const $infoSection = $('.main-info-section');

            if (street === '') {
                $infoSection.html(`
                    <p class="city">${name}</p>
                    <p class="coming-soon">Coming Soon</p>
                `);
            } else {
                $infoSection.html(`
                    <p class="city">${name}</p>
                    <p class="address">${street}</p>
                    <p class="address">${town}</p>
                    <p class="address">${name}</p>
                    <p class="address">${country}</p>
                    <div class="d-flex phone">
                        <span class="mr-2"><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <p class="address">${phone}</p>
                    </div>
                `);
            }


        }

        function hideModal() {
            $('.office-modal').removeClass('show-modal');
            // $('.video-modal').removeClass('show-modal');
            // let video = document.querySelector(".intro-video");
            // video.pause();
            // video.currentTime = 0;
        }

        const play_icon = document.querySelector('.play-video');
        const stop_icon = document.querySelector('.stop-video');
        const menu_icon_part = document.querySelector('.navbar-menu-item');
        const menu_icon = document.querySelector('.menu-icon');
        const login_icon_part = document.querySelector('.navbar-login-item');
        const login_icon = document.querySelector('.login-icon');
        const go_to_menu = document.querySelector('.go-to-menu');
        const go_to_login = document.querySelector('.go-to-login');
        const logout_icon_part = document.querySelector('.navbar-logout-item');
        const logout_icon = document.querySelector('.logout');
        const logo_icon = document.querySelector('.logo-ois');
        const chatbot_icon = document.querySelector('.chatbot-icon');

        if (logo_icon) {
            logo_icon.addEventListener('mouseover', function() {
                logo_icon.src = '/images/Logo/LogoOIS2.svg';
            });
            logo_icon.addEventListener('mouseout', function() {
                logo_icon.src = '/images/Logo/LogoOIS1.svg';
            });
            logo_icon.addEventListener('mousedown', function() {
                logo_icon.src = '/images/Logo/LogoOIS2.svg';
            });
            logo_icon.addEventListener('mouseup', function() {
                logo_icon.src = '/images/Logo/LogoOIS1.svg';
            });
        }

        if (play_icon) {
            play_icon.addEventListener('mouseover', function() {
                play_icon.src = '/images/IconPLAY2.svg';
            });
            play_icon.addEventListener('mouseout', function() {
                play_icon.src = '/images/Play.svg';
            });
            play_icon.addEventListener('mousedown', function() {
                play_icon.src = '/images/IconPLAY2.svg';
            });
            play_icon.addEventListener('mouseup', function() {
                play_icon.src = '/images/Play.svg';
            });
        }

        if (stop_icon) {
            stop_icon.addEventListener('mouseover', function() {
                stop_icon.src = '/images/IconSTOP2.svg';
            });
            stop_icon.addEventListener('mouseout', function() {
                stop_icon.src = '/images/Stop.svg';
            });
        }

        if (menu_icon_part) {
            menu_icon_part.addEventListener('mouseover', function() {
                menu_icon.src = '/images/IconMENU2.svg';
            });
            menu_icon_part.addEventListener('mouseout', function() {
                menu_icon.src = '/images/IconMENU.svg';
            });
        }

        if (login_icon_part) {
            login_icon_part.addEventListener('mouseover', function() {
                login_icon.src = '/images/IconLOGIN2.svg';
            });
            login_icon_part.addEventListener('mouseout', function() {
                login_icon.src = '/images/IconLOGIN.svg';
            });
        }

        if (go_to_menu) {
            go_to_menu.addEventListener('mouseover', function() {
                go_to_menu.src = '/images/IconMENU2.svg';
            });
            go_to_menu.addEventListener('mouseout', function() {
                go_to_menu.src = '/images/IconMENU.svg';
            });
        }

        if (go_to_login) {
            go_to_login.addEventListener('mouseover', function() {
                go_to_login.src = '/images/IconLOGIN2.svg';
            });
            go_to_login.addEventListener('mouseout', function() {
                go_to_login.src = '/images/IconLOGIN.svg';
            });
        }

        if (logout_icon_part) {
            logout_icon_part.addEventListener('mouseover', function() {
                logout_icon.src = '/images/IconLOGOUT2.svg';
            });
            logout_icon_part.addEventListener('mouseout', function() {
                logout_icon.src = '/images/IconLOGOUT.svg';
            });
        }

        if (chatbot_icon) {
            chatbot_icon.addEventListener('mouseover', function() {
                chatbot_icon.src = '/images/Logo/IconCHATBOT2.svg';
            });
            chatbot_icon.addEventListener('mouseout', function() {
                chatbot_icon.src = '/images/Logo/IconCHATBOT1.svg';
            });
        }
    </script>

    @if ($message = Session::get('success'))
        <script>
            customAlert('Success', '{{ $message }}', 'success');
        </script>
    @endif
    @if ($message = Session::get('error'))
        <script>
            customAlert('We are so sorry', '{{ $message }}', 'error');
        </script>
    @endif

    <script>
        let inactivityTime = function() {
            let time;
            // Reset the timer on any of these events
            window.onload = resetTimer;
            document.onmousemove = resetTimer;
            document.onkeypress = resetTimer;
            document.ontouchstart = resetTimer; // For mobile devices

            function logout() {
                window.location.href = '/login'; // Redirect to the login page
            }

            function resetTimer() {
                clearTimeout(time);
                time = setTimeout(logout, 60000*15); // 15 minutes
            }
        };
        inactivityTime();
    </script>

</body>

</html>
