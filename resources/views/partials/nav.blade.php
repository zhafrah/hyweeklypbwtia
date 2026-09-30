<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">WEB TI HY</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ (isset($title) && $title === 'Home') ? 'active' : '' }}" {{ (isset($title) && $title === 'Home') ? 'aria-current="page"' : '' }} href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ (isset($title) && $title === 'Berita') ? 'active' : '' }}" {{ (isset($title) && $title === 'Berita') ? 'aria-current="page"' : '' }} href="/berita">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ (isset($title) && $title === 'Profile') ? 'active' : '' }}" {{ (isset($title) && $title === 'Profile') ? 'aria-current="page"' : '' }} href="/profile">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ (isset($title) && $title === 'Kontak') ? 'active' : '' }}" {{ (isset($title) && $title === 'Kontak') ? 'aria-current="page"' : '' }} href="/kontak">Kontak</a>
        </li>
      </ul>
    </div>
  </div>
</nav>