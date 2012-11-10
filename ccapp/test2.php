<?php



function artificial($ar,$val_nt)//primeste argument randul curent (inainte de =) si randul principal (inainte de =) ; la NT al doilea caracter denota artificialitatea

{

	if (strpos($val_nt,'N')==false) //daca nu e de tip NT

	{

		if (substr($ar,0,1) == 'Y' ) return 'Da';

		else return 'Nu';

	}

	else //daca e de tip NT

		if (substr($ar,1,1) == 'Y' ) return 'Da';

		else return 'Nu';

}



function tip_licitatie($tp)

{

	switch ($tp)

	{

		case '0':

			return 'Nici o întelegere anume';

			break;

		case '1':

			return 'Sign-off';

			break;

		case '2':

			return 'Non-forcing';

			break;

		case '3':

			return 'Constructiv';

			break;

		case '4':

			return 'Invitational';

			break;

		case '5':

			return 'Forcing';

			break;

		case '6':

			return 'Forta de mansa';

			break;

		case '7':

			return 'Interes de slam';

			break;

		case '8':

			return 'Control bid';

			break;

		case '9':

			return 'Baraj';

			break;

		case 'A':

			return 'Transfer';

			break;

		case 'B':

			return 'Puppet';

			break;

		case 'C':

			return 'Releu';

			break;

		case 'D':

			return 'Asking Bid (Interogativa)';

			break;

		case 'E':

			return 'Asking bid response';

			break;

		default:

			return;

			break;

	}



}



function cl_length($lg)

{

		$lg_min=substr($lg,8,1);

		$lg_max=substr($lg,9,1);

		if ($lg_max - $lg_min == 8)

			return '&nbsp;';

		else

			if ($lg_max - $lg_min == 0)

				return $lg_min;

			else

				if ($lg_max == '8')

					return "$lg_min+";

				else return "$lg_min - $lg_max";

				

}









$data = file_get_contents('stdacol1312.bss');

$values = explode("\r\n", $data);



$counter = 0;



$pattern_rp = "/^.{4}$/"; //ramura principala

$pattern_rs = "/^.{7}$/";//ramura secundara



echo '<table class="sis_tbl">';

echo '<colgroup>

							<col class="par">

							<col class="impar">

							<col class="par">

							<col class="impar">

							<col class="ult_col">

						   </colgroup>';

echo '<thead><tr class="fr"><th scope="Col" class="licitatie">Licitatie</th><th scope"Col" class="artificial">Artificial</th><th scope"Col" id="tip">Tip</th><th scope="Col" id="nr">#</th><th scope="Col" id="descriere">Descriere</th></tr></thead>';

echo '<tbody>';//tabelul ramura principala

while (!empty($values[$counter]))//cat timp n-a fost parcurs integral fisierul

