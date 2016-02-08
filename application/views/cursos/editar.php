  <?= form_open("/cursos/actualizar/".$id); ?>
 <?php
 		$nombre = array(
 		 'name' => 'nombre',
 		 'placeholder' => 'Escribe tu Nombre',
 		 'value' => $curso->result()[0]->nombreCurso
 		);
 		$videos = array(
 		 'name' => 'videos',
 		 'placeholder' => 'Cantidad videos',
 		 'value' => $curso->result()[0]->videosCurso
 		);

  ?>
  <?= form_label('Nombre: ', 'nombre')?>
  <?= form_input($nombre)?>
  <br><br>
 <?= form_label('Numero videos: ', 'videos')?>
 <?= form_input($videos)?>
 <br><br>
 <?= form_submit('','Actualizar Curso  ') ?>
<?= form_close() ?>
 </body>
 </html>