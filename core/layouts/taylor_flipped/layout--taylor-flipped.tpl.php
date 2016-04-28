<?php
/**
 * @file
 * Template for the Taylor Flipped layout.
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
 *   - $content['sidebar1']
 *   - $content['sidebar2']
 *   - $content['content']
 *   - $content['calltoaction']
 *   - $content['bottom1']
 *   - $content['footer']
 */
?>

<div class="layout--taylor-flipped <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
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
          <section class="col-md-12 l-top l-top1 column panel-panel" role="region">
            <?php print $content['top1']; ?>
        </section>
      </div>
    <?php endif; ?>

      <div class="row">
        <aside class="col-md-3 l-sidebar l-sidebar1 panel-panel" role="complementary" aria-label="<?php print t('Complementary information to ' . $title); ?>">
          <?php if ($content['sidebar1']): ?>
          <?php print $content['sidebar1']; ?>
          <?php endif; ?>
        </aside>
        <aside class="col-md-3 l-sidebar l-sidebar2 panel-panel" role="complementary" aria-label="<?php print t('Complementary information to ' . $title); ?>">
          <?php if ($content['sidebar2']): ?>
          <?php print $content['sidebar2']; ?>
          <?php endif; ?>
        </aside>
        <main class="col-md-6 l-content column main panel-panel" role="main" aria-label="<?php print t('Main content'); ?>">
          <?php if ($content['content']): ?>
          <?php print $content['content']; ?>
          <?php endif; ?>
        </main>
      </div>

    <?php if ($content['bottom1']): ?>
        <div class="row">
          <div class="col-md-12 l-bottom l-bottom1 panel-panel">
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
</div><!-- /.taylor flipped -->
