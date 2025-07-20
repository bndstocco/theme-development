<?php
/*
Template Name: Portfólio
*/

get_header();
?>

<main>

<!-- Seção 1: Introdução -->
<section class="bg-primary text-white text-center py-5">
  <div class="container">
    <h1 class="display-4">Nosso Portfólio</h1>
    <p class="lead">Confira os projetos incríveis que desenvolvemos para nossos clientes.</p>
  </div>
</section>

<!-- Seção 2: Projetos em Destaque -->
<section id="projetos" class="py-5">
  <div class="container">
    <h2 class="mb-4 text-center">Projetos em Destaque</h2>
    <div class="row g-4">
      <?php
      // Imagens confiáveis do Unsplash
      $projetos = [
        [
          'title' => 'Projeto One',
          'desc' => 'Site institucional moderno e responsivo.',
          'img' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80',
        ],
        [
          'title' => 'Projeto Two',
          'desc' => 'E-commerce completo com sistema de pagamento.',
          'img' => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=600&q=80',
        ],
        [
          'title' => 'Projeto Three',
          'desc' => 'App mobile para agendamento e controle.',
          'img' => 'https://images.unsplash.com/photo-1515377905703-c4788e51af15?auto=format&fit=crop&w=600&q=80',
        ],
      ];

      foreach ($projetos as $proj): ?>
        <div class="col-md-4">
          <div class="card h-100 shadow-sm">
            <img src="<?php echo esc_url($proj['img']); ?>" class="card-img-top" alt="<?php echo esc_attr($proj['title']); ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo esc_html($proj['title']); ?></h5>
              <p class="card-text"><?php echo esc_html($proj['desc']); ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Seção 3: Serviços Relacionados -->
<section id="servicos" class="bg-light py-5">
  <div class="container">
    <h2 class="mb-4 text-center">Serviços Relacionados</h2>
    <div class="row text-center g-4">
      <div class="col-md-3">
        <i class="bi bi-code-slash fs-1 text-primary mb-3"></i>
        <h5>Desenvolvimento Web</h5>
        <p>Sites rápidos, seguros e modernos para sua empresa.</p>
      </div>
      <div class="col-md-3">
        <i class="bi bi-phone fs-1 text-primary mb-3"></i>
        <h5>Apps Mobile</h5>
        <p>Aplicativos para iOS e Android sob medida para seu negócio.</p>
      </div>
      <div class="col-md-3">
        <i class="bi bi-graph-up fs-1 text-primary mb-3"></i>
        <h5>Marketing Digital</h5>
        <p>Estratégias para ampliar seu alcance e vendas online.</p>
      </div>
      <div class="col-md-3">
        <i class="bi bi-palette fs-1 text-primary mb-3"></i>
        <h5>Design Gráfico</h5>
        <p>Identidade visual e materiais criativos para sua marca.</p>
      </div>
    </div>
  </div>
</section>

<!-- Seção 4: Depoimentos -->
<section id="depoimentos" class="py-5">
  <div class="container">
    <h2 class="mb-4 text-center">O que nossos clientes dizem</h2>
    <div class="row g-4 justify-content-center">
      <div class="col-md-6">
        <blockquote class="blockquote border-start border-4 border-primary ps-3">
          <p>"Excelente trabalho! Entregaram tudo no prazo e com alta qualidade."</p>
          <footer class="blockquote-footer">Ana Souza, CEO da Empresa Alpha</footer>
        </blockquote>
      </div>
      <div class="col-md-6">
        <blockquote class="blockquote border-start border-4 border-primary ps-3">
          <p>"Equipe muito profissional, superou nossas expectativas."</p>
          <footer class="blockquote-footer">Carlos Mendes, Diretor de TI</footer>
        </blockquote>
      </div>
    </div>
  </div>
</section>

<!-- Seção 5: Chamada para Contato sem margem inferior -->
<section id="contato" class="bg-primary text-white py-5 text-center" style="margin-bottom: 0;">
  <div class="container">
    <h2>Quer trabalhar conosco?</h2>
    <p class="mb-4">Entre em contato para discutir seu projeto e receber uma proposta personalizada.</p>
    <a href="<?php echo esc_url(home_url('/contato')); ?>" class="btn btn-light btn-lg">Fale Conosco</a>
  </div>
</section>

</main>

<?php get_footer(); ?>
