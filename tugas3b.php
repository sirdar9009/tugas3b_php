<?php
$t_awal=150000;
$bunga=12.5;
echo "Tabungan Awal =  Rp. ", $t_awal ,"<br/>";
echo "Bunga Setahun = Rp. ", $bunga, "<br/>";
echo "Totla Tabungan setahun? <br/>";
echo "jawaban : Rp. ", ($t_awal*$bunga/100)+$t_awal;
?>