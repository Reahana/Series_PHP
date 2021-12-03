<?php

namespace App\classes;

class MaxToMin
{
    public $startingNumber;
    public $endingNumber;
    public $result;
    public $i;

    public function __construct($data)
    {
        $this->startingNumber=$data['starting_number'];
        $this->endingNumber=$data['ending_number'];


    }

    public function index()
    {   if($this->startingNumber>$this->endingNumber)
        {
            for($this->i=$this->startingNumber;$this->i>=$this->endingNumber;$this->i--)
            {
                $this->result.= $this->i.' ';
            }
        }
        else
        {
            for($this->i=$this->startingNumber;$this->i>=$this->endingNumber;$this->i--)
            {
                $this->result.= $this->i.' ';
            }
        }
        for($this->i=$this->endingNumber;$this->i>=$this->startingNumber;$this->i--)
        {
            $this->result.= $this->i.' ';
        }
        return $this->result;
    }
}