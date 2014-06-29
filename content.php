<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="post">
		<?php the_post_thumbnail(); ?>
		<h1 class="post-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<div class="post-data">
		  <p class="meta"><?php the_time('Y年m月d日'); ?><br>カテゴリー：<?php the_category(', '); ?></p>
		  <ul class="social">
		    <li>
		      <div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="120" data-show-faces="true" data-font="arial"></div>
		    </li>
		    <li>
		      <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-lang="en">Tweet</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		    </li>
		    <li>
		      <a href="http://b.hatena.ne.jp/entry/<?php the_permalink(); ?>" class="hatena-bookmark-button" data-hatena-bookmark-title="<?php the_title(); ?>" data-hatena-bookmark-layout="standard-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="http://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
		    </li>
		    <li class="google"><div class="g-plusone" data-size="medium"></div>
		      <script type="text/javascript">
		        (function() {
		          var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		          po.src = 'https://apis.google.com/js/plusone.js';
		          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		        })();
		      </script>
		    </li>
		  </ul>
		</div>
		<div class="post-content-wrapper">
			<?php the_content(); ?>
			<?php if(is_single()): ?>
			<nav class="pager-block">
				<p class="pager-prev"><?php previous_post_link( '%link', '前の記事へ' . _x( '', '前の記事へ', 'twentytwelve' ) . '' ); ?></p>
				<p class="pager-next"><?php next_post_link( '%link', '次の記事へ' . _x( '', '次の記事へ', 'twentytwelve' ) . '' ); ?></p>
			</nav><!-- .nav-single -->
		<?php endif; ?>
		</div>
	</article><!-- #post -->
