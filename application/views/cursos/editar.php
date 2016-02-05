 <?= form_open("/cursos/actualizar") ?>
 <?php
 		$nombre = array(
 		 'name' => 'nombre',
 		 'placeholder' => 'Escribe tu Nombre'
 		);
 		$videos = array(
 		 'name' => 'videos',
 		 'placeholder' => 'Cantidad videos'
 		);

  ?>
  <?= form_label('Nombre: ', 'nombre')?>
  <?= form_input($nombre)?>
  <br><br>
 <?= form_label('Numero videos: ', 'videos')?>
 <?= form_input($videos)?>
 <br><br> 
 <?= form_submit('','Actualizar Curso ') ?>
<?= form_close() ?>
 </body>
 </html>