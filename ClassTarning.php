<?php

/**
 * Description of ClassTarning
 *
 * @author alibro916
 */
class ClassTarning {

    protected $array;
    protected $array_length;

    public function __construct(array $values) {
        $this->array = $values;
        $this->array_length = count($values);
    }

    public function getAverage($decimals = null) {

        $average = array_sum($this->array) / $this->array_length;

        if (!is_null($decimals)) {
            return round($average, $precision);
        } else {
            return $average;
        }
    }

}
