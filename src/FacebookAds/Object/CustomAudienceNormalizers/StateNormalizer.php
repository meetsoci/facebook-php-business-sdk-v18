<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAdsV18\Object\CustomAudienceNormalizers;

use FacebookAdsV18\Object\Fields\CustomAudienceMultikeySchemaFields;
use FacebookAdsV18\Object\CustomAudienceNormalizers\ValueNormalizerInterface;

class StateNormalizer implements ValueNormalizerInterface {

  /**
   * @param string $key
   * @param string $key_value
   * @return boolean
   */
  public function shouldNormalize($key, $key_value) {
    return $key === CustomAudienceMultikeySchemaFields::STATE;
  }

  /**
   * @param string $key
   * @param string $key_value
   * @return string
   */
  public function normalize($key, $key_value) {
    return preg_replace('/[^a-z]/', '', strtolower(trim($key_value)));
  }
}
