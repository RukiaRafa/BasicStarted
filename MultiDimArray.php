<?php

$Grades = array ($student1= array('40'=> "physics",'60'=> "math",'70'=>"bangla"),

                 $student2= array('70'=> "physics",'66'=> "math",'80'=>"bangla"));
    echo "<pre>";
	 print_r ($Grades);			 
	echo "</pre>";		
    echo  "First student understand\n" .$student1[60]. " better than\n"  .$student1[40] ;