<?php get_header(); ?>

<main class="container my-5">
  <header class="mb-5 text-center">
    <h1 class="display-5"><?php the_archive_title(); ?></h1>
    <?php if (is_category() || is_tag() || is_author()): ?>
      <p class="text-muted"><?php the_archive_description(); ?></p>
    <?php endif; ?>
  </header>

  <div class="row">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => get_the_title()]); ?>
            </a>
          <?php endif; ?>
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">
              <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none"><?php the_title(); ?></a>
            </h5>
            <p class="card-text text-muted small mb-2"><?php echo get_the_date(); ?></p>
            <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
            <a href="<?php the_permalink(); ?>" class="mt-auto btn btn-outline-primary btn-sm">Leia mais</a>
          </div>
        </div>
      </div>
    <?php endwhile; else: ?>
      <div class="col-12">
        <p>Nenhum post encontrado.</p>
      </div>
    <?php endif; ?>
  </div>

  <!-- Paginação -->
  <div class="d-flex justify-content-center mt-5">
    <?php
      the_posts_pagination([
        'mid_size'  => 2,
        'prev_text' => __('« Anterior'),
        'next_text' => __('Próximo »'),
        'class'     => 'pagination'
      ]);
    ?>
  </div>
</main>

<?php get_footer(); ?>
