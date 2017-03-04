<?php

namespace Drupal\an_image_toggler\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class AnImageTogglerController.
 *
 * @package Drupal\an_image_toggler\Controller
 */
class AnImageTogglerController extends ControllerBase {

  /**
   * @return array
   */
  public function content() {
    $build = array(
      '#theme' => 'an_image_toggler_component',
    );
    $build['#attached']['library'][] = 'an_image_toggler/an_image_toggler';
    return $build;
  }

}
