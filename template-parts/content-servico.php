<div class="col-12 col-sm-4">
                            <div class="card-servico primary-bg" data-anime="bottom">
                                <a href="<?php the_permalink(); ?>" class="hyperlink-wraper">
                                    <div class="img-wraper">
                                        <img class="card-servico-img-top" src="<?php the_post_thumbnail_url('ProductImageList') ?>" alt="Card-servico image cap">
                                    </div>
                                    <div class="card-servico-body px-6 pt-0 md:pt-6">
                                        <h4 class="card-servico-title title-3 text-white"><?php echo wp_trim_words( get_the_title(), 5);  ?></h4>
                                        <p class="card-servico-text "> <?php 
                                        if (has_excerpt()) {
                                            echo wp_trim_words( get_the_excerpt(), 30);
                                        }else {
                                            echo wp_trim_words(get_the_content(), 30);
                                        }  ?> </p>
                                            
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>