{

$values2 = explode ("=" , $values[$counter]);//separa fiecare rand in <values2[0]> ce e inainte de = , values2[1] ce e dupa =



if (preg_match($pattern_rp,$values2[0])) //verifica daca randul e ramura principala

{

	echo "<tr>".



			"<td>".mb_substr($values2[0],2,100)."</td>"."<td>".artificial($values2[1],$values2[0])."</td>"."<td>".tip_licitatie(substr($values2[1],7,1))."</td>";

			

				if (!preg_match("/N/",$values2[0])) //daca nu e de tip N(T)

						echo "<td>".cl_length($values2[1])."</td>"."<td>".mb_substr($values2[1],10,80);



				else //daca e de tip N(T)

						echo "<td>"."&nbsp"."</td>"."<td>".mb_substr($values2[1],8,100);



				





			$values3 = explode ("=" , $values[$counter+1]);//separa doar urmatorul rand in <values3[0]> ce e inainte de = , values3[1] ce e dupa =

			if (preg_match($pattern_rs,$values3[0])) //daca are cel putin o ramura secundara*/

			

				{

					echo '<br>'.'<span>&nbsp;</span>'.'<div class="toggle">';

					echo '<table class="sis_tbl">';

					echo '<colgroup>

							<col class="par">

							<col class="impar">

							<col class="par">

							<col class="impar">

							<col class="ult_col">

						   </colgroup>';



					echo '<thead><tr class="fr"><th scope="Col" class="licitatie">Licitatie</th><th scope"Col" class="artificial">Artificial</th><th scope"Col" id="tip">Tip</th><th scope="Col" id="nr">#</th><th scope="Col" id="descriere">Descriere</th></tr></thead>';//tabelul cu licitatiile de ordin secund

					echo '<tbody>';

					$counter_rs=$counter+1;// se incepe afisarea de pe urmatorul rand

					while ((!preg_match($pattern_rp,$values3[0]))&&(!empty($values3[0]))) //cat timp urmatorul rand nu este ramura principala

						{

							$values3 = explode ("=" , $values[$counter_rs]); //separa fiecare rand , del: "="

							if (preg_match($pattern_rs,$values3[0])&&(strpos($values3[0],'P')==4)) //daca e ramura secundara cu PAS

								{echo "<tr>".

										"<td>".mb_substr($values3[0],5,100)."</td>"."<td>".artificial($values3[1],$values2[0])."</td>"."<td>".tip_licitatie(substr($values3[1],7,1))."</td>";

							

								if  ((strpos($values3[0],'N')!==false)&&(strpos($values2[0],'N')==false)) //afiseaza lungimea si descriere daca e de tip NT

									echo "<td>"."&nbsp;"."</td>"."<td>".mb_substr($values3[1],8,100);

									

								else //afiseaza lungimea si descriere daca nu e de tip NT

									echo "<td>".cl_length($values3[1])."</td>"."<td>".mb_substr($values3[1],10,100);







/* incepe cautare de ramura tertiara*/									

			$values4 = explode ("=" , $values[$counter+2]);//separa doar urmatorul rand (dupa randul secundar) in <values4[0]> ce e inainte de = , values4[1] ce e dupa =

			if (strlen($values4[0])==10) //daca are cel putin o ramura tertiara (10 caractere lungime)

				{

					echo '<br>'.'<span>&nbsp;</span>'.'<div class="toggle">';

					echo '<table class="sis_tbl">';

					echo '<colgroup>

							<col class="par">

							<col class="impar">

							<col class="par">

							<col class="impar">

							<col class="ult_col">

						   </colgroup>';

					echo '<thead><tr class="fr"><th scope="Col" class="licitatie">Licitatie</th><th scope"Col" class="artificial">Artificial</th><th scope"Col" id="tip">Tip</th><th scope="Col" id="nr">#</th><th scope="Col" id="descriere">Descriere</th></tr></thead>';

					echo '<tbody>';//tabelul cu licitatiile de ordin tertiar

					$counter_rt=$counter+2;//se initializeaza cautarea

						while ((!preg_match($pattern_rs,$values4[0]))&&(!empty($values4[0]))) //cat timp urmatorul rand nu este ramura SECUNDARA

						{

							$values4 = explode ("=" , $values[$counter_rt]); //separa fiecare rand , del: "="

							

							if ((strlen($values4[0])==10)&&(strpos($values4[0],'P')==4))//daca e de tip tertiar cu PAS (poz 7)

							{

								//echo "<tr><td>".$values4[0];

								echo "<tr>".

											"<td>".mb_substr($values4[0],8,100)."</td>"."<td>".artificial($values4[1],$values2[0])."</td>"."<td>".tip_licitatie(substr($values4[1],7,1))."</td>";

								

									if  ((strpos($values4[0],'N')!==false)&&(strpos($values2[0],'N')==false)) //afiseaza lungimea si descriere daca e de tip NT

										echo "<td>"."&nbsp;"."</td>"."<td>".mb_substr($values4[1],8,100);

										

									else //afiseaza lungimea si descriere daca nu e de tip NT

										echo "<td>".cl_length($values4[1])."</td>"."<td>".mb_substr($values4[1],10,100);

							

									echo "</td>"."</tr>";//se inchide randul

							}

						

								

							

							$counter_rt++;

						}

					

					echo "</tbody></table></div>";	//tabel ramura 3

				}

					

								

								echo "</td>"."</tr>";//se inchide randul

								}

							

							$counter_rs++ ; //se trece pe urmatorul rand

							

						}

					echo "</tbody></table></div>";		//tabel ramura secunda

				

				}

			



	echo "</td>"."</tr>";

}











$counter++;

}

echo "</tbody></table>";





/*drupal_add_js('sites/all/themes/whitejazz/js/jquery.ba-replacetext.min.js');

drupal_add_js('sites/all/themes/whitejazz/js/replace_sisteme.js');*/





?> 



