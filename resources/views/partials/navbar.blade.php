<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">MyPS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title==='Home') ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title==='Buku') ? 'active' : '' }}" href="/buku">Buku</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title==='Peminjaman Buku') ? 'active' : '' }}" href="/pinjam">Pinjam</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title==='Denda') ? 'active' : '' }}" href="/denda">Denda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title==='Informasi Akun') ? 'active' : '' }}" href="/user">User</a>
        </li>
      </ul>
    </div>
  </div>
</nav>