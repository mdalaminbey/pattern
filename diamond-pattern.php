<?php

function diamond_pattern($n)
{
	for ($row = 1; $row <= $n; $row++) {
		for ($column = 1; $column <= $n - $row; $column++) {
			echo " ";
		}
		for ($column = 1; $column <= ($row * 2) - 1; $column++) {
			echo "*";
		}
		echo PHP_EOL;
	}

	for ($row = 1; $row <= $n; $row++) {
		for ($column = 1; $column <= $row; $column++) {
			echo " ";
		}
		for ($column = 1; $column <= ($n - $row) * 2 - 1; $column++) {
			echo "*";
		}
		echo PHP_EOL;
	}
}

diamond_pattern(5);
