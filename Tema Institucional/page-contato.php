<?php
/*
Template Name: Contato
*/

get_header();
?>

<div class="container py-5">
    <h1 class="mb-4 text-center"><?php the_title(); ?></h1>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <?php
            // Exibe o conteúdo da página (se você quiser adicionar texto extra no editor WP)
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>

            <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" class="needs-validation" novalidate>
                <!-- Definindo action para processar com admin-post.php -->

                <!-- Campo oculto para ação personalizada -->
                <input type="hidden" name="action" value="enviar_form_contato">

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                    <div class="invalid-feedback">
                        Por favor, preencha seu nome.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <div class="invalid-feedback">
                        Por favor, informe um e-mail válido.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="mensagem" class="form-label">Mensagem</label>
                    <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
                    <div class="invalid-feedback">
                        Por favor, escreva sua mensagem.
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>

        </div>
    </div>
</div>

<script>
// Bootstrap 5 form validation
(() => {
    'use strict'

    const forms = document.querySelectorAll('.needs-validation')

    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })
})()
</script>

<?php get_footer(); ?>
