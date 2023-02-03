@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    @section('content')

       @include('events.components.res')
        <hr/>
       @include('events.components.last-products')
    @endsection
@endsection

@include('events.modal.show')




