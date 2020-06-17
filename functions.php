<?php 

/** Перечень стилей и скриптов **/
function load_style_script () {
	wp_enqueue_style('bootstrap.min', '//stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
    wp_enqueue_style('owl.carousel.min', get_template_directory_uri() . '/owlcarousel/owl.carousel.min.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');

    wp_enqueue_script('jquery-3.4.1.min', '//code.jquery.com/jquery-3.4.1.min.js');
    wp_enqueue_script('popper.min', '//cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');
    wp_enqueue_script('bootstrap.min', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js');
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js');
    wp_enqueue_script('owl.carousel.min', get_template_directory_uri() . '/owlcarousel/owl.carousel.min.js');

}

/** Загрузка стилей и скриптов **/
add_action('wp_enqueue_scripts', 'load_style_script');

/** Отключаем визуальный редактор **/
function remove_editor() {
  remove_post_type_support('page', 'editor');
}
add_action('admin_init', 'remove_editor');

/** Включаем меню **/
register_nav_menu('menu', 'Главное меню');

/** Создаем новый тип записей - Custom **/
//add_action('init', 'custom');
//function services() {
//	register_post_type('custom', array(
//			'public' => true,
//			'supports' => array ('title'),
//			'labels' => array (
//				'name' => 'Custom',
//				'add_new' => 'Add custom',
//				'all_items' => 'All custom',
//				'add_new_item' => 'Add custom'
//			),
//			'menu_position' => 4,
//			'menu_icon' => 'custom-logo'
//		));
//}

?>