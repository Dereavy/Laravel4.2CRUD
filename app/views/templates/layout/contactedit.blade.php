@extends('templates.template')

@section('navbar')
    @include('templates.parts.navbar')
@stop


@section('content')
    @include('templates.contact.addbutton')
    @include('templates.contact.edit')
    @include('templates.contact.backbutton')
@stop