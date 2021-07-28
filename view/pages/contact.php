<?php
// define variables and set to empty values
$fname = $lname = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = test_input($_POST["fname"]);
    $lname = test_input($_POST["lname"]);
    $email = test_input($_POST["email"]);
    $comment = test_input($_POST["comment"]);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<div class="contact-container">
    <h2>PHP Form Validation Example</h2>
    <br><br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <input type="text" name="fname" placeholder="First Name:">
        <br>
        <br>

        <input type="text" name="lname" placeholder="Last Name:">
        <br>
        <br>

        <input type="text" name="email" placeholder="E-mail:">
        <br><br>

        <input type="date" id="myDate" placeholder="Date:">
        <br><br>

        <textarea name="comment" rows="5" cols="40" placeholder="Comment:"></textarea>
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</div>

<?php
echo "<h2>Your Input:</h2>";
echo $fname;
echo "<br>";
echo $lname;
echo "<br>";
echo $email;
echo "<br>";
echo $comment;

?>