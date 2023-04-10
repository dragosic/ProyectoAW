<?php

if (!isset($content))
	$content = 'No hay contenido que mostrar';
if (!isset($title))
	$title = 'Página sin título';

?>

<!DOCTYPE html>
<html class="h-100" lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="img/logo.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<title><?= $title ?></title>
</head>

<body class="min-vh-100">
	<div class="min-vh-100 d-flex flex-column">
		<?php require dirname(__DIR__) . '/common/navbar.php' ?>
		<main class="flex-fill">
			<?= $content ?>
		</main>
		<?php require dirname(__DIR__) . '/common/footer.php' ?>
	</div>
</body>

</html>