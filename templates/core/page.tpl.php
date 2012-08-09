<div id="page-wrapper">
    <div id="page">
      <header role="banner">
        <?php if ($logo): ?>
          <div id="logo" class="region-block">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
          </div>
        <?php endif; ?>
        <?php print render($page['header']); ?>
      </header> <!-- /#header -->
      <div id="main" class="clearfix" role="main">   
        <div id="content" class="column">
          <?php if($page['content_top']): ?>  
            <section id="content-page-top" class="section">
              <?php print render($page['content_top']); ?>
            </section> <!-- /#content-page-top -->
          <?php endif; ?>

          <?php if ($page['highlighted']): ?>
            <div id="highlighted"><?php print render($page['highlighted']); ?></div>
          <?php endif; ?>
          
          <?php if($messages): ?>
            <div id="message-bar"><?php print $messages; ?></div><!-- #message-bar -->
          <?php endif; ?>
          
          <?php print render($title_prefix); ?>
            <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
          <?php print render($title_suffix); ?>
          
          <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
          
          <?php print render($page['help']); ?>
          
          <?php if ($action_links): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
          <?php endif; ?>
          
          <?php print render($page['content']); ?>
          
          <?php if($page['content_bottom']): ?>
            <section id="content-page-bottom" class="section">
              <?php print render($page['content_bottom']); ?>
            </section>
          <?php endif; ?>

        </div> <!-- /#content -->
      </div>
      
      <div id="footer" role="contentinfo">
        <?php print render($page['footer']); ?>
      </div> <!-- /.section, /#footer -->
    </div>
</div> <!-- /#page-wrapper -->

