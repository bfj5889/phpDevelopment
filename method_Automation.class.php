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
    function method_Setter($className, $variableArray, $callGetter){
        for(i=1; i<=count($variableArray); i++){
                echo "Current Variable: $variableArray[i]";
                $methodName = 'set'.$variableArray[i];
                $variableName = $variableArray[i];
                runkit_method_add($className, $methodName, '$variableName, $newValue', return $variableArray[i]=$newValue, RUNKIT_ACC_PUBLIC);
        }
        if ($callGetter){
            method_Getter($className, $variableArray);
        }else{
            echo "getter was not called";
        }
        // $name = "set{$variableArray[$counter]}";
        // function $name(){
        //     this->$variableArray[$counter];
        // }
    }


    function method_Getter($className,$variableArray){
        $methodName = 'get'.$variableArray[i];
        $variableName = $variableArray[i];
        runkit_method_add($className, $methodName, '$variableName', return $className.$variableName, RUNKIT_ACC_PUBLIC);
    }
}//end of method_Automation
    
?>
