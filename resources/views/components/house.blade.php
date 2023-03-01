<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cyborg/bootstrap.min.css" integrity="sha384-nEnU7Ae+3lD52AK+RGNzgieBWMnEfgTbRHIwEvp1XXPdqdO6uLTd/NwXbzboqjc2" crossorigin="anonymous">
</head>
<div>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
    <div class="col">
        <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
        <div class="card mb-3 mt-5">
            <div class="card-body">
              <h5 class="card-title">{{ $adress }}</h5>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
              <rect width="100%" height="100%" fill="#868e96"></rect>
              <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
            </svg>
            <div class="card-body">
                <span class="badge bg-primary">Primary</span>
                <h5 class="card-text">{{ $price }}</h5>
            </div>
            <div class="card-body">
              <a href="#" class="card-link btn btn-primary">Discover</a>
              <a href="#" class="card-link btn btn-success">Buy</a>
            </div>
            <div class="card-footer text-muted">
              {{ $createdat }}
            </div>
          </div>
    </div>
</div>