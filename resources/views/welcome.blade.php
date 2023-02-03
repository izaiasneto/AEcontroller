@extends('layouts.main')

@section('title', 'AE CONTROLLER')

    @section('content')

       <!-- <div class="col-md-10 offset-md-1" id="welcome-container" class="col-md-12">
            <div class="col">
                <h1>Busque um evento</h1>
                <p>Detalhes....</p>
                <button type="button" class="btn btn-success">Entrar</button>
                <button type="button" class="btn btn-success">Cadastrar</button>
            </div>
            <div class="col">
                <h1>IMAGEM</h1>
            </div>
       </div> -->


    @endsection
    @include('events.modal.show')
