<?php $current_page = 'home'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?php require __DIR__ . '/partials/head.php'; ?>
</head>
<body>

  <?php require __DIR__ . '/partials/header.php'; ?>

  <!-- ==================== MAIN ==================== -->
  <main id="main-content">

    <!-- ==================== HERO ==================== -->
    <section class="hero" aria-labelledby="hero-title">
      <div class="hero-image" role="img" aria-label="Atletas em atividade esportiva no projeto da Associação dos Atletas do Futuro">
        <img src="images/hero-placeholder.svg" alt="Atletas em atividade esportiva" loading="eager" fetchpriority="high">
      </div>
      <div class="hero-overlay"></div>
      <div class="hero-content container">
        <span class="tag tag-on-dark">Associação Sem Fins Lucrativos</span>
        <h1 id="hero-title" class="hero-title">Transformando o futuro através do esporte.</h1>
        <p class="hero-description">Oportunidades de desenvolvimento, inclusão e crescimento para jovens atletas da comunidade de Novo Horizonte e região.</p>
        <div class="hero-actions">
          <a href="projetos.html" class="btn btn-white">Conheça Nossos Projetos</a>
          <a href="contato.html#participar" class="btn btn-outline-white">Quero Ajudar</a>
        </div>
      </div>
      <a href="#impact" class="scroll-indicator" aria-label="Rolagem para baixo">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path d="M12 5V19M12 19L5 12M12 19L19 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>
    </section>

    <!-- ==================== IMPACT ==================== -->
    <section class="impact section-padding" id="impact" aria-labelledby="impact-title">
      <div class="container">
        <div class="section-header text-center">
          <span class="tag">Nossos Números</span>
          <h2 id="impact-title">Impacto que transforma</h2>
          <p class="section-description mx-auto">Resultados concretos construídos ao longo de anos de trabalho dedicado à comunidade.</p>
        </div>
        <div class="row g-4 mt-4" id="impact-stats">
          <div class="col-6 col-lg-3">
            <div class="statistic text-center" data-animate="count-up">
              <div class="statistic-icon mb-3">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" aria-hidden="true">
                  <circle cx="20" cy="14" r="6" stroke="#1B6B3A" stroke-width="2.5"/>
                  <path d="M8 36C8 27.163 13.373 20 20 20C26.627 20 32 27.163 32 36" stroke="#1B6B3A" stroke-width="2.5" stroke-linecap="round"/>
                </svg>
              </div>
              <div class="statistic-number text-uppercase" data-target="0" data-suffix="">
                <span class="count-value">0</span>
              </div>
              <div class="statistic-label">Atletas Atendidos</div>
            </div>
          </div>
          <div class="col-6 col-lg-3">
            <div class="statistic text-center" data-animate="count-up">
              <div class="statistic-icon mb-3">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" aria-hidden="true">
                  <rect x="6" y="6" width="12" height="12" rx="2" stroke="#1B6B3A" stroke-width="2.5"/>
                  <rect x="22" y="6" width="12" height="12" rx="2" stroke="#1B6B3A" stroke-width="2.5"/>
                  <rect x="6" y="22" width="12" height="12" rx="2" stroke="#1B6B3A" stroke-width="2.5"/>
                  <rect x="22" y="22" width="12" height="12" rx="2" stroke="#1B6B3A" stroke-width="2.5"/>
                </svg>
              </div>
              <div class="statistic-number text-uppercase" data-target="0" data-suffix="">
                <span class="count-value">0</span>
              </div>
              <div class="statistic-label">Projetos</div>
            </div>
          </div>
          <div class="col-6 col-lg-3">
            <div class="statistic text-center" data-animate="count-up">
              <div class="statistic-icon mb-3">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" aria-hidden="true">
                  <path d="M20 20L20 8M20 20L28 28M20 20L12 28" stroke="#1B6B3A" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <circle cx="20" cy="20" r="14" stroke="#1B6B3A" stroke-width="2.5"/>
                </svg>
              </div>
              <div class="statistic-number text-uppercase" data-target="0" data-suffix="">
                <span class="count-value">0</span>
              </div>
              <div class="statistic-label">Voluntários</div>
            </div>
          </div>
          <div class="col-6 col-lg-3">
            <div class="statistic text-center" data-animate="count-up">
              <div class="statistic-icon mb-3">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" aria-hidden="true">
                  <rect x="8" y="4" width="24" height="32" rx="3" stroke="#1B6B3A" stroke-width="2.5"/>
                  <line x1="14" y1="12" x2="26" y2="12" stroke="#1B6B3A" stroke-width="2" stroke-linecap="round"/>
                  <line x1="14" y1="18" x2="22" y2="18" stroke="#1B6B3A" stroke-width="2" stroke-linecap="round"/>
                  <line x1="14" y1="24" x2="20" y2="24" stroke="#1B6B3A" stroke-width="2" stroke-linecap="round"/>
                </svg>
              </div>
              <div class="statistic-number text-uppercase" data-target="0" data-suffix="">
                <span class="count-value">0</span>
              </div>
              <div class="statistic-label">Anos de Atuação</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ==================== ABOUT ==================== -->
    <section class="about section-padding" id="sobre-nos" aria-labelledby="about-title">
      <div class="container">
        <div class="row align-items-center g-5">
          <div class="col-lg-5">
            <div class="about-image">
              <img src="https://placehold.co/600x750/1B6B3A/FFFFFF?text=Equipe+da+Associa%C3%A7%C3%A3o&font=inter" alt="Equipe da Associação dos Atletas do Futuro em reunião" loading="lazy">
            </div>
          </div>
          <div class="col-lg-7">
            <span class="tag">Sobre Nós</span>
            <h2 id="about-title">Uma instituição comprometida com o desenvolvimento dos jovens.</h2>
            <p class="about-text">[Inserir texto institucional da organização — missão, visão e valores, quando disponíveis.]</p>
            <p class="about-text">[Inserir parágrafo adicional sobre a história e atuação da associação.]</p>
            <a href="sobre-nos.html" class="link-arrow">Saiba Mais <span aria-hidden="true">→</span></a>
          </div>
        </div>
      </div>
    </section>

    <!-- ==================== PROJECTS ==================== -->
    <section class="projects section-padding" id="projetos" aria-labelledby="projects-title">
      <div class="container">
        <div class="section-header">
          <span class="tag">Nossos Projetos</span>
          <h2 id="projects-title">Transformando vidas</h2>
          <p class="section-description">Conheça os projetos que fazem a diferença na vida de jovens atletas.</p>
        </div>
        <div class="row g-4 mt-4" id="projects-grid">
          <article class="col-12 col-md-6 col-lg-4">
            <div class="card-project" data-animate="fade-up">
              <div class="card-project-image">
                <img src="https://placehold.co/600x375/E8A838/1A1A2E?text=Futebol&font=inter" alt="Projeto de Futebol para Crianças" loading="lazy">
              </div>
              <div class="card-project-body">
                <span class="badge-category">Esporte</span>
                <h3 class="card-project-title">[Título do Projeto]</h3>
                <p class="card-project-desc">[Descrição curta do projeto — máximo 3 linhas.]</p>
                <a href="projetos.html" class="link-arrow">Saiba mais <span aria-hidden="true">→</span></a>
              </div>
            </div>
          </article>
          <article class="col-12 col-md-6 col-lg-4">
            <div class="card-project" data-animate="fade-up">
              <div class="card-project-image">
                <img src="https://placehold.co/600x375/E8A838/1A1A2E?text=Atletismo&font=inter" alt="Projeto de Atletismo Juvenil" loading="lazy">
              </div>
              <div class="card-project-body">
                <span class="badge-category">Esporte</span>
                <h3 class="card-project-title">[Título do Projeto]</h3>
                <p class="card-project-desc">[Descrição curta do projeto — máximo 3 linhas.]</p>
                <a href="projetos.html" class="link-arrow">Saiba mais <span aria-hidden="true">→</span></a>
              </div>
            </div>
          </article>
          <article class="col-12 col-md-6 col-lg-4">
            <div class="card-project" data-animate="fade-up">
              <div class="card-project-image">
                <img src="https://placehold.co/600x375/E8A838/1A1A2E?text=Educa%C3%A7%C3%A3o&font=inter" alt="Projeto Educacional Esportivo" loading="lazy">
              </div>
              <div class="card-project-body">
                <span class="badge-category">Educação</span>
                <h3 class="card-project-title">[Título do Projeto]</h3>
                <p class="card-project-desc">[Descrição curta do projeto — máximo 3 linhas.]</p>
                <a href="projetos.html" class="link-arrow">Saiba mais <span aria-hidden="true">→</span></a>
              </div>
            </div>
          </article>
        </div>
        <div class="text-center mt-5">
          <a href="projetos.html" class="link-arrow">Ver todos os projetos <span aria-hidden="true">→</span></a>
        </div>
      </div>
    </section>

    <!-- ==================== GALLERY PREVIEW ==================== -->
    <section class="gallery section-padding" id="galeria" aria-labelledby="gallery-title">
      <div class="container">
        <div class="section-header">
          <span class="tag">Galeria</span>
          <h2 id="gallery-title">Por nossos olhos</h2>
          <p class="section-description">Registros fotográficos das atividades e momentos que marcam nossa trajetória.</p>
        </div>
        <div class="row g-4 mt-4" id="gallery-grid">
          <article class="col-12 col-md-6">
            <div class="card-gallery" data-animate="fade-up">
              <div class="card-gallery-image">
                <img src="https://placehold.co/800x450/1B6B3A/FFFFFF?text=Galeria+1&font=inter" alt="Capa da galeria [Título da Galeria]" loading="lazy">
              </div>
              <div class="card-gallery-body">
                <h3 class="card-gallery-title">[Título da Galeria]</h3>
                <div class="card-gallery-meta">
                  <time class="card-gallery-date" datetime="[AAAA-MM-DD]">[Data da Galeria]</time>
                  <span class="badge-photo-count">[N] fotos</span>
                </div>
                <a href="galeria-detalhes.html" class="link-arrow">Ver Galeria <span aria-hidden="true">→</span></a>
              </div>
            </div>
          </article>
          <article class="col-12 col-md-6">
            <div class="card-gallery" data-animate="fade-up">
              <div class="card-gallery-image">
                <img src="https://placehold.co/800x450/1B6B3A/FFFFFF?text=Galeria+2&font=inter" alt="Capa da galeria [Título da Galeria]" loading="lazy">
              </div>
              <div class="card-gallery-body">
                <h3 class="card-gallery-title">[Título da Galeria]</h3>
                <div class="card-gallery-meta">
                  <time class="card-gallery-date" datetime="[AAAA-MM-DD]">[Data da Galeria]</time>
                  <span class="badge-photo-count">[N] fotos</span>
                </div>
                <a href="galeria-detalhes.html" class="link-arrow">Ver Galeria <span aria-hidden="true">→</span></a>
              </div>
            </div>
          </article>
        </div>
        <div class="text-center mt-5">
          <a href="galeria.html" class="link-arrow">Ver todas as galerias <span aria-hidden="true">→</span></a>
        </div>
      </div>
    </section>

    <!-- ==================== TRANSPARENCY PREVIEW ==================== -->
    <section class="transparency section-padding" id="transparencia" aria-labelledby="transparency-title">
      <div class="container">
        <div class="section-header">
          <span class="tag">Transparência</span>
          <h2 id="transparency-title">Prestação de contas clara</h2>
          <p class="section-description">Acesso aos documentos institucionais que garantem a transparência de nossas ações.</p>
        </div>
        <div class="transparency-list mt-4" data-animate="fade-up">
          <a href="transparencia.html" class="document-card">
            <div class="document-icon" aria-hidden="true">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                <path d="M10 4H26L34 12V36H10V4Z" stroke="#1B6B3A" stroke-width="2" stroke-linejoin="round"/>
                <path d="M26 4V12H34" stroke="#1B6B3A" stroke-width="2" stroke-linejoin="round"/>
                <line x1="14" y1="20" x2="26" y2="20" stroke="#1B6B3A" stroke-width="1.5" stroke-linecap="round"/>
                <line x1="14" y1="26" x2="26" y2="26" stroke="#1B6B3A" stroke-width="1.5" stroke-linecap="round"/>
                <line x1="14" y1="14" x2="20" y2="14" stroke="#1B6B3A" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
            </div>
            <div class="document-info">
              <h3 class="document-title">Relatórios Anuais</h3>
              <span class="document-year">2024</span>
            </div>
            <span class="document-action" aria-hidden="true">Ver →</span>
          </a>
          <a href="transparencia.html" class="document-card">
            <div class="document-icon" aria-hidden="true">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                <path d="M10 4H26L34 12V36H10V4Z" stroke="#1B6B3A" stroke-width="2" stroke-linejoin="round"/>
                <path d="M26 4V12H34" stroke="#1B6B3A" stroke-width="2" stroke-linejoin="round"/>
                <line x1="14" y1="20" x2="26" y2="20" stroke="#1B6B3A" stroke-width="1.5" stroke-linecap="round"/>
                <line x1="14" y1="26" x2="26" y2="26" stroke="#1B6B3A" stroke-width="1.5" stroke-linecap="round"/>
                <line x1="14" y1="14" x2="20" y2="14" stroke="#1B6B3A" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
            </div>
            <div class="document-info">
              <h3 class="document-title">Prestação de Contas</h3>
              <span class="document-year">2024</span>
            </div>
            <span class="document-action" aria-hidden="true">Ver →</span>
          </a>
          <a href="transparencia.html" class="document-card">
            <div class="document-icon" aria-hidden="true">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                <path d="M10 4H26L34 12V36H10V4Z" stroke="#1B6B3A" stroke-width="2" stroke-linejoin="round"/>
                <path d="M26 4V12H34" stroke="#1B6B3A" stroke-width="2" stroke-linejoin="round"/>
                <line x1="14" y1="20" x2="26" y2="20" stroke="#1B6B3A" stroke-width="1.5" stroke-linecap="round"/>
                <line x1="14" y1="26" x2="26" y2="26" stroke="#1B6B3A" stroke-width="1.5" stroke-linecap="round"/>
                <line x1="14" y1="14" x2="20" y2="14" stroke="#1B6B3A" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
            </div>
            <div class="document-info">
              <h3 class="document-title">Balanço Financeiro</h3>
              <span class="document-year">2024</span>
            </div>
            <span class="document-action" aria-hidden="true">Ver →</span>
          </a>
        </div>
        <div class="text-center mt-5">
          <a href="transparencia.html" class="link-arrow">Ver Transparência <span aria-hidden="true">→</span></a>
        </div>
      </div>
    </section>

    <!-- ==================== CTA ==================== -->
    <section class="cta-section" aria-labelledby="cta-title">
      <div class="container text-center">
        <span class="tag tag-on-dark">Participe</span>
        <h2 id="cta-title">Faça parte dessa transformação</h2>
        <p class="cta-description">Sua contribuição faz a diferença na vida de jovens atletas.</p>
        <div class="cta-actions">
          <a href="contato.html#participar" class="btn btn-cta btn-lg">Quero Ajudar</a>
          <a href="projetos.html" class="btn btn-outline-white btn-lg">Conhecer Projetos</a>
        </div>
      </div>
    </section>

  </main>

  <?php require __DIR__ . '/partials/footer.php'; ?>

  <?php require __DIR__ . '/partials/scripts.php'; ?>
</body>
</html>
