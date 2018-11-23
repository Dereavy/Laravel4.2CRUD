@extends('templates.template')

@section('navbar')
    @include('templates.parts.navbar')
@stop

@section('content')
    @include('templates.contact.form')
    @include('templates.contact.backbutton')
@stop