<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cédric Teixeira | Dévelopement Web</title>
    <?php wp_head()?>
</head>
<body>
    <!-- HTML Template -->
    <nav class="navbar navbar-expand-lg">
        <span class="navbar-brand">Cédric Teixeira</span>
        <!-- get the nav menu -->
        <?php wp_nav_menu([
            'container' => 'ul',
            'menu_class' => 'navbar-nav mr-auto'
            ]) ?>
    </nav>
    <!-- End HTML Template -->
    
