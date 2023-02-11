<?php get_header(); ?>
  <div class="visual">
    <h1><?php the_title(); ?></h1>
  </div>
  <main>
    <div class="wrapper" id="studio">
      <div class="studio-content">
        <!-- 投稿がある限り投稿を表示し続ける -->
        <h2>高崎市 日高町 コンシェルジュパーク</h2>
        <div class="studio-detail">
          <?php while(have_posts()):?>
          <?php the_post();?>
          <div class="studio-img">
          <?php the_content();?>
          </div>
          <?php endwhile;?>
          <dl class="text">
            <dt>住 所：</dt>
            <dd>群馬県高崎市日高町1376コンシェルジュパーク</dd>
            <dt>アクセス：</dt>
            <dd>サンキ様の隣のシルバーの建物になります。</dd>
            <dt>最寄駅：</dt>
            <dd>井野駅(群馬)から1.4km（高崎問屋町駅から1.7km）</dd>
            <dt>バス停：</dt>
            <dd>ひよこ保育園バス停から240m</dd>
            <dt>営業時間：</dt>
            <dd>毎週木曜日10:00〜16:00</dd>
          </dl>
        </div>
        <div class="map">
          <iframe class="animate" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3213.470673579177!2d139.0334614509254!3d36.34937665054786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601e8d4ea5608c43%3A0xbaf099a304e0c680!2z44Kz44Oz44K344Kn44Or44K444Ol44OR44O844Kv!5e0!3m2!1sja!2sjp!4v1642335187828!5m2!1sja!2sjp" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
    
  </main>
  <div id="to-top">
    <span></span>
    <span></span>
  </div>
<?php get_footer(); ?>