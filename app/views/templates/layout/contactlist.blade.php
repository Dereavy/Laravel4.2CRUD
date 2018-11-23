@extends('templates.template')

@section('navbar')
    @include('templates.parts.navbar')
@stop


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-2">
                @include('templates.contact.sidebar')
            </div>
            <div class="col-sm-12 col-md-10">
                @include('templates.contact.list')
            </div>
        </div>
    </div>

@stop