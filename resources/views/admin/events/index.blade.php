@extends('layouts.main')
@section('content')
@section('header','Admin page')

<div class="flex flex-col md:flex-col lg:flex-row justify-between mt-4 mb-4 container mx-auto px-4 ">
    <div class="flex-col my-4 w-75">
        <h1 class="flex text-black-900 text-lg font-bold mb-4">All Event</h1>
       @livewire('event-table')
    </div>

    <div class="flex-col  w-25 my-4 lg:ml-4">
        <h1 class="flex text-black-900 text-lg font-bold mb-6">Create Event</h1>
       @livewire('event-form')
    </div>

</div>
@endsection