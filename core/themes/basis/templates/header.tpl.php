<?php
/**
 * @file
 * Display generic site information such as logo, site name, etc.
 *
 * Available variables:
 *
 * - $base_path: The base URL path of the Backdrop installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $front_page: The URL of the front page. Use this instead of $base_path, when
 *   linking to the front page. This includes the language domain or prefix.
 * - $site_name: The name of the site, empty when display has been disabled.
 * - $site_slogan: The site slogan, empty when display has been disabled.
 * - $menu: The menu for the header (if any), as an HTML string.
 */
?>
<?php if ($site_name || $site_slogan || $logo): ?>
  <div class="header-identity-wrapper">
    <?php if ($logo): ?>
      <div class="header-logo-wrapper">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header-logo-link">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header-logo" />
        </a>
      </div>
    <?php endif; ?>
    <?php if ($site_name || $slogan): ?>
      <div class="header-name-and-slogan-wrapper">
        <?php if (!$is_front): ?>
          <div class="header-site-name-wrapper">
            <strong>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header-site-name-link" rel="home">
                <?php print $site_name; ?>
              </a>
            </strong>
          </div>
        <?php else: /* Use h1 when the content title is empty */ ?>
          <h1 class="header-site-name-wrapper">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header-site-name-link" rel="home">
              <?php print $site_name; ?>
            </a>
          </h1>
        <?php endif; ?>
        <?php if ($site_slogan): ?>
          <div class="header-site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
<?php endif; ?>

<?php if ($menu): ?>
  <nav class="header-menu">
    <?php print $menu; ?>
  </nav>
<?php endif; ?>
