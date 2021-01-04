<?php
/**
 * Template Name: Blog Posts
 */
?>
<?php if(have_posts()):?>
<?php while(have_posts()) : the_post();?>

<article class="mh-article mh-blog-post">
    <!-- <img src="http://placehold.jp/ff0000/003366/1024x777.jpg?text=MH-Style" class="mh-img-fluid" /> -->
    <?php 
    if(has_post_thumbnail()):?>
        <img src="<?php echo get_the_post_thumbnail_url();?>" alt="Post image" class="mh-img-fluid" />
    <?php endif;?>
    <div class="mh-post-info">
        <div class="mh-post-author">
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><span class="mh-fs-14 mh-color-gray">by <?php the_author();?> <?php echo get_the_date();?></span></a>
        </div>
        <div class="mh-post-title">
            <a href="<?php the_permalink();?>">
                <h1 class="mh-color-gray"><?php echo the_title();?></h1>
            </a>
        </div>
        <div class="mh-post-content">
            <p class="mh-para mh-fs-16 mh-mb-2">
                <?php the_content();?>
            </p>
        </div>
        <hr>
        <div class="mh-post-cat">
            <a href="#">
                <span class="mh-fs-14 mh-text-uppercase mh-color-gray">People</span>
            </a>
            <a href="#">
                <span class="mh-fs-14 mh-text-uppercase mh-color-gray">Travel</span>
            </a>
        </div>
    </div>
</article>
<?php endwhile;?>
<?php else:?>
    <?php echo wpautop('Sorry, No posts were found');?>
<?php endif;?>
<!-- <div class="mh-card-item">
    <img src="http://placehold.jp/ff0000/003366/1024x777.jpg?text=MH-Style" class="mh-img-fluid" />
    <div class="mh-card-content">
        <div class="mh-post-author">
            <a href="#"><span class="mh-fs-14 mh-color-gray">by Admin January 1,
                    2021</span></a>
        </div>
        <a href="#">
            <h1 class="mh-card-header mh-color-gray">MH-Style 1</h1>
        </a>
        <p class="mh-card-text mh-fs-16 mh-mb-2">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nesciunt
            delectus placeat a dignissimos nobis, suscipit cumque expedita magni ea.
        </p>
        <hr>
        <div class="mh-post-cat">
            <a href="#">
                <span class="mh-fs-14 mh-text-uppercase mh-color-gray">People</span>
            </a>
            <a href="#">
                <span class="mh-fs-14 mh-text-uppercase mh-color-gray">Travel</span>
            </a>
        </div>
    </div>
</div> -->
