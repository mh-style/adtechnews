<?php
/**
 * 
 *  Theme Name: Add Categories
 * 
 */

$categories = get_categories(array(
   'orderby' => 'name',
   'parent' => 0
));
foreach($categories as $category){
   printf('<a href="%1$s" class="mh-link"><span>%2$s</span></a>',
   esc_url(get_category_link($category->term_id)),
   esc_html($category->name));
}



?>
<!-- <a href="#" class="mh-link">
    <span>All</span>
</a>
<a href="#" class="mh-link">
    <span>Commercial</span>
</a>
<a href="#" class="mh-link">
    <span>Natural</span>
</a>
<a href="#" class="mh-link">
    <span>People</span>
</a>
<a href="#" class="mh-link">
    <span>Photograpy</span>
</a>
<a href="#" class="mh-link">
    <span>Travel</span>
</a>
<a href="#" class="mh-link">
    <span>Uncategorized</span>
</a> -->