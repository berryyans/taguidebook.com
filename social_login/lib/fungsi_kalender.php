<?php
function buatkalender($tanggal,$bulan,$tahun) {      
  $bulanan=array(1=>"Januari","Februari","Maret","April",
                    "Mei","Juni","Juli","Agustus","September", 
                    "Oktober","November","Desember");
  $bln=date("n");
  $thn=date("Y");

  $jmlhari = date("t",mktime(0,0,0,$bulan,1,$tahun));
  $haritglsatu = date("w",mktime(0,0,0,$bulan,1,$tahun));

  $kalender = "<table width='225' cellspacing=1 cellpadding=14  
               border=0 bgcolor=#C9CDCB>\n";
  $kalender .= "<tr align=center bgcolor=#FFFFFF>
               <td colspan=7>$bulanan[$bln], $thn
               </td></tr>\n";

  $kalender .= "<tr class=tr_judul style='padding:15px;'>
                <td>M</td><td>S</td><td>S</td><td>R</td>
                <td>K</td><td>J</td><td>S</td></tr>\n";
  $a 	  = 1;
  $adabaris   = TRUE;
  $mulaicetak = 0;
  while ($adabaris) {
    $kalender .= "<tr align=center bgcolor=#FFFFFF>";
    for ($i = 0; $i < 7; $i++ ) {
      if ($mulaicetak < $haritglsatu) {
        $kalender .= "<td>&nbsp;</td>";
        $mulaicetak++;
      } 
      elseif ($a <= $jmlhari) {
        $tt = $a;
        if ($a == $tanggal) { 
          $tt = "<span style='color: blue; font-weight: bold; 
                 font-size: larger; text-decoration: blink;'>
                 $tt</span>"; 
        }
        if ($i == 0) { 
          $tt = "<font color=\"#FF0000\">$tt</font>"; 
        }
        $kalender .= "<td>$tt</td>";
        $a++;
      } 
      else {
        $kalender .= "<td>&nbsp;</td>";
      }
    }
    $kalender .= "</tr>\n";
    if ($a <= $jmlhari) { 
      $adabaris = TRUE; 
    } 
    else { 
      $adabaris = FALSE; 
    }
  }
  $kalender .= "</table>\n";
  return $kalender;
}
?>
