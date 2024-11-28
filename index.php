<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Theme and Font Size</title>
    <style>
        body {
            background-color: <?php echo $theme === "dark" ? "#000" : "#fff"; ?>;
            color: <?php echo $theme === "dark" ? "white" : "black"; ?>;
            font-size: <?php echo $font_size; ?>;
            font-family: Arial, sans-serif;
			padding-top: 10%;
			padding-left: 25%;
			padding-right: 25%;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: <?php echo $theme === "dark" ? "#000" : "#fff"; ?>;
            color: <?php echo $theme === "dark" ? "white" : "black"; ?>;
            border: 2px solid <?php echo $theme === "dark" ? "#fff" : "#000"; ?>;
            border-radius: 50px;
            padding: 10px 20px;
            cursor: pointer;

        }

        input[type="submit"]:hover {
            background-color: <?php echo $theme === "dark" ? "#404040" : "#eee"; ?>;
        }
    </style>
</head>
	<body>
		<h1>Управление темой и размером шрифта</h1>

		<!--Пульт темы-->
		<form action="" method="GET">
			<input type="submit" name="set_theme_dark" value="тёмная тема">
			<input type="submit" name="set_theme_light" value="светлая тема">
			<input type="submit" name="delete_theme" value="удалить тему">
		</form>

		<!--Пульт размера шрифта-->
		<form action="" method="GET">
			<input type="submit" name="font_size_10px" value="10px">
			<input type="submit" name="font_size_20px" value="20px">
			<input type="submit" name="font_size_40px" value="40px">
		</form>

		<p>текущая тема: <?php echo $theme; ?></p>
		<p>текущий размер шрифта: <?php echo $font_size; ?></p>
	</body>
</html>