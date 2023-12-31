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

namespace Google\Service\CloudIdentity;

class MemberRelation extends \Google\Collection
{
  protected $collection_key = 'roles';
  /**
   * @var string
   */
  public $member;
  /**
   * @var EntityKey[]
   */
  public $preferredMemberKey;
  protected $preferredMemberKeyType = EntityKey::class;
  protected $preferredMemberKeyDataType = 'array';
  /**
   * @var string
   */
  public $relationType;
  /**
   * @var TransitiveMembershipRole[]
   */
  public $roles;
  protected $rolesType = TransitiveMembershipRole::class;
  protected $rolesDataType = 'array';

  /**
   * @param string
   */
  public function setMember($member)
  {
    $this->member = $member;
  }
  /**
   * @return string
   */
  public function getMember()
  {
    return $this->member;
  }
  /**
   * @param EntityKey[]
   */
  public function setPreferredMemberKey($preferredMemberKey)
  {
    $this->preferredMemberKey = $preferredMemberKey;
  }
  /**
   * @return EntityKey[]
   */
  public function getPreferredMemberKey()
  {
    return $this->preferredMemberKey;
  }
  /**
   * @param string
   */
  public function setRelationType($relationType)
  {
    $this->relationType = $relationType;
  }
  /**
   * @return string
   */
  public function getRelationType()
  {
    return $this->relationType;
  }
  /**
   * @param TransitiveMembershipRole[]
   */
  public function setRoles($roles)
  {
    $this->roles = $roles;
  }
  /**
   * @return TransitiveMembershipRole[]
   */
  public function getRoles()
  {
    return $this->roles;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MemberRelation::class, 'Google_Service_CloudIdentity_MemberRelation');
