<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito" rel="stylesheet">

        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

        <!-- CSS Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- JS -->
            <script src="/js/scripts.js"></script>

        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/styles.css">


    </head>
    <body>
      <header>
      <nav class="navbar navbar-expand-lg navbar-light">
          <div class="collapse navbar-collapse" id="navbar">
            @auth
                <a  href="/dashboard" class="navbar-brand" id="logo">
            @endauth
            @guest
                <a  href="/" class="navbar-brand" id="logo">
            @endguest
              <spam>AE</spam>Controller
            </a>
            <ul class="navbar-nav">
              <li class="nav-item">
                @auth
                    <a href="/dashboard" class="nav-link">Home</a>
                @endauth

                @guest
                    <a href="/" class="nav-link">Home</a>
                @endguest
              </li>
              @auth
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#myModal">Cadastro de pedidos</a>
                </li>
                <li class="nav-item">
                    <a href="/products" class="nav-link">Meus pedidos</a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="POST">
                        @csrf
                        <a href="/logout"
                            class="nav-link"
                            onClick="event.preventDefault();
                                this.closest('form').submit();"
                        >
                            Sair
                        </a>
                    </form>
                </li>
              @endauth
              @guest
                <li class="nav-item">
                    <a href="/login" class="nav-link">Entrar</a>
                </li>
                <li class="nav-item">
                    <a href="/register" class="nav-link">Cadastrar</a>
                </li>
               @endguest
            </ul>
          </div>
        </nav>
      </header>
      <main>
        <div class='container-fluid'>
            <div class='row'>
                @if(session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
        </div>
      </main>
      <footer>
        <p>AE Controller &copy; 2023</p>
      </footer>
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
@include('events.modal.create')


