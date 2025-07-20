<footer class="bg-dark text-white pt-4 mt-5">
  <div class="container">
    <div class="row">

      <!-- Menu Footer -->
      <nav class="col-md-4 mb-3 mb-md-0">
        <h5>Menu</h5>
        <?php
          wp_nav_menu(array(
            'theme_location' => 'menu-principal',
            'container' => false,
            'menu_class' => 'nav-footer', // usamos uma nova classe
            'fallback_cb' => 'wp_page_menu',
            'depth' => 1,
          ));
        ?>
      </nav>

      <!-- Informações de Contato -->
      <div class="col-md-4 mb-3 mb-md-0">
        <h5>Contato</h5>
        <address>
          Empresa Exemplo Ltda.<br>
          Rua Fictícia, 123 - Bairro Central<br>
          São Paulo - SP, 01000-000<br>
          Telefone: (11) 1234-5678<br>
          Email: contato@exemplo.com.br
        </address>
      </div>

      <!-- Redes Sociais -->
      <div class="col-md-4 text-center text-md-start">
        <h5>Siga-nos</h5>
        <a href="https://facebook.com/exemplo" class="text-white me-3" aria-label="Facebook" target="_blank" rel="noopener">
          <i class="bi bi-facebook fs-4"></i>
        </a>
        <a href="https://twitter.com/exemplo" class="text-white me-3" aria-label="Twitter" target="_blank" rel="noopener">
          <i class="bi bi-twitter fs-4"></i>
        </a>
        <a href="https://instagram.com/exemplo" class="text-white" aria-label="Instagram" target="_blank" rel="noopener">
          <i class="bi bi-instagram fs-4"></i>
        </a>
      </div>

    </div>

    <hr class="bg-secondary my-4">

    <div class="text-center pb-3">
      <small>&copy; <?php echo date('Y'); ?> Empresa Exemplo Ltda. Todos os direitos reservados.</small>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
