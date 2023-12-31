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

namespace Google\Service\Docs;

class StructuralElement extends \Google\Model
{
  /**
   * @var int
   */
  public $endIndex;
  /**
   * @var Paragraph
   */
  public $paragraph;
  protected $paragraphType = Paragraph::class;
  protected $paragraphDataType = '';
  /**
   * @var SectionBreak
   */
  public $sectionBreak;
  protected $sectionBreakType = SectionBreak::class;
  protected $sectionBreakDataType = '';
  /**
   * @var int
   */
  public $startIndex;
  /**
   * @var Table
   */
  public $table;
  protected $tableType = Table::class;
  protected $tableDataType = '';
  /**
   * @var TableOfContents
   */
  public $tableOfContents;
  protected $tableOfContentsType = TableOfContents::class;
  protected $tableOfContentsDataType = '';

  /**
   * @param int
   */
  public function setEndIndex($endIndex)
  {
    $this->endIndex = $endIndex;
  }
  /**
   * @return int
   */
  public function getEndIndex()
  {
    return $this->endIndex;
  }
  /**
   * @param Paragraph
   */
  public function setParagraph(Paragraph $paragraph)
  {
    $this->paragraph = $paragraph;
  }
  /**
   * @return Paragraph
   */
  public function getParagraph()
  {
    return $this->paragraph;
  }
  /**
   * @param SectionBreak
   */
  public function setSectionBreak(SectionBreak $sectionBreak)
  {
    $this->sectionBreak = $sectionBreak;
  }
  /**
   * @return SectionBreak
   */
  public function getSectionBreak()
  {
    return $this->sectionBreak;
  }
  /**
   * @param int
   */
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  /**
   * @return int
   */
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  /**
   * @param Table
   */
  public function setTable(Table $table)
  {
    $this->table = $table;
  }
  /**
   * @return Table
   */
  public function getTable()
  {
    return $this->table;
  }
  /**
   * @param TableOfContents
   */
  public function setTableOfContents(TableOfContents $tableOfContents)
  {
    $this->tableOfContents = $tableOfContents;
  }
  /**
   * @return TableOfContents
   */
  public function getTableOfContents()
  {
    return $this->tableOfContents;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StructuralElement::class, 'Google_Service_Docs_StructuralElement');
