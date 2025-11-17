<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

</head>

<body class="scrolled">

<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <?php
            if( has_custom_logo() ){
                echo get_custom_logo();
            }
            ?>
        <nav id="navmenu" class="navmenu">
           <?php
           wp_nav_menu( array(
               'menu'            => '',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
               // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
               'container'       => 'false',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
               'container_class' => '',              // (string) class контейнера (div тега)
               'container_id'    => '',              // (string) id контейнера (div тега)
               'menu_class'      => 'navbar_nav',          // (string) class самого меню (ul тега)
               'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
               'link_before'     => '',              // (string) Текст перед анкором (текстом) ссылки
               'link_after'      => '',              // (string) Текст после анкора (текста) ссылки
               'depth'           => 2,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
               'walker'          => '',              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
               'theme_location'  => 'header'               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
           ) );
           ?>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>