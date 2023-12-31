<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\RealTimeBidding;

class DomainCallEvidence extends \Google\Collection
{
  protected $collection_key = 'topHttpCallDomains';
  /**
   * @var DomainCalls[]
   */
  public $topHttpCallDomains;
  protected $topHttpCallDomainsType = DomainCalls::class;
  protected $topHttpCallDomainsDataType = 'array';
  /**
   * @var int
   */
  public $totalHttpCallCount;

  /**
   * @param DomainCalls[]
   */
  public function setTopHttpCallDomains($topHttpCallDomains)
  {
    $this->topHttpCallDomains = $topHttpCallDomains;
  }
  /**
   * @return DomainCalls[]
   */
  public function getTopHttpCallDomains()
  {
    return $this->topHttpCallDomains;
  }
  /**
   * @param int
   */
  public function setTotalHttpCallCount($totalHttpCallCount)
  {
    $this->totalHttpCallCount = $totalHttpCallCount;
  }
  /**
   * @return int
   */
  public function getTotalHttpCallCount()
  {
    return $this->totalHttpCallCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DomainCallEvidence::class, 'Google_Service_RealTimeBidding_DomainCallEvidence');
