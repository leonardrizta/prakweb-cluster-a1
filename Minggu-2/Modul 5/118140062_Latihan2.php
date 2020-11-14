<?php
    $arr = ["lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat"];

    for ($i=0; $i<count($arr); $i++){
        $target = $i;
        for ($j=$i+1; $j<count($arr); $j++){
            $shorter = strlen($arr[$i]);

            if (strlen($arr[$i])>strlen($arr[$j])){
                $shorter = strlen($arr[$j]);
            }
            for ($k=0; $k<$shorter; $k++){
                if ($arr[$j][$k]<$arr[$target][$k]){
                    $target = $j;
                    break;
                }else if ($arr[$j][$k]>$arr[$target][$k]){
                    break;
                }
            }  
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$target];
        $arr[$target] = $temp;
    }

    echo "Hasil pengurutan : [";
    for($i = 0;$i<count($arr);$i++){
        if($i!=count($arr)-1){
            echo $arr[$i] . ", ";
        }else{
            echo $arr[$i];
        }
    }
    echo "]";
?>