<nav class="navbar navbar-dark bg-dark">
    <div class="container justify-content-center" >
      <a class="navbar-brand" href="#">
        Home Book Store
      </a>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg navbar-light " >
    <div class="container justify-content-center" >
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent" >
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Home')? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Fiction</a></li>
              <li><a class="dropdown-item" href="#">Science</a></li>
              <li><a class="dropdown-item" href="#">Computer</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Contact')? 'active' : '' }}" aria-current="page" href="/contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
