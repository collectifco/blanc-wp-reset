<?php
  // Twitter
  if (true == of_get_option('meta_app_twt_card')) {
    echo '<meta name="twitter:card" content="' . of_get_option("meta_app_twt_card") . '" />';
    echo '<meta name="twitter:site" content="' . of_get_option("meta_app_twt_site") . '" />';
    echo '<meta name="twitter:title" content="' . of_get_option("meta_app_twt_title") . '">';
    echo '<meta name="twitter:description" content="' . of_get_option("meta_app_twt_description") . '" />';
    echo '<meta name="twitter:url" content="' . of_get_option("meta_app_twt_url") . '" />';
  }

  // Facebook
  if (true == of_get_option('meta_app_fb_title')) {
    echo '<meta property="og:title" content="' . of_get_option("meta_app_fb_title") . '" />';
    echo '<meta property="og:description" content="' . of_get_option("meta_app_fb_description") . '" />';
    echo '<meta property="og:url" content="' . of_get_option("meta_app_fb_url") . '" />';
    echo '<meta property="og:image" content="' . of_get_option("meta_app_fb_image") . '" />';
  }
?>
