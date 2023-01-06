@extends('back.layouts.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'All Posts')
@section('content')
    
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Pagination
                    </h2>
                </div>
            </div>
        </div>
    </div>

    @livewire('all-posts')
    
@endsection