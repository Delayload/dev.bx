<?php
require 'convertType.php';

	class Rook {
		public function setValue($input) {
			$result = true;
			$inputArray = explode(" ", $input);
			foreach ($inputArray as $value) {
				$value = convertType($value);
				if (!is_numeric($value) || $value>8) {
					$result = false;
				}
			}
			if (count($inputArray) != 4) {
				$result = false;
			}
			if ($inputArray[0] != $inputArray[2] && $inputArray[1] != $inputArray[3]) {
				$result = false;
			}
			return ($result)? 'Да' : 'Нет';
		}
	}