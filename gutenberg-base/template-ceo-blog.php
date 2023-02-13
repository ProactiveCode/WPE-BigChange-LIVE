<?php 
/**
* Template Name: CEO Blog Home
*/

get_header(); ?>


<main class="main blog blog--ceo" role="main" id="main-content">
    <div class="section container">
        <div class="blog__text blog__text--ceo wysiwyg">
            <?php echo the_content(); ?>
        </div>
        <div class="blog__wrapper blog__wrapper--ceo">
            <div class="blog__results blog__results--ceo">
    
            </div>
            <div class="blog__loader blog__loader--ceo">
                <div class="loader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
            </div>
        </div>
        
        <div class="blog__load-more--ceo hidden">
            <a href="javascript:void(0);" class="btn-normal btn-normal--light-blue"><?php echo get_field('string_load_more', 'option'); ?></a>
        </div>
    </div>
</main>
<?php get_footer(); ?>