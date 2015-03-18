<?php

function list_words($name)
{
	foreach ($name as $key => $value) {
		if($name[$key] != end($name))
		{
		echo '"'.$value.'",';
		}
		else
		{
		echo '"'.$value.'"';
		}
	}
}


function support_list($title)
{
	echo '<h3>'.$title['name'].' :</h3>';
	echo '<ul>';
	foreach ($title['content'] as $key => $value) {
		echo '<li>'.$value.'</li>';
	}
	echo '</ul>';

}

