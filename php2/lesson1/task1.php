<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 28.11.2018
 * Time: 14:08
 */

class Product
{
  private $name = '';
  private $weight = 0;
  private $volume = ['length' => 0, 'width' => 0, 'height' => 0];

  public function __construct($name, $weight, $volume)
  {
    $this->name = $name;
    $this->weight = $weight;
    $this->volume = $volume;
  }

  /**
   * @param array $volume
   */
  public function setVolume(array $volume): void
  {
    $this->volume = $volume;
  }

  function getVolume(): float
  {
    return $this->volume['length'] * $this->volume['width'] * $this->volume['height'];
  }

  /**
   * @param string $name
   */
  public function setName(string $name): void
  {
    $this->name = $name;
  }

  function getName(): string
  {
    return $this->name;
  }

  /**
   * @param int $weight
   */
  public function setWeight(int $weight): void
  {
    $this->weight = $weight;
  }

  /**
   * @return float
   */
  public function getWeight(): float
  {
    return $this->weight;
  }
}

class Tv extends Product
{
  private $color = false;

  public function __construct($name, $weight, $volume, $color)
  {
    parent::__construct($name, $weight, $volume);
    $this->color = $color;
  }

  /**
   * @return bool
   */
  public function isColor(): bool
  {
    return $this->color;
  }
}

class Pc extends Product
{
  private $ram = 0;

  public function __construct($name, $weight, $volume, $ram)
  {
    parent::__construct($name, $weight, $volume, $ram);
    $this->ram = $ram;
  }

  /**
   * @return int
   */
  public function getRam(): int
  {
    return $this->ram;
  }

  /**
   * @param int $ram
   */
  public function setRam(int $ram): void
  {
    $this->ram = $ram;
  }
}

$tv = new Tv('Toshiba', 3000, ['length' => 5, 'width' => 10, 'height' => 15], true);
echo $tv->getVolume();

$pc = new Pc('Mac', 2000, ['length' => 10, 'width' => 10, 'height' => 15], 4);
echo $pc->getVolume();