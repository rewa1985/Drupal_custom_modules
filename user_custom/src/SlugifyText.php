<?php

namespace Drupal\user_custom_field_formatter;

use Cocur\Slugify\Slugify;

namespace Cocur\Slugify;

use Cocur\Slugify\Bridge\Twig\SlugifyExtension;



/**
 * Class SlugifyText.
 *
 * @package Drupal\user_custom_field_formatter
 */
class SlugifyText {
  public function slugifyText($str, $sperator) {
    $slugify = new Slugify();
    $slugify_text = $slugify->slugify($str, $sperator);
    return $slugify_text;
  }
}
