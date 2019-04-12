<?php

//Prefedined Variables 
$to = "yashjaiswal123.yj@gmail.com";

// Email Subject
$subject = "Contact from your website.";

// This IF condition is for improving security  and Prevent Direct Access to the Mail Script.
if($_POST) {

// Collect POST data from form
$firstname = stripslashes($_POST['firstname']);
$lastname = stripslashes($_POST['lastname']);
$email = stripslashes($_POST['email']);
$how = 'None';
    if(isset($_POST['how']) && is_array($_POST['how']) && count($_POST['how']) > 0){
    $selectedHow = implode(', ', $_POST['how']);
    }
$phone = stripslashes($_POST['phone']);
$month = stripslashes($_POST['month']);
$day = stripslashes($_POST['day']);
$year = stripslashes($_POST['year']);
$location = stripslashes($_POST['location']);
$services = 'None';
    if(isset($_POST['services']) && is_array($_POST['services']) && count($_POST['services']) > 0){
    $selectedServices = implode(', ', $_POST['services']);
    }
$heard = stripslashes($_POST['heard']);
$comments = stripslashes($_POST['comments']);

// Collecting all content in HTML Table
$content='<table width="100%">
<tr><td  align "center"><b>Contact Details</b></td></tr>
<tr><td>First Name:</td><td> '.$firstname.'</td></tr>
<tr><td>Last Name:</td><td> '.$lastname.'</td></tr>
<tr><td>Email:</td><td> '.$email.' </td></tr>
<tr><td>Phone:</td> <td> '.$phone.'</td></tr>
<tr><td>How Should We Contact You?</td> <td> '.$selectedHow.'</td></tr>
<tr><td>Event Date:</td><td> '.$month.' / '.$day.' / '.$year.' </td></tr>
<tr><td>Location:</td> <td> '.$location.'</td></tr>
<tr><td>Which Services Are You Interested In?</td> <td> '.$selectedServices.'</td></tr>
<tr><td>How Did You Hear About Us?</td> <td> '.$heard.'</td></tr>
<tr><td>Comments:</td> <td> '.$comments.'</td></tr>
<tr><td>Date:</td> <td> '.date('d/m/Y').'</td></tr>
</table> ';


// Define email variables
$headers = "From:".$email."\r\n";
$headers .= "Reply-to:".$email."\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8';

if( ! empty($firstname) && ! empty($lastname) && ! empty($email) && ! empty($phone)  && ! empty($selectedHow) && ! empty($month) && ! empty($day) && ! empty($year) && ! empty($location) && ! empty($selectedServices) && ! empty($heard) && ! empty($comments) ) {

// Sending Email 
if( mail($to, $subject, $content, $headers) ) {
print "Thank you, I will get back to you shortly!<br>";
return true;
}
else {
print "Please go back and make sure that all fields have been filled out.";
return false;
}
}
else {
print "An error occured and your message could not be sent.";
return false;
}
}
?>
<html>
<body>
<form id="contact_form" class="contact" method="post" action="form2.php">
        <input class="firstname text" name="firstname" type="text" placeholder="FIRST NAME:" required>
        <input class="lastname text" name="lastname" type="text" placeholder="LAST NAME:" required><br><br>

        <input class="email text" name="email" type="email" placeholder="EMAIL:" required>
        <input class="name text" name="phone" type="tel" placeholder="PHONE NUMBER:" required><br><br>

        <label>Would you like to be contacted by:</label>
        <input name="how[]" class="emailbtn radio" type="checkbox" value="Email">
        <label>EMAIL</label>
        <input name="how[]" class="phonebtn radio" type="checkbox" value="Phone">
        <label>PHONE NUMBER</label><br><br>

        <div class="one">
        <label class="margin">EVENT DATE:</label><br>
        <input name="month" class="month small" type="number" placeholder="MM">
        <input name="day" class="day small" type="number" placeholder="DD">
        <input name="year" class="year small" type="number" placeholder="YYYY">
        </div>
        <div class="one">
        <label class="margin">EVENT LOCATION:</label><br>
        <input name="location" class="location text" type="text">
        </div>

        <label>Services we may assist you with:</label><br><br>
        <div class="two">
        <input name="services[]" class="chefbtn radio" type="checkbox" value="Personal Chef">
        <label>PERSONAL CHEF</label><br>
        <input name="services[]" class="cateringbtn radio" type="checkbox" value="Private Cooking Classes">
        <label>PRIVATE COOKING CLASSES</label>						
        </div>
        <div class="two">
        <input name="services[]" class="chefbtn radio" type="checkbox" value="Event Catering">
        <label>EVENT CATERING</label><br>
        <input name="services[]" class="cateringbtn radio" type="checkbox" value="Resteraunt Consulting">
        <label>RESTERAUNT CONSULTING</label>
        </div>

        <input name="heard" class="heard text" type="text" placeholder="HOW DID YOU HEAR ABOUT US?">
        <textarea name="comments" class="comments" type="text" placeholder="ADDITIONAL COMMENTS:"></textarea>

        <input class="submit" type="submit" >
    </form>
</body>
</html>