<nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
    <div class="container">
      <a class="navbar-brand ms-5 md-2" href="#"><Rumah class="navbar-brand" href="#">
        <img src="img/Assets/Logo Icon.png" alt="" width="30" class="me-3">
      Rumah Impian</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link active mx-2" aria-current="page" href="/"><i class="bi bi-house-door"></i>BRANDA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active mx-2" href="{{ route('shop.shopping') }}"><i class="bi bi-cart4"></i>LAYANAN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active mx-2" href="{{ route('contact.contact') }}"><i class="bi bi-person-circle"></i></i>FITUR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active mx-2" href="{{ route('contact.contact') }}"><i class="bi bi-person-circle"></i></i>CONTACT</a>
          </li>
        </ul>
        <div>
          <button class="button-primary">Daftar</button>
          <button class="button-secondary">Masuk</button>
        </div>
      </div>
    </div>
  </nav>