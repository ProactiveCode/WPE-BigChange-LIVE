<?php 
/**
* Template Name: Blog Home
*/

get_header(); ?>


<main class="main blog" role="main" id="main-content">
    <div class="section container">
        <div class="blog__text wysiwyg">
            <?php echo the_content(); ?>
        </div>
        <div class="blog__upper">
            <div class="blog__category-wrapper">
                <div class="blog__category">
                    <?php $categories = get_categories( array(
                        'orderby' => 'name',
                        'parent'  => 0
                    )); 
                    
                    if($categories) { ?>
                        <select name="cat" id="cat">
                            <option data-children-ids="" data-children-names="" value="0" selected="selected">All Categories</option>
                            <?php foreach ($categories as $cat) { 
                                $subcatsString = '';
                                $subcatsNames = '';
                                $subcats = get_categories(array(
                                    'orderby' => 'name',
                                    'parent'  => $cat->term_id
                                )); 

                                foreach ($subcats as $sub) { 
                                    $subcatsString .= $sub->term_id . ' , ';
                                    $subcatsNames .= $sub->name . ' , ';
                                } 
                                $subcatsString = substr($subcatsString, 0, -3);
                                $subcatsNames = substr($subcatsNames, 0, -3);
                                
                                if($cat->term_id !== 8) { 
                                ?>
                                    <option data-children-ids="<?php echo $subcatsString; ?>" data-children-names="<?php echo $subcatsNames; ?>" value="<?php echo $cat->term_id; ?>"><?php echo $cat->name; ?></option>
                                <?php } ?>
                            <?php } ?>
                        </select>
                    <?php } ?>
                </div>
                <div class="blog__sub">
                    <select name="sub-cats" id="subs"></select>
                </div>
            </div>
            <div class="blog__sort">
                <select name="sort" id="sort">
                    <option value="desc"><?php echo get_field('string_newest_first', 'option'); ?></option>
                    <option value="asc"><?php echo get_field('string_oldest_first', 'option'); ?></option>
                </select>
            </div>
        </div>
        <div class="blog__wrapper">
            <div class="blog__results">
    
            </div>
            <div class="blog__loader">
                <div class="loader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
            </div>
        </div>
        
        <div class="blog__load-more hidden">
            <a href="javascript:void(0);" class="btn-normal btn-normal--light-blue"><?php echo get_field('string_load_more', 'option'); ?></a>
        </div>
    </div>
</main>
<?php get_footer(); ?>