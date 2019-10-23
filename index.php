
<?php
/**Name: Laxmi  Chad Ekam
 * http://laxmikandel.greenriverdev.com/305/palindrome/#
 * 10/23/19

 */
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Palindrome</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <h2>Palindrome Checker</h2>
    <h3>Enter a word or phrase to check and see if it's a palindrome.<br>
    Spaces will be ignored</h3>
    <!--    <h3>Enter a number 1-10 to see what you should do!</h3>-->

    <form method="post" action="#">
        <label>Word or phrase: <input type="text" name="word"></label>
        <input type="submit" value="Is it is Palindrome">

    </form>
    <?php
include("../functions.php");

if (isset($_POST['word'])) {
    $word = $_POST['word'];//casting is like in java
    echo "<p> $word </p>";
}
$result= isPalindrome($word);
if($result){
    echo"<p><b>$word</b> is a palindrome</p>";
}
else{
    echo"<p><b>$word</b> is not a palindrome</p>";


}


?>