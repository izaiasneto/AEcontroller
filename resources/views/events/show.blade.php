@extends('layouts.main')

@section('title', $event->title)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $event->title }}</h1>
                <p class="event-city"><ion-icon name="location-outline"></ion-icon> {{ $event->city }}</p>
                <p class="events-participants"><ion-icon name="people-outline"></ion-icon> {{ count($event->users) }} participantes</p>
                <p class="event-owner"><ion-icon name="star-outline"></ion-icon> {{ $eventOwner['name'] }}</p>
                <form action="/events/join/{{$event->id}}" method="POST">
                    @if(!$hasUserJoined)
                        @csrf
                        <a href="/events/join/{{$event->id}}"
                            class="btn btn-primary"
                            id="event-submit"
                            onClick="event.preventDefault();
                            this.closest('form').submit()"
                        >
                            Confirmar Presenca
                        </a>
                        @else
                        <p class="already-joined-msg">Voce ja esta participando deste evento!</p>
                    @endif
                </form>
                <h3> O evento conta com:</h3>
                <ul id="items-list">
                    @foreach($event->items as $item)
                        <li><ion-icon name="play-outline"></ion-icon> <span>{{ $item }}</span></li>
                    @endforeach
                </ul>
            </div>
            <div id="description-container" class="col-md-12">
                <h3>Sobre o evento:</h3>
                <p class="event-description">{{ $event->description}}</p>
            </div>
        </div>
    </div>
@endsection
