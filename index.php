<?php get_header(); ?>

<!-- products -->
<section class="section-products" >
        <!-- <h2 class="title text-center">PRODUCTS</h2> -->
        <div class="container">
            <div class="row md:grid grid-cols-1 md:grid-cols-3 gap-x-6 py-10 px-9">
                <?php
                    /* $homepagePosts = new WP_Query(array(
                    'posts_per_page' => 6,
                    'orderby' => 'date',
                    'order' => 'ASC',
                    'category_name' => 'eng'
                    )); */

                    while(have_posts()){
                    the_post(); 
                    ?>
                    <div class="product-card index" data-anime="bottom">
                            <div class="product-card__top-wraper">
                                <div class="product-card__img-wraper">
                                    <img class="product-card__img-top" src="<?php the_post_thumbnail_url('ProductImageList') ?>" alt="imagem produto">
                                    
                                </div>
                                <h4 class="product-card__title title-3 white px-9 mt-3 md:mt-9 text-left text-3xl"><?php echo wp_trim_words( get_the_title(), 5);  ?></h4>
                            </div>
                            
                            
                            <div class="product-card__body px-9 text-xl md:text-2xl">
                               
                                <p class="product-card__text">
                                    <?php echo wp_trim_words( get_the_content(), 33);  ?>
                                </p>
                                
                            </div>
                            
                       
                        <a href="<?php the_permalink(); ?>" class="product-card__hyperlink-btn">
                                <div class="btn-wk__alt btn-wk__alt--material-bubble bg-green-primary hover:bg-green-900">Ver mais</div>
                            </a>
                    </div>
                <?php 
                }get_template_part('template-parts/content-pagination');
                 wp_reset_postdata();
                 
                ?>
                            
            </div>
            
        </div>
    </section>

<?php get_footer(); ?>