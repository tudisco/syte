<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Personal website and blog of Software + Web Developer also known as Jason Tudisco. Follow him at @tudisco" />
  <meta name="keywords" content="Jason Tudisco,developer,software,web,wordpress,webmaster,San Miguel de Allende" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$page_title?$page_title:"Jason Tudisco"?></title>
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <? if(DEV_DEPLOYMENT_MODE): ?>
  <link rel="stylesheet/less" type="text/css" href="<?=MEDIA_URL?>less/styles.less">
  <script src="<?=MEDIA_URL?>less/less-1.1.5.min.js" type="text/javascript"></script>
  <? else: ?>
  <link rel="stylesheet" href="<?=MEDIA_URL?>css/styles-<?=COMPRESS_REVISION_NUMBER?>.min.css" type="text/css" media="screen, projection">
  <? endif; ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>
<body>
<header class="main-header">
  <hgroup>
    <div class="picture">
      <a href="/" rel="home"></a>
    </div>
    <h1>Jason Tudisco</h1>
    <h2>Software + Web Developer</h2>
  </hgroup>
  <nav>
    <ul class="main-nav">
      <li><a href="/" id="home-link">Home</a></li>
      <li><a href="http://twitter.com/#!/tudisco" id="twitter-link">Twitter</a></li>
      <li><a href="http://github.com/tudisco" id="github-link">Github</a></li>
      <!-- <li><a href="http://dribbble.com/rigoneri" id="dribbble-link">Dribbble</a></li> -->
      <li><a href="http://instagr.am/p/KgxF6YKoX_" id="instagram-link">Instagram</a></li>
      <li><a href="mailto:tudisco@tudisco.biz?subject=Hello" id="contact-link">Contact</a></li>
    </ul>
  </nav>
  <!-- <a href="https://github.com/rigoneri/syte" class="fork-me">Fork me on Github</a> -->
</header>

<?=$main_section?>

<div class="mobile-nav">
  <span class="nav-btn" id="mobile-nav-btn">
    <span class="nav-btn-bar"></span>
    <span class="nav-btn-bar"></span>
    <span class="nav-btn-bar"></span>
  </span>
  <h3><a href="/">tudisco.biz</a></h3>
</div>

<script type="text/javascript">
/*<![CDATA[*/
var twitter_integration_enabled = <?=TWITTER_INTEGRATION_ENABLED?'true':'false'?>,
    github_integration_enabled = <?=GITHUB_INTEGRATION_ENABLED?'true':'false'?>,
    dribbble_integration_enabled = <?=DRIBBBLE_INTEGRATION_ENABLED?'true':'false'?>,
    instagram_integration_enabled = <?=INSTAGRAM_INTEGRATION_ENABLED?'true':'false'?>
/*]]>*/
</script>

<? if(DEV_DEPLOYMENT_MODE): ?>
<script src="<?=MEDIA_URL?>js/libs/jquery.url.js"></script>
<script src="<?=MEDIA_URL?>js/libs/require.js"></script>
<script src="<?=MEDIA_URL?>js/libs/handlebars.js"></script>
<script src="<?=MEDIA_URL?>js/libs/moment.min.js"></script>
<script src="<?=MEDIA_URL?>js/libs/bootstrap-modal.js"></script>
<script src="<?=MEDIA_URL?>js/libs/spin.min.js"></script>
<script src="<?=MEDIA_URL?>js/libs/prettify.js"></script>

<script src="<?=MEDIA_URL?>js/components/base.js"></script>
<script src="<?=MEDIA_URL?>js/components/mobile.js"></script>
<script src="<?=MEDIA_URL?>js/components/blog-posts.js"></script>
<script src="<?=MEDIA_URL?>js/components/links.js"></script>

<? if(TWITTER_INTEGRATION_ENABLED): ?><script src="<?=MEDIA_URL?>js/components/twitter.js"></script><? endif; ?>
<? if(GITHUB_INTEGRATION_ENABLED): ?><script src="<?=MEDIA_URL?>js/components/github.js"></script><? endif; ?>
<? if(DRIBBBLE_INTEGRATION_ENABLED): ?><script src="<?=MEDIA_URL?>js/components/dribbble.js"></script><? endif; ?>
<? if(INSTAGRAM_INTEGRATION_ENABLED): ?><script src="<?=MEDIA_URL?>js/components/instagram.js"></script><? endif; ?>

<? else: ?>
<script src="<?=MEDIA_URL?>js/min/scripts-<?=COMPRESS_REVISION_NUMBER?>.min.js"></script>
<? endif; ?>

<?=$extra_js?>

<script type="text/javascript">
/*<![CDATA[*/
<?=$extra_inline_js?>
/*]]>*/
</script>
</body>



