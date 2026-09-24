<?php
$page_title = 'Relatórios (exemplo) | Associação dos Atletas do Futuro de Novo Horizonte';
$page_description = 'Exemplo da organização de documentos por categoria na área de transparência da Associação dos Atletas do Futuro de Novo Horizonte.';
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
          <li class="breadcrumb-item"><a href="transparencia.php">Transparência</a></li>
          <li class="breadcrumb-item"><a href="transparencia.php#documentos">2026 (exemplo)</a></li>
          <li class="breadcrumb-item active" aria-current="page">Relatórios (exemplo)</li>
        </ol>
      </nav>
      <h1 id="page-title">Relatórios</h1>
      <p class="inner-hero-description">Modelo de página para documentos classificados por ano e categoria. Nenhum relatório foi publicado neste protótipo.</p>
    </div>
  </section>
  <section class="section-padding transparency" aria-labelledby="documents-title">
    <div class="container">
      <div class="content-panel">
        <span class="tag">Ano 2026, exemplo visual</span>
        <h2 id="documents-title">Relatórios</h2>
        <p class="section-description">A linha abaixo demonstra como documentos poderão ser apresentados. Nome, tipo, data e tamanho ainda estão a definir; não há arquivo para consulta ou download.</p>
        <div class="transparency-list mt-4" aria-label="Exemplo de apresentação de documentos">
          <article class="document-row document-card">
            <div class="document-icon" aria-hidden="true">
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none"><path d="M10 4H26L34 12V36H10V4Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><path d="M26 4V12H34" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><path d="M14 20H28M14 26H28" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
            <div class="document-info">
              <h3 class="document-title">A definir</h3>
              <p class="mb-1">Descrição do documento: a definir.</p>
              <dl class="d-flex flex-wrap gap-3 mb-0">
                <div><dt>Tipo</dt><dd class="mb-0">A definir</dd></div>
                <div><dt>Data</dt><dd class="mb-0">A definir</dd></div>
                <div><dt>Tamanho</dt><dd class="mb-0">A definir</dd></div>
              </dl>
            </div>
            <div class="d-flex flex-wrap gap-2" aria-label="Ações indisponíveis: nenhum documento publicado">
              <button type="button" class="btn btn-outline-primary btn-sm" disabled>Visualizar</button>
              <button type="button" class="btn btn-outline-primary btn-sm" disabled>Baixar</button>
            </div>
          </article>
        </div>
        <p class="mt-4 mb-0">Documentos oficiais serão incluídos nesta área quando fornecidos pela associação.</p>
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