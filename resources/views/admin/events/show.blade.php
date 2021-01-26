@extends('layouts.main')
@section('content')
@section('header','Admin Event Page')
@livewire('event-show',["event" =>  $event])
@endsection