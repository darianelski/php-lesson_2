<?php 

	$favBooks = array(
		"451° по Фаренгейту",
		"Шантарам",
		"1984",
		"Мастер и Маргарита",
		"Три товарища",
		"Портрет Дориана Грея",
		"Вино из одуванчиков",
		"Цветы для Элджернона",
		"Над пропастью во ржи",
		"Маленький принц",
		"Анна Каренина",
		"Сто лет одиночества",
		"Тень горы",
		"Атлант расправил плечи",
	);

	echo "<strong>Мои любимые книги:</strong> <br>";
	echo "<ol>";

	for ($i = 0; $i < count($favBooks); $i++) {

		echo "<li> $favBooks[$i] </li>";

	}

	echo "</ol>";
 ?>