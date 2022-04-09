<?php
    function cekprima($n, $m){

    if($n >= $m){
        echo "Batasan Nilai salah !";
    } else {

    $jumlah=0;
    for($n;$n<=$m;$n++){
             $counter = 0;
             for($i=1;$i<=$m;$i++){
                            if($n % $i==0){
                                $counter++;
                            }
                        }
             if($counter==2){
                 echo "$n, ";
                 $jumlah++;
             }
        }
        echo 'ditemukan '.$jumlah.' bilangan prima<br>';
    }
}
cekprima(1,11);
?>