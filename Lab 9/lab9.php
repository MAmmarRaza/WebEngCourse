<?php


print_r($_POST);

$email= $_POST['email'];
$password= $_POST['password'];
$radio= $_POST['radio'];


// Question 1
echo "<table border='5px'>
            <tr>
                <th>Question 1: </th>
                <th>Question 2: </th>
                <th>Question 3: </th>
                <th>Question 4: </th>
                <th>Question 5,6: </th>
            </tr>";
if(isset($email) and isset($password)){
    echo "<tr>
                <td>".$email."<br>".$password."</td>";
    // Question 2
    echo "<td>".$radio."</td>";


    // Question 3:
    if(isset($_POST['check'])){
        echo "<td>true</td>";
    }else{
        echo "<td>false</td>";
    }

    echo "<td>Sorted Function starting on 43 Line</td>";
    // Question 4
    function Sorted($array, $argument){
        $radio= $_POST['radio'];
        if($argument== 'ASC' && $radio== 'First Radio'){
            echo "<td>";
            sort($array);

            $arrlength = count($array);
            for($x = 0; $x < $arrlength; $x++) {
                
            echo $array[$x];
            echo ", ";

            if($x%10 == 0){
                echo "<br>";
            }
            }
            echo "</td>";
        }
        else if($argument== 'ASC' && $radio== 'Second Radio'){
            echo "<td>";
            sort($array);

            $arrlength = count($array); 
            foreach($array as $x => $x_value) {
                echo "[" . $x . "] =>" . $x_value;
                echo ", ";

                if($x%10 == 0){
                    echo "<br>";
                }
            }
            echo "</td>";
            
        }
        else if($argument== 'DSC'){
            echo "<td>";
            rsort($array);

            $arrlength = count($array);
            for($x = 0; $x < $arrlength; $x++) {
                echo $array[$x]."<br>";
                echo " , ";  
            }
            echo "</td>";
        }else{
            echo "<td>";
            sort($array);

            $arrlength = count($array);
            for($x = 0; $x < $arrlength; $x++) {
                
            echo $array[$x];
            echo " , ";
            }
            echo "</td>";
        }
    }


    // Question 5,6:
    if($radio=="First Radio"){
        $a= range(0, 100);
        shuffle($a);
        $random_keys=array_slice($a,0,100);
        Sorted($random_keys, 'ASC');   
    }
    else if($radio=="Second Radio"){
        $a= range(0, 100);
        shuffle($a);
        $random_keys=array_slice($a,0,100);
        Sorted($random_keys, 'ASC');
    }

    echo "</tr>";



}
else{
    echo "<tr><td>erro! Email and password are blank<td>";
}






?>