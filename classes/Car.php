<?php

namespace classes;

class Car
{
    public string $model;
    public string $color;
    public int $year;
    public int $speed;

    public function __construct($model, $color, $year, $speed)
    {
        $this->model = $model;
        $this->color  = $color;
        $this->year  = $year;
        $this->speed  = $speed;

    }

    public function getCarInfo()
    {
        return "<h3>О Машине</h3>
                Модель: {$this->model}<br>
                Цвет: {$this->color}<br>
                Год: {$this->year}<br>
                Скорость: {$this->speed}<br>";
    }

}