<?php
$page_title = 'Galeria | Associação dos Atletas do Futuro de Novo Horizonte';
$page_description = 'Galerias de fotos demonstrativas da Associação dos Atletas do Futuro de Novo Horizonte.';
$current_page = 'galeria';
$body_class = 'internal-page';
?>
<?php require __DIR__ . '/partials/header.php'; ?>

<main id="main-content">
  <section class="inner-hero" aria-labelledby="gallery-page-title">
    <div class="container">
      <nav class="breadcrumb-wrap" aria-label="Você está aqui">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="index.php">Início</a></li>
          <li class="breadcrumb-item active" aria-current="page">Galeria</li>
        </ol>
      </nav>
      <h1 id="page-title">Galeria</h1>
      <p class="inner-hero-description">Fotos Oficiais</p>
    </div>
  </section>

  <section class="gallery section-padding" aria-labelledby="gallery-list-title">
    <div class="container">
      <div class="content-panel">
        <span class="tag">Galeria</span>
        <h2 id="about-title">Todas os Albuns</h2>

        <div class="row g-4 mt-4" id="gallery-grid">
          <article class="col-12 col-md-6">
            <div class="card-gallery" data-animate="fade-up">
              <div class="card-gallery-image">
                <img
                  src="https://placehold.co/800x450/1B6B3A/FFFFFF?text=Foto+demonstrativa"
                  alt="Foto demonstrativa: capa provisória da galeria de exemplo 01"
                  width="800"
                  height="450"
                  loading="lazy"
                />
              </div>
              <div class="card-gallery-body">
                <h3 class="card-gallery-title">Galeria demonstrativa 01</h3>
                <div class="card-gallery-meta">
                  <span class="card-gallery-date">Data: A definir</span>
                  <span class="badge-photo-count">4 fotos demonstrativas</span>
                </div>
                <p class="card-gallery-desc">
                  Modelo de álbum com imagens provisórias. As fotos e a descrição serão substituídas por registros reais
                  quando disponíveis.
                </p>
                <a href="galeria-detalhes.php" class="link-arrow">Ver galeria <span aria-hidden="true">→</span></a>
              </div>
            </div>
          </article>

          <article class="col-12 col-md-6">
            <div class="card-gallery" data-animate="fade-up">
              <div class="card-gallery-image">
                <img
                  src="https://placehold.co/800x450/E8A838/1A1A2E?text=Foto+demonstrativa"
                  alt="Foto demonstrativa: capa provisória da galeria de exemplo 02"
                  width="800"
                  height="450"
                  loading="lazy"
                />
              </div>
              <div class="card-gallery-body">
                <h3 class="card-gallery-title">Galeria demonstrativa 02</h3>
                <div class="card-gallery-meta">
                  <span class="card-gallery-date">Data: A definir</span>
                  <span class="badge-photo-count">Fotos: A definir</span>
                </div>
                <p class="card-gallery-desc">
                  Outro exemplo de capa para a listagem. O link abre o mesmo modelo demonstrativo de detalhes, não um evento
                  distinto.
                </p>
                <a href="galeria-detalhes.php" class="link-arrow"
                  >Ver modelo de detalhes <span aria-hidden="true">→</span></a
                >
              </div>
            </div>
          </article>
          <article class="col-12 col-md-6">
            <div class="card-gallery" data-animate="fade-up">
              <div class="card-gallery-image">
                <img
                  src="https://placehold.co/800x450/E8A838/1A1A2E?text=Foto+demonstrativa"
                  alt="Foto demonstrativa: capa provisória da galeria de exemplo 02"
                  width="800"
                  height="450"
                  loading="lazy"
                />
              </div>
              <div class="card-gallery-body">
                <h3 class="card-gallery-title">Galeria demonstrativa 02</h3>
                <div class="card-gallery-meta">
                  <span class="card-gallery-date">Data: A definir</span>
                  <span class="badge-photo-count">Fotos: A definir</span>
                </div>
                <p class="card-gallery-desc">
                  Outro exemplo de capa para a listagem. O link abre o mesmo modelo demonstrativo de detalhes, não um evento
                  distinto.
                </p>
                <a href="galeria-detalhes.php" class="link-arrow"
                  >Ver modelo de detalhes <span aria-hidden="true">→</span></a
                >
              </div>
            </div>
          </article>
          <article class="col-12 col-md-6">
            <div class="card-gallery" data-animate="fade-up">
              <div class="card-gallery-image">
                <img
                  src="https://placehold.co/800x450/E8A838/1A1A2E?text=Foto+demonstrativa"
                  alt="Foto demonstrativa: capa provisória da galeria de exemplo 02"
                  width="800"
                  height="450"
                  loading="lazy"
                />
              </div>
              <div class="card-gallery-body">
                <h3 class="card-gallery-title">Galeria demonstrativa 02</h3>
                <div class="card-gallery-meta">
                  <span class="card-gallery-date">Data: A definir</span>
                  <span class="badge-photo-count">Fotos: A definir</span>
                </div>
                <p class="card-gallery-desc">
                  Outro exemplo de capa para a listagem. O link abre o mesmo modelo demonstrativo de detalhes, não um evento
                  distinto.
                </p>
                <a href="galeria-detalhes.php" class="link-arrow"
                  >Ver modelo de detalhes <span aria-hidden="true">→</span></a
                >
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require __DIR__ . '/partials/footer.php'; ?>