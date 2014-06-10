<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="secondary" class="widget-area sub" role="complementary">
	<div class="sub-content center">
    <a href="#"><img src="/wp-content/themes/teclife/img/bn_recruit.png" alt="採用ページはこちら"></a>
  </div>
  <section class="sub-content list-content">
  <h1 class="heading-list">カテゴリー</h1>
  <ul>
  <?php
	    $cat_all = get_terms( "category", "fields=all&get=all" );
	    foreach($cat_all as $value):
	 ?>
	<li><a href="<?php echo get_category_link($value->term_id); ?>"><?php echo $value->name;?></a></li>
	<?php endforeach; ?>
	</ul>
	</section>

	<section class="sub-content list-content">
  <h1 class="heading-list">最近の投稿</h1>
  <ul>
	<?php
		query_posts('showposts=5');
		if (have_posts()) :
		while (have_posts()) :
		the_post();
	?>
	<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
	<?php
		endwhile;
		endif;
	?>
	</ul>
	</section>

	<section class="sub-content list-content">
  <h1 class="heading-list">アーカイブ</h1>
	<ul><?php wp_get_archives('type=monthly&limit=30'); ?></ul>
	</ul>
	</section>

	<section class="sub-content list-content tags">
    <h1 class="heading-list">タグ</h1>
    <ul>
      <?php
				$posttags =  get_terms("post_tag", "fields=all");
				if ($posttags) {
					foreach($posttags as $tag) {
						echo "<li class='tag'><a href='".get_tag_link($tag->term_id)."'>".$tag->name . "</a></li>";
					}
				}
			?>
    </ul>
  </section>

	</div><!-- #secondary -->
<?php endif; ?>