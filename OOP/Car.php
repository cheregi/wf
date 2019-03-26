<?php
declare(strict_types=1);
namespace Model;

class Car
{
    public const COLOR=['white', 'red'];
//    public const COLOR_BLACK='black';
    public $brand;
    public $color;
    protected $previousOwner;
    private $locked=true;

    public function __construct()
    {
        echo 'Hello Diana';
    }
//    not a best practice
//    public function __construct(string $previousOwner= null)
//    {
//        $this->setPreviousOwner($previousOwner)
//        echo 'Hello Diana';
//    }

    public function getBrand() :?string
    {
        return $this->brand;
    }
    public function setBrand()
    {

        $this->brand=$newBrand;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getPreviousOwner()
    {
        return $this->previousOwner;
    }

    /**
     * @param mixed $previousOwmer
     */
    public function setPreviousOwner($previousOwner)
    {
        $this->previousOwner = $previousOwner;
        return $this;
    }

    /**
     * @return bool
     */
    public function isLocked(): boolean
    {
        return $this->locked;
    }

    /**
     * @param bool $locked
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;
        return $this;
    }

}
$volvo= new Car();
//$volvo->brand='volvo';
$volvoBrand=$volvo->getBramd();
$volvo->setBrand('volvo')
    ->setColor('yellow')
//    ->setColor(Car::COLOR(2))
//    ->setColor(Car::COLOR_BLACK)
    ->setLocked(false)
    ->setPreviousOwner('Diana');
