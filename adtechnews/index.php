<?php
get_header();
?>

        <section>
            <div class="mh-banner-style-1">
                <?php if(get_theme_mod('header_image')){?>
                    <img src="<?php echo esc_url(get_theme_mod('header_image'));?>" class="mh-banner-style-1-img" alt="banner">
                <?php }else{?>
                    <img src="http://placehold.jp/99ccff/003366/1200x720.jpg?text=MH-Style" class="mh-banner-style-1-img" alt="">
                <?php } ?>
            </div>
        </section>
        <section class="mh-categories">
            <div class="mh-container">
                <div class="mh-dfr mh-dfw">
                    <?php get_template_part('templates/temp/categories','content');?>
                </div>
            </div>
        </section>
        <section class="mh-post-area">
            <div class="wrapper">
                <div class="mh-row">
                    <div class="mh-col-lg-8 mh-col-md-12">
                        <div class="mh-grid">
                            <?php
                                get_template_part('templates/temp/post', 'content');
                            ?>
                        </div>
                        <div class="mh-row">
                            <div class="mh-col-lg-12 mh-text-center">
                                <div class="mh-pagination">
                                    <a href="#"><span class="mh mh-arrow-left2"></span></a>
                                    <a href="#"><span>1</span></a>
                                    <a href="#"><span>2</span></a>
                                    <a href="#"><span>3</span></a>
                                    <a href="#"><span class="mh mh-arrow-right2"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mh-col-lg-4 mh-col-md-12">
                        <aside class="mh-sidebar mh-mb-6">
                            <section class="mh-latest-post">
                                <a href="#" class="mh-fs-22 mh-fw-700 mh-color-black">Latest Post</a>
                                <div class="mh-df mh-dfc">
                                    <article class="mh-new-post">
                                        <div class="mh-row">
                                            <div class="mh-col-4 mh-post-image">
                                                <img src="http://placehold.jp/ff0000/003366/1024x71077.jpg?text=MH-Style"
                                                    class="mh-img-fluid" alt="">
                                            </div>
                                            <div class="mh-col-8 mh-post-title">
                                                <div class="mh-cat">
                                                    <a href="#" class="mh-fs-14 mh-color-gray mh-category">People</a>
                                                    <a href="#" class="mh-fs-14 mh-color-gray mh-category">Travel</a>
                                                </div>
                                                <a href="#" class="mh-fs-20 mh-fw-700 mh-color-black">MH-Style</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="mh-new-post">
                                        <div class="mh-row">
                                            <div class="mh-col-4 mh-post-image">
                                                <img src="http://placehold.jp/99ccff/003366/1024x777.jpg?text=MH-Style"
                                                    class="mh-img-fluid" alt="">
                                            </div>
                                            <div class="mh-col-8 mh-post-title">
                                                <div class="mh-cat">
                                                    <a href="#" class="mh-fs-14 mh-color-gray mh-category">People</a>
                                                    <a href="#" class="mh-fs-14 mh-color-gray mh-category">Travel</a>
                                                </div>
                                                <a href="#" class="mh-fs-20 mh-fw-700 mh-color-black">MH-Style</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="mh-new-post">
                                        <div class="mh-row">
                                            <div class="mh-col-4 mh-post-image">
                                                <img src="http://placehold.jp/99ccff/003366/1024x777.jpg?text=MH-Style"
                                                    class="mh-img-fluid" alt="">
                                            </div>
                                            <div class="mh-col-8 mh-post-title">
                                                <div class="mh-cat">
                                                    <a href="#" class="mh-fs-14 mh-color-gray mh-category">People</a>
                                                    <a href="#" class="mh-fs-14 mh-color-gray mh-category">Travel</a>
                                                </div>
                                                <a href="#" class="mh-fs-20 mh-fw-700 mh-color-black">MH-Style</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="mh-new-post">
                                        <div class="mh-row">
                                            <div class="mh-col-4 mh-post-image">
                                                <img src="http://placehold.jp/99ccff/003366/1024x777.jpg?text=MH-Style"
                                                    class="mh-img-fluid" alt="">
                                            </div>
                                            <div class="mh-col-8 mh-post-title">
                                                <div class="mh-cat">
                                                    <a href="#" class="mh-fs-14 mh-color-gray mh-category">People</a>
                                                    <a href="#" class="mh-fs-14 mh-color-gray mh-category">Travel</a>
                                                </div>
                                                <a href="#" class="mh-fs-20 mh-fw-700 mh-color-black">MH-Style</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </section>
                            <section class="mh-search-area">
                                <h3 class="mh-fs-24 mh-fw-700 mh-color-black">Search</h3>
                                <div class="mh-search mh-mt-2">
                                    <form class="mh-form-group">
                                        <input type="search" class="mh-input-control" placeholder="Search" />
                                        <button class="mh-btn mh-btn-submit"><i class="mh mh-search2"></i></button>
                                    </form>
                                </div>
                            </section>
                            <section class="mh-popular-tags">
                                <h4 class="mh-fs-24 mh-mb-3 mh-fw-700">Popular Tags</h4>
                                <div class="mh-tags mh-df mh-dfr mh-dfw">
                                    <a href="#"><span>People</span></a>
                                    <a href="#"><span>MH-Style</span></a>
                                    <a href="#"><span>Travel</span></a>
                                    <a href="#"><span>Photograpy</span></a>
                                    <a href="#"><span>Natural</span></a>
                                    <a href="#"><span>Commercial</span></a>
                                </div>
                            </section>
                        </aside>
                    </div>
                </div>
            </div>
        </section>


<?php get_footer();?>