<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAdsV18\Object;

use FacebookAdsV18\ApiRequest;
use FacebookAdsV18\Cursor;
use FacebookAdsV18\Http\RequestInterface;
use FacebookAdsV18\TypeChecker;
use FacebookAdsV18\Object\Fields\PageCallToActionFields;
use FacebookAdsV18\Object\Values\PageCallToActionAndroidDestinationTypeValues;
use FacebookAdsV18\Object\Values\PageCallToActionIphoneDestinationTypeValues;
use FacebookAdsV18\Object\Values\PageCallToActionTypeValues;
use FacebookAdsV18\Object\Values\PageCallToActionWebDestinationTypeValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class PageCallToAction extends AbstractCrudObject {

  /**
   * @return PageCallToActionFields
   */
  public static function getFieldsEnum() {
    return PageCallToActionFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['AndroidDestinationType'] = PageCallToActionAndroidDestinationTypeValues::getInstance()->getValues();
    $ref_enums['IphoneDestinationType'] = PageCallToActionIphoneDestinationTypeValues::getInstance()->getValues();
    $ref_enums['Type'] = PageCallToActionTypeValues::getInstance()->getValues();
    $ref_enums['WebDestinationType'] = PageCallToActionWebDestinationTypeValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function deleteSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/',
      new AbstractCrudObject(),
      'NODE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new PageCallToAction(),
      'NODE',
      PageCallToAction::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'android_app_id' => 'int',
      'android_destination_type' => 'android_destination_type_enum',
      'android_package_name' => 'string',
      'android_url' => 'string',
      'email_address' => 'string',
      'intl_number_with_plus' => 'string',
      'iphone_app_id' => 'int',
      'iphone_destination_type' => 'iphone_destination_type_enum',
      'iphone_url' => 'string',
      'type' => 'type_enum',
      'web_destination_type' => 'web_destination_type_enum',
      'web_url' => 'string',
    );
    $enums = array(
      'android_destination_type_enum' => PageCallToActionAndroidDestinationTypeValues::getInstance()->getValues(),
      'iphone_destination_type_enum' => PageCallToActionIphoneDestinationTypeValues::getInstance()->getValues(),
      'type_enum' => PageCallToActionTypeValues::getInstance()->getValues(),
      'web_destination_type_enum' => PageCallToActionWebDestinationTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new PageCallToAction(),
      'NODE',
      PageCallToAction::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
