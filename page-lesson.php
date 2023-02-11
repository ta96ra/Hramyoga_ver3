<?php get_header(); ?>
  <div class="visual">
    <h1><?php the_title(); ?></h1>
  </div>
  <main>
    <div id="lesson" class="wrapper">
      <!-- プライベートヨガ -->
      <div id="private-yoga" class="course">
        <h2>プライベートヨガ</h2>
        <div class="content-top">
          <div class="image">
            <img class="animate left" src="<?php echo get_template_directory_uri().'/img/slide1.jpg'?>" alt="">
          </div>
          <div class="text">
            <p>プライベートヨガでは、一人ひとりに合わせて、レッスンをご提供いたします。<br>呼吸に深く意識を向けることで、心を穏やかに安定させます。<br>慢性的な体の不調や、季節の移り変わりに合わせて体を整えます。体の巡りが良くなり、気持ちも前向きになります。自分のベースでゆったりと体を整え、癒しの心地良いヨガの時間を過ごしましょう。</p>
          </div>
        </div>  
        <div class="content-bottom">
          <div class="box">
            <p class="title">こんな方におすすめ</p>
            <ul>
              <li>ヨガが初めての方</li>
              <li>心身ともに健康になりたい</li>
              <li>体の歪みや硬さを感じている方</li>
              <li>育児や仕事の間のリフレッシュ、自分自身のご褒美に</li>
              <li>ヨガを深めたい方</li>
            </ul>
          </div>           
          <p class="date">毎週木曜日【スタジオ】<br>10:00~1400 1レッスン60分</p>
          <!-- phpで表と連動させてもよし -->
          <div class="price">
            <p class="price-title">料金</p>
            <p class="price-content">初回60分3000円<br>2回目以降60分5000円<br>回数券(8000円/2回、12000円/4回)</p>
          </div>
        </div>
      </div>
      <!-- セミプライベートヨガ -->
      <div id="semi-private" class="course">
        <h2>セミプライベートヨガ</h2>
        <div class="content-top">
          <div class="image">
            <img class="animate right" src="<?php echo get_template_directory_uri().'/img/private.jpg'?>" alt="">
          </div>
          <div class="text">
            <dl>
              <dt>【ボディメイクヨガ】</dt>
              <dd>体を美しく整えたい方におすすめ★<br>フォームローラーを使いながら、体をほぐし歪み調整を行うことで、美しい姿勢へと導きます。<br>ピラティス要素も取り入れながら楽しくレッスンしましょう！<br>フォームローラ無料貸し出し有</dd>
              <dt>【ヒーリングヨガ】</dt>
              <dd>呼吸を意識することでリラックス効果を高め、心身調整を行う癒しのクラス。シャバアーサナ（最後のお休みのポーズ）では、セルフヒーリングで全身の気の巡りをよくし、心地のよいリラクゼーションの時間をお過ごしください。</dd>
              <dt>【骨盤調整ヨガ】</dt>
              <dd>骨盤を中心に体を整え、冷え性や慢性的な不調の改善を促します。代謝が上がりやすくなり、体の引き締め効果も。<br>産後の骨盤調整にもおすすめ</dd>
              <dt>【ベーシックヨガ】</dt>
              <dd>ハタヨガを中心に、基本のヨガのポーズをひとつひとつ丁寧に解説し動いていきます。<br>呼吸の練習後、ポーズの練習を行います。（基本ポーズの他に太陽礼拝も行います。）体が硬い方、運動不足の方も無理なくご参加いただけます。初心者歓迎</dd>
            </dl>
          </div>  
        </div>
        <div class="content-bottom">
          <p class="date">毎週木曜日【スタジオ】<br>10:00~1400 1レッスン60分</p>
          <div class="price">
            <p class="price-title">料金</p>
            <p class="price-content">初回60分1500円<br>2回目以降60分2000円<br>回数券(4500円/3回)</p>
          </div>
        </div>    
      </div>
      <!-- グループヨガレッスン in 観音山ファミリーパーク -->
      <div id="group-yoga" class="course">
        <h2>グループヨガレッスン in 観音山ファミリーパーク</h2>
        <div class="content-top">
          <div class="image">
            <img class="animate left" src="<?php echo get_template_directory_uri().'/img/kanoyama.jpg'?>" alt="">
          </div>
          <div class="text">
            <dl>
              <dt>-大人向けヨガクラス</dt>
              <dd>【骨盤＆心身調整ヨガ】<br>毎月1.3金曜日　13:30〜14:30<br>観音山ファミリーパーク　クラフト工房A</dd>
              <dt>-親子ヨガクラス</dt>
              <dd>【ママと一緒にはじめてのキッズヨガ】<br>毎月第1火曜日   10:30〜11:30<br>観音山ファミリーパーク　クラフト工房A</dd>
            </dl>
            <p>随時参加者募集中(参加費500円)<br>お気軽にお問い合わせください</p>
          </div>
        </div>
        <!-- <div class="content-bottom">
          <div class="price">
            <p class="price-title">料金</p>
            <p class="price-content">60分500円</p>
          </div>
        </div> -->
      </div>
      <div id="online-lesson" class="course">
        <h2>オンラインレッスン</h2>
        <div class="content-top">
          <div class="image">
            <img class="animate right" src="<?php echo get_template_directory_uri().'/img/onlinegroup.jpg'?>" alt="">
          </div>
          <div class="text">
            <dl>
              <dt>-オンラインプライベートヨガ</dt>
              <dd>お仕事や子育てが忙しい方や、遠方にお住まいの方も、おうちにいながら気軽にプライベートヨガを受けることができます。</dd>
              <dt>-オンライングループヨガ(少人数制)</dt>
              <dd>
                <p class="top">Hramyogaでは、大人向けヨガ、親子ヨガのグループレッスンを開催しております。</p>
                <ul>
                  <li>大人向けヨガ<br>ヨガがはじめての方を応援します！<br>運動不足解消にもおすすめです。</li>
                  <li>親子ヨガ<br>親子のコミュニケーションを育むヨガクラス。ポーズを通して動物や植物になりきりましょう！お子様の自己肯定感UPやママの骨盤調整にもおすすめです。</li>
                </ul>
              </dd>
            </dl>
          </div>
        </div>
        <div class="content-bottom">
          <p class="date">

          </p>
          <div class="price">
            <p class="price-title">料金（プライベートヨガ）</p>
            <p class="price-content">
              初回2000円<br>2回目以降4000円<br>回数券6400円／2回(有効期限2ヶ月)<br>回数券9600円／4回(有効期限4ヶ月)

            </p>
          </div>
          <div class="price">
            <p class="price-title">料金（グループヨガ）</p>
            <p class="price-content">
              初回無料<br>2回目以降500円<br>回数券1200円／3回(有効期限4ヶ月)
            </p>
          </div>
        </div>
      </div>
      <div id="inner-child" class="course">
        <h2>心の声に気づくセラピー</h2>
        <div class="content-top">
          <div class="image">
          <img class="animate left" src="<?php echo get_template_directory_uri().'/img/inner4.jpg'?>" alt="">
          </div>
          <div class="text">
            <p>-インナーチャイルドカード</p>
            <p>色彩豊かな絵を見ることによって、思うことや感じることをお話ししていただきます。相談者の方が意識されていないような心の奥の気持ちや本心、いつも繰り返してしまっている心のくせなどが色濃く現れます。お話を通して、心のモヤモヤや原因になっている問題を少しずつ整理していきます。心の内側の声に気づき、自己受容高めます。</p>
          </div>
        </div>
        <div class="content-bottom">
          <p class="inner-title">
            What's　自己受容？
          </p>
          <p>「自己受容」とは、できない自分をありのままに受け入れること。コンプレックスや欠点、短所を抱える自分、失敗だらけの自分、ネガティブの自分をそのまま肯定し、受け入れることです。「今のままの自分でいい」、その感覚が「自己受容」です。</p>
          <div class="box">
            <p class="title">こんな方におすすめ</p>
            <ul>
              <li>心がモヤモヤする</li>
              <li>気になる方との関係性（相性）</li>
              <li>これからの方向性</li>
              <li>心が求めているものを見つけたい方</li>
              <li>自分に自信を持ちたい方</li>
              <li>気持ちの整理がしたい方</li>
            </ul>
          </div>
          <p class="inner-title">
            さらに詳しく受けたい方
          </p>
          <p>心の声に気づくセラピーにプラスアルファでご自身の個性や特性を知ることができます。プラスアルファの内容が気になる方は個別でお問い合わせください。</p>
          <div class="price">
            <p class="price-title">料金</p>
            <p class="price-content">初回30分 2000円<br>（2回目以降 30分 3000円）<br>プラスアルファ　+1000円</p>
          </div>
        </div>
      </div>
      <!-- 投稿がある限り投稿を表示し続ける -->
      <div class="price-table">
        <h2>料金表</h2>
        <?php while(have_posts()):?>
        <?php the_post();?>
        <div class="table">
          <?php the_content();?>
        </div>
        <?php endwhile;?>
      </div>
      <!-- <?php get_sidebar();?> -->
    </div>
    
  </main>
  <div id="to-top">
    <span></span>
    <span></span>
  </div>
<?php get_footer(); ?>