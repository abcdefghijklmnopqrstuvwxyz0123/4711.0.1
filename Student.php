<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Student
 * 
 * @author Francis Carreon - A00924988
 */
class Student {

    /**
     * initialize properties
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    /**
     * @param $which   e.g. home, work  
     * @param $address email
     */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }

    /**
     * @param $grade for array
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    /**
     * @return grades average 
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }

    /**
     * @return student summary 
     */
    function toString() {
        $result = '<b>' . $this->first_name . ' ' . $this->surname . '</b>';
        $result .= ' (' . $this->average() . ")\n";
        foreach ($this->emails as $which => $what)
            $result .= $which . ': ' . $what . "\n";
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }

}
