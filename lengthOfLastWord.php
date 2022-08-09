<?php
$s = " s";
$solution = new Solution();
echo $solution->lengthOfLastWord($s);

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $foundLetter = false;
        $length = 0;
        for($i=strlen($s)-1; $i>=0; $i--){
            if($s[$i]!==' '){
                $foundLetter = true;
                $length++;
            }
            else if($foundLetter && $s[$i]!==' '){
                $length++;
            }
            else if($s[$i]===' ' && $foundLetter){
                return $length;
            }
        }
        return $length;
    }
}

?>