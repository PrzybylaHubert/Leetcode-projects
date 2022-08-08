<?php

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        
        if($x<0){
            return false;
        }
        
        $numberLength = 1;
        $tmp = $x;
        while(abs($tmp)>=10){
            $tmp = $tmp/10;
            $numberLength++;
        }
        

        for($i=0; $i<intval($numberLength/2); $i++){
            $tmp = $x;
            $rightValue = $tmp%10;
            $x = $x - $rightValue;
            $leftValue = $tmp;
            for($j=$i; $j<$numberLength-1-$i; $j++){
                $leftValue = $leftValue/10;
            }
            $leftValue = intval($leftValue);
            if(intval($leftValue)!=$rightValue){
                return false;
            }
            for($j=$i; $j<$numberLength-1-$i; $j++){
                $leftValue = $leftValue*10;
            }
            $x = ($x - $leftValue)/10;
        }
        return true;
    }
}

?>