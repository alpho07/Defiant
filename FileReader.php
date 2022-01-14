<?php

//Define the file location
$filename = 'file.txt';

//Invoke the file function to read the file contents and store in the $data variable
$data = file($filename);

//Loop over each read line from the variable data
foreach ($data as $line_num=>$line)
{
	//find all occurrences of text in square brackets, and print that text to the console.
    preg_match_all("/\[[^\]]*\]/", $line, $matches);
    print_r($matches[0]); 
}