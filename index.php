<!DOCTYPE html>
<html>
<head>
	<?php 
	
	$title = "Всё для дома";
	require_once "/blocks/head.php";

	?>
</head>
<body>
	<div id="wrap">
		<div class="main">
				<?php 
					require_once "/blocks/header.php";
				?>

				<hr>

				<?php 
					$index = active;
					require_once "/blocks/menu.php";
				?>

				<?php 
					require_once "/blocks/banner.php";
				?>

				<?php 
					require_once "/blocks/why.php";
				?>
			
		</div>
	</div>

<!-- Место для футера -->
	
	<?php 
		require_once "/blocks/footer.php";
	?>

</body>
</html>