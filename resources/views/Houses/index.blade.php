<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Houses</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cyborg/bootstrap.min.css" integrity="sha384-nEnU7Ae+3lD52AK+RGNzgieBWMnEfgTbRHIwEvp1XXPdqdO6uLTd/NwXbzboqjc2" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('index') }}">PropertiesEstate</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav me-auto">
          @if (Route::has('login'))
              
            
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('index') }}">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('houses.index') }}">Houses</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Register</a>
          </li>
          @endif
          @endauth
          
        </ul>
        @endif
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row row-cols-3 row-cols-md-2 row-cols-sm-1 row-cols-xs-1">
    @foreach ($houses as $house)
      <x-house :adress="$house->adress" :image="$house->image" :price="$house->price" :status="$house->status" :createdat="$house->created_at" />
    @endforeach
      </div>
  </div>
</body>
</html>