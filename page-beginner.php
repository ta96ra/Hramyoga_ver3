<?php get_header(); ?>
  <div class="visual">
    <h1><?php the_title(); ?></h1>
  </div>
  <main>
    <div id="beginner" class="wrapper beginner">
      <div class="merits">
        <h2>Hramyogaが選ばれる理由</h2>
        <div class="item">
          <p class="text-en">
            <span class="tr0">r</span>
            <span class="tr1">e</span>
            <span class="tr2">a</span>
            <span class="tr3">s</span>
            <span class="tr4">o</span>
            <span class="tr5">n</span>
            <span class="number">01</span>
          </p>
          <div class="title">
            <h3>初めてでも大丈夫</h3>
          </div>
          <p>はじめての方でもお話をお聞きしながらお客様に合わせてレッスンを進めていきますので、ご安心してご参加いただけます。</p>
        </div>
        <div class="item">
          <p class="text-en">
            <span class="tr0">r</span>
            <span class="tr1">e</span>
            <span class="tr2">a</span>
            <span class="tr3">s</span>
            <span class="tr4">o</span>
            <span class="tr5">n</span>
            <span class="number">02</span>
          </p>
          <div class="title">
            <h3>オンラインで解決</h3>
          </div>
          <p>育児や仕事で忙しい方も、お家にいながら気軽にオンラインレッスンをZoomで受けることができます。</p>
        </div>
        <div class="item">
          <p class="text-en">
            <span class="tr0">r</span>
            <span class="tr1">e</span>
            <span class="tr2">a</span>
            <span class="tr3">s</span>
            <span class="tr4">o</span>
            <span class="tr5">n</span>
            <span class="number">03</span>
          </p>
          <div class="title">
            <h3>運動が苦手な方、筋力に自信がない方も大丈夫です</h3>
          </div>
          <p>その日の状態に合わせて、無理なく体を動かしていきますので、身体の健康維持に最適です。ヨガが初めてな方も丁寧にサポートしていきますのでご安心ください。</p>
        </div>
        <div class="item">
          <p class="text-en">
            <span class="tr0">r</span>
            <span class="tr1">e</span>
            <span class="tr2">a</span>
            <span class="tr3">s</span>
            <span class="tr4">o</span>
            <span class="tr5">n</span>
            <span class="number">04</span>
          </p>
          <div class="title">
            <h3>冷え、だるさ、ストレス、不眠などの体の不調を改善します</h3>
          </div>
          <p>呼吸を大切にしてヨガを行うことにより、心身の調整を行います。様々な不調を改善につなげていきます。</p>
        </div>
        <div class="item">
          <p class="text-en">
            <span class="tr0">r</span>
            <span class="tr1">e</span>
            <span class="tr2">a</span>
            <span class="tr3">s</span>
            <span class="tr4">o</span>
            <span class="tr5">n</span>
            <span class="number">05</span>
          </p>
          <div class="title">
            <h3>セラピーにより気持ちを整理して自分に自信を持てるようにサポートします</h3>
          </div>
          <p>インナーチャイルドカードセラピーにより、自分自身の心の内側に耳を傾け、自分の本当にやりたかったことや、心が喜ぶことに気づくことができます。その結果、自己肯定感が高まり、自信につながります。心の根底にある本当の気持ちとつながり、自分にしかない本来の輝きを表現していきましょう！</p>
        </div>
      </div> 
    </div>   
        <!-- 投稿がある限り投稿を表示し続ける -->
    <div class="about">
      <h2>Hramyogaに対する想い</h2>
      <?php while(have_posts()):?>
      <?php the_post();?>
      <div class="about-yoga">
      <?php the_content();?>
      </div>
      <?php endwhile;?>
      <div class="career">
        <p>資格・経歴等：</p>
        <p>2011年よりヨガ指導開始。群馬県内のヨガスタジオにてヨガ講師として勤務後、2019年からフリーランスとして活動。これまでに、カフェ、お寺、公民館等でヨガの指導をする。2022年よりHramyogaスタジオ主催。</p>
        <div class="skill">
          <ul>
            <li>全米ヨガアライアンス200h修了</li>
            <li>シニアヨガ、キッズヨガ、骨盤調整ヨガ、きれいになるヨガ養成講座修了</li>
            <li>栄養士、マクロビオティックパーティーコーディネーター</li>
            <li>インナーチャイルドカードセラピスト</li>
          </ul>
          <div class="image">
            <img src="<?php echo get_template_directory_uri().'/img/hiro.jpg' ;?>" alt="">
          </div>
        </div>
      </div>  
      <div class="bg"></div> 
    </div>
    <div class="wrapper beginner">
      <div class="reserve">
        <h2>ご予約の流れ</h2>
        <div class="top">
          <div class="item animate">
            <p>スケジュールを見て日時を決めてご予約</p>
          </div>
          <div class="arrow animate delay-one"></div>
          <div class="item animate delay-one">
            <p>Zoomをダウンロードして料金の振込<br>（オンラインのみ）</p>
          </div>
          <div class="arrow animate delay-two"></div>
          <div class="item animate delay-two">
            <p>レッスン開始</p>
          </div>
        </div>
        <div class="center">
          <div class="prepare animate">
            <h3>当日準備いただくもの</h3>
            <ul>
              <li>ヨガマット（レンタル可）</li>
              <li>バスタオル</li>
              <li>飲み物</li>
              <li>動きやすい服装（更衣室の準備はございません）</li>
            </ul>
          </div>
          <div class="pay animate delay-one">
            <h3>お支払い</h3>
            <dl>
              <dt>スタジオ</dt>
              <dd>現金都度払いとなります。</dd>
              <dt>オンライン</dt>
              <dd>銀行振り込み(手数料お客様負担)</dd>
            </dl>
          </div>
        </div>
        <div class="bottom">

        </div>
      </div>
      <!-- <?php get_sidebar();?> -->
    </div>
  </main>
  <div id="to-top">
    <span></span>
    <span></span>
  </div>
<?php get_footer(); ?>