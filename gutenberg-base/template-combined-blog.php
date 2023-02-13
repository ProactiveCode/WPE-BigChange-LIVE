<?php 
/**
* Template Name: Combined Blog Home
*/

get_header(); ?>


<main class="main combined-blog" role="main" id="main-content">
    <div class="section container">
        <div class="combined-blog__title">
            <h1>BIG NEWS</h1>
            <h2>THE LATEST UPDATES FROM BIGCHANGE, OUR CUSTOMERS, AND OUR CHAIRMAN</h2>
        </div>
        <div class="combined-blog__text wysiwyg">
            <?php echo the_content(); ?>
        </div>
        <div class="combined-blog__carousel owl-carousel">
            <?php  
            $query_vars['post_type'] = 'post';
            $query_vars['posts_per_page'] = 3;
            $query_vars['post_status'] = 'publish';
            $link = $_POST['url'];
                    
            $blogid = 1; //default UK
            if( strpos( $link, '/fr/' ) !== false ) {
                $blogid = 6;
            }

            if( strpos( $link, '/cy/' ) !== false ) {
                $blogid = 7;
            }

            if( strpos( $link, '/us/' ) !== false ) {
                $blogid = 8;
            }

            if( strpos( $link, '/nz/' ) !== false ) {
                $blogid = 9;
            }

            if( strpos( $link, '/au/' ) !== false ) {
                $blogid = 10;
            }
            switch_to_blog($blogid);

            $ajax_query = new WP_Query( $query_vars );
            $posts = $ajax_query->posts;
            if($ajax_query->have_posts()) {
                while ( $ajax_query->have_posts() ) {
                    $ajax_query->the_post();
                    $categories = wp_get_post_categories(get_the_ID());
                    $catString = '';
                    $continue = get_field('string_read_more', 'option'); ?>

                    <a href="<?php echo get_permalink($post->ID); ?>" class="combined-blog__card combined-card">
                        <div class="combined-card__image" style="background-image:url(<?php echo get_the_post_thumbnail_url($post->ID); ?>);"></div>
                        <div class="combined-card__lower">
                            <div class="combined-card__lower-wrapper">
                                <div class="combined-card__title">
                                    <h3><?php echo get_the_title($post->ID); ?></h3>
                                </div>
                                <div class="combined-card__link"><p><?php echo $continue; ?></p></div>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            <?php } ?>
        </div>
        <div class="combined-blog__upper">
            <div class="combined-blog__search">
                <input type="text" placeholder="Search...">
            </div>
            <div class="combined-blog__category-wrapper">
                <div class="combined-blog__type">
                    <select name="articleType" id="articleType">
                        <option value="0" selected="selected">All Articles</option>
                        <?php
                        $typeCategories = get_categories( array(
                            'orderby' => 'name',
                            'parent'  => 0,
                            'include' => array(8,10)
                        )); 

                        foreach ($typeCategories as $typeCat) { 
                            $typeSubcatsString = '';
                            $typeSubcatsNames = '';
                            $typeSubcats = get_categories(array(
                                'orderby' => 'name',
                                'parent'  => $typeCat->term_id
                            )); 

                            foreach ($typeSubcats as $typeSub) { 
                                $typeSubcatsString .= $typeSub->term_id . ' , ';
                                $typeSubcatsNames .= $typeSub->name . ' , ';
                            } 
                            $typeSubcatsString = substr($typeSubcatsString, 0, -3);
                            $typeSubcatsNames = substr($typeSubcatsNames, 0, -3);
                        
                            ?>
                                <option data-children-ids="<?php echo $typeSubcatsString; ?>" data-children-names="<?php echo $typeSubcatsNames; ?>" value="<?php echo $typeCat->term_id; ?>"><?php echo $typeCat->name; ?></option>
                        <?php } ?>
                        <option value="162">News</option>
                    </select>
                </div>
                <div class="combined-blog__category">
                    <?php $categories = get_categories( array(
                        'orderby' => 'name',
                        'exclude_tree' => array(8, 10),
                    )); 
                    
                    if($categories) { ?>
                        <select name="cat" id="cat">
                            <option value="0" selected="selected">All Categories</option>
                            <?php foreach ($categories as $cat) { 
                                if($cat->term_id !== 8 && $cat->term_id !== 10) { ?>
                                    <option value="<?php echo $cat->term_id; ?>"><?php echo $cat->name; ?></option>
                                <?php } ?>
                            <?php } ?>
                        </select>
                    <?php } ?>
                </div>
                <!-- <div class="combined-blog__sub">
                    <select name="sub-cats" id="subs"></select>
                </div> -->
            </div>
            <div class="combined-blog__sort">
                <select name="sort" id="sort">
                    <option value="desc"><?php echo get_field('string_newest_first', 'option'); ?></option>
                    <option value="asc"><?php echo get_field('string_oldest_first', 'option'); ?></option>
                </select>
            </div>
        </div>
        <div class="combined-blog__wrapper">
            <div class="combined-blog__results">
    
            </div>
            <div class="combined-blog__loader">
                <div class="loader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
            </div>
        </div>
        
        <div class="combined-blog__load-more hidden">
            <a href="javascript:void(0);" class="btn-normal btn-normal--light-blue"><?php echo get_field('string_load_more', 'option'); ?></a>
        </div>
    </div>
</main>
<?php get_footer(); ?>