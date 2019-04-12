
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
$con= mysqli_connect("localhost", "root","Svz926@@");
mysqli_select_db($con, "test") or die("connection error"); 


// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
  if(empty($user) || empty($email) ))
  { echo "Please write email and name"; }
  else
  {  
  $check= "SELECT * from niktable WHERE username='$name' ";
  $result=mysqli_query($con,$check);
  $num= mysqli_num_rows($result);
  if($num>=1)
  {
	echo "username already taken";
  }
  else
  {
    $register= "INSERT INTO niktable(username, email, url, comment, gender) VALUES('$name','$email','$website','$comment','$gender') ";
    mysqli_query($con,$register);
` }
  }
}




function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" required>
  <br><br>
  E-mail: <input type="email" name="email" required>
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>
