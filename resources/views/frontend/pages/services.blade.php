@extends('frontend.layouts.master')
@php
    $default_lng = get_default_language_code() ?? 'en';;
@endphp
@section('content')

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Service
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="service-section ptb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6">
                <div class="section-header text-center">
                    <h2 class="section-title">{{ @$service->value->language->$default_lng->heading }}</h2>
                    <p>{{ @$service->value->language->$default_lng->sub_heading }}</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-30-none">
            @if(isset($service->value->items))
                @foreach($service->value->items ?? [] as $key => $item)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="{{ @$item->icon }}"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="title">{{ @$item->language->$default_lng->name }}</h4>
                                <p>{{ @$item->language->$default_lng->details }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Service
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

@endsection


@push("script")

@endpush
