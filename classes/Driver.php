<?php
namespace classes\FileWriter;
require_once '/home/ukki/www/obuchalovo/classes/Emploee.php';
use classes\FileWriter\Emploee;

class Driver extends Emploee
{
    private $stage;

    /**
     * @return mixed
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * @param mixed $stage
     */
    public function setStage($stage)
    {
        if ($stage[0] === 'A' || $stage[0] === 'B' || $stage[0] === 'C' || $stage[0] === 'D'){
            $this->stage = $stage;
        }
        else { $this->stage = 'not correct stage'; }
    }

}