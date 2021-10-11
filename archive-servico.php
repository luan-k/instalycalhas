<?php get_header() ?>

<section class="secao-pagina-sevicos">
    <div id="pagina-grid-servicos" class="mt-5 pt-5">
        <div class="container-fluid p-5">
            <div class="row grid grid-cols-1 md:grid-cols-4 gap-x-6">
                <?php 
                    $ourCurrentPage = ( get_query_var('paged') ) ? get_query_var( 'paged' ) : 1;
                    $servicosPosts = new WP_Query(array(
                        'posts_per_page' => 12,
                        'post_type' => 'servico',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'paged'=> $ourCurrentPage
                      ));
                    while($servicosPosts->have_posts()){
                        $servicosPosts->the_post();
                        get_template_part('template-parts/content-servico');
                    }
                    if ($servicosPosts->max_num_pages > 1){?>
                        <div class="col-12 d-flex justify-content-center">
                            <div class="col-12">
                                <div class="pagination-wraper">
                                    <div class="pagination-box">
                                        <?php
                                        echo paginate_links(array(
                                            'total' => $servicosPosts->max_num_pages
                                        ));?>
                                    </div>
                                </div>
                            </div>  
                        </div>
                
                    <?php 
                    } // Reset Query
                wp_reset_query();
                ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer() ?>