@extends('template_site.nav_footer')

@section('conteudo')
    <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">O Carro Perfeito Está Aqui</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Encontre modelos novos e seminovos com garantia, revisão em dia e preços imbatíveis.</p>
                        <a class="btn btn-primary btn-xl" href="#sobre">Saiba mais</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="sobre">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Quem somos?</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Na SotnasCar, conectamos você ao carro ideal com rapidez, transparência e segurança. Trabalhamos 
                            com veículos selecionados, revisados e com procedência garantida para que sua experiência de compra seja simples e totalmente 
                            confiável. Oferecemos um catálogo completo de carros novos e seminovos, das marcas mais desejadas do mercado, com condições 
                            especiais de pagamento e atendimento personalizado. Seu próximo carro está a um clique.</p>
                        <a class="btn btn-light btn-xl" href="#categorias">Veja nossas categorias</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="categorias">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Ao seu serviço</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-search fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Transparência total</h3>
                            <p class="text-muted mb-0">Todos os carros passam por laudo cautelar completo, garantindo segurança, procedência e um histórico confiável.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-car-front fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Para todos os perfis</h3>
                            <p class="text-muted mb-0">Hatch, sedan, SUV ou picape — temos opções para cada necessidade, estilo de vida e orçamento.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-cash-stack fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Custo-benefício</h3>
                            <p class="text-muted mb-0">Trabalhamos com preços justos e negociações facilitadas para você fechar o melhor negócio.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-person-check fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Experiência única</h3>
                            <p class="text-muted mb-0">Da busca à entrega, nossa equipe acompanha você em cada etapa para garantir a melhor compra possível.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="site/assets/img/portfolio/fullsize/1.jpg" title="Civic Type R">
                            <img class="img-fluid" src="site/assets/img/portfolio/thumbnails/1.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Honda</div>
                                <div class="project-name">Civic Type R</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="site/assets/img/portfolio/fullsize/2.jpg" title="M3 2025">
                            <img class="img-fluid" src="site/assets/img/portfolio/thumbnails/2.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">BMW</div>
                                <div class="project-name">M3 2025</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="site/assets/img/portfolio/fullsize/3.jpg" title="Shelby GT500">
                            <img class="img-fluid" src="site/assets/img/portfolio/thumbnails/3.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Mustang</div>
                                <div class="project-name">Shelby GT500</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="site/assets/img/portfolio/fullsize/4.jpg" title="T-Cross 2024">
                            <img class="img-fluid" src="site/assets/img/portfolio/thumbnails/4.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Volkswagen</div>
                                <div class="project-name">T-Cross 2024</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="site/assets/img/portfolio/fullsize/5.jpg" title="Toro">
                            <img class="img-fluid" src="site/assets/img/portfolio/thumbnails/5.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Fiat</div>
                                <div class="project-name">Toro</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="site/assets/img/portfolio/fullsize/6.jpg" title="HB20 Platinum">
                            <img class="img-fluid" src="site/assets/img/portfolio/thumbnails/6.jpg" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Hyundai</div>
                                <div class="project-name">HB20 Platinum</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">Ficou interessado? Confira nossos modelos aqui!</h2>
                <a class="btn btn-light btn-xl" href="/estoque">Ver Estoque</a>
            </div>
        </section>
@endsection