<?php

    $solution = new Solution();
    echo $solution->uniquePaths(3, 7);
    class Solution {

        /**
         * @param Integer $m
         * @param Integer $n
         * @return Integer
         */
        function uniquePaths($m, $n) {
            if($m==1 || $n==1){
                return 1;
            }
            
            if($m==2)
                return $n;
            else if($n==2)
                return $m;
            
            $arr = array(array());

            for($i=0; $i<$m; $i++){
                for($j=0; $j<$n; $j++){
                    if($i==0 || $j==0){
                        $arr[$i][$j]=1;
                    }
                    else{
                        $arr[$i][$j] = $arr[$i][$j-1] + $arr[$i-1][$j]; 
                    }
                }
            }
            return $arr[$m-1][$n-1];
        }
    }

?>