<?php
/**
 * @file
 * Template for the Simpson layout.
 *
 * Variables:
 * - $title: The page title, for use in the actual HTML content.
 * - $messages: Status and error messages. Should be displayed prominently.
 * - $tabs: Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node.)
 * - $action_links: Array of actions local to the page, such as 'Add menu' on
 *   the menu administration interface.
 * - $classes: Array of CSS classes to be added to the layout wrapper.
 * - $attributes: Array of additional HTML attributes to be added to the layout
 *     wrapper. Flatten using backdrop_attributes().
 * - $content: An array of content, each item in the array is keyed to one
 *   region of the layout. This layout supports the following sections:
 *   - $content['header']
 *   - $content['top']
 *   - $content['content']
 *   - $content['sidebar']
 *   - $content['sidebar2']
 *   - $content['third1']
 *   - $content['third2']
 *   - $content['third3']
 *   - $content['quarter1']
 *   - $content['quarter2']
 *   - $content['quarter3']
 *   - $content['quarter4']
 *   - $content['footer']
 */
?>
<div class="layout--simpson <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>

  <?php if ($content['header']): ?>
    <header class="l-header" role="banner" aria-label="<?php print t('Site header'); ?>">
      <div class="container container-fluid">
        <div class="row">
          <?php print $content['header']; ?>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </header>
  <?php endif; ?>

  <div class="l-wrapper">
    <div class="l-wrapper-inner container container-fluid">

      <?php if ($messages): ?>
        <div class="l-messages row" role="status" aria-label="<?php print t('Status messages'); ?>">
          <div class="col-xs-12">
            <?php print $messages; ?>
          </div>
        </div>
      <?php endif; ?>

      <div class="l-page-header row">
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
          <div class="col-xs-12">
            <h1 class="title" id="page-title"><?php print $title; ?></h1>
          </div>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
      </div>

      <?php if ($tabs): ?>
        <nav class="l-tabs tabs row" role="tablist" aria-label="<?php print t('Admin Content Navigation Tabs'); ?>">
          <?php print $tabs; ?>
        </nav>
      <?php endif; ?>

      <?php print $action_links; ?>

      <?php if ($content['top']): ?>
        <div class="row">
          <div class="l-top col-xs-12" role="region">
            <?php print $content['top']; ?>
          </div>
        </div>
      <?php endif; ?>

      <div class="row">
        <div class="l-sidebar l-sidebar-first col-md-3" role="complementary" aria-label="<?php print t('Complementary information to ' . $title); ?>">
          <?php if ($content['sidebar']): ?>
          <?php print $content['sidebar']; ?>
          <?php endif; ?>
        </div>
        <main class="l-content col-md-6" role="main" aria-label="<?php print t('Main content'); ?>">
          <?php if ($content['content']): ?>
          <?php print $content['content']; ?>
          <?php endif; ?>
        </main>
        <div class="l-sidebar l-sidebar-second col-md-3" role="complementary" aria-label="<?php print t('Complementary information to ' . $title); ?>">
          <?php if ($content['sidebar2']): ?>
          <?php print $content['sidebar2']; ?>
          <?php endif; ?>
        </div>
      </div>

      <?php if ($content['third1'] || $content['third2'] || $content['third3']): ?>
        <section class="l-thirds row" role="region">
          <div class="col-md-4">
            <?php print $content['third1']; ?>
          </div>
          <div class="col-md-4">
            <?php print $content['third2']; ?>
          </div>
          <div class="col-md-4">
            <?php print $content['third3']; ?>
          </div>
        </section>
      <?php endif; ?>

      <?php if ($content['quarter1'] || $content['quarter2'] || $content['quarter3'] || $content['quarter4']): ?>
        <section class="l-quarter row" role="region">
          <div class="col-md-3">
            <?php print $content['quarter1']; ?>
          </div>
          <div class="col-md-3">
            <?php print $content['quarter2']; ?>
          </div>
          <div class="col-md-3">
            <?php print $content['quarter3']; ?>
          </div>
          <div class="col-md-3">
            <?php print $content['quarter4']; ?>
          </div>
        </section>
      <?php endif; ?>

    </div><!-- /.l-wrapper-inner -->

    <?php if ($content['footer']): ?>
      <footer class="l-footer"  role="footer">
        <div class="container container-fluid">
          <div class="row">
            <?php print $content['footer']; ?>
          </div><!-- /.row -->
        </div><!-- /.container -->
      </footer>
    <?php endif; ?>

  </div><!-- /.l-wrapper -->
</div><!-- /.simpson -->
