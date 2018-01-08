<?php
require_once "vendor/autoload.php";
use App\classes\Student;

Student::addition();


//if(isset($_POST['btn'])){
//    $example = new App\classes\Example();
//   $result =  $example->wordCharacterCount($_POST);
//}

use App\classes\Example;

if(isset($_POST['btn'])){
    $result = Example::wordCharacterCount($_POST);
}




?>



<form action="" method="post">
    <table>
        <tr>
            <th>Enter your string</th>
            <td><input type="text" name="given_string" size="50"></td>
        </tr>

        <tr>
            <th>Total number of word</th>
            <td><input type="text" value="<?php echo $result['string_length'];?>" ></td>
        </tr>

        <tr>
            <th>Total number of Character</th>
            <td><input type="text" value="<?php echo $result['word_length'];?>" ></td>
        </tr>

        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>
