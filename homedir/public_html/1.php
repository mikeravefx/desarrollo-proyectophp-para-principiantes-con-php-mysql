<?
$fecha = mktime(date("H")+6,date("i"),date("s"),date("m"),date("d"),date("Y"));
      $Hora_assassin=strtotime($row_mvp_lista['hora']);
      $Hora_sale = $row_mvp_lista['minutos']*60;
      $Hora_sale = $Hora_sale+$Hora_assassin;
      $diff=$Hora_sale - $fecha;
      //seg
      $seg=floor($diff%60);
      //min
      $Min=floor($diff/ (60))%60;
      //horas
      $Horas=floor($diff/ (60 * 60))%60;
      $dias=floor($diff / (60 * 60 * 24)) ;
      echo $dias." dias ".$Horas.":".$Min.":".$seg; 
      echo "<br>";
      echo "<br>";
	  echo $fecha; 
	  ?>
