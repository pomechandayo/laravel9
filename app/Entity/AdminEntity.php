<?php

namespace App\Entity;

class AdminEntity
{
  protected $id;
  protected $name;

  public function __construct(?int $id, string $name)
  {
    $this->id = $id;
    $this->name = $name;
  }

  public function get_name(): string
  {
    return $this->name;
  }
}