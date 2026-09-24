<?php
$page_title = 'Contato | Associação dos Atletas do Futuro de Novo Horizonte';
$page_description = 'Canais de contato da Associação dos Atletas do Futuro de Novo Horizonte.';
$current_page = 'contato';
$body_class = 'internal-page';
?>
<?php require __DIR__ . '/partials/header.php'; ?>

<main id="main-content">
  <section class="inner-hero" aria-labelledby="page-title">
    <div class="container">
      <nav class="breadcrumb-wrap" aria-label="Você está aqui">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="index.php">Início</a></li>
          <li class="breadcrumb-item active" aria-current="page">Contato</li>
        </ol>
      </nav>
      <h1 id="page-title">Contato</h1>
      <p class="inner-hero-description">Conheça nossos canais de contato e informe-se sobre como participar.</p>
    </div>
  </section>
  <section class="section-padding" id="participar" aria-labelledby="form-title">
    <div class="container">
      <div class="row g-4 g-lg-5">
        <div class="col-12">
          <div class="contact-card content-panel">
            <span class="tag">Contato</span>
            <h2 id="form-title">Sua mensagem</h2>
            <p>
              Se quiser entrar em contato diretamente pelo e-mail:
              <a class="email-link text-break" href="mailto:projetoatletasdofuturo@hotmail.com">projetoatletasdofuturo@hotmail.com</a>,
              clique em cima dele para abrir seu aplicativo de e-mail preferido.
            </p>
            <form class="contact-form" data-demo-form aria-labelledby="form-title" aria-describedby="form-status">
              <div class="row g-3">
                <div class="col-12 col-md-6">
                  <label class="form-label" for="contact-name">Nome</label>
                  <input
                    class="form-control form-control-sm"
                    type="text"
                    id="contact-name"
                    name="nome"
                    autocomplete="name"
                    required
                    data-val="true"
                    data-val-required="Informe o seu nome."
                    aria-describedby="validation-nome" />
                  <span class="field-validation-valid" id="validation-nome" data-valmsg-for="nome" data-valmsg-replace="true"></span>
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label" for="contact-email">E-mail</label>
                  <input
                    class="form-control form-control-sm"
                    type="email"
                    id="contact-email"
                    name="email"
                    autocomplete="email"
                    required
                    data-val="true"
                    data-val-required="Informe o seu e-mail."
                    data-val-email="Informe um endereço de e-mail válido."
                    aria-describedby="validation-email" />
                  <span class="field-validation-valid" id="validation-email" data-valmsg-for="email" data-valmsg-replace="true"></span>
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label" for="contact-phone">Telefone</label>
                  <input class="form-control form-control-sm" type="tel" id="contact-phone" name="telefone" autocomplete="tel" />
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label" for="contact-subject">Assunto</label>
                  <input
                    class="form-control form-control-sm"
                    type="text"
                    id="contact-subject"
                    name="assunto"
                    required
                    data-val="true"
                    data-val-required="Informe o assunto."
                    aria-describedby="validation-assunto" />
                  <span class="field-validation-valid" id="validation-assunto" data-valmsg-for="assunto" data-valmsg-replace="true"></span>
                </div>
                <div class="col-12">
                  <label class="form-label" for="contact-message">Mensagem</label>
                  <textarea
                    class="form-control form-control-sm"
                    id="contact-message"
                    name="mensagem"
                    rows="6"
                    required
                    data-val="true"
                    data-val-required="Escreva a sua mensagem."
                    aria-describedby="validation-mensagem"></textarea>
                  <span class="field-validation-valid" id="validation-mensagem" data-valmsg-for="mensagem" data-valmsg-replace="true"></span>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-cta" disabled>Enviar mensagem</button>
                  <p class="mt-3 mb-0" id="form-status" role="status" aria-live="polite">
                    Envio indisponível neste protótipo. Nenhuma mensagem será enviada pelo formulário.
                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require __DIR__ . '/partials/footer.php'; ?>

<!-- Additional scripts for contact form validation -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.20.0/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation-unobtrusive@4.0.0/dist/jquery.validate.unobtrusive.min.js"></script>