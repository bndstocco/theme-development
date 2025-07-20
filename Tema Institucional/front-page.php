<?php get_header(); ?>

<main>

<!-- Seção 1: Hero / Banner -->
<section class="bg-primary text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">Bem-vindo à Nossa Empresa</h1>
        <p class="lead">Excelência e inovação para seu negócio crescer.</p>
        <a href="#contato" class="btn btn-light btn-lg mt-3">Fale Conosco</a>
    </div>
</section>

<!-- Seção 2: Sobre Nós -->
<section id="sobre" class="py-5">
    <div class="container">
        <h2 class="mb-4">Quem Somos</h2>
        <p>Somos uma empresa dedicada a entregar as melhores soluções do mercado. Nossa equipe é formada por especialistas apaixonados pelo que fazem, garantindo qualidade e confiança em cada projeto.</p>
    </div>
</section>

<!-- Seção 3: Serviços -->
<section id="servicos" class="bg-light py-5">
    <div class="container">
        <h2 class="mb-4 text-center">Nossos Serviços</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Consultoria Estratégica</h5>
                        <p class="card-text">Analisamos seu negócio para definir estratégias que maximizam resultados e crescimento.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Desenvolvimento Web</h5>
                        <p class="card-text">Criamos sites modernos, responsivos e otimizados para melhorar a presença digital da sua marca.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Marketing Digital</h5>
                        <p class="card-text">Campanhas personalizadas para aumentar seu alcance e engajamento nas redes sociais e buscadores.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Seção 4: Portfólio -->
<section id="portfolio" class="py-5">
    <div class="container">
        <h2 class="mb-4 text-center">Nosso Portfólio</h2>
        <div class="row g-3">
            <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projeto1.jpg" alt="Projeto 1" class="img-fluid rounded shadow-sm">
            </div>
            <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projeto2.jpg" alt="Projeto 2" class="img-fluid rounded shadow-sm">
            </div>
            <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projeto3.jpg" alt="Projeto 3" class="img-fluid rounded shadow-sm">
            </div>
        </div>
    </div>
</section>

<!-- Seção 5: Depoimentos -->
<section id="depoimentos" class="bg-light py-5">
    <div class="container">
        <h2 class="mb-4 text-center">Depoimentos</h2>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6">
                <blockquote class="blockquote border-start border-4 border-primary ps-3">
                    <p>"Profissionalismo e dedicação fizeram toda a diferença no nosso projeto. Recomendo muito!"</p>
                    <footer class="blockquote-footer">João Silva, CEO da Empresa X</footer>
                </blockquote>
            </div>
            <div class="col-md-6">
                <blockquote class="blockquote border-start border-4 border-primary ps-3">
                    <p>"Equipe extremamente qualificada e sempre disponível para ajudar. Sucesso garantido."</p>
                    <footer class="blockquote-footer">Maria Oliveira, Diretora de Marketing</footer>
                </blockquote>
            </div>
        </div>
    </div>
</section>

<!-- Seção 6: Contato -->
<section id="contato" class="py-5">
    <div class="container">
        <h2 class="mb-4 text-center">Fale Conosco</h2>
        <form action="#" method="post" class="mx-auto" style="max-width:600px;">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="mensagem" class="form-label">Mensagem</label>
                <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</section>

</main>

<?php get_footer(); ?>
