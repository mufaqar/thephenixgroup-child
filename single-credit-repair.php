<?php
$post_parent = wp_get_post_parent_id( get_the_ID() );

if ( $post_parent ) {
    // Redirect to child template
    get_template_part('template/single-credit-repair-child');
} else {
    // Use parent template
    get_template_part('template/single-credit-repair-parent');
}