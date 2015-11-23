<?php get_header(); ?>



<div id="main">



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php
    $iconDisplay = array(
        "会社概要" => "5",
        "訪問マッサージ事業" => "1",
        "お問い合わせ" => "2",
        "あん摩マッサージ指圧師募集" => "3",
    );

?>
<h2>
    <span>
        <img src="<?php bloginfo('template_directory');?>/images/icon_<?php echo $iconDisplay[get_the_title()]?$iconDisplay[get_the_title()]:3; ?>.png" />
    </span>
    <?php the_title();?>
</h2>

<!--<div id="date"><?php the_date('Y-m-d'); ?></div>-->

<?php the_content(); ?>



<!--

<div id="date">カテゴリー: <?php the_category(', '); ?>　<?php the_tags('タグ: ', ', '); ?></div>

<div id="next">
<?php previous_post_link('←「%link」前の記事へ　'); ?>
<?php next_post_link('　次の記事へ「%link」→'); ?>
</div>
<?php comments_template(); ?>


<p>
トラックバックURL
<input type="text" value="<?php trackback_url(); ?>">
</p>


<?php endwhile; else: ?>

<p><?php echo 'お探しの記事、ページは見つかりませんでした。'; ?></p>

<?php endif; ?>

-->




</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
