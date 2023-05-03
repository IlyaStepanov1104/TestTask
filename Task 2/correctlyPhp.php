<?php

namespace Task2;
/**
 * * @author Stepanov Ilya <ilyahtml@gmail.com>
 */
class correctlyPhp
{
    /**
     * @var string - php program (correct or not)
     */
    public $program = '';

    /**
     * @param $string - program, which need to check
     */
    public function __construct($string){
        $this->program = $string;
    }

    /**
     * Function, which check correctly program on PHP.
     * @return true if program is correct;
     * @return false if program isn't correct;
     */
    public function check():bool
    {
        $counter = 0;
        foreach (str_split($this->program) as $s){
            if ($s == '{'){
                $counter++;
            } else if ($s == '}'){
                $counter--;
            }
            if ($counter < 0){
                return false;
            }
        }
        return $counter == 0;
    }
}