<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAdsV18\Object;

use FacebookAdsV18\Http\RequestInterface;
use FacebookAdsV18\Object\Fields\SystemUserFields;

class SystemUser extends AbstractCrudObject {

  /**
   * @deprecated getEndpoint function is deprecated
   * @return string
   */
  protected function getEndpoint() {
    return 'system_users';
  }

  /**
   * @return SystemUserFields
   */
  public static function getFieldsEnum() {
    return SystemUserFields::getInstance();
  }

  public function invalidateAccessTokens() {
    $this->getApi()->call(
      '/'.$this->assureId().'/access_tokens',
      RequestInterface::METHOD_DELETE);
  }
}
