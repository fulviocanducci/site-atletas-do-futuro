<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?php require __DIR__ . '/head.php'; ?>
</head>
<body<?= isset($body_class) ? ' class="' . htmlspecialchars($body_class, ENT_QUOTES, 'UTF-8') . '"' : '' ?>>

  <a href="#main-content" class="skip-link">Pular para conteúdo</a>

  <!-- ==================== HEADER ==================== -->
  <header class="site-header" role="banner">
    <?php require __DIR__ . '/navbar.php'; ?>
  </header>