<?php

function carousel_post() {
    $labels = array(
        'name' => _x('Carousel', 'post type general name'),
        'singular_name' => _x('carousel', 'post type singular name'),
        'add_new' => _x('Adicionar Novo', 'Novo Carousel'),
        'add_new_item' => __('Novo Carousel'),
        'edit_item' => __('Editar Carousel'),
        'new_item' => __('Novo Carousel'),
        'view_item' => __('Ver Carousel'),
        'search_items' => __('Procurar Carousel'),
        'not_found' =>  __('Nenhum registro encontrado'),
        'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Carousel'
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
        'register_meta_box_cb' => 'link_meta_box',
        'show_in_rest' => true,
    );

    register_post_type( 'carousel' , $args );

    register_taxonomy(
        'categoria-carousel',
        'carousel',
        array(
            'labels' => array(
                'name'          => 'Categoria',
                'menu_name'     => 'Categorias',
                'add_new'       => 'Adicionar novo tema',
                'add_new_item'  => 'Adicionar novo tema',
                'edit_item'     => 'Editar tópico do Categoria',
                'update_item'   => 'Editar tópico do Categoria',
                'view_item'     => 'Visualizar tópico do Categoria',
                'search_items'  => 'Encontrar um tópico'
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

add_action('init', 'carousel_post');

function link_meta_box() {
    add_meta_box('meta_box_test', __('Link'), 'link_admin', 'carousel', 'normal', 'high');
}

function link_admin(){
    global $post;
    $metaBoxValor = get_post_meta($post->ID, 'url_link', true);
    echo '<label for="url_link">URL: </label>';
    echo '<input type="url" name="url_link" id="url_link" style="width: 100%;" value="'.$metaBoxValor.'" />';
}

add_action('save_post', 'save_link');

function save_link(){
    global $post;
    update_post_meta($post->ID, 'url_link', $_POST['url_link']);
}


function teste() {

    return 'testando funcao externa';
}