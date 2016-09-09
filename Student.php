<?php

/* 
 * Student class to populate the information of a given student apploicant. 
 */

class Student {
    
    /* constructor to hold the base properties of a student. */
    function __construct(){
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /* adds the student's email */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    /* adds the student's grade */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    /* average the student's grades */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
        $total += $value;
        return $total / count($this->grades);
    }

    /* print function to output the students details. */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
        $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }

}

?>