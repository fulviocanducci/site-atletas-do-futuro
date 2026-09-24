<nav class="navbar navbar-expand-lg" aria-label="Navegação principal">
  <div class="container">
    <a class="navbar-brand" href="index.php" aria-label="Associação dos Atletas do Futuro - Página inicial">
      <img src="images/logo-placeholder.svg" alt="Logo da Associação dos Atletas do Futuro" height="40">
    </a>

    <button class="navbar-toggler" type="button" aria-expanded="false" aria-controls="main-nav" aria-label="Abrir menu de navegação" data-bs-toggle="collapse" data-bs-target="#main-nav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="main-nav">
      <button class="mobile-menu-close" type="button" aria-label="Fechar menu de navegação" aria-controls="main-nav" aria-expanded="false">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true">
          <path d="M6 6L18 18M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link<?= ($current_page === 'home') ? ' active' : '' ?>" href="index.php" <?= ($current_page === 'home') ? 'aria-current="page"' : '' ?>>
            <svg class="nav-link-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
              <path d="M9 22V12h6v10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Início
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?= ($current_page === 'sobre-nos') ? ' active' : '' ?>" href="sobre-nos.php" <?= ($current_page === 'sobre-nos') ? 'aria-current="page"' : '' ?>>
            <svg class="nav-link-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
              <circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="1.8"/>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
              <path d="M16 3.13a4 4 0 0 1 0 7.75" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            </svg>
            Sobre Nós
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?= ($current_page === 'projetos') ? ' active' : '' ?>" href="projetos.php" <?= ($current_page === 'projetos') ? 'aria-current="page"' : '' ?>>
            <svg class="nav-link-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.8"/>
              <circle cx="12" cy="12" r="6" stroke="currentColor" stroke-width="1.8"/>
              <circle cx="12" cy="12" r="1.5" stroke="currentColor" stroke-width="1.8"/>
            </svg>
            Projetos
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?= ($current_page === 'galeria') ? ' active' : '' ?>" href="galeria.php" <?= ($current_page === 'galeria') ? 'aria-current="page"' : '' ?>>
            <svg class="nav-link-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <rect x="3" y="3" width="18" height="18" rx="2" stroke="currentColor" stroke-width="1.8"/>
              <circle cx="8.5" cy="8.5" r="1.5" stroke="currentColor" stroke-width="1.8"/>
              <path d="M21 15l-5-5-11 11" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Galeria
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?= ($current_page === 'transparencia') ? ' active' : '' ?>" href="transparencia.php" <?= ($current_page === 'transparencia') ? 'aria-current="page"' : '' ?>>
            <svg class="nav-link-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v8c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
              <path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Transparência
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?= ($current_page === 'contato') ? ' active' : '' ?>" href="contato.php" <?= ($current_page === 'contato') ? 'aria-current="page"' : '' ?>>
            <svg class="nav-link-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <rect x="2.5" y="4.5" width="19" height="15" rx="2" stroke="currentColor" stroke-width="1.8"/>
              <path d="M3 6.5l9 6.5 9-6.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Contato
          </a>
        </li>
      </ul>
      <div class="d-flex align-items-center gap-2">
        <a href="contato.php#participar" class="btn btn-cta btn-sm">Quero Ajudar</a>
      </div>
    </div>
  </div>
</nav>