<?php get_header(); ?>

<?php $args = array(
  'post_type' => 'recruit',
  'p' => '63'
);
$posts_array = get_posts($args); ?>
<?php foreach ($posts_array as $post) : setup_postdata($post); ?>

  <main>
    <article class="recruit_sv subvisual">
      <h2>採用情報</h2>
    </article>

    <section class="breadcrumb inner">
      <?php
      if (function_exists('bcn_display')) {
        bcn_display();
      }
      ?>
    </section>

    <div class="wrapper">
      <article class="recruit_voice">
        <section class="inner">
          <h2><?php echo CFS()->get('recruit_voice_title'); ?></h2>
          <div class="recruit_voice_contents">
            <?php
            $fields = CFS()->get('recruit_voice_tableloop');
            foreach ($fields as $field) :
            ?>
              <h3><?php echo $field['recruit_voice_h3']; ?></h3>
              <dl>
                <dt>
                  <figure><img src="<?php echo $field['recruit_voice_img']; ?>" alt=""></figure>
                </dt>
                <dd><?php echo $field['recruit_voice_dd']; ?></dd>
              </dl>
            <?php endforeach; ?>
          </div>
        </section>
      </article>
    </div>

  <?php endforeach; ?>
  <?php wp_reset_postdata(); ?>

  </main>


  <?php get_footer(); ?>