<?php
/**
 * @file
 * Template for the Geary layout.
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
 *   - $content['third1']
 *   - $content['third2']
 *   - $content['third3']
 *   - $content['bottom']
 *   - $content['footer']
 */
drupal_add_js('core/modules/layout/js/grid-fallback.js');
?>
<div class="layout--geary <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>

  <?php if ($content['header']): ?>
    <header class="l-header" role="banner" aria-label="<?php print t('Site header'); ?>">
      <div class="l-header-inner container container-fluid">
        <?php print $content['header']; ?>
      </div><!-- /.container -->
    </header>
  <?php endif; ?>

  <main class="l-wrapper">
    <section class="l-wrapper-inner">

      <?php if ($messages): ?>
        <div class="l-messages" role="status" aria-label="<?php print t('Status messages'); ?>">
          <div class="l-messages-inner container container-fluid">
            <?php print $messages; ?>
          </div>
        </div>
      <?php endif; ?>

      <header class="l-page-header">
        <div class="l-page-header-inner container container-fluid">
          <a id="main-content"></a>
          <?php print render($title_prefix); ?>
          <?php if ($title): ?>
            <h1 class="title" id="page-title"><?php print $title; ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
        </div>
      </header>

      <?php if ($tabs): ?>
        <nav class="tabs container container-fluid" role="tablist" aria-label="<?php print t('Admin Content Navigation Tabs'); ?>">
          <?php print $tabs; ?>
        </nav>
      <?php endif; ?>

      <?php print $action_links; ?>

      <?php if (!empty($content['top'])): ?>
        <div class="l-top">
          <div class="l-top-inner container container-fluid">
            <?php print $content['top']; ?>
          </div>
        </div>
      <?php endif; ?>

      <?php if (!empty($content['third1']) || !empty($content['third2']) || !empty($content['third3'])): ?>
        <div class="l-thirds">
          <div class="l-thirds-inner container container-fluid">
            <div class="l-thirds-inner-2 row">
              <div class="l-thirds-region col-md-4">
                <?php print $content['third1']; ?>
              </div>
              <div class="l-thirds-region col-md-4">
                <?php print $content['third2']; ?>
              </div>
              <div class="l-thirds-region col-md-4">
                <?php print $content['third3']; ?>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

      <?php if (!empty($content['bottom'])): ?>
        <div class="l-bottom">
          <div class="l-bottom-inner container container-fluid">
            <div class="l-bottom-inner-2 row">
              <div class="l-bottom-region col-md-12">
                <?php print $content['bottom']; ?>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

    </section><!-- /.l-wrapper-inner -->
  </main><!-- /.l-wrapper -->


  <?php if ($content['footer']): ?>
    <footer class="l-footer"  role="footer">
      <div class="l-footer-inner container container-fluid">
        <div class="l-footer-inner-2 row">
          <div class="l-footer-region col-md-12">
            <?php print $content['footer']; ?>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </footer>
  <?php endif; ?>
</div><!-- /.geary -->
