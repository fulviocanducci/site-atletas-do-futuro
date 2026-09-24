<?php
$page_title = 'Galeria demonstrativa | Associação dos Atletas do Futuro de Novo Horizonte';
$page_description = 'Modelo demonstrativo de galeria de fotos da Associação dos Atletas do Futuro de Novo Horizonte.';
$current_page = 'galeria';
$body_class = 'internal-page';
?>
<?php require __DIR__ . '/partials/header.php'; ?>

<main id="main-content">
  <section class="inner-hero" aria-labelledby="gallery-detail-title">
    <div class="container">
      <nav class="breadcrumb-wrap" aria-label="Você está aqui">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="index.php">Início</a></li>
          <li class="breadcrumb-item"><a href="galeria.php">Galeria</a></li>
          <li class="breadcrumb-item active" aria-current="page">Galeria demonstrativa</li>
        </ol>
      </nav>
      <h1 id="gallery-detail-title">Galeria demonstrativa</h1>
      <p class="inner-hero-description">Este álbum é um exemplo de apresentação. As imagens são placeholders e não retratam eventos, participantes ou atividades da associação.</p>
      <p class="card-gallery-date inner-hero-meta">Data: A definir</p>
    </div>
  </section>

  <section class="gallery section-padding" aria-labelledby="gallery-photos-title">
    <div class="container">
      <figure class="gallery-cover mb-5">
        <img class="w-100 rounded" src="https://placehold.co/1200x675/1B6B3A/FFFFFF?text=Foto+demonstrativa" alt="Foto demonstrativa: capa provisória do álbum" width="1200" height="675">
        <figcaption class="text-muted mt-2">Capa demonstrativa. A imagem oficial será adicionada quando disponível.</figcaption>
      </figure>
      <div class="section-header">
        <h2 id="gallery-photos-title">Fotos demonstrativas</h2>
        <p class="section-description">Selecione uma foto para visualizar no modal. Todas as imagens abaixo são provisórias.</p>
      </div>
      <div class="photo-grid row g-3 mt-3">
        <div class="col-12 col-sm-6 col-lg-3">
          <button class="photo-tile d-block w-100 border-0 p-0 bg-transparent" type="button" data-bs-toggle="modal" data-bs-target="#galleryLightbox" data-gallery-image="https://placehold.co/1200x800/1B6B3A/FFFFFF?text=Foto+demonstrativa+1" data-gallery-alt="Foto demonstrativa 1: imagem provisória do álbum" aria-label="Ampliar foto demonstrativa 1">
            <img class="w-100 rounded" src="https://placehold.co/600x400/1B6B3A/FFFFFF?text=Foto+demonstrativa+1" alt="Foto demonstrativa 1: imagem provisória do álbum" width="600" height="400" loading="lazy">
          </button>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <button class="photo-tile d-block w-100 border-0 p-0 bg-transparent" type="button" data-bs-toggle="modal" data-bs-target="#galleryLightbox" data-gallery-image="https://placehold.co/1200x800/E8A838/1A1A2E?text=Foto+demonstrativa+2" data-gallery-alt="Foto demonstrativa 2: imagem provisória do álbum" aria-label="Ampliar foto demonstrativa 2">
            <img class="w-100 rounded" src="https://placehold.co/600x400/E8A838/1A1A2E?text=Foto+demonstrativa+2" alt="Foto demonstrativa 2: imagem provisória do álbum" width="600" height="400" loading="lazy">
          </button>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <button class="photo-tile d-block w-100 border-0 p-0 bg-transparent" type="button" data-bs-toggle="modal" data-bs-target="#galleryLightbox" data-gallery-image="https://placehold.co/1200x800/145A2E/FFFFFF?text=Foto+demonstrativa+3" data-gallery-alt="Foto demonstrativa 3: imagem provisória do álbum" aria-label="Ampliar foto demonstrativa 3">
            <img class="w-100 rounded" src="https://placehold.co/600x400/145A2E/FFFFFF?text=Foto+demonstrativa+3" alt="Foto demonstrativa 3: imagem provisória do álbum" width="600" height="400" loading="lazy">
          </button>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <button class="photo-tile d-block w-100 border-0 p-0 bg-transparent" type="button" data-bs-toggle="modal" data-bs-target="#galleryLightbox" data-gallery-image="https://placehold.co/1200x800/1A1A2E/FFFFFF?text=Foto+demonstrativa+4" data-gallery-alt="Foto demonstrativa 4: imagem provisória do álbum" aria-label="Ampliar foto demonstrativa 4">
            <img class="w-100 rounded" src="https://placehold.co/600x400/1A1A2E/FFFFFF?text=Foto+demonstrativa+4" alt="Foto demonstrativa 4: imagem provisória do álbum" width="600" height="400" loading="lazy">
          </button>
        </div>
      </div>
      <a class="link-arrow mt-5" href="galeria.php"><span aria-hidden="true">←</span> Voltar para galerias</a>
    </div>
  </section>
</main>

<div class="modal fade" id="galleryLightbox" tabindex="-1" aria-labelledby="galleryLightboxTitle" aria-describedby="galleryLightboxCaption" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title fs-5" id="galleryLightboxTitle">Foto demonstrativa</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar foto"></button>
      </div>
      <div class="modal-body text-center">
        <div class="gallery-lightbox-stage">
          <p class="gallery-lightbox-status" role="status" aria-live="polite">Carregando foto...</p>
          <img class="gallery-lightbox-image img-fluid d-none" alt="" width="1200" height="800">
        </div>
        <p id="galleryLightboxCaption" class="gallery-lightbox-caption mt-3 mb-0"></p>
      </div>
      <div class="modal-footer gallery-lightbox-controls">
        <button type="button" class="btn btn-outline-primary btn-sm" data-gallery-prev aria-label="Foto anterior">← Anterior</button>
        <span class="gallery-lightbox-index" aria-live="polite"></span>
        <button type="button" class="btn btn-outline-primary btn-sm" data-gallery-next aria-label="Próxima foto">Próxima →</button>
      </div>
    </div>
  </div>
</div>

<?php require __DIR__ . '/partials/footer.php'; ?>