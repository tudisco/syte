
<section class="main-section blog-section" id="blog-posts">
  <span class="loading">loading blog posts ...</span>
</section>

<script type="text/javascript">
$(function() {
  <? if($post_id): ?>
  fetchBlogPosts("<?=post_id?>");
  <? elseif ($tag_slug): ?>
  fetchBlogPosts(null, "<?=tag_slug?>");
  <? else: ?>
  fetchBlogPosts();
  <? endif; ?>
});
</script>


