<?php
namespace classes;

class Student
{
    public string $name;
    public string $surname;
    public int $age;
    public string $faculty;

    public function __construct($name, $surname, $age, $faculty)
    {
        $this->name = $name;
        $this->surname  = $surname;
        $this->age  = $age;
        $this->faculty  = $faculty;

    }

    public function getStudentInfo()
    {
        return "<h3>Студент</h3>
                Имя: {$this->name}<br>
                Фамилия: {$this->surname}<br>
                Возраст: {$this->age}<br>
                Факультет: {$this->faculty}<br>";
    }

}