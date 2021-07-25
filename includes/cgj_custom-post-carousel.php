<?php
function cgj_cpt() {
    $labels = array(
        'name' => _x('Carousel', 'post type general name'),
        'singular_name' => _x('carousel', 'post type singular name'),
        'add_new' => _x(__('Add New', 'carrossel-glider-js'), 'New Carousel'),
        'add_new_item' => __('New Carousel'),
        'edit_item' => __('Edit Carousel', 'carrossel-glider-js'),
        'new_item' => __('New Carousel', 'carrossel-glider-js'),
        'view_item' => __('View Carousel', 'carrossel-glider-js'),
        'search_items' => __('Search Carousel', 'carrossel-glider-js'),
        'not_found' =>  __('No records found', 'carrossel-glider-js'),
        'not_found_in_trash' => __('No records found in trash', 'carrossel-glider-js'),
        'parent_item_colon' => '',
        'menu_name' => __('Carousel', 'carrossel-glider-js')
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'carousel'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-slides',
        'supports' => array('title','editor','thumbnail','revisions'),
        'register_meta_box_cb' => 'cgj_link_meta_box',
        'show_in_rest' => true,
    );

    register_post_type( 'carousel' , $args );

    register_taxonomy(
        'categoria-carousel',
        'carousel',
        array(
            'labels' => array(
                'name'          => __('Category', 'carrossel-glider-js'),
                'menu_name'     => __('Categories', 'carrossel-glider-js'),
                'add_new'       => __('Add new category', 'carrossel-glider-js'),
                'add_new_item'  => __('Add new category', 'carrossel-glider-js'),
                'edit_item'     => __('Edit Category Topic', 'carrossel-glider-js'),
                'update_item'   => __('Edit Category Topic', 'carrossel-glider-js'),
                'view_item'     => __('View Category Topic', 'carrossel-glider-js'),
                'search_items'  => __('Search a category', 'carrossel-glider-js')
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_in_nav_menus' => true,
            'show_admin_column' => true,
            'show_in_rest'      => true,
            'show_tagcloud'     => true,
            'show_in_nav_menus' => true,
            'show_ui'           => true,
            'query_var'         => true,
            'slug'              => 'categoria-carousel',
            'hierarchical'      => true,
        )
    );
}

add_action('init', 'cgj_cpt');

function cgj_link_meta_box() {
    add_meta_box('meta_box_test', __('Link', 'carrossel-glider-js'), 'cgj_link_admin', 'carousel', 'normal', 'high');
    add_meta_box('meta_box_test2', __('Target', 'carrossel-glider-js'), 'cgj_target_admin', 'carousel', 'normal', 'high');
}

function cgj_link_admin(){
    global $post;
    $metaBoxValor = esc_url( get_post_meta($post->ID, 'url_link', true) );
    echo '<label for="url_link">URL: </label>';
    echo '<input type="url" name="url_link" id="url_link" style="width: 100%;" value="'.$metaBoxValor.'" />';
}

function cgj_target_admin(){
    global $post;
    $metaBoxValor = get_post_meta($post->ID, 'target_link', true);
    echo '<label for="target_link">'.__('Open in the same window?', 'carrossel-glider-js').'</label>';
    echo '<select name="target_link" id="target_link" style="width: 100%;">';
    if($metaBoxValor == "_self") {
        echo '<option value="_self" selected>'.__('In the same window.', 'carrossel-glider-js').'</option>';
    } else {
        echo '<option value="_self">'.__('In the same window.', 'carrossel-glider-js').'</option>';
    }

    if($metaBoxValor == "_blank") {
        echo '<option value="_blank" selected>'.__('In new window.', 'carrossel-glider-js').'</option>';
    } else {
        echo '<option value="_blank">'.__('In new window.', 'carrossel-glider-js').'</option>';
    }
    echo '</select>';
}


add_action('save_post', 'cgj_save_link');

function cgj_save_link(){
    global $post;
    $urlLink = sanitize_text_field( $_POST['url_link'] );
    $targetLink = sanitize_text_field( $_POST['target_link'] );
    update_post_meta($post->ID, 'url_link', $urlLink);
    update_post_meta($post->ID, 'target_link', $targetLink);
}
?>