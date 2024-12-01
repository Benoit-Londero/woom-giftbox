<?php 

/* Template Name: Contact */


$intro = get_field('accroche_introduction');
$info = get_field('informations-contact');
$form = get_field('formulaire-contact');

?>

<?php get_header();?>

<?php get_template_part( 'templates-parts/section-header');?>
<?php get_template_part( 'templates-parts/section-contact');?>

<?php get_template_part( 'templates-parts/section-presentation');?>
<?php get_footer();?>