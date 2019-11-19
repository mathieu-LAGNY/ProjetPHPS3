<?php

foreach ($tab_item as $item) {

	$itemId = rawurldecode($item->get('id'));
	$itemName = htmlspecialchars($item->get('name'));

	echo '<p> item : <a href="index.php?controller=item&action=read&id='. $itemId . '"> ' . $itemName . '</a>.</p>';

}

echo '<a href="index.php?controller=item&action=create">Create a new item</a>';

?>

