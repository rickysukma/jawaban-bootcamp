<?php
//His Code below with $'s added for vars

function fpb($n, $m) {
   $n=abs($n); $m=abs($m);
   if ($n==0 and $m==0)
       return 1; //avoid infinite recursion
   if ($n==$m and $n>=1)
       return $n;
   return $m<$n?fpb($n-$m,$n):fpb($n,$m-$n);
}

function isBentrok($n, $m) {
  $hasil = $m * ($n/fpb($n,$m));
  echo $hasil;
}
	echo 'Jadi setiap hari ke-'; isBentrok(5,6); echo ' Pak Hasan Jadwalnya terbentrok';