<?php

function outTree (array $elements, $parentId = null) {
	echo '<ul>';
	foreach ($elements as $element) {
		echo '
			<li>
				<div class="game">
					<p>'.$element[5].'</p>
					<p>'.$element[1].':'.$element[3].'</p>
					<p>'.$element[2].':'.$element[4].'</p>
				</div>
			';
		if (!empty($element['children'])) {
			outTree($element["children"], $element[0]);
		}
		echo '</li>';
	}
	echo '</ul>';
}