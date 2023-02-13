<?php 
/**
* Template Name: Big Community
*/

get_header(); ?>


<main class="main blog blog--bigcommunity" role="main" id="main-content">

    <div class="section container">
     
        <div class="blog__text blog__text--bigcommunity wysiwyg">
            <?php echo the_content(); ?>
        </div>
        <div class="blog__wrapper blog__wrapper--bigcommunity">
            <div class="blog__results blog__results--bigcommunity">
    
            </div>
            <div class="blog__loader blog__loader--bigcommunity">
                <div class="loader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
            </div>
        </div>
        
        <div class="blog__load-more--bigcommunity hidden">
            <a href="javascript:void(0);" class="btn-normal btn-normal--light-blue"><?php echo get_field('string_load_more', 'option'); ?></a>
        </div>
    </div>
</main>
<?php get_footer(); ?>