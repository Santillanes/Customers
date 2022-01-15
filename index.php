<?php
	if(!$_GET){
      header('Location:index.php?pagina=1');
    }
    
	require 'header.php';

	$update = isset($_POST['update'])?isset($_POST['update']):"";
	$download = isset($_POST['download'])?isset($_POST['download']):"";
	$modal = isset($_POST['modal'])?isset($_POST['modal']):"";


	if ($update){
	require 'update.php';

	}elseif ($download) {
	require 'download.php';
	}elseif ($modal) {
	require 'modal.php';
	}else{
	require 'update.php';

	}


	require 'footer.php';
?>