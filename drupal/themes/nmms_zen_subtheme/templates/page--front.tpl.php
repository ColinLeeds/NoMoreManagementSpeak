<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<div id="page">

  <header class="header lightBlueBackground roundedCorners" id="header" role="banner">

    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <div class="header__name-and-slogan" id="name-and-slogan">
        <?php if ($site_name): ?>
          <h1 class="header__site-name" id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div class="header__site-slogan" id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php if ($secondary_menu): ?>
      <nav class="header__secondary-menu" id="secondary-menu" role="navigation">
        <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => $secondary_menu_heading,
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </nav>
    <?php endif; ?>

    <?php print render($page['header']); ?>

  </header>
  
  <br>
  
  	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- nmms ads -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:728px;height:90px"
             data-ad-client="ca-pub-6227689652886718"
             data-ad-slot="6436625788"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>

  <div id="main" class="lightBlueBackground roundedCorners">
  
  <div id="navigation">

      <?php if ($main_menu): ?>
        <nav id="main-menu" role="navigation" tabindex="-1">
          <?php
          // This code snippet is hard to modify. We recommend turning off the
          // "Main menu" on your sub-theme's settings form, deleting this PHP
          // code block, and, instead, using the "Menu block" module.
          // @see https://drupal.org/project/menu_block
          print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'class' => array('links', 'inline', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        </nav>
      <?php endif; ?>

      <?php print render($page['navigation']); ?>

    </div>

    <div id="content" class="column" role="main">
      <?php print render($page['highlighted']); ?>
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
		<div id="contentImage">
		  <img src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/TalkingBossCropped.jpg" 
			alt="Image courtesy of imagerymajestic/ FreeDigitalPhotos.net" 
			title="Image courtesy of imagerymajestic / FreeDigitalPhotos.net"
			class="frontImage">
			<p>
			No More Management Speak is the campaign to rid us, the workers, of the pointless and frankly annoying phrases used by management types.
			<br>
			Come on, you all know what we mean, that gibberish jargon, loved by certain management types, that doesn't really mean anything.
			</p>
			<p>
			If you want to add to any of the sections of this site or contact us, you'll need to create an account and log in.
			<br>
			New management speak is being invented all the time. 
			<br>
			If we don't stamp on it straight away, it might turn into a new 'buzz word'.
			</p>
			<p>
			Don't forget to check back regularly, as new management speak will be added all the time.
			</p>
		</div>
    </div>

    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="sidebars">
        <?php print $sidebar_first; ?>
        <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>

  </div>
  
  <!--<br>-->
  
  <!--<div id="books" class="lightBlueBackground roundedCorners minWidth">
	<p class="leftMargin">
		Here are some books on the subject of management speak. They may be of interest to you.
		<br>
		<br>
		<iframe src="http://rcm-eu.amazon-adsystem.com/e/cm?lt1=_blank&bc1=000000&IS1=1&npa=1&bg1=FFFFFF&fc1=000000&lc1=0000FF&t=nomormanspe-21&o=2&p=8&l=as4&m=amazon&f=ifr&ref=ss_til&asins=0743404130" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
		<iframe src="http://rcm-eu.amazon-adsystem.com/e/cm?lt1=_blank&bc1=000000&IS1=1&npa=1&bg1=FFFFFF&fc1=000000&lc1=0000FF&t=nomormanspe-21&o=2&p=8&l=as4&m=amazon&f=ifr&ref=ss_til&asins=0981988709" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
		<iframe src="http://rcm-eu.amazon-adsystem.com/e/cm?lt1=_blank&bc1=000000&IS1=1&npa=1&bg1=FFFFFF&fc1=000000&lc1=0000FF&t=nomormanspe-21&o=2&p=8&l=as4&m=amazon&f=ifr&ref=ss_til&asins=1843543591" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
		<iframe src="http://rcm-eu.amazon-adsystem.com/e/cm?lt1=_blank&bc1=000000&IS1=1&npa=1&bg1=FFFFFF&fc1=000000&lc1=0000FF&t=nomormanspe-21&o=2&p=8&l=as4&m=amazon&f=ifr&ref=ss_til&asins=0743269098" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
		<iframe src="http://rcm-eu.amazon-adsystem.com/e/cm?lt1=_blank&bc1=000000&IS1=1&npa=1&bg1=FFFFFF&fc1=000000&lc1=0000FF&t=nomormanspe-21&o=2&p=8&l=as4&m=amazon&f=ifr&ref=ss_til&asins=0767920740" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
	</p>
  </div>-->
  
  <!--<br>-->
  
  <div id="donate" class="lightBlueBackground roundedCorners minWidth">
	<p class="leftMargin">
	  If you like the work which we are doing, then help us by donating to the cause.
	  <br>
	  Any donation, no matter how small, will help us continue the campaign.
	  <!--PayPal donate button-->
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class="leftMargin">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="F36QP66KZD9RW">
			<input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
			<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
		</form>
	</p>
  </div>


  <?php print render($page['footer']); ?>

</div>

<?php print render($page['bottom']); ?>
