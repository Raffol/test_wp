<?php
if (! function_exists('testbitrix_setup')){
    function testbitrix_setup()
    {
        //кастомный лого
        add_theme_support('custom-logo', [
            'height'      => 50,
            'width'       => 130,
            'flex-width'  => false,
            'flex-height' => false,
            'header-text' => '',
            'unlink-homepage-logo' => false,
        ]);
        //динамический заголовок
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'testbitrix_setup');
}

// Подключение стилей и скриптов
add_action( 'wp_enqueue_scripts', 'testbitrix_scripts' );
function testbitrix_scripts() {

    // Основной style.css темы
    wp_enqueue_style(
        'theme-style',
        get_stylesheet_uri()
    );

    // Bootstrap
    wp_enqueue_style(
        'bootstrap',
        get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css',
        [],
        null
    );

    // Bootstrap Icons
    wp_enqueue_style(
        'bootstrap-icons',
        get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css',
        [],
        null
    );

    // AOS animations
    wp_enqueue_style(
        'aos',get_template_directory_uri() . '/assets/vendor/aos/aos.css',[],null
    );

    // Основной main.css
    wp_enqueue_style(
        'main-style',get_template_directory_uri() . '/assets/css/main.css',
        ['bootstrap'], // можно указать зависимости
        null
    );

    //Если нужен JS:
    wp_enqueue_script(
        'bootstrap.bundle.min',
        get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
        [],
        '',
        true
    );wp_enqueue_script(
        'aos',
        get_template_directory_uri() . '/assets/vendor/aos/aos.js',
        [],
        '',
        true
    );wp_enqueue_script(
        'main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '',
        true
    );
}
//регистрация несколько областей меню сразу
function testbitrix_menus()
    //собираем несколько зон меню
{
    $location = [
      'header' => __('Header Menu', 'testbitrix'),
      'footer' => __('Footer Menu', 'testbitrix'),
    ];
    //регистрация областей из $location
    register_nav_menus($location);
}

//хук событие
add_action('init', 'testbitrix_menus');
//класс nav-item к меню
add_filter('nav_menu_css_class', 'custom_menu_css_class', 10, 4);
//список классов пунктов меню
function custom_menu_css_class($classes)
{
    $classes[] = 'nav-item';
    //возврат классов пунктов меню
    return $classes;
}
