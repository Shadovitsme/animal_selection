<?php

namespace classes\FileWriter;
require_once '/home/ukki/www/obuchalovo/classes/User.php';
use classes\FileWriter\User;

class Student extends User
{
    private $course; // курс

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }
}