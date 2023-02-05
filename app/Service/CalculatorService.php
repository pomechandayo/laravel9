<?php

namespace App\Service;

class CalculatorService
{
    private $result;

    public static function newInstance(int $start_value)
    {
        return new CalculatorService($start_value);
    }

    private function __construct($start_value)
    {
        $this->result = $start_value;
    }

    public function get_result()
    {
        return $this->result;
    }

    public function tax($num)
    {
        $this->result = $num + floor($num / 10);

        return $this;
    }
}
