<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object;

use FacebookAds\ApiRequest;
use FacebookAds\Cursor;
use FacebookAds\Http\RequestInterface;
use FacebookAds\TypeChecker;
use FacebookAds\Object\Fields\AdAccountDefaultObjectiveFields;
use FacebookAds\Object\Values\AdAccountDefaultObjectiveDefaultObjectiveForUserValues;
use FacebookAds\Object\Values\AdAccountDefaultObjectiveObjectiveForLevelValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdAccountDefaultObjective extends AbstractObject {

  /**
   * @return AdAccountDefaultObjectiveFields
   */
  public static function getFieldsEnum() {
    return AdAccountDefaultObjectiveFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['DefaultObjectiveForUser'] = AdAccountDefaultObjectiveDefaultObjectiveForUserValues::getInstance()->getValues();
    $ref_enums['ObjectiveForLevel'] = AdAccountDefaultObjectiveObjectiveForLevelValues::getInstance()->getValues();
    return $ref_enums;
  }


}
