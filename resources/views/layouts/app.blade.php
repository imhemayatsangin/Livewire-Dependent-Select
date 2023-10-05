<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CLient App</title>
    
  
  <!--  CDN links for jQuery and Bootstrap -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
@livewireStyles
<style>

  .input-group .btn {
    z-index: 3;
  }
</style>




    </head>
    <body >

        <nav class="navbar navbar-expand-lg " style="background-color: #e3f2fd;">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Client App</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Clients Select box</a>
                  </li>
               
                
                </ul>
             
              </div>
            </div>
          </nav>


    
        <div class="container">
            @yield('content')
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



       <script src="{{ asset('js/app.js') }}"></script>

        @livewireScripts

  
        @stack('scripts')
    
    </body>
</html>
