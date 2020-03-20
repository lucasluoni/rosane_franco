<?php
/*
Plugin Name: 	Custom Post Type para as informações da tela 'Sobre mim'
Author: 		Lucas Luoni
Plugin URI: 	http://lucasluoni.com.br
Author URI: 	http://lucasluoni.com.br
Version: 		0.1
Updated: 		17.03.2020
Description: 	Adds a custom post type "Informações sobre mim".
#################################################################################################### */
/**
 * File Name 		infos-sobre-mim.php
 * @package			WordPress
 * @subpackage 	    ParentTheme_VC
 * @license 		GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version 		0.1
 * @updated 		17.03.2020
 **/
#################################################################################################### */


/****************************************************************************
 1.Cria CPT "Informações sobre mim"
****************************************************************************/

function create_post_type_infos_sobre_mim() {
  register_post_type( 'infos_sobre_mim',
    array(
      'labels' => array(
        'add_new' => __( 'Adicionar informações' ),
        'add_new_item' => __( 'Adicione as informações' ),
        'edit_item' => __( 'Edite as informações' ),
        'name' => __( 'Infos Sobre mim' ),
        'singular_name' => __( 'informação' )
    ),
		'public' => true,
		'has_archive' => true,
		// 'supports' => array( 'title', 'editor', 'thumbnail' ),
        'supports' => 'thumbnail',
        'register_metabox_cb' => 'add_custom_meta_box_sobre_mim',
        'map_meta_cap'        => true,
        'capabilities' => array( 'create_posts' => false )
    )
  );
}
add_action( 'init', 'create_post_type_infos_sobre_mim' );


/***************************************************************************************
 2.A funcção "add_custom_meta_box_sobre_mim" vai gerar os campos personalizados para o CPT
/***************************************************************************************/

// Add the Meta Box
function add_custom_meta_box_sobre_mim() {
    add_meta_box(
        'custom_meta_box_sobre_mim', // $id
        'Informações do Processo Criativo', // $title 
        'show_custom_meta_box_sobre_mim', // $callback
        'sobre_mim', // $page
        'normal', // $context
        'high'); // $priority
}
add_action('add_meta_boxes', 'add_custom_meta_box_sobre_mim');

// Field Array
$prefix = 'custom_';
$custom_meta_fields = array(
    array(
        'label' => 'Título',
        //'desc'  => 'A description for the field.',
        'id'    => $prefix.'titulo',
        'type'  => 'text'
    ),
    array(
        'label' => 'Texto',
        //'desc'  => 'A description for the field.',
        'id'    => $prefix.'texto',
        'type'  => 'textarea'
    ),
);

// The Callback
function show_custom_meta_box_sobre_mim() {
global $custom_meta_fields, $post;
// Use nonce for verification
echo '<input type="hidden" name="custom_meta_box_sobre_mim_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
     
    // Begin the field table and loop
    echo '<table class="form-table">';
      foreach ($custom_meta_fields as $field) {
          // get value of this field if it exists for this post
          $meta = get_post_meta($post->ID, $field['id'], true);
          // begin a table row with
          echo '<tr>
                  <th><label for="'.$field['id'].'">'.$field['label'].'</label></th>
                  <td>';
                  switch($field['type']) {

                    // text
                    case 'text':
                        echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="50" autofocus />';
                    break;

                    // textarea
                    case 'textarea':
                        echo '<textarea name="'.$field['id'].'" id="'.$field['id'].'" rows="4" cols="50">'.$meta.'</textarea>';
                    break;

                  } //end switch

          echo '</td></tr>';
      } // end foreach
    echo '</table>'; // end table
}

// Save the Data
add_action('save_post', 'save_custom_meta_sobre_mim');
function save_custom_meta_sobre_mim($post_id) {
    global $custom_meta_fields;
     
    // verify nonce
    if ( !isset( $_POST['custom_meta_box_sobre_mim_nonce'] ) )
        return;
    if (!wp_verify_nonce($_POST['custom_meta_box_sobre_mim_nonce'], basename(__FILE__))) 
        return $post_id;
    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;

    // check permissions
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id))
            return $post_id;
        } elseif (!current_user_can('edit_post', $post_id)) {
            return $post_id;
    }
     
    // loop through fields and save the data
    foreach ($custom_meta_fields as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    } // end foreach
}