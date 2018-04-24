<?php
/**
* Template Name: Contact
*/
get_header();
get_template_part('templates/header-bar', 'tpl');
$contact_fields = new CMB2Fields(get_the_ID());
if(have_posts()): while(have_posts()): the_post();
?>

<?php
endwhile; endif;
get_template_part('templates/footer-bar', 'tpl');
get_footer()
?>
