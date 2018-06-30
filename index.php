<?php
	require_once 'connection.php';
	require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Related list</title>
	<style>
		form div {
			margin: 0 0 15px 0;
		}
		#blockregion,
		#blockcity {
			display: none;
		}
	</style>
</head>
<body>
	<?php
		$countries = getAllCountries();
		if (isset($_POST['regionId'])) {
			$regions = getAllRegionsById();
			//ninja($regions);
			exit($regions);
		}
		if (isset($_POST['cityId'])) {
			$citys = getAllCitysById();
			//ninja($regions);
			exit($citys);
		}
		
	?>
	<form action="" method="post">
		<div>
			<select name="country" id="country">
				<option value="0">Выберите страну</option>
				<?php foreach($countries as $country) : ?>
					<option value="<?php echo $country['id_country']?>"><?php echo $country['country_name_ru']?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<div id="blockregion">
			<select disabled name="region" id="region"></select>
		</div>
		<div id="blockcity">
			<select disabled name="city" id="city"></select>
		</div>
		<input type="submit" value="Sent" name="submit">
	</form>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="main.js"></script>
</body>
</html>