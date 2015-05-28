<?php

namespace Brightcove\Object\Player\Branch;

use Brightcove\Object\ObjectBase;
use Brightcove\Object\Player\Branch\Branch;

class BranchList extends ObjectBase {
  /**
   * @var Branch
   */
  protected $master;

  /**
   * @var Branch
   */
  protected $preview;

  public function applyJSON(array $json) {
    parent::applyJSON($json);

    $this->applyProperty($json, 'master', NULL, Branch::class);
    $this->applyProperty($json, 'preview', NULL, Branch::class);
  }

  /**
   * @return Branch
   */
  public function getMaster() {
    return $this->master;
  }

  /**
   * @param Branch $master
   * @return List
   */
  public function setMaster(Branch $master) {
    $this->master = $master;
    $this->fieldChanged('master');
    return $this;
  }

  /**
   * @return Branch
   */
  public function getPreview() {
    return $this->preview;
  }

  /**
   * @param Branch $preview
   * @return List
   */
  public function setPreview(Branch $preview) {
    $this->preview = $preview;
    $this->fieldChanged('preview');
    return $this;
  }
}