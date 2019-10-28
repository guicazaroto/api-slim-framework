<?php
namespace App\Models;

final class StoreModel {
  /**
   * @var int
   */
  private $id;
  
  /**
   * @var string
   */
  private $name;

  /**
   * @var string
   */
  private $phone;

  /**
   * @var string
   */
  private $address;

  /**
   * @return int
   */
  public function getId () : int {
    return $this->id;
  }

  public function setId ($id) : StoreModel {
    $this->id = $id;
    return $this;
  }

  public function getName () : string {
    return $this->name;
  }
  
  /**
   * @param string $name
   * @return StoreModel
   */
  public function setName (string $name) : StoreModel {
    $this->name = $name;
    return $this;
  }

  public function getPhone () : string {
    return $this->phone;
  }
  public function setPhone (string $phone) : StoreModel {
    $this->phone = $phone;
    return $this;
  }

  public function getAddress () : string {
    return $this->address;
  }
  public function setAddress (string $address) : StoreModel {
    $this->address = $address;
    return $this;
  }

}