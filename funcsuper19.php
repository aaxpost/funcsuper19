<p>1.Сделайте функцию cut, которая первым параметром будет принимать строку, а вторым параметром - сколько первых символов оставить в этой строке. Второй параметр должен быть необязательным и по умолчанию принимать значение 10.</p>

<?php
	
	function cut($strbase, $num = 10)
	{
			echo mb_substr($strbase, 0, $num);
		
	}
	
	cut('какая-то строка данных для задачи', 3);
	
?>

<p>2.Дан массив с числами. Выведите последовательно его элементы используя рекурсию и не используя цикл.</p>

<?php
	$arr = [1, 2, 3, 4, 5];

	first($arr);

	function first($arr)
	{
		echo array_shift($arr).'<br>'; //выводим первый элемент массива
    
		if(!empty($arr)) {
			first($arr); //это рекурсия
		}
	}
?>

<p>3.Дано число. Сложите его цифры. Если сумма получилась более 9-ти, опять сложите его цифры. И так, пока сумма не станет однозначным числом (9 и менее).</p>

<?php

	function getDigitsSum($num) {
		$arrnum = str_split($num, 1);
		foreach ($arrnum as $elem) {
			$sum += $elem;
		}

		return $sum;
		
		}
	
	//echo getDigitsSum(11111111).'<br>'; Если передаю число типа 11111111111111111 считает неправильно. Почему? Ограничения пхп или у меня в функции ошибка?
	
	$num = 3117;
	numValue($num);
	
	function numValue($num)
	{
		
		global $num;
		$numfun = getDigitsSum($num);
		echo $numfun.'<br>';
    
		if($numfun > 9) {
			$num = $numfun;
			numValue($num);
		}
	}
?>



<?php

//Пример решения из учебника. По условию мы должны передать число, а функция использует функцию вычисления суммы элементов массива? Непонятно...

	function lowNum($num)
	{
		$result = array_sum($arr);
		if ($resullt > 9) {
			$result = lowNum($result);
		}
		return $result;
	}
	
	echo lowNum(111)
	
?>
