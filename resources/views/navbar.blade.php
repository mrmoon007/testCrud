<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('index.customer')}}">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{route('index.customer')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('create.customer')}}">Add Customer</a>
          </li>
        </ul>
        <form method="get" action="{{route('search.customer')}}" class="d-flex">
          <input class="form-control me-2" type="search" name="searchdata" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
