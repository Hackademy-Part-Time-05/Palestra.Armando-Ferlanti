<nav class="navbar bg-dark data-bs-theme=dark navbar-expand-lg" data-bs-theme="dark" >
    <div class="container-fluid">
        <x-logo/>
      <a class="navbar-brand mx-4" href="#">HARDCORE <br/>WORKOUTS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item mx-4">
            <a class="nav-link active" aria-current="page" href="{{('homepage')}}">Home</a>
          </li>
          <li class="nav-item mx-4">
            <a class="nav-link" href="{{('struttura')}}">La struttura</a>
          </li>
          <li class="nav-item mx-4">
            <a class="nav-link " href="{{'corsi'}}">
              i nostri corsi</a>
            
          </li>
          <li class="nav-item mx-4">
            <a class="nav-link" href="{{('indirizzo')}}">Dove ci troviamo</a>
          </li>
          <li class="nav-item mx-4">
            <a class="nav-link" href="{{('contatti')}}">Contatti</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
          <button class="btn btn-outline-secondary" type="submit">cerca</button>
        </form>
      </div>
    </div>
  </nav>
   