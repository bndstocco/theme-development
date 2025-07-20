<?php get_header(); ?>

<main class="container my-5">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article class="mx-auto" style="max-width: 720px;">
      <?php if (has_post_thumbnail()) : ?>
        <div class="mb-4">
          <?php the_post_thumbnail('large', ['class' => 'img-fluid rounded shadow']); ?>
        </div>
      <?php endif; ?>

      <header class="mb-4">
        <h1 class="display-5 fw-bold"><?php the_title(); ?></h1>
        <p class="text-muted small mb-0">
          Publicado em <?php echo get_the_date(); ?> por <?php the_author(); ?>
        </p>
      </header>

      <div class="content mb-5">
        <?php the_content(); ?>
      </div>

      <?php
        $categories = get_the_category();
        if (!empty($categories)) :
      ?>
        <div class="mb-4">
          <strong class="text-muted">Categorias:</strong>
          <?php foreach ($categories as $category) : ?>
            <a href="<?php echo get_category_link($category->term_id); ?>" class="badge bg-light text-dark text-decoration-none me-1">
              <?php echo esc_html($category->name); ?>
            </a>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <?php the_tags('<div class="mb-5"><strong class="text-muted">Tags:</strong> ', ', ', '</div>'); ?>
    </article>

  <?php endwhile; else : ?>
    <p>Desculpe, nada encontrado.</p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
