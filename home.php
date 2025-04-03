<?php
get_header();
?>

<h1 id="dynamic-title">Bienvenido a mi sitio WordPress</h1>

<?php include 'includes/section1.php'; ?>
<?php include 'includes/section2.php'; ?>


<?php
if (date('i') % 2 == 0) {
    include 'includes/section3.php';
}
?>

<?php
get_footer();
?>