@extends('templates.template')

@section('navbar')
    @include('templates.parts.navbar')
@stop

@section('content')
    <p>Merci d'avoir rempli le formulaire</p>
        <p>{{ $formData['firstname'] }}</p>
        <p>{{ $formData['lastname'] }}</p>
        <p>{{ $formData['subject'] }}</p>
        <p>{{ $formData['message'] }}</p>
    <p></p>
    @include('templates.contact.backbutton')
@stop