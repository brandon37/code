<?php 
	if ($cursos){
	foreach ($cursos->result() as $term) { ?>
		<ul>
			<li><a href="<?= $term->idCurso;?>"><?= $term->nombreCurso?> </a>  </li>
		</ul>


	<?php } 
	}else{
		echo "Error en la aplicacion ";
	}
?>

	</body>
</html>
