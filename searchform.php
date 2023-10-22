<form method="get" id="searchform" action="<?php echo esc_url(home_url()); ?>/news">
  <input type="text" name="s" id="s" placeholder="検索する">
  <input type="hidden" name="post_type" value="news">
  <button type="submit"></button>
</form>