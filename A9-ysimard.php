<html>
	<body>
	<?php
		$numeros = array('A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K');
		$types  = array('Carreau', 'Coeur', 'Pique', 'Trèfle');
		$paquetMixed = array();
		$cartes = array();
		foreach ($types as $type) {
			foreach ($numeros as $numero) {
				$cartes[] = $numero . "-" . $type;
			}
		}

		$paquet1 = array_slice($cartes, 0, 26);
		$paquet2 = array_slice($cartes, 26);


		for($i = 0; $i < count($paquet1); $i++){
			$paquetMixed[] = $paquet1[$i];
				$paquetMixed[] = $paquet2[$i];
			
		}
		
		$cartes1 = array_slice($paquetMixed, 0, 13);
		$cartes2 = array_slice($paquetMixed, 13, 13);
		$cartes3 = array_slice($paquetMixed, 26, 13);
		$cartes4 = array_slice($paquetMixed, 39, 13);
		

		/*
		print_r($cartesCarreau);
		echo "</br>";
		print_r($cartesCoeur);
		echo "</br>";
		print_r($cartesPique);
		echo "</br>";
		print_r($cartesTrefle);
		*/
	?>
		<table border="1">
			<tr>
				<?php
					for($i = 0; $i < count($cartes1); $i ++){
						?>
						<td><?= $cartes1[$i] ?></td>
						<?php
					}
				?>
			</tr>
		</br>
			<tr>
				<?php
					for($i = 0; $i < count($cartes1); $i ++){
						?>
						<td><?= $cartes2[$i] ?></td>
						<?php
					}
				?>
			</tr>
		</br>
			<tr>
				<?php
					for($i = 0; $i < count($cartes1); $i ++){
						?>
						<td><?= $cartes3[$i] ?></td>
						<?php
					}
				?>
			</tr>
		</br>
			<tr>
				<?php
					for($i = 0; $i < count($cartes1); $i ++){
						?>
						<td><?= $cartes4[$i] ?></td>
						<?php
					}
				?>
			</tr>
		</table>
	</body>
</html>