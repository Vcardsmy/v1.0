@extends('layouts.app')
@section('title')
    {{__('messages.feature.edit_feature')}}
@endsection
@section('header_toolbar')
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                 data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                 class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">@yield('title')</h1>
            </div>
            <div class="d-flex align-items-center py-1 ms-auto">
                <a href="{{ route('features.index') }}"
                   class="btn btn-sm btn-primary">{{ __('messages.common.back') }}</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="post d-flex flex-column-fluid mt-lg-15" id="kt_post">
        <div class="d-flex flex-column flex-lg-row">
            <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.errors')
                    </div>
                </div>
                <div class="card">
                    <div class="card-body p-12">
                        {!! Form::open(['route' => ['features.update', $feature->id], 'method' => 'put', 'enctype' => 'multipart/form-data']) !!}
                        @include('settings.features.fields')
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
