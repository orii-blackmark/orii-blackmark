<?php
 session_start();

if (!isset($_SESSION['username'])) {
 header("location: main.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/javascript" href="app.js">
    <link rel="stylesheet" type="text/css" href="welcome.css">
</head>

<body>
    <div class="nav-bar1">
        <h2 class="logo">Blackmark</h2>
        <ul>

            <li><a href="index.html">Home</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="Contact.html">Contact Us</a></li>
            <li><a href="logout.php">logout</a></li>
        </ul>
    </div>
    <?php
  echo "<h1>welcome ".$_SESSION['username']."<h1>";?>

    <fieldset class="main-field">
        <legend>ELECTRONIC VOTING SYSTEM</legend>
        <form method="post">
            <h2>Voting details</h2>
            <fieldset class="voter-details">
                <legend>Voting Details</legend>
                <label>First Name</label> <br>
                <input type="text" name="fname" id="fname" placeholder="Enter first name" required> <br><br>
                <label>Middle Name</label><br>
                <input type="text" name="mname" id="mname" placeholder="Enter middle name"> <br><br>
                <label>Last Name</label> <br>
                <input type="text" name="lname" id="lname" placeholder="Enter Last name" required> <br><br>
                <label>Phone Number</label> <br>
                <input type="text" name="nummber" id="num" placeholder="e.g 0712345678" required> <br><br>
                <label>Registration number</label> <br>
                <input type="text" name="nummber" id="num" placeholder="e.g INTE/MG/1234/09/20" required> <br><br>
                <div class="gender">
                    <label class="header01">Gender</label> <br>
                    <input type="radio" name="gender" id="gender" default value="male">
                    <label for="other">male</label>
                    <input type="radio" name="gender" id="gender" value="female">
                    <label for="other">female</label>
                    <input type="radio" name="gender" id="gender" value="other">
                    <label for="other">other</label>
                </div>
            </fieldset>
            <fieldset class="cast-details">
                <legend>Cast your vote</legend>
                <div class="mess-docket">
                    <h5>DIRECTOR OF CATERING AND MESS</h2>
                        <select name="mess" id="mess">
                            <option value="candidate">--select your preferred candidate--</option>
                            <option value="oriel kiplangat"> <img src="01.jpg" alt="">oriel kiplangat</option>
                            <option value="silvester kamau">silvester kamau</option>
                            <option value="janet oburu">janet oburu</option>
                            <option value="brian omondi">brian omondi</option>
                        </select>
                </div>
                <div class="mess-docket">
                    <h5>DIRECTOR FOR HOSTEL SECURITY MALE</h2>
                        <select name="mess" id="mess">
                            <option value="candidate">--select your preferred candidate--</option>
                            <option value="wind ouma">wind ouma</option>
                            <option value="brian omondi">brian omondi</option>
                            <option value="john bett">john bett</option>
                            <option value="brian kibet">brian kibet</option>
                        </select>
                </div>
                <div class="mess-docket">
                    <h5>DIRECTOR FOR SOCIAL AFFAIRS MALE</h2>
                        <select name="mess" id="mess">
                            <option value="candidate">--select your preferred candidate--</option>
                            <option value="kevin kiprono">oriel kiplangat</option>
                            <option value="vester kamau">silvester kamau</option>
                            <option value="boston oburu">janet oburu</option>
                            <option value="montreal okumu">brian omondi</option>
                        </select>
                </div>
                <div class="mess-docket">
                    <h5>DIRECTOR FOR SOCIAL AFFAIRS FEMALE</h2>
                        <select name="mess" id="mess">
                            <option value="candidate">--select your preferred candidate--</option>
                            <option value="jane wanjiru">jane wanjiru</option>
                            <option value="mercy chebet">mercy chebet</option>
                            <option value="eve mapela">eve mapela</option>
                            <option value="faith chebet">faith chebet</option>
                        </select>
                </div>
                <div class="mess-docket">
                    <h5>DIRECTOR FOR HOSTEL SECURITY FEMALE</h2>
                        <select name="mess" id="mess">
                            <option value="candidate">--select your preferred candidate--</option>
                            <option value="marion cherotich">marion cherotich</option>
                            <option value="mercy wangare">mercy wangare</option>
                            <option value="martha musila">martha musila</option>
                            <option value="betty chalo">betty chalo</option>
                        </select>
                </div>
                <div class="mess-docket">
                    <h5>DIRECTOR FOR LIBRARY AND ACADEMICS</h2>
                        <select name="mess" id="mess">
                            <option value="candidate">--select your preferred candidate--</option>
                            <option value="frankline bett">frankline bett</option>
                            <option value="jacob kamau">jacob kamau</option>
                            <option value="hassan mohammed">hassan mohammed</option>
                            <option value="collins kiplangat">collins kiplangat</option>
                        </select>
                </div>
                <div class="mess-docket">
                    <h5>DIRECTOR FOR CAMPUS SECURITY MALE</h2>
                        <select name="mess" id="mess">
                            <option value="candidate">--select your preferred candidate--</option>
                            <option value="joshua muasa">joshua muasa</option>
                            <option value="dennis bett">dennis bett</option>
                            <option value="daniel limo">daniel limo</option>
                            <option value="brina omollo">brina omollo</option>
                        </select>
                </div>
                <div class="mess-docket">
                    <h5>DIRECTOR FOR CAMPUS SECURITY FEMALE</h2>
                        <select name="mess" id="mess">
                            <option value="candidate">--select your preferred candidate--</option>
                            <option value="mercy ronoh">mercy ronoh</option>
                            <option value="waiguru wanjiru">waiguru wanjiru</option>
                            <option value="emmaculate chebet">emmaculate chebet</option>
                            <option value="jane omwoyo">jane omwoyo</option>
                        </select>
                </div>
            </fieldset>
            <br>
            <input type="submit" class="submit" name="submit" value="submit"> <br>
        </form>
    </fieldset>

</body>

</html>