<?php
namespace Dsw\Rating;

interface StoreInterface {

  public function addRate(int $rate);

  public function getStadistics(): array;
}