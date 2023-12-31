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

namespace Google\Service\CloudTalentSolution;

class CompensationFilter extends \Google\Collection
{
  protected $collection_key = 'units';
  /**
   * @var bool
   */
  public $includeJobsWithUnspecifiedCompensationRange;
  /**
   * @var CompensationRange
   */
  public $range;
  protected $rangeType = CompensationRange::class;
  protected $rangeDataType = '';
  /**
   * @var string
   */
  public $type;
  /**
   * @var string[]
   */
  public $units;

  /**
   * @param bool
   */
  public function setIncludeJobsWithUnspecifiedCompensationRange($includeJobsWithUnspecifiedCompensationRange)
  {
    $this->includeJobsWithUnspecifiedCompensationRange = $includeJobsWithUnspecifiedCompensationRange;
  }
  /**
   * @return bool
   */
  public function getIncludeJobsWithUnspecifiedCompensationRange()
  {
    return $this->includeJobsWithUnspecifiedCompensationRange;
  }
  /**
   * @param CompensationRange
   */
  public function setRange(CompensationRange $range)
  {
    $this->range = $range;
  }
  /**
   * @return CompensationRange
   */
  public function getRange()
  {
    return $this->range;
  }
  /**
   * @param string
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
  /**
   * @param string[]
   */
  public function setUnits($units)
  {
    $this->units = $units;
  }
  /**
   * @return string[]
   */
  public function getUnits()
  {
    return $this->units;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CompensationFilter::class, 'Google_Service_CloudTalentSolution_CompensationFilter');
