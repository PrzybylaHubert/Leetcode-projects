<?php

$s = "XVI";
$solution = new Solution();
echo $solution->romanToInt($s);

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $number = 0;
        while(!strlen($s)<=1){
            if(strlen($s)==1){
                $number = $number + $this->value($s[0]);
                return $number;
            }
            else if(strlen($s)==0){
                return $number;
            }
            if($this->value($s[0])<$this->value($s[1])){
                $number = $number + $this->value($s[1])-$this->value($s[0]);
                $s = substr($s, 2);
            }
            else{
                $number = $number +$this->value($s[0]);
                $s = substr($s, 1);
            }
        }
    }

    private function value($l){
        switch($l){
            case 'M':
                return 1000;
            case 'D':
                return 500;
            case 'C':
                return 100;
            case 'L':
                return 50;
            case 'X':
                return 10;
            case 'V':
                return 5;
            case 'I':
                return 1;
            default:
                return 0;

        }
    }
}
?>