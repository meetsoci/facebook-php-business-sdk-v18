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
use FacebookAdsV18\Object\Fields\ProductFeedUploadErrorFields;
use FacebookAdsV18\Object\Values\ProductFeedUploadErrorAffectedSurfacesValues;
use FacebookAdsV18\Object\Values\ProductFeedUploadErrorErrorPriorityValues;
use FacebookAdsV18\Object\Values\ProductFeedUploadErrorSeverityValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class ProductFeedUploadError extends AbstractCrudObject {

  /**
   * @deprecated getEndpoint function is deprecated
   */
  protected function getEndpoint() {
    return 'errors';
  }

  /**
   * @return ProductFeedUploadErrorFields
   */
  public static function getFieldsEnum() {
    return ProductFeedUploadErrorFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['AffectedSurfaces'] = ProductFeedUploadErrorAffectedSurfacesValues::getInstance()->getValues();
    $ref_enums['Severity'] = ProductFeedUploadErrorSeverityValues::getInstance()->getValues();
    $ref_enums['ErrorPriority'] = ProductFeedUploadErrorErrorPriorityValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function getSamples(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/samples',
      new ProductFeedUploadErrorSample(),
      'EDGE',
      ProductFeedUploadErrorSample::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSuggestedRules(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/suggested_rules',
      new ProductFeedRuleSuggestion(),
      'EDGE',
      ProductFeedRuleSuggestion::getFieldsEnum()->getValues(),
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
      new ProductFeedUploadError(),
      'NODE',
      ProductFeedUploadError::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
