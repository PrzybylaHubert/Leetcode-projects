<?php

$arr = [1,3,5,6];
$target = 5;

function searchInsert($nums, $target) {
        $left = 0;
        $right = count($nums)-1;

        while($left<=$right){
            $mid = floor(($left+$right)/2);
            
            if($target==$nums[$mid])
                return $mid;
            else if($nums[$mid] > $target)
                $right = $mid-1;
            else
                $left = $mid+1;
            
        }
        if($target>$nums[$mid])
            return $mid+1;
        else
            return $mid; 
    }
?>