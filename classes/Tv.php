<?php

namespace classes;

class Tv
{
    public string $title;
    public string $model;
    public string $color;
    public int $year;

    public function __construct($title,$model, $color, $year)
    {
        $this->title = $title;
        $this->model = $model;
        $this->color  = $color;
        $this->year  = $year;

    }

    public function getTvInfo()
    {
        return "<h3>Телевизор</h3>
                Название:{$this->title}<br>
                Модель: {$this->model}<br>
                Цвет: {$this->color}<br>
                Год: {$this->year}<br>";
    }

}