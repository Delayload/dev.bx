<?php

interface Shape
{
	public function draw():void;
}

class Square implements Shape
{
	public function draw():void
	{
		echo "Shape Square\n";
	}
}

class Circle implements Shape
{
	public function draw():void
	{
		echo "Shape Circle\n";
	}
}

abstract class ColorDecorator implements Shape
{
	protected $shape;

	public function __construct(Shape $shape)
	{
		$this->shape = $shape;
	}

	public function draw():void
	{
		$this->shape->draw();
	}
}

class RedColor extends ColorDecorator
{
	public function draw(): void
	{
		$this->red();
		parent::draw();
	}
	public function red()
	{
		echo 'Red colored ';
	}
}

class BlueColor extends ColorDecorator
{
	public function draw(): void
	{
		$this->blue();
		parent::draw();
	}
	public function blue()
	{
		echo 'Blue colored ';
	}
}

$square = new Square();
$redShape = new RedColor($square);
$redShape->draw();
/*
	���������� ��������������� �������� �������������� "���������" ��� ����, ����� ����� �����������
	"��������" � ����� ������ ������ ������, �������� ����� ����������:
	$redShape->draw();
	������ �������:
	"Red colored Shape Square" ���� "Red colored Shape Circle"
	� ����������� �� ����, ����� ������ �� ����������� �����������.
 */

