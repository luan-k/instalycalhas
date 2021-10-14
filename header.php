<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <? wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <div class="wraper" >
        <header >
            <nav>
                <div class="bg-dark-primary max-w-full">
                    <div class="max-w mx-auto container ">
                        <div class="flex justify-center md:justify-between">

                            <!-- logo -->
                            <div class="logo-wraper">
                                <a class="" href="<?php echo esc_url(site_url()); ?>">
                                    <img class="logo" src="<?php echo get_theme_file_uri('/images/logo-final.png')?>" alt="">
                                </a>
                            </div>

                            <!-- primary nav -->
                            <div class="icon-nav hidden md:flex items-center text-2xl space-x-4">
                                <a target="_blank" class="py-5 px-3 text-white" href="https://web.whatsapp.com/send?phone=5548984791962&text=Ol%C3%A1!%20vim%20do%20Instaly%20Calhas.%20Estava%20olhando%20a%20p%C3%A1gina%20In%C3%ADcio.%20Pode%20me%20ajudar%3F"><i class="text-green-primary fab fa-whatsapp"></i> (48) 998479-1962</a>
                                <a target="_blank" class="py-5 px-3 text-white" href="tel:4830333277" ><i class="text-green-primary fas fa-phone-alt"></i> (48) 3033-3277</a>
                                <a target="_blank" class="py-5 px-3 text-white" href="https://www.facebook.com/instalycalhasflorianopolis/"><i class="text-green-primary fab fa-facebook-f"></i></a>
                                <a target="_blank" class="py-5 px-3 text-white" href="<?php echo esc_url(site_url('/contato')); ?>"><i class="text-green-primary far fa-envelope"></i></a>
                                <a target="_blank" href="#" class="py-5 px-3 text-white"><i class="text-green-primary fab fa-instagram"></i></i></a>
                                <a target="_blank" href="#" class="py-5 px-3 text-white"><i class="text-green-primary fab fa-twitter"></i></a>                            
                                <a target="_blank" href="#" class="py-5 px-3 text-white"><i class="text-green-primary fab fa-youtube"></i></a>
                            </div>                                        
                        </div>
                    </div>
                </div>
                <div class="bg-green-primary max-w-full text-3xl  space-x-12 font-medium menu-mob" id="navbarNavAltMarkup">
                    <ul class="container relative flex items-center">
                        <li  class="btn-nav <?php if (is_page('inicio')) echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/inicio')); ?>" class=" py-5 px-6 text-white">Início </a></li>
                        <li class="btn-nav <?php if (is_page('quem-somos')) echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/quem-somos')); ?>" class=" py-5 px-6 text-white">Quem Somos </a></li>
                        <li class="btn-nav <?php if (is_page('produtos') OR get_post_type() == 'post') echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/produtos')); ?>" class=" py-5 px-6 text-white">Produtos </a></li>
                        <li class="btn-nav <?php if (is_page('servico') OR get_post_type() == 'servico') echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/servicos')); ?>" class=" py-5 px-6 text-white">Serviços </a></li>
                        <li class="btn-nav <?php if (is_page('contato')) echo' current-menu-item' ?>"><a href="<?php echo esc_url(site_url('/contato')); ?>" class=" py-5 px-6 text-white">Contato </a></li>
                        
                        <li class="wrapper">
                            <a >
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                        <a href="<?php echo esc_url(site_url('/search')); ?>" class="search-trigger js-search-trigger nav-item nav-link"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </ul>
                </div>
                
            </nav>
        </header>