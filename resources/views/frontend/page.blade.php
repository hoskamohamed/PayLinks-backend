@extends('frontend.layouts.master')
@php
    $defualt = get_default_language_code()??'en';
@endphp


@section('content')

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Privacy
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="faq-section ptb-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section-header">
                  {!! @$page->details->language->$defualt->details !!}
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Privacy
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
@endsection

