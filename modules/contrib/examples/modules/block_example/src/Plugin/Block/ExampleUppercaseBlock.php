<?php

namespace Drupal\block_example\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Example: uppercase this please' block.
 *
 * @Block(
 *   id = "example_uppercase",
 *   admin_label = @Translation("Example: uppercase this please")
 * )
 */
class ExampleUppercaseBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = array(
      '#theme' => 'example_uppercase_template',
      '#attached' => [
        'library' => 'vue_integration/module-name-app',
      ],
    );
    return $build;

}
}