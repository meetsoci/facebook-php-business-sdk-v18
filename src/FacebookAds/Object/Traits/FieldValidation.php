<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAdsV18\Object\Traits;

use FacebookAdsV18\Enum\EnumInstanceInterface;

/**
 * @method static EnumInstanceInterface getFieldsEnum()
 */
trait FieldValidation {

  /**
   * @param string $name
   * @param mixed $value
   * @throws \InvalidArgumentException
   * @staticvar array $fields
   */
  public function __set($name, $value) {
    if (static::getFieldsEnum()->isValidValue($name)) {
      parent::__set($name, $value);
    } else {
      throw new \InvalidArgumentException(
        $name.' is not a field of '.get_class($this));
    }
  }
}
