@extends('back.layouts.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Login')
@section('content')
    <div class="container container-tight py-4">
        <div class="text-center mb-4">
            <a href="error-404.html" class="navbar-brand navbar-brand-autodark"><img src="{{ \App\Models\Setting::find(1)->blog_logo }}" height="36" alt=""></a>
        </div>
        @livewire('author-login-form')
        <div class="text-center text-muted mt-3">
            Don't have account yet? <a href="sign-up.html" tabindex="-1">Sign up</a>
        </div>
    </div>
@endsection