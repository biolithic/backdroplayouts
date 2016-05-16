<?php
/**
 * @file
 * Template for the Simmons layout.
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
 *   - $content['bottom']
 *   - $content['footer']
 */
?>
<div class="layout--simmons <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>

  <?php if ($content['header']): ?>
    <header class="l-header" role="banner" aria-label="<?php print t('Site header'); ?>">
      <div class="l-header-inner container container-fluid">
        <?php print $content['header']; ?>
      </div>
    </header>
  <?php endif; ?>

  <div class="l-wrapper">
    <div class="l-wrapper-inner container container-fluid">

      <?php if ($messages): ?>
        <div class="l-messages" role="status" aria-label="<?php print t('Status messages'); ?>">
          <?php print $messages; ?>
        </div>
      <?php endif; ?>

      <div class="l-page-title">
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
          <h1 class="title" id="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
      </div>

      <?php if ($tabs): ?>
        <nav class="tabs" role="tablist" aria-label="<?php print t('Admin Content Navigation Tabs'); ?>">
          <?php print $tabs; ?>
        </nav>
      <?php endif; ?>

      <?php print $action_links; ?>

      <?php if (!empty($content['top'])): ?>
        <div class="l-top">
          <div class="container container-fluid l-top-inner">
            <?php print $content['top']; ?>
          </div>
        </div>
      <?php endif; ?>

      <div class="l-middle row">
        <div class="l-sidebar l-sidebar-first col-md-3 col-md-first">
          <?php print $content['sidebar']; ?>
        </div>
        <div class="l-content col-md-6 col-xs-first col-sm-first" role="main" aria-label="<?php print t('Main content'); ?>">
          <?php print $content['content']; ?>
        </div>
        <div class="l-sidebar l-sidebar-second col-md-3 col-xs-last col-sm-last">
          <?php print $content['sidebar2']; ?>
        </div>
      </div><!-- /.l-middle -->

      <?php if ($content['third1'] || $content['third2'] || $content['third3']): ?>
        <div class="l-thirds row">
          <div class="l-thirds-region col-md-4">
            <?php print $content['third1']; ?>
          </div>
          <div class="l-thirds-region col-md-4">
            <?php print $content['third2']; ?>
          </div>
          <div class="l-thirds-region col-md-4">
            <?php print $content['third3']; ?>
          </div>
        </div><!-- /.l-thirds -->
      <?php endif; ?>

      <?php if ($content['quarter1'] || $content['quarter2'] || $content['quarter3'] || $content['quarter4']): ?>
        <div class="l-quarters row">
          <div class="l-quarters-region col-md-3">
            <?php print $content['quarter1']; ?>
          </div>
          <div class="l-quarters-region col-md-3">
            <?php print $content['quarter2']; ?>
          </div>
          <div class="l-quarters-region col-md-3">
            <?php print $content['quarter3']; ?>
          </div>
          <div class="l-quarters-region col-md-3">
            <?php print $content['quarter4']; ?>
          </div>
        </div><!-- /.l-quarters -->
      <?php endif; ?>

      <?php if (!empty($content['bottom'])): ?>
        <div class="l-bottom">
          <?php print $content['bottom']; ?>
        </div>
      <?php endif; ?>

    </div><!-- /.l-wrapper-inner -->

    <?php if ($content['footer']): ?>
      <footer class="l-footer"  role="footer">
        <div class="l-footer-inner container container-fluid">
          <?php print $content['footer']; ?>
        </div>
      </footer>
    <?php endif; ?>

  </div><!-- /.l-wrapper -->
</div><!-- /.layout--simmons -->