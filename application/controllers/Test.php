<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	function index(){
		echo date('Y');
		echo "<br/>";
		echo "<br/>";
		echo "<br/>";

		$strsplit="20160715001526985";
		echo "<br/>";
		echo "$strsplit";
		echo "<br/>";
		$arr2 = str_split($strsplit, 4);

		echo $arr2[0];
echo("<br/>");
		echo $arr2[1];
		echo("<br/>");

		$result =  $arr2[2].$arr2[3].$arr2[4];

		echo "$result sssss"."<br/>";
		$result=preg_replace('/\s+/', '', $result);
		$result= $result+1;

		echo $result." Tasfir";
echo("<br/>");
		$val = sprintf('%09u', $result+1); 

		echo "<br/>";

		$val = sprintf('%09u', $result+1); 
		echo $val." Hossain";
		echo("<br/>");

		$val = sprintf('%04u', $result+1); 
		echo $val." Suman";
		echo("<br/>");

		echo("<br/>");
		echo("<br/>");

		print_r($arr2);

		// for($i = 1; $i <= 100; $i++) {
	 //       $formattedNumber = sprintf('%04u', $i);
	 //       echo "<tr><td>$formattedNumber</td></tr><br/>";
	 //    }
	}
}