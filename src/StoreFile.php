<?php
namespace Dsw\Rating;

class StoreFile implements StoreInterface {

  public function addRate(int $rate) {}

  public function getStadistics(): array 
  {
    return [];
  } 
}