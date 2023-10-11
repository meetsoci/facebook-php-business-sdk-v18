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
use FacebookAdsV18\Object\Fields\AdCreativeFields;
use FacebookAdsV18\Object\Values\AdCreativeApplinkTreatmentValues;
use FacebookAdsV18\Object\Values\AdCreativeAuthorizationCategoryValues;
use FacebookAdsV18\Object\Values\AdCreativeCallToActionTypeValues;
use FacebookAdsV18\Object\Values\AdCreativeCategorizationCriteriaValues;
use FacebookAdsV18\Object\Values\AdCreativeCategoryMediaSourceValues;
use FacebookAdsV18\Object\Values\AdCreativeDynamicAdVoiceValues;
use FacebookAdsV18\Object\Values\AdCreativeObjectTypeValues;
use FacebookAdsV18\Object\Values\AdCreativeOperatorValues;
use FacebookAdsV18\Object\Values\AdCreativeStatusValues;
use FacebookAdsV18\Object\Values\AdPreviewAdFormatValues;
use FacebookAdsV18\Object\Values\AdPreviewCreativeFeatureValues;
use FacebookAdsV18\Object\Values\AdPreviewRenderTypeValues;
use FacebookAdsV18\Object\Traits\AdLabelAwareCrudObjectTrait;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdCreative extends AbstractCrudObject {

  use AdLabelAwareCrudObjectTrait;

  /**
   * @deprecated getEndpoint function is deprecated
   */
  protected function getEndpoint() {
    return 'adcreatives';
  }

  /**
   * @return AdCreativeFields
   */
  public static function getFieldsEnum() {
    return AdCreativeFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['CallToActionType'] = AdCreativeCallToActionTypeValues::getInstance()->getValues();
    $ref_enums['ObjectType'] = AdCreativeObjectTypeValues::getInstance()->getValues();
    $ref_enums['Status'] = AdCreativeStatusValues::getInstance()->getValues();
    $ref_enums['ApplinkTreatment'] = AdCreativeApplinkTreatmentValues::getInstance()->getValues();
    $ref_enums['AuthorizationCategory'] = AdCreativeAuthorizationCategoryValues::getInstance()->getValues();
    $ref_enums['CategorizationCriteria'] = AdCreativeCategorizationCriteriaValues::getInstance()->getValues();
    $ref_enums['CategoryMediaSource'] = AdCreativeCategoryMediaSourceValues::getInstance()->getValues();
    $ref_enums['DynamicAdVoice'] = AdCreativeDynamicAdVoiceValues::getInstance()->getValues();
    $ref_enums['Operator'] = AdCreativeOperatorValues::getInstance()->getValues();
    return $ref_enums;
  }

  protected function setDataTrigger($data) {
    if (array_key_exists('id', $data)) {
      $this->data['creative_id'] = $data['id'];
    }
  }

  public function createAdLabel(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'adlabels' => 'list<Object>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/adlabels',
      new AdCreative(),
      'EDGE',
      AdCreative::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCreativeInsights(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/creative_insights',
      new AdCreativeInsights(),
      'EDGE',
      AdCreativeInsights::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPreviews(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ad_format' => 'ad_format_enum',
      'creative_feature' => 'creative_feature_enum',
      'dynamic_asset_label' => 'string',
      'dynamic_creative_spec' => 'Object',
      'dynamic_customization' => 'Object',
      'end_date' => 'datetime',
      'height' => 'unsigned int',
      'locale' => 'string',
      'place_page_id' => 'int',
      'post' => 'Object',
      'product_item_ids' => 'list<string>',
      'render_type' => 'render_type_enum',
      'start_date' => 'datetime',
      'width' => 'unsigned int',
    );
    $enums = array(
      'ad_format_enum' => AdPreviewAdFormatValues::getInstance()->getValues(),
      'creative_feature_enum' => AdPreviewCreativeFeatureValues::getInstance()->getValues(),
      'render_type_enum' => AdPreviewRenderTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/previews',
      new AdPreview(),
      'EDGE',
      AdPreview::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'account_id' => 'string',
      'adlabels' => 'list<Object>',
      'name' => 'string',
      'status' => 'status_enum',
    );
    $enums = array(
      'status_enum' => AdCreativeStatusValues::getInstance()->getValues(),
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
      'thumbnail_height' => 'unsigned int',
      'thumbnail_width' => 'unsigned int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new AdCreative(),
      'NODE',
      AdCreative::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'account_id' => 'string',
      'adlabels' => 'list<Object>',
      'name' => 'string',
      'status' => 'status_enum',
    );
    $enums = array(
      'status_enum' => AdCreativeStatusValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new AdCreative(),
      'NODE',
      AdCreative::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
