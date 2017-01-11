<?php

/**
 * Created by PhpStorm.
 * User: jasonlee
 * Date: 2017-01-11
 * Time: 10:51 AM
 */
class Student {
    /**
     * Student constructor.
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    /**
     * Adds an email for the student
     * @param $which
     * @param $address
     */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    /**
     * Adds a grade for the student
     * @param $grade
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    /**
     * Compute average grade of the student
     * @return float|int
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }

    /**
     * Display the students information
     * @return string
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach ($this->emails as $which => $what)
            $result .= $which . ': ' . $what . "\n";
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }
}