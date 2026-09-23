<a href="#main-content" class="skip-link">Pular para conteúdo</a>

<!-- ==================== HEADER ==================== -->
<header class="site-header" role="banner">
  <nav class="navbar navbar-expand-lg" aria-label="Navegação principal">
    <div class="container">
      <a class="navbar-brand" href="index.html" aria-label="Associação dos Atletas do Futuro - Página inicial">
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
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0" role="menubar">
          <li class="nav-item" role="none">
            <a class="nav-link<?php echo ($current_page === 'home') ? ' active' : ''; ?>" href="index.html" role="menuitem" <?php echo ($current_page === 'home') ? 'aria-current="page"' : ''; ?>>Início</a>
          </li>
          <li class="nav-item" role="none">
            <a class="nav-link<?php echo ($current_page === 'sobre-nos') ? ' active' : ''; ?>" href="sobre-nos.html" role="menuitem" <?php echo ($current_page === 'sobre-nos') ? 'aria-current="page"' : ''; ?>>Sobre Nós</a>
          </li>
          <li class="nav-item" role="none">
            <a class="nav-link<?php echo ($current_page === 'projetos') ? ' active' : ''; ?>" href="projetos.html" role="menuitem" <?php echo ($current_page === 'projetos') ? 'aria-current="page"' : ''; ?>>Projetos</a>
          </li>
          <li class="nav-item" role="none">
            <a class="nav-link<?php echo ($current_page === 'galeria') ? ' active' : ''; ?>" href="galeria.html" role="menuitem" <?php echo ($current_page === 'galeria') ? 'aria-current="page"' : ''; ?>>Galeria</a>
          </li>
          <li class="nav-item" role="none">
            <a class="nav-link<?php echo ($current_page === 'transparencia') ? ' active' : ''; ?>" href="transparencia.html" role="menuitem" <?php echo ($current_page === 'transparencia') ? 'aria-current="page"' : ''; ?>>Transparência</a>
          </li>
          <li class="nav-item" role="none">
            <a class="nav-link<?php echo ($current_page === 'contato') ? ' active' : ''; ?>" href="contato.html" role="menuitem" <?php echo ($current_page === 'contato') ? 'aria-current="page"' : ''; ?>>Contato</a>
          </li>
        </ul>
        <div class="d-flex align-items-center gap-2">
          <a href="contato.html#participar" class="btn btn-cta btn-sm">Quero Ajudar</a>
        </div>
      </div>
    </div>
  </nav>
</header>
