<?php
function ninja($value = null, $value2 = null, $die = 1) 
{
    echo "Debug <br><pre>";
    echo print_r($value);
    echo "</pre>";
    if($value2)
    {
        echo "Debug2 <br><pre>";
        echo print_r($value2);
        echo "</pre>";
    }
    if ($die) {die;}
}
function mysql_injection($string){
		global $connection;
		$escaped_string = mysqli_real_escape_string($connection, $string);
		return $escaped_string;
}
function redirect_to($new_location){
	header("Location: " . $new_location);
	exit;
}
function confirm_query($result_set) {
	if (!$result_set) {
		die("Database query failed.");
	}
}
function form_errors($errors=array()) {
	$output = "";
	if (!empty($errors)) {
		$output .= "<div class=\"error\">";
		$output .= "Please fix the following errors:";
		$output .= "<ul>";
		foreach ($errors as $key => $error) {
			$output .= "<li>";
			$output .= htmlentities($error);
			$output .= "</li>";
		}
		$output .= "</ul>";
		$output .= "</div>";
	}
	return $output;
}
function getAllCountries(){

	global $connection;

	$query  = "SELECT * ";
	$query .= "FROM country_ ";

	$result = mysqli_query($connection, $query);
	confirm_query($result);

	$countries = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$countries[] = $row;
	}

	return $countries;
}