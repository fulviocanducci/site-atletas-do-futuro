<?php
$page_title = 'Associação dos Atletas do Futuro de Novo Horizonte';
$page_description = 'Associação dos Atletas do Futuro de Novo Horizonte — Transformando o futuro através do esporte.';
$current_page = 'home';
?>
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
        <a href="projetos.php" class="btn btn-white">Conheça Nossos Projetos</a>
        <a href="contato.php#participar" class="btn btn-outline-white">Quero Ajudar</a>
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
        <p class="section-description mx-auto">Indicadores serão publicados quando os dados oficiais forem fornecidos pela associação.</p>
      </div>
      <div class="row g-4 mt-4" id="impact-stats">
        <div class="col-6 col-lg-3">
          <div class="statistic text-center">
            <div class="statistic-icon mb-3">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" aria-hidden="true">
                <circle cx="20" cy="14" r="6" stroke="#1B6B3A" stroke-width="2.5"/>
                <path d="M8 36C8 27.163 13.373 20 20 20C26.627 20 32 27.163 32 36" stroke="#1B6B3A" stroke-width="2.5" stroke-linecap="round"/>
              </svg>
            </div>
            <div class="statistic-number statistic-number-pending">
              <span>A definir</span>
            </div>
            <div class="statistic-label">Atletas Atendidos</div>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="statistic text-center">
            <div class="statistic-icon mb-3">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" aria-hidden="true">
                <rect x="6" y="6" width="12" height="12" rx="2" stroke="#1B6B3A" stroke-width="2.5"/>
                <rect x="22" y="6" width="12" height="12" rx="2" stroke="#1B6B3A" stroke-width="2.5"/>
                <rect x="6" y="22" width="12" height="12" rx="2" stroke="#1B6B3A" stroke-width="2.5"/>
                <rect x="22" y="22" width="12" height="12" rx="2" stroke="#1B6B3A" stroke-width="2.5"/>
              </svg>
            </div>
            <div class="statistic-number statistic-number-pending">
              <span>A definir</span>
            </div>
            <div class="statistic-label">Projetos</div>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="statistic text-center">
            <div class="statistic-icon mb-3">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" aria-hidden="true">
                <path d="M20 20L20 8M20 20L28 28M20 20L12 28" stroke="#1B6B3A" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="20" cy="20" r="14" stroke="#1B6B3A" stroke-width="2.5"/>
              </svg>
            </div>
            <div class="statistic-number statistic-number-pending">
              <span>A definir</span>
            </div>
            <div class="statistic-label">Voluntários</div>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="statistic text-center">
            <div class="statistic-icon mb-3">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" aria-hidden="true">
                <rect x="8" y="4" width="24" height="32" rx="3" stroke="#1B6B3A" stroke-width="2.5"/>
                <line x1="14" y1="12" x2="26" y2="12" stroke="#1B6B3A" stroke-width="2" stroke-linecap="round"/>
                <line x1="14" y1="18" x2="22" y2="18" stroke="#1B6B3A" stroke-width="2" stroke-linecap="round"/>
                <line x1="14" y1="24" x2="20" y2="24" stroke="#1B6B3A" stroke-width="2" stroke-linecap="round"/>
              </svg>
            </div>
            <div class="statistic-number statistic-number-pending">
              <span>A definir</span>
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
            <img src="https://placehold.co/600x750/1B6B3A/FFFFFF?text=Imagem+demonstrativa&font=inter" alt="Imagem demonstrativa provisória; não retrata integrantes da associação" loading="lazy">
          </div>
        </div>
        <div class="col-lg-7">
          <span class="tag">Sobre Nós</span>
          <h2 id="about-title">Uma instituição comprometida com o desenvolvimento dos jovens.</h2>
          <p class="about-text">[Inserir texto institucional da organização — missão, visão e valores, quando disponíveis.]</p>
          <p class="about-text">[Inserir parágrafo adicional sobre a história e atuação da associação.]</p>
          <a href="sobre-nos.php" class="link-arrow">Saiba Mais <span aria-hidden="true">→</span></a>
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
        <p class="section-description">Prévia demonstrativa; os projetos oficiais serão apresentados quando seus dados estiverem disponíveis.</p>
      </div>
      <div class="row g-4 mt-4" id="projects-grid">
        <article class="col-12 col-md-6 col-lg-4">
          <div class="card-project" data-animate="fade-up">
            <div class="card-project-image">
              <img src="https://placehold.co/600x375/E8A838/1A1A2E?text=Projeto+demonstrativo+1&font=inter" alt="Imagem provisória do projeto demonstrativo 1" loading="lazy">
            </div>
            <div class="card-project-body">
              <span class="badge-category">Exemplo demonstrativo</span>
              <h3 class="card-project-title">[Título do projeto 1]</h3>
              <p class="card-project-desc">[Descrição curta do projeto — máximo 3 linhas.]</p>
              <a href="projetos.php" class="link-arrow">Saiba mais <span aria-hidden="true">→</span></a>
            </div>
          </div>
        </article>
        <article class="col-12 col-md-6 col-lg-4">
          <div class="card-project" data-animate="fade-up">
            <div class="card-project-image">
              <img src="https://placehold.co/600x375/E8A838/1A1A2E?text=Projeto+demonstrativo+2&font=inter" alt="Imagem provisória do projeto demonstrativo 2" loading="lazy">
            </div>
            <div class="card-project-body">
              <span class="badge-category">Exemplo demonstrativo</span>
              <h3 class="card-project-title">[Título do projeto 2]</h3>
              <p class="card-project-desc">[Descrição curta do projeto — máximo 3 linhas.]</p>
              <a href="projetos.php" class="link-arrow">Saiba mais <span aria-hidden="true">→</span></a>
            </div>
          </div>
        </article>
        <article class="col-12 col-md-6 col-lg-4">
          <div class="card-project" data-animate="fade-up">
            <div class="card-project-image">
              <img src="https://placehold.co/600x375/E8A838/1A1A2E?text=Projeto+demonstrativo+3&font=inter" alt="Imagem provisória do projeto demonstrativo 3" loading="lazy">
            </div>
            <div class="card-project-body">
              <span class="badge-category">Exemplo demonstrativo</span>
              <h3 class="card-project-title">[Título do projeto 3]</h3>
              <p class="card-project-desc">[Descrição curta do projeto — máximo 3 linhas.]</p>
              <a href="projetos.php" class="link-arrow">Saiba mais <span aria-hidden="true">→</span></a>
            </div>
          </div>
        </article>
      </div>
      <div class="text-center mt-5">
        <a href="projetos.php" class="link-arrow">Ver todos os projetos <span aria-hidden="true">→</span></a>
      </div>
    </div>
  </section>

  <!-- ==================== GALLERY PREVIEW ==================== -->
  <section class="gallery section-padding" id="galeria" aria-labelledby="gallery-title">
    <div class="container">
      <div class="section-header">
        <span class="tag">Galeria</span>
        <h2 id="gallery-title">Por nossos olhos</h2>
        <p class="section-description">Espaço demonstrativo para registros fotográficos; imagens oficiais serão publicadas quando disponíveis.</p>
      </div>
      <div class="row g-4 mt-4" id="gallery-grid">
        <article class="col-12 col-md-6">
          <div class="card-gallery" data-animate="fade-up">
            <div class="card-gallery-image">
              <img src="https://placehold.co/800x450/1B6B3A/FFFFFF?text=Foto+demonstrativa&font=inter" alt="Capa provisória da galeria demonstrativa 1" loading="lazy">
            </div>
            <div class="card-gallery-body">
              <h3 class="card-gallery-title">Galeria demonstrativa 1</h3>
              <div class="card-gallery-meta">
                <span class="card-gallery-date">Data: A definir</span>
                <span class="badge-photo-count">4 fotos demonstrativas</span>
              </div>
              <a href="galeria-detalhes.php" class="link-arrow">Ver Galeria <span aria-hidden="true">→</span></a>
            </div>
          </div>
        </article>
        <article class="col-12 col-md-6">
          <div class="card-gallery" data-animate="fade-up">
            <div class="card-gallery-image">
              <img src="https://placehold.co/800x450/E8A838/1A1A2E?text=Foto+demonstrativa&font=inter" alt="Capa provisória da galeria demonstrativa 2" loading="lazy">
            </div>
            <div class="card-gallery-body">
              <h3 class="card-gallery-title">Galeria demonstrativa 2</h3>
              <div class="card-gallery-meta">
                <span class="card-gallery-date">Data: A definir</span>
                <span class="badge-photo-count">Fotos: A definir</span>
              </div>
              <a href="galeria-detalhes.php" class="link-arrow">Ver modelo de detalhes <span aria-hidden="true">→</span></a>
            </div>
          </div>
        </article>
      </div>
      <div class="text-center mt-5">
        <a href="galeria.php" class="link-arrow">Ver todas as galerias <span aria-hidden="true">→</span></a>
      </div>
    </div>
  </section>

  <!-- ==================== TRANSPARENCY PREVIEW ==================== -->
  <section class="transparency section-padding" id="transparencia" aria-labelledby="transparency-title">
    <div class="container">
      <div class="section-header">
        <span class="tag">Transparência</span>
        <h2 id="transparency-title">Prestação de contas clara</h2>
        <p class="section-description">Estrutura demonstrativa para documentos; nenhum arquivo oficial foi publicado neste protótipo.</p>
      </div>
      <div class="transparency-list mt-4" data-transparency-accordion data-animate="fade-up">
        <div
          class="document-card"
          role="button"
          tabindex="0"
          data-accordion-toggle
          aria-expanded="false"
          aria-controls="home-transp-doc-1"
        >
          <div class="document-card-header">
            <div class="document-icon" aria-hidden="true">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                <path d="M10 4H26L34 12V36H10V4Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                <path d="M26 4V12H34" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                <line x1="14" y1="20" x2="26" y2="20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                <line x1="14" y1="26" x2="26" y2="26" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                <line x1="14" y1="14" x2="20" y2="14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
            </div>
            <div class="document-info">
              <h3 class="document-title">Relatórios (exemplo)</h3>
              <span class="document-year">Ano a definir</span>
            </div>
            <span class="document-accordion-chevron" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
          </div>
          <div class="document-panel" id="home-transp-doc-1" data-accordion-panel hidden>
            <div class="document-panel-inner">
              <ul class="transparency-accordion-list">
                <li><a href="transparencia.php"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v8c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>Relatório de Atividades 2026 (exemplo)</a></li>
                <li><a href="transparencia.php"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v8c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>Relatório de Gestão 2026 (exemplo)</a></li>
                <li><a href="transparencia.php"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v8c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>Relatório Anual de Prestação de Contas (exemplo)</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div
          class="document-card"
          role="button"
          tabindex="0"
          data-accordion-toggle
          aria-expanded="false"
          aria-controls="home-transp-doc-2"
        >
          <div class="document-card-header">
            <div class="document-icon" aria-hidden="true">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                <path d="M10 4H26L34 12V36H10V4Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                <path d="M26 4V12H34" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                <line x1="14" y1="20" x2="26" y2="20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                <line x1="14" y1="26" x2="26" y2="26" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                <line x1="14" y1="14" x2="20" y2="14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
            </div>
            <div class="document-info">
              <h3 class="document-title">Prestação de Contas (exemplo)</h3>
              <span class="document-year">Ano a definir</span>
            </div>
            <span class="document-accordion-chevron" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
          </div>
          <div class="document-panel" id="home-transp-doc-2" data-accordion-panel hidden>
            <div class="document-panel-inner">
              <ul class="transparency-accordion-list">
                <li><a href="transparencia.php"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v8c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>Prestação de Contas Anual 2026 (exemplo)</a></li>
                <li><a href="transparencia.php"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v8c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>Prestação de Contas Trimestral Q1 (exemplo)</a></li>
                <li><a href="transparencia.php"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v8c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>Prestação de Contas Trimestral Q2 (exemplo)</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div
          class="document-card"
          role="button"
          tabindex="0"
          data-accordion-toggle
          aria-expanded="false"
          aria-controls="home-transp-doc-3"
        >
          <div class="document-card-header">
            <div class="document-icon" aria-hidden="true">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                <path d="M10 4H26L34 12V36H10V4Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                <path d="M26 4V12H34" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                <line x1="14" y1="20" x2="26" y2="20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                <line x1="14" y1="26" x2="26" y2="26" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                <line x1="14" y1="14" x2="20" y2="14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
            </div>
            <div class="document-info">
              <h3 class="document-title">Balanço Financeiro (exemplo)</h3>
              <span class="document-year">Ano a definir</span>
            </div>
            <span class="document-accordion-chevron" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
          </div>
          <div class="document-panel" id="home-transp-doc-3" data-accordion-panel hidden>
            <div class="document-panel-inner">
              <ul class="transparency-accordion-list">
                <li><a href="transparencia.php"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v8c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>Balanço Financeiro Anual 2026 (exemplo)</a></li>
                <li><a href="transparencia.php"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v8c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>Balanço Patrimonial 2026 (exemplo)</a></li>
                <li><a href="transparencia.php"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v8c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>Demonstração de Resultados 2026 (exemplo)</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-5">
        <a href="transparencia.php" class="link-arrow">Ver Transparência <span aria-hidden="true">→</span></a>
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
        <a href="contato.php#participar" class="btn btn-cta btn-lg">Quero Ajudar</a>
        <a href="projetos.php" class="btn btn-outline-white btn-lg">Conhecer Projetos</a>
      </div>
    </div>
  </section>

</main>

<?php require __DIR__ . '/partials/footer.php'; ?>