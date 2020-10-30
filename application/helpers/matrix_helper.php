<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed'); 
	
function invert($A, $debug = false){
	/// @todo check rows = columns
	$n = count($A);
	//echo $n;
	// get and append identity matrix
	$I = identity_matrix($n);
	for ($i = 0; $i < $n; ++ $i) {
		$A[$i] = array_merge($A[$i], $I[$i]);
	}
	if ($debug) {
		echo "\nStarting matrix: ";
		print_matrix($A);
		//break;
	}
	// forward run
	for ($j = 0; $j < $n-1; ++ $j) {
		// for all remaining rows (diagonally)
		for ($i = $j+1; $i < $n; ++ $i) {
			// if the value is not already 0
			if ($A[$i][$j] !== 0) {
				// adjust scale to pivot row
				// subtract pivot row from current
				//echo $A[$j][$j].'/'.$A[$i][$j].' ';
				$scalar = $A[$j][$j] / $A[$i][$j];
				for ($jj = $j; $jj < $n*2; ++ $jj) {
					$A[$i][$jj] *= $scalar;
					$A[$i][$jj] -= $A[$j][$jj];
				}
			}
		}
		if ($debug) {
			echo "\nForward iteration $j: ";
			print_matrix($A);
		}
	}
	// reverse run
	for ($j = $n-1; $j > 0; -- $j) {
		for ($i = $j-1; $i >= 0; -- $i) {
			if ($A[$i][$j] !== 0) {
				$scalar = $A[$j][$j] / $A[$i][$j];
				for ($jj = $i; $jj < $n*2; ++ $jj) {
					$A[$i][$jj] *= $scalar;
					$A[$i][$jj] -= $A[$j][$jj];
				}
			}
		}
		if ($debug) {
			echo "\nReverse iteration $j: ";
			print_matrix($A);
		}
	}
	// last run to make all diagonal 1s
	/// @note this can be done in last iteration (i.e. reverse run) too!
	for ($j = 0; $j < $n; ++ $j) {
		if ($A[$j][$j] !== 1) {
			$scalar = 1 / $A[$j][$j];
			for ($jj = $j; $jj < $n*2; ++ $jj) {
				$A[$j][$jj] *= $scalar;
			}
		}
		if ($debug) {
			echo "\n1-out iteration $j: ";
			print_matrix($A);
		}
	}
	// take out the matrix inverse to return
	$Inv = array();
	for ($i = 0; $i < $n; ++ $i) {
		$Inv[$i] = array_slice($A[$i], $n);
	}
	return $Inv;
}

function print_matrix($A, $decimals = 6){	
	$x=0;
	foreach ($A as $row) {
		//echo "\n\t[";
		$y=0;
		foreach ($row as $i) {
			//echo "\t" . sprintf("%01.{$decimals}f", round($i, $decimals));
			$y++;
		}
		//echo "\t]";
		$x++;
	}
}

function identity_matrix($n){
	$I = array();
	for ($i = 0; $i < $n; ++ $i) {
		for ($j = 0; $j < $n; ++ $j) {
			$I[$i][$j] = ($i == $j) ? 1 : 0;
		}
	}
	return $I;
}

	


	


	
?>