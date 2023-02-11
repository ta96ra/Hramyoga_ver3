<?php get_header(); ?>
  <div class="visual">
    <h1><?php the_title(); ?></h1>
  </div>
  <main>
    <div id="post" class="wrapper">
      <ul class="posts">
        <!-- 投稿がある限り投稿を表示し続ける -->
        <?php while(have_posts()):?>
        <?php the_post();?>
        <li class="post">
          <?php the_content(); ?>
        </li>
        <?php endwhile;?>
      </ul>

      <?php get_sidebar();?>
    </div>
  </main>
  <div id="to-top">
    <span></span>
    <span></span>
  </div>
<?php get_footer(); ?>