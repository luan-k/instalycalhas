<?php get_header(); 
while(have_posts()){
the_post();

?>
    <div class="page-wraper">
        <section class="single-featured-image" style="background-image:url(<?php if(has_post_thumbnail()){  the_post_thumbnail_url('full'); } else { echo get_theme_file_uri('/img/standart-banner.png'); }  ?>" alt="" >
            <div class="container">
                <h1 class="title title-page"><?php the_title() ?></h1>
            </div>

        </section>
        <div class="container content">
            <div class="row grid grid-cols-1">
                <div class="col-12">
                    <div class="content"><?php the_content() ?></div>
                </div>
            </div>
        </div>


    </div>

<?php 
    } wp_reset_postdata();
    get_footer(); 

?>