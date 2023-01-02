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

    <!-- Mirrored from preview.tabler.io/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Nov 2022 04:41:50 GMT -->
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
        <link rel="shortcut icon" href="{{\App\Models\Setting::find(1)->blog_favicon }}" type="image/x-icon">
        <link href="{{asset('back')}}/dist/css/tabler.minbf07.css" rel="stylesheet"/>
        <link href="{{asset('back')}}/dist/css/tabler-flags.minbf07.css" rel="stylesheet"/>
        <link href="{{asset('back')}}/dist/css/tabler-payments.minbf07.css" rel="stylesheet"/>
        <link href="{{asset('back')}}/dist/css/tabler-vendors.minbf07.css" rel="stylesheet"/>
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
    <body>
        {{-- <body class=" border-top-wide border-primary d-flex flex-column"> --}}
        
        @yield('content')
        
        {{-- <div class="page page-center">
            <div class="container container-tight py-4">
                <div class="text-center mb-4">
                <a href="error-404.html" class="navbar-brand navbar-brand-autodark"><img src="./back/static/logo.svg" height="36" alt=""></a>
                </div>
                <div class="card card-md">
                <div class="card-body">
                    <h2 class="h2 text-center mb-4">Login to your account</h2>
                    <form action="https://preview.tabler.io/" method="get" autocomplete="off" novalidate>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" placeholder="your@email.com" autocomplete="off">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">
                        Password
                        <span class="form-label-description">
                            <a href="forgot-password.html">I forgot password</a>
                        </span>
                        </label>
                        <div class="input-group input-group-flat">
                        <input type="password" class="form-control"  placeholder="Your password"  autocomplete="off">
                        <span class="input-group-text">
                            <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                            </a>
                        </span>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="form-check">
                        <input type="checkbox" class="form-check-input"/>
                        <span class="form-check-label">Remember me on this device</span>
                        </label>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Sign in</button>
                    </div>
                    </form>
                </div>
                <div class="hr-text">or</div>
                <div class="card-body">
                    <div class="row">
                    <div class="col"><a href="#" class="btn w-100">
                        <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-github" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" /></svg>
                        Login with Github
                        </a></div>
                    <div class="col"><a href="#" class="btn w-100">
                        <!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-twitter" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" /></svg>
                        Login with Twitter
                        </a></div>
                    </div>
                </div>
                </div>
                <div class="text-center text-muted mt-3">
                Don't have account yet? <a href="sign-up.html" tabindex="-1">Sign up</a>
                </div>
            </div>
        </div> --}}
        <!-- Libs JS -->
        <!-- Tabler Core -->
        <script src="{{asset('back')}}/dist/js/demo-theme.minbf07.js"></script>
        <script src="{{asset('back')}}/dist/js/tabler.minbf07.js" defer></script>
        @stack('scripts')
        @livewireScripts
        <script src="{{asset('back')}}/dist/js/demo.minbf07.js" defer></script>
    </body>

<!-- Mirrored from preview.tabler.io/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Nov 2022 04:41:50 GMT -->
</html>