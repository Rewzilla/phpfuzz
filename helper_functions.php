<?php

// like array_rand, but get the element
function arand($arr) {

	return $arr[array_rand($arr)];

}