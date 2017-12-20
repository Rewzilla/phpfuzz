<?php

ini_set("memory_limit", "16G");

include("helper_functions.php");
include("random_values.php");
include("defined_values.php");

function parse_loop($state, $depth) {

	global $terminals, $nonterminals, $randoms;

	if($depth >= 2)
		return;

	$output = "";

	$todo = arand($nonterminals[$state]);

	if(empty($todo[0]))
		return ""; // hit /*empty*/

	foreach($todo as $item) {
		if($item[0] == "R")
			$output .= ($randoms[$item])();
		else
		if($item[0] == "T")
			$output .= $terminals[$item];
		else
		if($item[0] == "N") {
			$output .= parse_loop($item, ($item == "N_expr_without_variable" ? $depth+1 : $depth));
		} else
			$output .= $item;
	}

	return $output;

}

echo parse_loop("N_start", 1);