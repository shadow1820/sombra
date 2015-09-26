<html>
	<title>E1</title>
		<head>Numero aleatorio entre 100 y 200, ambos inclusive</head>
			<body>
				<p>
					<?php $minimo_maximo = mt_rand(100,200); ?>
					<input name="numero" readonly="readonly" size="2" value="<?php echo $minimo_maximo; ?>"/>
				</p>
			</body>
</html>
