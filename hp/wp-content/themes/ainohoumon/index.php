<?php get_header(); ?>

        <!-- 中央メイン画像 -->
        <div id="mainimage">
            <?php if (function_exists('easingsliderlite')) {
    easingsliderlite();
} ?>
        </div>
        <!-- / 中央メイン画像 -->

        <!--
        <div id="mainimage">
            <img src="<?php bloginfo('template_directory');?>/images/main.png" width="910" height="288" alt="banner" />
        </div>
        -->

        <!-- 中央カラム -->
        <div id="main">


            <h2>
                <span>
                    <img src="<?php bloginfo('template_directory');?>/images/icon_5.png" />
                </span>
                是非一度、お問い合わせ下さい
            </h2>
            <!-- 小画像 -->
            <div class="box">
                <a href="/hp/free"><img src="http://ainohoumon.com/hp/wp-content/uploads/2014/03/slider03.png" width="600"  class="box_img" alt="banner" /></a>
            </div>
            <div class="clear"></div>

            <h2>
                <span>
                    <img src="<?php bloginfo('template_directory');?>/images/icon_2.png" />
                </span>
                無料体験のお知らせ
            </h2>
            <!-- 小画像 -->
            <div class="box">
                <a href="/hp/free"><img src="<?php bloginfo('template_directory');?>/images/top_free.png" width="600"  class="box_img" alt="banner" /></a>
            </div>
            <div class="clear"></div>
            <!-- / 小画像 一番最後の画像にのみ class="last" を入力してください。-->

            <h2>
                <span>
                    <img src="<?php bloginfo('template_directory');?>/images/icon_6.png" />
                </span>
                メディア掲載情報のお知らせ
            </h2>
            <!-- 小画像 -->
            <div class="box">
                <a href="/hp/archives/152"><img src="<?php bloginfo('template_directory');?>/images/book.png" width="270" height="214" class="box_img" alt="訪問マッサージ 活用術" /></a><br />
                <span class="bullet"></span>【訪問マッサージ 活用術】に掲載されました。
            </div>
            <div class="box last">
                <a href="/hp/archives/186"><img src="<?php bloginfo('template_directory');?>/images/sundaymainichi.png" width="270" height="214" class="box_img" alt="サンデー毎日" /></a><br />
                <span class="bullet"></span>【サンデー毎日】に掲載されました。
            </div>
            <div class="clear"></div>
            <!-- / 小画像 一番最後の画像にのみ class="last" を入力してください。-->


            <h2>
                <span>
                    <img src="<?php bloginfo('template_directory');?>/images/icon_3.png" />
                </span>
                株式会社あいの訪問マッサージサービスについて
            </h2>
            <!-- 小画像 -->
            <div class="box">
                <img src="<?php bloginfo('template_directory');?>/images/product1.png" width="295" height="151" class="box_img" alt="banner" /><br />
                株式会社あいの訪問マッサージサービスは、<br />訪問マッサージ事業を展開しております。
                <p class="button"><a href="houmon">訪問マッサージ事業</a></p>
            </div>
            <div class="box last">
                <img src="<?php bloginfo('template_directory');?>/images/product2.png" width="295" height="151" class="box_img" alt="banner" /><br />
                あん摩マッサージ指圧師の資格をお持ちの方へ<br />求人募集について。
                <p class="button"><a href="boshu">求人募集</a></p>
            </div>
            <!-- / 小画像 一番最後の画像にのみ class="last" を入力してください。-->



            <h2>
                <span>
                    <img src="<?php bloginfo('template_directory');?>/images/icon_7.png" />
                </span>
                訪問エリアのお知らせ
            </h2>
            <!-- 小画像 -->
            <div class="box">
                <a href="/hp/houmon"><img src="<?php bloginfo('template_directory');?>/images/hp_houmonarea.png" width="600"  class="box_img" alt="banner" /></a>
                <div class="listbtn" >
                    <a href="http://ainohoumon.com/001_noshuketu.php" class="btn-green">脳梗塞後遺症</a>
                    <a href="http://ainohoumon.com/005_noshuketu.php" class="btn-green">脳内出血後遺症</a>
                    <a href="http://ainohoumon.com/002_haiyou.php" class="btn-green">廃用症候群</a>
                    <a href="http://ainohoumon.com/003_als.php" class="btn-green">筋萎縮性側索硬化症</a>
                    <a href="http://ainohoumon.com/004_skaries.php" class="btn-green">脊椎カリエス</a>
                    <a href="http://ainohoumon.com/006_zakotsu.php" class="btn-green">坐骨神経痛</a>
                    <a href="http://ainohoumon.com/007_henkei.php" class="btn-green">変形性脊椎症</a>
                    <a href="http://ainohoumon.com/008_parkin.php" class="btn-green">パーキンソン病</a>
                    <a href="http://ainohoumon.com/009_igan.php" class="btn-green">胃がん術後</a>
                    <a href="http://ainohoumon.com/010_riumachi.php" class="btn-green">関節リウマチ</a>
                    <a href="http://ainohoumon.com/011_kossetsu.php" class="btn-green">大腿骨頸部骨折による後遺症"</a>
                </div>
            </div>
            <div class="clear"></div>


        </div>
        <!-- / 中央カラム -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
