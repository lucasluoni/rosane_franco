<?php
/*
Plugin Name: 	Custom Post Type para adição do conteúdo da Tela "Sobre mim"
Author: 		  Lucas Luoni
Plugin URI: 	http://lucasluoni.com.br
Author URI: 	http://lucasluoni.com.br
Version: 		  0.1
Updated: 		  18.03.2020
Description: 	Adds a custom post type "Depoimentos".
#################################################################################################### */
/**
 * File Name 		sobre-mim.php
 * @package			WordPress
 * @subpackage 	ParentTheme_VC
 * @license 		GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version 		0.1
 * @updated 		18.03.2020
 **/
#################################################################################################### */


/****************************************************************************
 1.Cria CPT "Sobre mim"
****************************************************************************/

function create_post_type_sobre_mim() {
  register_post_type( 'sobre_mim',
    array(
      'labels' => array(
        'add_new' => __( 'Adicionar Cliente' ),
        'add_new_item' => __( 'Editar informações da tela' ),
        'edit_item' => __( 'Editar informações' ),
        'name' => __( 'Sobre mim' ),
        'singular_name' => __( 'Sobre mim' )
    ),
		'public' => true,
		'has_archive' => false,
		'supports' => array( 'title', 'thumbnail', 'editor' ),
    'map_meta_cap'        => true,
    'capabilities' => array( 'create_posts' => false )
    )
  );
}
add_action( 'init', 'create_post_type_sobre_mim' );


/***************************************************************************************
 2.A funcção "add_custom_meta_box_expertise" vai gerar os campos personalizados para o CPT
/***************************************************************************************/

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

add_action( 'admin_footer', 'script_repete_portfolio' );
function script_repete_portfolio() {
?>

<script type="text/javascript">
    /* jquery para repeatable fields (textarea) de áreas expertise na tela de autor */
    jQuery('.repeatable-add').click(function() {
        // The first function looks for the add button and adds a new blank field row to the end of the list of fields. 
        // This is set up generically so that you can have as many of these repeatable fields as you need.
        // "field" is a cloned version of the last field row
        field = jQuery(this).closest('td').find('#custom_repeatabel-repeatable li:last').clone(true);
        //"fieldLocation" reminds the script where the end of the list is
        fieldLocation = jQuery(this).closest('td').find('#custom_repeatabel-repeatable li:last');
        // Find the input within "field" and rest it's value to empty and add 1 to the numerical integer we'll use to save the data as an array
        jQuery('input', field).val('').attr('name', function(index, name) { 
        //alert("The malucas button was clicked.");
            return name.replace(/(\d+)/, function(fullMatch, n) {
                return Number(n) + 1;
            });
        })
        //Add the field after the fieldLocation
        field.insertAfter(fieldLocation, jQuery(this).closest('td'))
        return false;
    });
        //The next function gives each remove button the ability to remove that row when it is clicked. 
        jQuery('.repeatable-remove').click(function(){
        //alert("The first button was clicked.");
        if($('.repeatable-remove').length > 1) {
        jQuery(this).parent().remove();
        return false;
        }
    });
    //set the lists to be sortable and define a handle so that you can drag and drop the rows.     
    jQuery('#custom_repeatabel-repeatable').sortable({
        opacity: 0.6,
        revert: true,
        cursor: 'move',
        handle: '.sort'
});
</script>
<?php }