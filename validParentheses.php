<?php

    $s = '{[()]({)}';
    $solution = new Solution();
    
    echo $solution->isValid($s);

    class Solution {

        /**
         * @param String $s
         * @return Boolean
         */
        function isValid($s) {
            $arr = [];

            for($i = 0; $i<strlen($s); $i++){
                if($s[$i]==='[' || $s[$i]==='(' || $s[$i]==='{'){
                    array_push($arr, $s[$i]);
                }
                else if($s[$i]===']' || $s[$i]===')' || $s[$i]==='}'){
                    if($arr[count($arr)-1] === $this->returnOpenBracket($s[$i])){
                        array_pop($arr);
                    }
                    else{
                        return 0;
                    }
                }
            }
            return (empty($arr));
        }
        
        function returnOpenBracket($b){
            switch($b){
                case ')':
                    return '(';
                    break;
                case '}':
                    return '{';
                    break;
                case ']':
                    return '[';
                    break;
                default:
                    return '';
            }
        }
    }
?>