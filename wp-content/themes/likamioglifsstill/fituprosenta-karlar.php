<?php

/* Template Name: Fituprósenta Karlar */

get_header();

?>

<?php include('navigation.php'); ?>

<div class="single-page">
	<div class="single-page-content">
		
		<form action="" target="" method="post">
			<div>
				<table border="0" align="center" cellpadding="5px" cellspacing="0">
					<tbody>
						<tr>
                        	
							<td rowspan="4" valign="top" width="350px">Við fitumælingu er notast við fituklípur sem hægt er að fá í hinum ýmsu stærðum og gerðum.  Við mælum með þessari <a href="http://n.likamioglifsstill.is/adrar-vorur/fituklipa"><b style="color: red;">hér</b></a> sem er einföld, þægileg og á góðu verði.<br /><br /><b>Brjóst:&nbsp;</b>Húðin í hliðinni á hægra brjósti er klipin* saman miðjavegu á milli geirvörtu og efrihluta brjóstsins.<br /><br /><b>Kviður:&nbsp;</b>Húðin er klipin* saman ca. 2&frac12; cm hægra megin við nafla.<br /><br /><b>Læri:&nbsp;</b>Klípið* húðina saman á miðju framanverðu lærinu.<br /><br />Með því að smella <a href="<?php bloginfo('template_directory'); ?>/annad-efni/fituprosentu_tolfraedi.xls">hér</a> má nálgast Excel skjal til að setja inn mælda fituprósentu í hverri viku<br /><br /><p style="font-size: 10px;">*ágætt er að hafa ca. 2&frac12; cm milli vísifingurs og þumalfingurs þegar húðin er dregin saman.  Mælið síðan með fituklípunni ca. 1 cm frá fingrum.</p>
							</td>
						</tr>
						
						<tr>
							<td align="center" ><img src="<?php bloginfo('template_directory'); ?>/images/fitum-karlar.png"></td>
						</tr>
						
						<tr>		
                        
								<td width="160px" align="right" valign="bottom">
<label><b>Brjóst:</b> </label><input id="brjost" class="brjost" name="brjost" size="1">&nbsp;mm&nbsp;&nbsp;<br />
		
<lable><b>Kviður:</b> </label><input id="magi" class="magi" name="magi" size="1">&nbsp;mm&nbsp;&nbsp;<br />

<label><b>Læri: </b></label><input id="laeri" class="laeri" name="laeri" size="1">&nbsp;mm&nbsp;&nbsp;<br />

<label><b>Aldur: </b></label><input id="aldur" class="aldur" name="aldur" size="1">&nbsp;ára/s</td>
						</tr>
						
						<tr>
							<td colspan="4" align="center"><input type="submit" name="submit" value="Reikna fituprósentu..."><br/>
								
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</form>

		<?php 
		
			if (isset($_POST['submit']))
				{
				$magi = $_POST['magi'];
				$brjost = $_POST['brjost'];
				$laeri = $_POST['laeri'];
				$aldur = $_POST['aldur'];
			
			
			$sum = $magi + $brjost + $laeri;
			
			$density1 = '0.0008267' * $sum;
			$density2 = '1.1093800' - $density1;
			
			$density3 = $sum * $sum;
			$density4 = '0.0000016' * $density3;
			
			$density5 = '0.0002574' * $aldur;
			
			$density6 = $density2 + $density4;
			$density_final = $density6 - $density5;
			
			$bodyfat1 = '4.95' / $density_final;
			$bodyfat2 = $bodyfat1 - '4.5';
			$bodyfat_final = $bodyfat2 * '100';
			
			echo '<table width="85%">';
			echo '<tbody>';
			echo '<tr>';
			echo '<td align="center">';
			echo('<font color="#333333" size="3">');
			echo '<b>Miðað við uppgefnar forsendur er fituprósentan hjá þér:</b> ';
			echo('</font>');
			echo('<font size="5" color="green">');
			echo round($bodyfat_final, 2), '%';
			echo('</font>');
			echo '</td>';
			echo '</tr>';
			echo '</tbody>';
			echo '</table>';
			
			}
		?>
		
	</div>
</div>

<?php get_footer(); ?>