<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAdsV18\Object\Fields;

use FacebookAdsV18\Enum\AbstractEnum;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AndroidAppLinkFields extends AbstractEnum {

  const APP_NAME = 'app_name';
  const FIELD_CLASS = 'class';
  const PACKAGE = 'package';
  const URL = 'url';

  public function getFieldTypes() {
    return array(
      'app_name' => 'string',
      'class' => 'string',
      'package' => 'string',
      'url' => 'string',
    );
  }
}
