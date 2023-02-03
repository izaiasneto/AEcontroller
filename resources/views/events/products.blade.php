@extends('layouts.main')

@section('title', 'products')

@section('content')

    <div class="col-md-10 offset-md-1 dashboard-title-container">

        @include('events.components.search')
        <hr/>
            <div class="table-header">
                <h1>Meus Pedidos</h1>
                <a  href="{{ route('excel') }}" class="btn btn-outline-info">Download</a>
            </div>
    </div>
    @include('events.components.list-products')
@endsection
@include('events.modal.edit')
@include('events.modal.show')
@include('events.modal.delete')



