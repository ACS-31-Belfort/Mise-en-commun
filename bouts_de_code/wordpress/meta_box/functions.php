<?php 

/**
 * Créer une métabox
 * @link https://developer.wordpress.org/plugins/metadata/custom-meta-boxes/
 * FUNCTIONS =>
 * add_meta_box : https://developer.wordpress.org/reference/functions/add_meta_box/
 * add_action : https://developer.wordpress.org/reference/functions/add_action/
 */

// la fonction de base, de laquelle va découler les autres fonctions.
// On fait appel à la fonction "add_meta_box", qui prend quelques arguments pour spécifier les détails sur la méta box
function lucas_add_custom_box()
{
        add_meta_box('lucas_box_1','Slogan', 'lucas_box_1_html','page');
	}
//add action permet d'accrocher une fonction à un "hook"
add_action('add_meta_boxes', 'lucas_add_custom_box');

//le troisième argument représente la fonction qui est appelée par la méta box, pour qu'elle s'affiche. Cette fonction, à définir par l'utilisateur, doit "echo" du HTML.
function lucas_box_1_html($post)
{
	?>
    <label for="wporg_field">Description for this field</label>
    <!-- ATTENTION AU name=... il sera utilisé plus tard -->
    <select name="lucas_box" id="wporg_field" class="postbox">
        <option value="">Select something...</option>
        <option value="something">Something</option>
        <option value="else">Else</option>
    </select>
    <?php
}

// Il nous faut maintenant spécifier ce qu'il se passe quand on enregistre la page.
// Dans notre cas, on demande à wordpress d'ajouter les données à la table "postmeta".
/**
 * update_post_meta : https://developer.wordpress.org/reference/functions/update_post_meta/
 */
function lucas_save_postdata($post_id)
{
    if (array_key_exists('lucas_box', $_POST)) {
        update_post_meta(
            $post_id,
            '_lucas_box',
            $_POST['lucas_box']
        );
    }
}
// On hook notre fonction au hook "save_post", qui s'enclenche quand on publie un post/page ou qu'on le met à jour.
add_action('save_post', 'lucas_save_postdata');