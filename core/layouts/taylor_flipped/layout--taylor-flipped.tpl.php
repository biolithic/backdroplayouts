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
 *   - $content['top']
 *   - $content['sidebar']
 *   - $content['sidebar2']
 *   - $content['content']
 *   - $content['bottom']
 *   - $content['footer']
 */
?>
<div class="layout--taylor-flipped <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
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
        <nav class="tabs row" role="tablist" aria-label="<?php print t('Admin Content Navigation Tabs'); ?>">
          <?php print $tabs; ?>
        </nav>
      <?php endif; ?>

      <?php print $action_links; ?>

      <?php if ($content['top']): ?>
        <div class="row">
          <section class="l-top col-md-12" role="region">
            <?php print $content['top']; ?>
          </section>
        </div>
      <?php endif; ?>

      <div class="row">
        <div class="l-sidebar l-sidebar-first col-md-3" role="complementary" aria-label="<?php print t('Complementary information to ' . $title); ?>">
          <?php if ($content['sidebar']): ?>
          <?php print $content['sidebar']; ?>
          <?php endif; ?>
        </div>
        <div class="l-sidebar l-sidebar-second col-md-3" role="complementary" aria-label="<?php print t('Complementary information to ' . $title); ?>">
          <?php if ($content['sidebar2']): ?>
          <?php print $content['sidebar2']; ?>
          <?php endif; ?>
        </div>
        <main class="l-content col-md-6 main" role="main" aria-label="<?php print t('Main content'); ?>">
          <?php if ($content['content']): ?>
          <?php print $content['content']; ?>
          <?php endif; ?>
        </main>
      </div>

      <?php if ($content['bottom']): ?>
        <div class="row">
          <div class="l-bottom col-md-12">
            <?php print $content['bottom']; ?>
          </div>
        </div>
      <?php endif; ?>
    </div><!-- /.l-wrapper-inner /.container -->

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
</div><!-- /.taylor flipped -->
