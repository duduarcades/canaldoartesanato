<?php
	set_include_path("inc/");

	if (isset($_GET['p'])) :
		if (substr_count($_GET['p'], "/")> 0) :

			$pagina = explode("/", $_GET['p']);
			$contar = count($pagina);
			$erro = true;

		for($i = 0; $i <$contar; $i++) :
			if (is_file("inc/" . $pagina[$i] . ".php")):
				$atual = $pagina[$i] . ".php";
				$erro = false;
			endif;
		endfor;

		if ($erro) :
			include_once "erro.php";
		else :
			include_once $atual;
		endif;

		else : //substr_count

		if (is_file("inc/".$_GET['p'].".php")):
			include_once $_GET['p']. ".php";
		else :
			include_once "erro.php";
		endif;

	endif;
	else:
		include_once "home.php";
	endif;		
?>

