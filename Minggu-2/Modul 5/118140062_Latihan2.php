<?php
    $arr = ["lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat"];
    // menggunakan sort agar dapat mengurutkan data yang berbeda beda dan acak
    sort($arr);
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