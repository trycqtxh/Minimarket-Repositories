@extends('layouts.template')

@push('css')
{{-- Html::style('css/css.js') --}}
@endpush

@push('js')
{{-- Html::script('js/apps.js') --}}
{{ Html::script('js/main.js') }}
@endpush

@section('title', 'Dashboard '. config('app.name'))

@section('content-header')
    <h1>
        {{config("app.name")}}
        <small>Dasboard Page</small>
    </h1>
@endsection

@section('content')
    <section class="content">
        @include("fixed.controlpanel")

        <div class="box box-default color-palette-box">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-tag"></i> Arduino </h3>
            </div>
            <div class="box-body">
                <button class="btn btn-info btn-lg" id="button"><i class="fa fa-plus"></i></button>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
@endsection