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

namespace Google\Service\Monitoring;

class CollectdPayloadError extends \Google\Collection
{
  protected $collection_key = 'valueErrors';
  /**
   * @var Status
   */
  public $error;
  protected $errorType = Status::class;
  protected $errorDataType = '';
  /**
   * @var int
   */
  public $index;
  /**
   * @var CollectdValueError[]
   */
  public $valueErrors;
  protected $valueErrorsType = CollectdValueError::class;
  protected $valueErrorsDataType = 'array';

  /**
   * @param Status
   */
  public function setError(Status $error)
  {
    $this->error = $error;
  }
  /**
   * @return Status
   */
  public function getError()
  {
    return $this->error;
  }
  /**
   * @param int
   */
  public function setIndex($index)
  {
    $this->index = $index;
  }
  /**
   * @return int
   */
  public function getIndex()
  {
    return $this->index;
  }
  /**
   * @param CollectdValueError[]
   */
  public function setValueErrors($valueErrors)
  {
    $this->valueErrors = $valueErrors;
  }
  /**
   * @return CollectdValueError[]
   */
  public function getValueErrors()
  {
    return $this->valueErrors;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CollectdPayloadError::class, 'Google_Service_Monitoring_CollectdPayloadError');
