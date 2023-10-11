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

class BusinessVideoFields extends AbstractEnum {

  const BUSINESS = 'business';
  const ID = 'id';
  const MEDIA_LIBRARY_URL = 'media_library_url';
  const NAME = 'name';
  const VIDEO = 'video';

  public function getFieldTypes() {
    return array(
      'business' => 'Business',
      'id' => 'string',
      'media_library_url' => 'string',
      'name' => 'string',
      'video' => 'AdVideo',
    );
  }
}
