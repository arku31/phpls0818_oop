<?php

namespace Loftblog;

trait Rotator
{
    public function rotate()
    {
        echo "типа поворот";
    }
}

//Intervention Image

abstract class Image
{
    const NAME = 'asd.jpg';
    protected $width;
    protected $height;
    public static $asd = 'asd';

    abstract public function asd();

    public function __construct($width = 200, $height = 400)
    {
        $this->width  = $this->convert($width);
        $this->height = $this->convert($height);
        echo 'INIT';
    }

    protected function convert($digit)
    {
        return $digit / 10;
    }

    protected function getSizes()
    {
        return [
            'w' => $this->width,
            'h' => $this->height
        ];
    }

    public function saySizes()
    {
        $sizes = $this->getSizes();
        echo $sizes['w'].PHP_EOL;
        echo $sizes['h'].PHP_EOL;
    }

    protected function sayHi()
    {
        echo self::class;
    }

    private function sayHello()
    {
        //
    }

    public function saySmth()
    {
        $a = rand(0, 1);
        if ($a == 0) {
            $this->sayHi();
        } else {
            $this->sayHello();
        }
    }

    public static function drawExample()
    {
        echo "типа нарисовали ";
        echo self::NAME;
    }
}


//$object = new Image(100, 200);
//$object->saySizes();

final class Instagram extends Image implements Kartinko
{
    use Rotator;

    public function asd()
    {
        //
    }
    public function __construct($width = 400, $height = 400)
    {
        parent::__construct($width, $height);
        echo "after parent constructing";
    }

    public function crop()
    {
        if ($this->width > $this->height) {
            $this->width = $this->height;
        } else {
            $this->height = $this->width;
        }
    }
}

trait antiRotator
{
    public function antiRotiarovat()
    {

    }
}


class Memasiki
{
    use Rotator, Antirotator;
}
//trait
//interface
$instagram = new Instagram(2000, 2000);
$instagram->saySizes();
$instagram->rotate();
//$instagram->crop();
//$instagram->saySizes();
//
//
//Image::drawExample();
//Image::$asd = 'asd';
//echo Image::NAME;
(new Memasiki())->rotate();
(new Memasiki())->antiRotiarovat();

interface Kartinko
{
    public function saySizes();
    public function saySmth();
}