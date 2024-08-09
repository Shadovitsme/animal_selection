<?php

namespace classes;

require_once '/home/ukki/www/obuchalovo/classes/User.php';
use classes\FileWriter\User;

class Emploee extends User
{
    private $salary;

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    


}