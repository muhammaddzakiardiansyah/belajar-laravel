<nav class="navbar navbar-expand-lg bg-dark navbar-dark z-3">
  <div class="container">
    <a class="navbar-brand" href="/"><strong>Roku.id</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ml-3 nav-route" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ $page == 'Home' ? 'active' : ''}}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $page == 'About' ? 'active' : ''}}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $page == 'Job Vacancy' ? 'active' : ''}}" href="/job-vacancy">Job Vacancy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $page == 'Contact' ? 'active' : ''}}" href="/contact">Contact</a>
        </li>
      </ul>
      <ul class="navbar-nav login">
        <li>
          <a href="/login" class="btn btn-sm btn-primary">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>