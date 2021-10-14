<?php get_header(); ?>

    <!-- slider -->
    <section class="slider-custom" data-anime="slow-slider">
        <?php echo do_shortcode('[ssslider id="7"]') ?>
    </section>

    
        <!-- marcas -->
        <section class="bem-vindo" data-anime="top">
            <div class="grid grid-cols-1 md:grid-cols-2 space-x-9 h-full pt-40 pb-96 md:pb-80 px-3 md:px-20">
                <div class="container hidden md:block pt-40">
                    <div class="composition">
                        <img srcset="<?php echo get_theme_file_uri('./images/bem-vindo-1.jpg')?> 300w, <?php echo get_theme_file_uri('./images/bem-vindo-1-large.jpg ')?>1000w"
                            sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                            alt="Photo 1"
                            class="composition__photo composition__photo--p1"
                            src="<?php echo get_theme_file_uri('./images/bem-vindo-1-large.jpg')?>">
                        <img srcset="<?php echo get_theme_file_uri('./images/bem-vindo-2.jpg')?> 300w, <?php echo get_theme_file_uri('./images/bem-vindo-2-large.jpg')?> 1000w"
                                        sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                            alt="Photo 2"
                            class="composition__photo composition__photo--p2"
                            src="<?php echo get_theme_file_uri('./images/bem-vindo-2-large.jpg')?>">

                        <img srcset="<?php echo get_theme_file_uri('./images/bem-vindo-3.jpg ')?> 300w, <?php echo get_theme_file_uri('./images/bem-vindo-3-large.jpg')?> 1000w"
                            sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                            alt="Photo 3"
                            class="composition__photo composition__photo--p3"
                            src="<?php echo get_theme_file_uri('./images/bem-vindo-3-large.jpg')?>">

                                    <!--
                                    <img src="img/nat-1-large.jpg" alt="Photo 1" class="composition__photo composition__photo--p1">
                                    <img src="img/nat-2-large.jpg" alt="Photo 2" class="composition__photo composition__photo--p2">
                                    <img src="img/nat-3-large.jpg" alt="Photo 3" class="composition__photo composition__photo--p3">
                                    -->
                    </div>
                </div>               
                <div class="text-light-primary space-y-9">
                    <h2 class="title">Bem vindo a instaly calhas</h2>
                    <p class="generic-text text-4xl">
                        A Empresa INSTALY CALHAS , oferece acabamento e a
                        proteção ideal para diferentes projetos arquitetônicos,
                        com beleza e praticidade, canalizando devidamente o
                        fluxo pluvial
                    </p>
                    <p class="generic-text text-4xl">
                        As calhas têm um papel importante nas edificações, pois
                        evitam diversos danos causados pelas águas das chuvas,
                        como o apodrecimento dos beirais, a umidade excessiva
                        nas paredes que acelera o desgaste da alvenaria, da pintura e a danificação dos jardins ou calçadas com buracos,
                        formados onde caem os pingos do telhado.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 md:gap-x-36 mt-9">
                        <div class="btn-wraper justify-start mb-9 md:mb-0"><a href="<?php echo esc_url(site_url('/quem-somos')); ?>" class="btn-wk flex items-center justify-center bg-green-primary rounded-2xl py-6 px-9 w-full text-center">Sobre Nós</a></div>
                        <div class="btn-wraper justify-end"><a href="<?php echo esc_url(site_url('/produtos')); ?>" class="btn-wk flex items-center justify-center bg-green-primary rounded-2xl py-6 px-9 w-full text-center">Nóssos Produtos</a></div>
                    </div>
                </div>

               
            </div>
            
        </section>
        <section class="section-tours bg-light-primary pb-40 pt-96 -mt-96 px-0 md:px-32" id="section-tours">
                <!-- ============= -->
                <!-- ===card 1==== -->
                <!-- ============= -->
                <div class="grid grid-cols-1 px-12 md:px-0 md:grid-cols-3 gap-12">
                    <div class="col-1-of-3">
                       <div class="card rounded-3xl">
                           <div class="card__side card__side--front">
                                <div class="front-wraper py-10 px-10 flex flex-col content-center justify-evenly h-full items-center">
                                    <div class="icon-wraper">
                                        <i class="fas fa-home text-green-primary text-9xl"></i>
                                    </div>
                                    <h2 class="title-3 title-card text-4xl">Quem somos</h2>
                                    <div class="generic-text  text-2xl text-center">
                                        A empresa Instaly Calhas, juntando o
                                        conhecimento, inovação e responsabilidade no que faz, tem como compromisso oferecer atendimento personalizado,
                                        para com isso obter a certeza da total
                                        satisfação de nossos clientes...
                                    </div>
                                    <div class="btn-wraper"><a href="<?php echo esc_url(site_url('/quem-somos')); ?>" class="btn-wk flex items-center justify-center text-white bg-green-primary rounded-2xl py-6 px-9 w-full text-center">Saiba Mais</a></div>
                                </div>
                           </div>
                           <div class="card__side card__side--back card__side--back-1">
                                <div class="back-wraper py-10 px-10 flex flex-col content-center justify-evenly h-full items-center">
                                    <div class="icon-wraper">
                                        <i class="fas fa-home text-white text-9xl"></i>
                                    </div>
                                    <h2 class="title-3 title-card text-4xl text-white">Quem somos</h2>
                                    <div class="generic-text  text-2xl text-center text-white">
                                        A empresa Instaly Calhas, juntando o
                                        conhecimento, inovação e responsabilidade no que faz, tem como compromisso oferecer atendimento personalizado,
                                        para com isso obter a certeza da total
                                        satisfação de nossos clientes...
                                    </div>
                                    <div class="btn-wraper"><a href="<?php echo esc_url(site_url('/quem-somos')); ?>" class="btn-wk flex items-center justify-center text-black bg-white rounded-2xl py-6 px-9 w-full text-center">Saiba Mais</a></div>
                                </div>
                            </div>
                       </div>
                    </div>

                    <!-- ============= -->
                    <!-- ===card 2==== -->
                    <!-- ============= -->
                    <div class="col-1-of-3">
                        <div class="card">
                            <div class="card__side card__side--front card__side--front-2">
                                <div class="back-wraper py-10 px-10 flex flex-col content-center justify-evenly h-full items-center">
                                    <div class="icon-wraper">
                                        <i class="fas fa-hammer text-white text-9xl"></i>
                                    </div>
                                    <h2 class="title-3 title-card text-4xl text-white">o que fazemos</h2>
                                    <div class="generic-text  text-2xl text-center text-white">
                                        A empresa Instaly Calhas é especializada na fabricação e instalação de rufos,
                                        coifas, sputinick, entre outras peças
                                        produzidas sobre medidas...
                                    </div>
                                    <div class="btn-wraper"><a href="<?php echo esc_url(site_url('/produtos')); ?>" class="btn-wk flex items-center justify-center text-black bg-white rounded-2xl py-6 px-9 w-full text-center">produtos</a></div>
                                </div>

                            </div>
                            <div class="card__side card__side--back card__side--back-2 bg-white">
                                
                                <div class="front-wraper py-10 px-10 flex flex-col content-center justify-evenly h-full items-center">
                                    <div class="icon-wraper">
                                        <i class="fas fa-hammer text-green-primary text-9xl"></i>
                                    </div>
                                    <h2 class="title-3 title-card text-4xl">o que fazemos</h2>
                                    <div class="generic-text  text-2xl text-center">
                                        A empresa Instaly Calhas é especializada na fabricação e instalação de rufos,
                                        coifas, sputinick, entre outras peças
                                        produzidas sobre medidas...
                                    </div>
                                    <div class="btn-wraper"><a href="<?php echo esc_url(site_url('/produtos')); ?>" class="btn-wk flex items-center justify-center text-white hover:text-gray-100 bg-green-primary rounded-2xl py-6 px-9 w-full text-center">produtos</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ============= -->
                    <!-- ===card 3==== -->
                    <!-- ============= -->
                    <div class="col-1-of-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="front-wraper py-10 px-10 flex flex-col content-center justify-evenly h-full items-center">
                                    <div class="icon-wraper">
                                        <i class="far fa-edit text-green-primary text-9xl"></i>
                                    </div>
                                    <h2 class="title-3 title-card text-4xl text-center">faça um orçamento</h2>
                                    <div class="generic-text  text-2xl text-center">
                                        Solicite seu orçamento sem compromisso.
                                    </div>
                                    <div class="generic-text  text-2xl text-center">
                                        Entraremos em contato o mais breve
                                        possível...
                                    </div>
                                    <div class="btn-wraper"><a href="<?php echo esc_url(site_url('/contato')); ?>" class="btn-wk flex items-center justify-center text-white bg-green-primary rounded-2xl py-6 px-9 w-full text-center">fazer orçamento</a></div>
                                </div>

                            </div>
                            <div class="card__side card__side--back card__side--back-3">
                                <div class="back-wraper py-10 px-10 flex flex-col content-center justify-evenly h-full items-center">
                                    <div class="icon-wraper">
                                        <i class="far fa-edit text-white text-9xl"></i>
                                    </div>
                                    <h2 class="title-3 title-card text-4xl text-center text-white">faça um orçamento</h2>
                                    <div class="generic-text  text-2xl text-center text-white">
                                        Solicite seu orçamento sem compromisso.
                                    </div>
                                    <div class="generic-text  text-2xl text-center text-white">
                                        Entraremos em contato o mais breve
                                        possível...
                                    </div>
                                    <div class="btn-wraper"><a href="<?php echo esc_url(site_url('/contato')); ?>" class="btn-wk flex items-center justify-center text-black bg-white rounded-2xl py-6 px-9 w-full text-center">fazer orçamento</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>               
        </section>
    
        <section class="strip-contato w-full bg-dark-primary py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 container">
                <h3 class="title-2 text-white py-2 text-center md:text-left mb-5 md:mb-0">Fale conosco!</h3>
                <div class="btn-wraper justify-center md:justify-end">
                    <a href="<?php echo esc_url(site_url('/contato')); ?>" class="btn-wk text-white bg-green-primary rounded-full py-6 px-24 text-center">Contato</a>
                </div>
            </div>
        </section>
    <!-- products -->
    <div id="promotional_slider">
        <div class="promotionalslider_wrapper">
         <?php
            $homepagePosts = new WP_Query(array(
            'posts_per_page' => 6,
            'orderby' => 'date',
            'order' => 'ASC' ,
            'category_name' => 'destaques' 
            ));

            while($homepagePosts->have_posts()){
            $homepagePosts->the_post(); ?>
             
            
            
                <div class="promotionalslider_single">
                    <div class="product-card" data-anime="bottom">
                            <div class="product-card__top-wraper">
                                <div class="product-card__img-wraper">
                                    <img class="product-card__img-top" src="<?php the_post_thumbnail_url('ProductImageList') ?>" alt="imagem produto">
                                    
                                </div>
                                <h4 class="product-card__title title-3 white px-3 md:px-9 mt-3 md:mt-9 text-left text-2xl md:text-3xl"><?php echo wp_trim_words( get_the_title(), 5);  ?></h4>
                            </div>
                            
                            
                            <div class="product-card__body px-3 md:px-9 text-xl md:text-2xl">
                               
                                <p class="product-card__text">
                                    <?php echo wp_trim_words( get_the_content(), 33);  ?>
                                </p>
                                
                            </div>
                            
                       
                        <a href="<?php the_permalink(); ?>" class="product-card__hyperlink-btn">
                                <div class="btn-wk__alt btn-wk__alt--material-bubble bg-green-primary hover:bg-green-900">Ver mais</div>
                            </a>
                    </div>
                </div>
            <?php } wp_reset_postdata(); ?>
        </div>
    </div>
    <section class="servicos grid grid-cols-1 md:grid-cols-3 pb-40 md:pb-40 pt-72 px-20 md:px-60 text-center md:text-left">
        <div class="servicos-texto space-y-12">
            <h2 class="title text-green-primary">serviços</h2>
            <p class="generic-text text-2xl text-dark-primary">
                Aqui na Empresa INSTALY CALHAS, oferecemos o melhor acabamento em calhas e tudo que sua casa precisa. Você pode contar com atendimento ao cliente que conta com profissionalismo, seja qual for sua dúvida, estamos aqui para ajuda-lo.
            </p>
            <p class="generic-text text-2xl text-dark-primary">
            Nosso atendimento aos clientes não é a única coisa que impressiona, nossa mão de obra conta com o maior nível  de excelência, dando um toque  que contem um diferencial profissionalismo que existe em tudo que fazemos. Seja você também um cliente Instaly Calhas!
            </p>
        </div>
    </section>
    

<?php get_footer(); ?>