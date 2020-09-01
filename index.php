
<html>

<h1> This is the simple calculator app.</h1>

<?php

    if(isset($_GET['first']) and isset($_GET['second']) and isset($_GET['operation'])){
        $first= $_GET['first'];
        $second= $_GET['second'];
        if(is_numeric($first) and is_numeric($second)){
            switch ($_GET['operation']){
                case "assembly":
                    echo "Result: ". ($first + $second);
                    break;
                case "decrease":
                    echo "Result:". ($first - $second);
                    break;
                case "multiplication":
                    echo "Result:". ($first * $second);
                    break;
                case "division":
                    echo "Result:". ($first / $second);
                    break;
                default:
                    echo "The operation parameter must be: assembly, decrease, multiplication or division";

            }
        }else{
            echo "First and second parameters must be integers! ";

        }

    } else{
        echo "The url must be have three parameters: first number, second number and operation.<br>  The operation sign has four key words: assembly, decrease, multiplication or division.<br> 
        The url pattern is: localhost/simplecalculator/<strong>?first=3&second=2&operation=assembly</strong>  <br> If you don't like te URL calculator, just use the calculator on the page ";

         echo  '<p>
                    <form action="index.php" method="get">
                        <input type="text" name="first"  maxlength="4" size="4">
                        <select name="operation" id="operation">
                            <option value="assembly">+</option>
                            <option value="decrease">-</option>
                            <option value="multiplication">*</option>
                            <option value="division">/</option>
                        </select>
                        <input type="text" name="second"  maxlength="4" size="4">
                        <input type="submit" VALUE="Submit">
                    </form>
                </p>  ';

    }


?>





</html>





