<?php

namespace Drupal\js_component_example\DataProvider;

use Drupal\js_component\JsComponentDataProviderBase;

class ExampleDataProvider extends JsComponentDataProviderBase {

  /**
   * {@inheritDoc}
   */
  public function fetch() {
    return [
      'item' => 'test',
      'item2' => 'test2'
    ];
  }
}
