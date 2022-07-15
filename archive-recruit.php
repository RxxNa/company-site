<?php get_header(); ?>

<main>
<article class="recruit_sv subvisual">
<h2>採用情報</h2>
</article>

<section class="breadcrumb inner">
<?php
if ( function_exists( 'bcn_display' ) ) {
 bcn_display();
}
?>
</section>

<div class="wrapper">
<article class="recruit">
<section class="inner">
  <?php $taxonomy = 'recruit_cat';
  $args = array(
    'hide_empty'=> 0,
    'parent'=> 0
  );
  $terms = get_terms( $taxonomy, $args );
  if( $terms ) { ?>
<ul>
  <?php foreach( $terms as $term ) {
    $cat_image = SCF::get_term_meta( $term->term_id, $taxonomy, 'recruit_cat_img' );
    $cf_sample = wp_get_attachment_image_src( $cat_image, 'full' );
    $imgUrl = esc_url($cf_sample[0]);
  ?>
<li><a href="<?php echo get_category_link( $term->term_id ); ?>"><figure><img src="<?php echo $imgUrl; ?>"></figure>
<div>
<h3><?php echo $term->name; ?></h3>
</div>
</a>
</li>
<?php } ?>
</ul>
<?php } ?>
</section>
</article>
</div>
</main>

<?php get_footer(); ?>