<?php

declare(strict_types=1);

# Example of strtr() function

class BindClass
{
    private $template = 'My name is :name. My position is :position. I am :yo';

    public function bind(array $inputParams) :string
    {
        list($name, $position, $age) = $inputParams;

        $params = [
            ':name' => $name,
            ':position' => $position,
            ':yo' => $age,
        ];

        return strtr($this->template, $params);
    }
}

$object = new BindClass();

var_dump($object->bind(['Sergey', 'PHP developer', '25']));
