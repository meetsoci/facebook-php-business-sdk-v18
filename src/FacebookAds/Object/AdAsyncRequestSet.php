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
use FacebookAdsV18\Object\Fields\AdAsyncRequestSetFields;
use FacebookAdsV18\Object\Values\AdAsyncRequestSetNotificationModeValues;
use FacebookAdsV18\Object\Values\AdAsyncRequestStatusesValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdAsyncRequestSet extends AbstractCrudObject {

  /**
   * @deprecated getEndpoint function is deprecated
   */
  protected function getEndpoint() {
    return 'asyncadrequestsets';
  }

  /**
   * @return AdAsyncRequestSetFields
   */
  public static function getFieldsEnum() {
    return AdAsyncRequestSetFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['NotificationMode'] = AdAsyncRequestSetNotificationModeValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function getRequests(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'statuses' => 'list<statuses_enum>',
    );
    $enums = array(
      'statuses_enum' => AdAsyncRequestStatusesValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/requests',
      new AdAsyncRequest(),
      'EDGE',
      AdAsyncRequest::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
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
      new AdAsyncRequestSet(),
      'NODE',
      AdAsyncRequestSet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'name' => 'string',
      'notification_mode' => 'notification_mode_enum',
      'notification_uri' => 'string',
    );
    $enums = array(
      'notification_mode_enum' => AdAsyncRequestSetNotificationModeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new AdAsyncRequestSet(),
      'NODE',
      AdAsyncRequestSet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
