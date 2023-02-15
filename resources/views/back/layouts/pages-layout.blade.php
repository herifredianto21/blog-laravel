<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta16
* @link https://tabler.io
* Copyright 2018-2022 The Tabler Authors
* Copyright 2018-2022 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  
<!-- Mirrored from preview.tabler.io/layout-condensed.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Nov 2022 04:43:18 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <title>@yield('pageTitle')</title>
        <script defer data-api="/stats/api/event" data-domain="preview.tabler.io" src="{{asset('back')}}/stats/js/script.js"></script>
        <meta name="msapplication-TileColor" content=""/>
        <meta name="theme-color" content=""/>
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <meta name="mobile-web-app-capable" content="yes"/>
        <meta name="HandheldFriendly" content="True"/>
        <meta name="MobileOptimized" content="320"/>
        <link rel="icon" href="favicon.ico" type="image/x-icon"/>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        <meta name="description" content="Tabler comes with tons of well-designed components and features. Start your adventure with Tabler and make your dashboard great again. For free!"/>
        <meta name="twitter:image:src" content="https://preview.tabler.io/static/og.png">
        <meta name="twitter:site" content="@tabler_ui">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="Tabler: Premium and Open Source dashboard template with responsive and high quality UI.">
        <meta name="twitter:description" content="Tabler comes with tons of well-designed components and features. Start your adventure with Tabler and make your dashboard great again. For free!">
        <meta property="og:image" content="https://preview.tabler.io/static/og.png">
        <meta property="og:image:width" content="1280">
        <meta property="og:image:height" content="640">
        <meta property="og:site_name" content="Tabler">
        <meta property="og:type" content="object">
        <meta property="og:title" content="Tabler: Premium and Open Source dashboard template with responsive and high quality UI.">
        <meta property="og:url" content="https://preview.tabler.io/static/og.png">
        <meta property="og:description" content="Tabler comes with tons of well-designed components and features. Start your adventure with Tabler and make your dashboard great again. For free!">
        <!-- CSS files -->
        <link rel="shortcut icon" href="{{\App\Models\Setting::find(1)->blog_favicon }}" type="image\x-icon">
        <link href="{{asset('back')}}/dist/css/tabler.minbf07.css" rel="stylesheet"/>
        <link href="{{asset('back')}}/dist/css/tabler-flags.minbf07.css" rel="stylesheet"/>
        <link href="{{asset('back')}}/dist/css/tabler-payments.minbf07.css" rel="stylesheet"/>
        <link href="{{asset('back')}}/dist/css/tabler-vendors.minbf07.css" rel="stylesheet"/>
        <link rel="stylesheet" href="{{asset('back')}}/dist/libs/ijabo/ijabo.min.css">
        <link rel="stylesheet" href="{{asset('back')}}/dist/libs/ijaboCropTool/ijaboCropTool.min.css">
        <link rel="stylesheet" href="{{asset('amsify')}}/amsify.suggestags.css">
        @stack('stylesheets')
        @livewireStyles
        <link href="{{asset('back')}}/dist/css/demo.minbf07.css" rel="stylesheet"/>
        <style>
        @import url('../rsms.me/inter/inter.css');
        :root {
            --tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }
        </style>
    </head>
    <body >

        <div class="page">
            <!-- Navbar -->
            @include('back.layouts.inc.header')
            <div class="page-wrapper">
                <!-- Page header -->
                <div class="page-header d-print-none">
                    <div class="container-xl">
                        @yield('pageHeader')
                    </div>
                </div>
                <!-- Page body -->
                <div class="page-body">
                    <div class="container-xl">
                        @yield('content')
                    </div>
                </div>
                @include('back.layouts.inc.footer')
            </div>
        </div>
        
        <!-- Libs JS -->
        <script src="{{asset('back')}}/dist/js/demo-theme.minbf07.js"></script>
        <script src="{{asset('back')}}/dist/libs/apexcharts/dist/apexcharts.minbf07.js" defer></script>
        <script src="{{asset('back')}}/dist/libs/jsvectormap/dist/js/jsvectormap.minbf07.js" defer></script>
        <script src="{{asset('back')}}/dist/libs/jsvectormap/dist/maps/worldbf07.js" defer></script>
        <script src="{{asset('back')}}/dist/libs/jsvectormap/dist/maps/world-mercbf07.js" defer></script>
        <!-- Tabler Core -->
        <script src="{{asset('back')}}/dist/js/tabler.minbf07.js" defer></script>
        <script src="{{asset('back')}}/dist/libs/jquery/jquery-3.6.1.min.js"></script>
        <script src="{{asset('back')}}/dist/libs/ijabo/ijabo.min.js"></script>
        <script src="{{asset('back')}}/dist/libs/ijaboCropTool/ijaboCropTool.min.js"></script>
        <script src="{{asset('back')}}/dist/libs/ijaboViewer/jquery.ijaboViewer.min.js"></script>
        <script src="{{asset('amsify')}}/jquery.amsify.suggestags.js"></script>
        @stack('scripts')
        @livewireScripts
        <script>

            $('input[name="post_tags"]').amsifySuggestags();

            window.addEventListener('showToastr', function(event){
                toastr.remove();
                if(event.detail.type === 'info'){
                    toastr.info(event.detail.message);
                }else if(event.detail.type === 'success'){
                    toastr.success(event.detail.message);
                }else if(event.detail.type === 'error'){
                    toastr.error(event.detail.message);
                }else if(event.detail.type === 'warning'){
                    toastr.warning(event.detail.message);
                }else{
                    return false;
                }
            });
        </script>
        <script src="{{asset('back')}}/dist/js/demo.minbf07.js" defer></script>

    </body>

<!-- Mirrored from preview.tabler.io/layout-condensed.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Nov 2022 04:43:18 GMT -->
</html>