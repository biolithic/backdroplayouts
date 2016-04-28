<?php
/**
 * @file
 * Template for the Rolph layout.
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
 *   - $content['top1']
 *   - $content['content']
 *   - $content['quarter1']
 *   - $content['quarter2']
 *   - $content['quarter3']
 *   - $content['quarter4']
 *   - $content['calltoaction']
 *   - $content['bottom1']
 *   - $content['footer']
 */
?>
<div class="layout--rolph <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>

  <?php if ($content['header']): ?>
    <header class="l-header" role="banner" aria-label="<?php print t('Site header'); ?>">
      <div class="container-fluid">
        <div class="row">
        <?php print $content['header']; ?>
        </div>
      </div>
    </header>
  <?php endif; ?>

  <?php if ($messages): ?>
    <div class="l-messages" role="status" aria-label="<?php print t('Status messages'); ?>">
      <?php print $messages; ?>
    </div>
  <?php endif; ?>

  <div class="l-container">

    <div class="l-container-inner container-fluid">
      <div class="l-page-header row">
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title">
          <?php print $title; ?>
        </h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
    </div>

    <?php if ($tabs): ?>
      <nav class="tabs row" role="tablist" aria-label="<?php print t('Admin Content Navigation Tabs'); ?>">
        <?php print $tabs; ?>
      </nav>
    <?php endif; ?>

    <?php print $action_links; ?>

    <?php if ($content['top1']): ?>
        <div class="row">
          <section class="col-md-12 l-top l-top1 column" role="region">
            <?php print $content['top1']; ?>
          </section>
        </div>
      <?php endif; ?>

    <?php if ($content['content']): ?>
        <div class="row">
          <main class="col-md-12 l-content column main" role="main" aria-label="<?php print t('Main content'); ?>">
            <?php print $content['content']; ?>
          </main>
        </div>
    <?php endif; ?>

      <?php if ($content['quarter1'] || $content['quarter2'] || $content['quarter3'] || $content['quarter4']): ?>
        <section class="l-quarter row" role="region">
          <div class="col-md-3 l-quarter1">
            <?php print $content['quarter1']; ?>
          </div>
          <div class="col-md-3 l-quarter2">
            <?php print $content['quarter2']; ?>
          </div>
          <div class="col-md-3 l-quarter3">
            <?php print $content['quarter3']; ?>
          </div>
          <div class="col-md-3 l-quarter4">
            <?php print $content['quarter4']; ?>
          </div>
        </section>
      <?php endif; ?>

      <?php if ($content['bottom1']): ?>
        <div class="row">
          <div class="col-md-12 l-bottom l-bottom1">
            <?php print $content['bottom1']; ?>
          </div>
        </div>
      <?php endif; ?>
</div>

  <?php if ($content['calltoaction']): ?>
    <div class="container-fluid">
      <div class="row">
        <footer class="l-calltoaction col-md-12" role="secondary" aria-label="<?php print t('Action to take'); ?>">
          <?php print $content['calltoaction']; ?>
        </footer>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($content['footer']): ?>
    <div class="container-fluid">
      <div class="row">
        <footer class="l-footer col-md-12" role="contentinfo" aria-label="<?php print t('Footer navigation'); ?>">
          <?php print $content['footer']; ?>
        </footer>
      </div>
    </div>
  <?php endif; ?>

  </div>
</div><!-- /.rolph -->
