<?php
    class method_Automation{
        /*
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
    function method_Setter($className, $functionName,$variableArray,$returnStmt){
        private $counter = 0;
        private $name = "";
        for(i=0; i<=6; i++){
                echo "Current Variable: $variableArray[i]";
        }
        
        $name = "set{$variableArray[$counter]}";
        function $name(){
            this->$variableArray[$counter];
        }
    }


    function method_Getter($className, $functionName,$variableArray,$returnStmt){

    }
}
    
?>