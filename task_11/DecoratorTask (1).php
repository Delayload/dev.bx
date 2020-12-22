<?php

interface Shape
{
	public function draw() : string;
}

class Square implements Shape
{
	public function draw() : string
	{
		return "Shape Square\n";
	}
}

class Circle implements Shape
{
	public function draw() : string
	{
		return "Shape Circle\n";
	}
}

abstract class ColorDecorator implements Shape
{
	protected $shape;

	public function __constructor(Shape $shape)
	{
		$this->shape = $shape;
	}

	public function draw() : string
	{
		return $this->shape->draw();
	}
}

class RedColor extends ColorDecorator
{
	public function draw(): string
	{
		return "Red colored ".parent::draw();
	}
}

class clientCode
{
	protected $shape;

	public function __construct(Shape $shape)
	{
		$this->shape = $shape;
	}

	public function drawShape() : string
	{
		return $this->shape->draw();
	}
}

$square = new Square();
$redShape = new RedColor($square);
$shapeUser = new clientCode($redShape);
$shapeUser->drawShape();
/*
	Необходимо воспользоваться шаблоном проектирования "Декоратор" для того, чтобы иметь возможность
	"получать" в итоге фигуры разных цветов, например вызов декоратора:
	$redShape->draw();
	должен вывести:
	"Red colored Shape Square" либо "Red colored Shape Circle"
	в зависимости от того, какую фигуру мы оборачиваем декоратором.
 */

