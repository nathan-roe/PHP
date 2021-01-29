<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
    <style>
        table * {
            border: 1px solid black;
            margin: 0;
        }
    </style>
</head>
<body>
    <?php 
        // Create a program that prints all the odd numbers from 1 to 1000. Use the standard for loop for this exercise and don't create any arrays.
        // for($i=1;$i<=1000;$i++)
        // {
        //     echo "$i ";
        // }
        // echo "</br>";
        // Create a program that prints all the multiples of 5 starting at 5 and going up to 1,000,000.
        // for($i=5;$i<=1000000;$i += 5)
        // {
        //     echo "$i ";
        // }
        // Create a program that prints the sum of all the values in the array "numbers". Your "numbers" array should contain the following values: 1, 2, 5, 10, 255, 3.
        // $numbers = array(1, 2, 5, 10, 255, 3);
        // foreach($numbers as $number)
        // {
        //     echo "$number ";
        // }
        // Create a program that prints the average of the values in the array called "numbers". Array "numbers" should have the following values: 1, 2, 5, 10, 255, 3.
        // $numbers = array(1, 2, 5, 10, 255, 3);
        // $sum = 0;
        // $count = 0;
        // foreach($numbers as $number)
        // {
        //     $sum += $number;
        //     $count++;
        // }
        // echo $sum/$count;
        // Create an array that inclusively contains all odd numbers between 0 to 20,000. Use the var_dump() function at the end to display the array values.
        // $odds = array();
        // for($i=0;$i<=20000;$i++)
        // {
        //     if($i % 2 != 0)
        //     {
        //         array_push($odds, $i);
        //     }
        // }
        // var_dump($odds);

        // Create a program that counts from 1 to 2000. As it loops through each number, have your program generate the number and a message saying whether it's odd or even.

        // Your program output should look like below

        // Number is 1.  This is an odd number.
        // Number is 2.  This is an even number.
        // Number is 3.  This is an odd number.
        // ...
        // Number is 2000.  This is an even number
        // for($i=1;$i<=2000;$i++)
        // {
        //     if($i % 2 == 0)
        //     {
        //         echo "Number is $i. This is an even number ";
        //     }
        //     else
        //     {
        //         echo "Number is $i. This is an odd number ";
        //     }
        // }
        // $x = array(1,3,5,7);
        // foreach($x as $key => $value)
        // {
        // echo $key . " - " . $value ."<br />";
        // }
        // Create a function called print_average() that takes an array of numbers and returns its average.
        // function print_average($arr)
        // {
        //     $sum = 0;
        //     foreach($arr as $a)
        //     {
        //         $sum += $a;
        //     }
        //     return $sum/count($arr);
        // }
        // echo print_average(array(1, 2, 3, 4, 5, 6, 7, 8, 9));
        // Part 1: Create a function called 'multiply()' that reads each value in an array (e.g. $A = array(2, 4, 10, 16)) and returns a new array where each value has been multiplied by 5.
        // function multiply($arr)
        // {
        //     foreach($arr as $idx => $val)
        //     {
        //         $arr[$idx] = $val * 5;
        //     }
        //     return $arr;
        // }
        // var_dump(multiply(array(1, 2, 3, 4, 5, 6, 7, 8, 9)));
    ?>
    <!-- <ul>
        <?php 
            // Create a function called 'print_lists' that takes any array and prints each value in the array in an <li>, which is part of a <ul>. For example, running print_lists($A) where $A = array(2,3,'hello'); should output a html response that looks like...
            // function print_lists($arr)
            // {   
                
            //     foreach($arr as $a)
            //     {
            //         echo "<li>$a</li>";
            //     }
            // }
            // echo print_lists(array(1, 2, 3, 4, 5, 6, 7, 8, 9));
        ?>
    </ul> -->
    <?php 
        // Let's create a new array called $users that have the following keys and values
        // $users['first_name'] = "Michael";
        // $users['last_name'] = "Choi";
        // Create a function where you can pass in $users and print an output that looks like below

        // There are 2 keys in this array: 
        //      first_name
        //      last_name
        // The value in the key 'first_name' is 'Michael'.
        // The value in the key 'last_name' is 'Choi'.
        // $users = array("first_name" => "Michael", "last_name" => "Choi");
        // function firstLast($arr) 
        // {
        //     foreach($arr as $key => $val)
        //     {
        //         echo "The value in the key '$key' is '$val'.</br>";
        //     }
        // }
        // echo firstLast($users);

    ?>
    
    <!-- <select name="" id=""> -->
        <?php
            // $states = array('CA', 'WA', 'VA', 'UT', 'AZ');
            // for($i=0;$i<count($states);$i++)
            // {
            //     echo "<option>{$state[$i]}</option>";
            // }
            // foreach($states as $state)
            // {
            //     echo "<option>$state</option>";
            // }
            // $newStates = array('NJ', 'NY', 'DE');
            // foreach($newStates as $state)
            // {
            //     array_push($states, $state);
            // }
            // foreach($states as $state)
            // {
            //     echo "<option>$state</option>";
            // }
        ?>
    <!-- </select> -->
    <!-- Throw coin 5000 times and keep track of how many heads and tails there were -->
    <?php 
        function print_coinToss()
        {
            $head = 0;
            $tail = 0;
            for($i=1;$i<=5000;$i++)
            {
                $randNum = rand(0, 1);
                if($randNum == 1)
                {
                    $head++;
                }
                else
                {
                    $tail++;
                }
                echo "Attempt #$i: There have been '$head' heads and '$tail' tails so far. </br>";
            }
        }
        // Create a function get_max_and_min() that takes an array of numbers and, then, returns both the minimum and the maximum number from the given array as an associative array. Do not use the PHP function max() or min() to get this to work. See if you can do this using arrays and for loops!
        function get_max_and_min($arr)
        {
            $retVal = array();
            $min = $arr[0];
            $max = $arr[0];
            foreach($arr as $a)
            {
                if($a > $max)
                {
                    $max = $a;
                }
                if($a < $min)
                {
                    $min = $a;
                }
            }
            array_push($retVal, $min);
            array_push($retVal, $max);
            return $retVal;
        }
        // var_dump(get_max_and_min(array(1,4,2,3,5,7,6,8,9,0)));


        // Create a function called draw_stars() that takes an array of numbers and echo out  an asterisk, or '*'.

            // For example:

            // $x = array(4, 6, 1, 3, 5, 7, 25);
            // draw_stars(x) should print the following on the screen or browser:

            // **** 
            // ****** 
            // * 
            // *** 
            // ***** 
            // ******* 
            // *************************
        function draw_stars($arr)
        {
            foreach($arr as $a)
            {
                for($i=0;$i<$a;$i++)
                {
                    echo "*";
                }
                echo "</br>";
            }
        }
        // echo draw_stars(array(1,2,3,4,5,6,7,8,9));
    ?>
    <table>
        <thead>
            <?php
                for($i=0;$i<10;$i++)
                {
                    if($i == 0)
                    {
                        echo "<th></th>";
                    }
                    else
                    {
                        echo "<th>$i</th>";
                    }
                }
            ?>
        </thead>
        <?php 
            $count = 0;
            $rowEven = false;
            $backVal = "grey";
            for($i=0;$i<9;$i++)
            {
                if($i % 2 == 0){
                    $rowEven = true;
                    $backVal = "white";
                }
                else{
                    $rowEven = false;
                    $backVal = "grey";
                }
        ?>
            <?php echo "<tr style='background-color: $backVal;'>"?>
                    <td style="background-color: white; font-weight: bold;"><?php echo $i + 1; ?></td>
                    <?php
                        for($j=$count;$j<$count+9;$j++)
                        {
                            $val = $j + 1;
                            echo "
                            <td style='text-align: center; margin: 0;'>
                                $val
                            </td>
                            ";
                        }
                        $count = $j;
                    ?>
            </tr>
        <?php 
            } 
        ?>
    </table>
    <table>
            <thead>
                <th>User #</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Full Name</th>
                <th>Full Name in upper case</th>
                <th>Length of full name</th>
            </thead>
            <tbody>
            <?php 
                $users = array( 
                    array('first_name' => 'Michael', 'last_name' => 'Choi'),
                    array('first_name' => 'John', 'last_name' => 'Supsupin'),
                    array('first_name' => 'Mark', 'last_name' => 'Guillen'),
                    array('first_name' => 'KB', 'last_name' => 'Tonel') 
                );
                foreach($users as $key => $u)
                {
                    $capFirst = strtoupper($u['first_name']);
                    $capLast = strtoupper($u['last_name']);
                    $strFull = "$capFirst$capLast";
                    $nameLength = strlen(trim($strFull));
            ?>
                    <tr>
                        <td><?php echo $key; ?></td>
                        <td><?php echo "{$u['first_name']}"; ?></td>
                        <td><?php echo "{$u['last_name']}"; ?></td>
                        <td><?php echo "{$u['first_name']} {$u['last_name']}"; ?></td>
                        <td><?php echo "$capFirst $capLast"; ?></td>
                        <td><?php echo "$nameLength"; ?></td>
                    </tr>
            <?php
                }
            ?>
            </tbody>
    </table>
</body>
</html> 