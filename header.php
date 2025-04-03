<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('Ismael Illanes WordPress'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body>
<header>
    <h1>Tema de Ismael Illanes WordPress</h1>
</header>

<footer>
    <p>© <?php echo date('Y'); ?> - Mi Tema WordPress</p>
    <button onclick="alert('¡¡Gracias por la visita!!')">Haz clic aquí</button>
</footer>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
</body>
</html>