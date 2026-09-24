<?php
$page_title = 'Transparência | Associação dos Atletas do Futuro de Novo Horizonte';
$page_description = 'Estrutura demonstrativa da área de transparência da Associação dos Atletas do Futuro de Novo Horizonte.';
$current_page = 'transparencia';
$body_class = 'internal-page';
?>
<?php require __DIR__ . '/partials/header.php'; ?>

<main id="main-content">
  <section class="inner-hero" aria-labelledby="page-title">
    <div class="container">
      <nav class="breadcrumb-wrap" aria-label="Você está aqui">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="index.php">Início</a></li>
          <li class="breadcrumb-item active" aria-current="page">Transparência</li>
        </ol>
      </nav>
      <h1 id="page-title">Transparência</h1>
      <p class="inner-hero-description">Informações Oficiais</p>
    </div>
  </section>
  <section class="transparency section-padding" id="documentos" aria-labelledby="transparency-title">
    <div class="container">
      <div class="content-panel">
        <div class="section-header">
          <span class="tag">Transparência</span>
          <h2 id="transparency-title">Prestação de contas clara</h2>
          <p class="section-description">
            Estrutura demonstrativa para documentos; nenhum arquivo oficial foi publicado nesta página.
          </p>
        </div>
        <div class="year-switcher">
          <label class="form-label" for="transparency-year">Ano de referência</label>
          <select class="form-select form-select-sm" id="transparency-year" data-year-select>
            <option value="2026" selected>Ano 2026</option>
            <option value="2025">Ano 2025</option>
          </select>
        </div>
        <div class="transparency-list mt-4" data-transparency-accordion data-year-panel="2026" data-animate="fade-up">
          <div
            class="document-card"
            role="button"
            tabindex="0"
            data-accordion-toggle
            aria-expanded="false"
            aria-controls="transp-doc-2026-1"
          >
            <div class="document-card-header">
              <div class="document-icon" aria-hidden="true">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                  <path d="M10 4H26L34 12V36H10V4Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                  <path d="M26 4V12H34" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                  <line x1="14" y1="20" x2="26" y2="20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                  <line x1="14" y1="26" x2="26" y2="26" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                  <line x1="14" y1="14" x2="20" y2="14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                </svg>
              </div>
              <div class="document-info">
                <h3 class="document-title">Relatórios (exemplo)</h3>
                <span class="document-year">Ano 2026</span>
              </div>
              <span class="document-accordion-chevron" aria-hidden="true">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <path
                    d="M4 6L8 10L12 6"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </span>
            </div>
            <div class="document-panel" id="transp-doc-2026-1" data-accordion-panel hidden>
              <div class="document-panel-inner">
                <ul class="transparency-accordion-list">
                  <li><a href="#"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v8c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>Relatório de Atividades 2026 (exemplo)</a></li>
                  <li><a href="#"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v8c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>Relatório de Gestão 2026 (exemplo)</a></li>
                  <li><a href="#"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v8c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>Relatório Anual de Prestação de Contas (exemplo)</a></li>
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
            aria-controls="transp-doc-2026-2"
          >
            <div class="document-card-header">
              <div class="document-icon" aria-hidden="true">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                  <path d="M10 4H26L34 12V36H10V4Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                  <path d="M26 4V12H34" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                  <line x1="14" y1="20" x2="26" y2="20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                  <line x1="14" y1="26" x2="26" y2="26" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                  <line x1="14" y1="14" x2="20" y2="14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                </svg>
              </div>
              <div class="document-info">
                <h3 class="document-title">Prestação de Contas (exemplo)</h3>
                <span class="document-year">Ano 2026</span>
              </div>
              <span class="document-accordion-chevron" aria-hidden="true">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <path
                    d="M4 6L8 10L12 6"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </span>
            </div>
            <div class="document-panel" id="transp-doc-2026-2" data-accordion-panel hidden>
              <div class="document-panel-inner">
                <ul class="transparency-accordion-list">
                  <li><a href="#"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v8c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>Prestação de Contas Anual 2026 (exemplo)</a></li>
                  <li><a href="#"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v8c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>Prestação de Contas Trimestral Q1 (exemplo)</a></li>
                  <li><a href="#"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v8c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>Prestação de Contas Trimestral Q2 (exemplo)</a></li>
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
            aria-controls="transp-doc-2026-3"
          >
            <div class="document-card-header">
              <div class="document-icon" aria-hidden="true">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                  <path d="M10 4H26L34 12V36H10V4Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                  <path d="M26 4V12H34" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                  <line x1="14" y1="20" x2="26" y2="20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                  <line x1="14" y1="26" x2="26" y2="26" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                  <line x1="14" y1="14" x2="20" y2="14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                </svg>
              </div>
              <div class="document-info">
                <h3 class="document-title">Balanço Financeiro (exemplo)</h3>
                <span class="document-year">Ano 2026</span>
              </div>
              <span class="document-accordion-chevron" aria-hidden="true">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <path
                    d="M4 6L8 10L12 6"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </span>
            </div>
            <div class="document-panel" id="transp-doc-2026-3" data-accordion-panel hidden>
              <div class="document-panel-inner">
                <ul class="transparency-accordion-list">
                  <li><a href="#"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v8c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>Balanço Financeiro Anual 2026 (exemplo)</a></li>
                  <li><a href="#"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v8c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>Balanço Patrimonial 2026 (exemplo)</a></li>
                  <li><a href="#"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v8c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>Demonstração de Resultados 2026 (exemplo)</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="transparency-list mt-4" data-transparency-accordion data-year-panel="2025" hidden>
          <div
            class="document-card"
            role="button"
            tabindex="0"
            data-accordion-toggle
            aria-expanded="false"
            aria-controls="transp-doc-2025-1"
          >
            <div class="document-card-header">
              <div class="document-icon" aria-hidden="true">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                  <path d="M10 4H26L34 12V36H10V4Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                  <path d="M26 4V12H34" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                  <line x1="14" y1="20" x2="26" y2="20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                  <line x1="14" y1="26" x2="26" y2="26" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                  <line x1="14" y1="14" x2="20" y2="14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                </svg>
              </div>
              <div class="document-info">
                <h3 class="document-title">Relatórios (exemplo)</h3>
                <span class="document-year">Ano 2025</span>
              </div>
              <span class="document-accordion-chevron" aria-hidden="true">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <path
                    d="M4 6L8 10L12 6"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </span>
            </div>
            <div class="document-panel" id="transp-doc-2025-1" data-accordion-panel hidden>
              <div class="document-panel-inner">
                <ul class="transparency-accordion-list">
                  <li><a href="#"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v8c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>Relatório de Atividades 2025 (exemplo)</a></li>
                  <li><a href="#"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v8c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>Relatório de Gestão 2025 (exemplo)</a></li>
                  <li><a href="#"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v8c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>Relatório Anual de Prestação de Contas 2025 (exemplo)</a></li>
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
            aria-controls="transp-doc-2025-2"
          >
            <div class="document-card-header">
              <div class="document-icon" aria-hidden="true">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                  <path d="M10 4H26L34 12V36H10V4Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                  <path d="M26 4V12H34" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                  <line x1="14" y1="20" x2="26" y2="20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                  <line x1="14" y1="26" x2="26" y2="26" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                  <line x1="14" y1="14" x2="20" y2="14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                </svg>
              </div>
              <div class="document-info">
                <h3 class="document-title">Prestação de Contas (exemplo)</h3>
                <span class="document-year">Ano 2025</span>
              </div>
              <span class="document-accordion-chevron" aria-hidden="true">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <path
                    d="M4 6L8 10L12 6"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </span>
            </div>
            <div class="document-panel" id="transp-doc-2025-2" data-accordion-panel hidden>
              <div class="document-panel-inner">
                <ul class="transparency-accordion-list">
                  <li><a href="#"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v8c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>Prestação de Contas Anual 2025 (exemplo)</a></li>
                  <li><a href="#"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v8c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>Prestação de Contas Trimestral Q1 2025 (exemplo)</a></li>
                  <li><a href="#"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v8c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>Prestação de Contas Trimestral Q2 2025 (exemplo)</a></li>
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
            aria-controls="transp-doc-2025-3"
          >
            <div class="document-card-header">
              <div class="document-icon" aria-hidden="true">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                  <path d="M10 4H26L34 12V36H10V4Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                  <path d="M26 4V12H34" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                  <line x1="14" y1="20" x2="26" y2="20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                  <line x1="14" y1="26" x2="26" y2="26" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                  <line x1="14" y1="14" x2="20" y2="14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                </svg>
              </div>
              <div class="document-info">
                <h3 class="document-title">Balanço Financeiro (exemplo)</h3>
                <span class="document-year">Ano 2025</span>
              </div>
              <span class="document-accordion-chevron" aria-hidden="true">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <path
                    d="M4 6L8 10L12 6"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </span>
            </div>
            <div class="document-panel" id="transp-doc-2025-3" data-accordion-panel hidden>
              <div class="document-panel-inner">
                <ul class="transparency-accordion-list">
                  <li><a href="#"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v8c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>Balanço Financeiro Anual 2025 (exemplo)</a></li>
                  <li><a href="#"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v8c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>Balanço Patrimonial 2025 (exemplo)</a></li>
                  <li><a href="#"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v8c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/><path d="M9 11.5l2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>Demonstração de Resultados 2025 (exemplo)</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="cta-section" aria-labelledby="cta-title">
    <div class="container text-center">
      <span class="tag tag-on-dark">Fale conosco</span>
      <h2 id="cta-title">Precisa de informações?</h2>
      <p class="cta-description">Entre em contato pelos canais informados na página de contato.</p>
      <a href="contato.php" class="btn btn-cta btn-lg">Ir para contato</a>
    </div>
  </section>
</main>

<?php require __DIR__ . '/partials/footer.php'; ?>