<?php
    class Person{
        private $fname, $lname, $example1;
        
        function __contrustor($fname="Sally", $lname="Jones"){
            $this->fname = $fname;
            $this->lanme = $lanme;
        }
        
        
        
        #TODO: need to find a way to check and make sure the variable exist first
        
        /*
        method_Setter: Will make setter methods for variables in supplied array. An array is returned, consisting of two things:
            returnedArray[0]: will hold a number in the form of a string that tells whether all variables were set
                1 = all variables set
                0 = a variable could not be set
            returnedArray[0+n]: will hold a string names of the variables not successfully created.
            This is so is that if all variables were not created then the user has a list of the variable setters that failed.
        Parameters:
            $className: the class the setters will be made for
            $variableArray: an array the holds a list of variable names for 

            runkit_method_add(
    'Example',
    'add',
    '$num1, $num2',
    'return $num1 + $num2;',
    RUNKIT_ACC_PUBLIC
);

// add 12 + 4
echo $e->add(12, 4);
        */

        $variableArray = array('fname', 'lname', 'example1');
        $automator = new method_Automation();
        $automator.method_Setter('Person', $variableArray, true);
        
        //will make getter methods for variables in supplied array
        //parameters match method_Setter formation
       //method_Getter();
    }
    
    $person1 = new Person(); 
    //$person1.setGetters($variableArray);

    //echo $person1->getFname();
?>