<?php

$errors = array();

function check_blank($value)
{if(!isset($value) || $value==="") return 0;
else return 1;}
     

function check_inclusion($value,$set)
{if(!in_array($value,$set)) return 0;
 else return 1;}	

function form_errors($errors=array())
{
   $output="";
    if(!empty($errors))
    {
	  $output= "<div class =\"error\">";
	  foreach ($errors as $key => $error) 
	  {
		   $output.= "<li>{$error}</li>";
	  }
	   $output.= "</ul>";
	   $output.= "</div>";
    }
    return $output;
}

echo form_errors($errors);