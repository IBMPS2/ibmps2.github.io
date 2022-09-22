<!DOCTYPE html>
<html lang="en">
<head> <!-- Head Contains important information for browsers and search engines -->
    <meta charset="UTF-8">
    <meta name="description" content="Chollerton Tea Rooms providing services including our Tea room, B&Bm local shops and post office"> <!--Description of website/company-->
    <meta name="Author" content="Lewis Barton w18008993"> <!-- Author of page -->
    <meta name="keywords" content="Tearoom, B&B, Northumberland, Chollerton, Hamlet, Post, Shops, General shop, Craft Shop, Countryside, Tyne Valley, West Northumberland"> <!-- Keywords used for finding information on the companies/websites services-->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Viewport, support for mobile devices-->
    <title>Chollerton tearoom | Home </title> <!--Title which will be displayed on browser tabs-->
    <link href="Style.css" rel="stylesheet" type="text/css"> <!-- Link to Style.css-->
    <link rel="icon" href="Images/ICO/icon5.ico"> <!-- ICO image which will be used for Firefox and Chrome based browsers -->
</head>
<body>
<header> <!-- Header located at top of page, containing header image and logo -->
    <div class="header"> <!--Header styling-->
        <div class="logo"> <!--Styling for logo-->
            <a href="http://unn-w18008993.newnumyspace.co.uk">
                <img src="Images/Header/logo2.png" alt="Website Logo"> <!--Company logo located on the left of the header, link goes to homepage-->
            </a>
        </div>
        <div class="HeaderImage"> <!--Styling for header image-->
            <a href="http://unn-w18008993.newnumyspace.co.uk">
                <img src="Images/Header/header.png" alt="Header" > <!--Header image located on the centre of the header, contains image showing "Welcome to Chollerton" with basic information such as number and email-->
            </a>
        </div>
    </div>
    <div class="navigation"> <!-- Styling for Nav -->
        <nav>
            <ul class="navigation"> <!--Navigation menu located underneath header, contains 5 links-->
                <li><a href="http://unn-w18008993.newnumyspace.co.uk/">Home</a></li>
                <li><a href="http://unn-w18008993.newnumyspace.co.uk/more.html">Find out more</a></li>
                <li><a href="http://unn-w18008993.newnumyspace.co.uk/admin.php">Admin</a></li>
                <li><a href="http://unn-w18008993.newnumyspace.co.uk/credits.html">Credits</a></li>
                <li><a href="wireframe.pdf">Wire frame</a></li>
            </ul>
        </nav> <!--End of Nav menu-->
    </div> <!--End of Nav Styling-->
</header>
<main> <!-- Main content -->
    <div class="structure"> <!-- Structure of main area (Text area) -->
        <div class="Text2"> <!-- Font and text Styling -->
            <?php
            include 'database_conn.php'; //Make Database connection
            $catDesc = isset($_REQUEST['catDesc']) ? $_REQUEST['catDesc'] : null; //Request Query choice from more.html
            $forename = isset($_REQUEST['forename']) ? $_REQUEST['forename'] : null; //Request Forename from more.html
            $surname = isset($_REQUEST['surname']) ? $_REQUEST['surname'] : null; //Request Surname from more.html
            $postalAddress = isset($_REQUEST['postalAddress']) ? $_REQUEST['postalAddress'] : null; //Request Postal address from more.html
            $landLineTelNo = isset($_REQUEST['landLineTelNo']) ? $_REQUEST['landLineTelNo'] : null; //Request LandLine number from more.html
            $mobileTelNo = isset($_REQUEST['mobileTelNo']) ? $_REQUEST['mobileTelNo'] : null; //Request Mobile number from more.html
            $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null; //Request email from more.html
            $sendMethod = isset($_REQUEST['sendMethod']) ? $_REQUEST['sendMethod'] : null; //Request Send Method from more.html
            echo "<section>\n";
            echo "\t<div class = title> <h1>Your details</h1></div>\n"; //Display heading with styling

            if (empty ($forename) || empty($surname) || empty($email) || empty($catDesc)) { //If Either Forename, Surname or Email are not filled in, do not submit and display that said details need to be filled in.
                echo "<p>You have not entered all required details";
                echo "<a href='more.html'>Please try again</a></p>\n";
                mysqli_close($dbConn); //Close connection
            }
            else { //Insert data from more.html into the SQL on phpadmin under CT_expressedInterest
                $sqlInsert = "INSERT INTO CT_expressedInterest (catID, forename,surname,postalAddress,landLineTelNo,mobileTelNo,email,sendMethod)VALUES ('$catDesc','$forename','$surname','$postalAddress','$landLineTelNo','$mobileTelNo','$email','$sendMethod')";
                $success = $dbConn->query($sqlInsert);
                echo "<p>Thank you  $forename for the info!</p>\n"; //Display to user that the submission was successful
                echo "<p>We will attempt to contact you back within 24 hours, if we cannot reach you from your selected send method then we will contact you via email by default. Thank you </p>\n";
                echo "<p>Forename : $forename</p>";
                echo "<p>Surname : $surname</p>";
                echo "<p>Email Address :$email</p>";
                mysqli_close($dbConn); //Close connection
            }
            echo "</section>\n";?>
        </div>
    </div>
</main>
<footer> <!--Located at bottom of page below main area-->
    <p>@ChollertonTeaRooms - Chollerton.Tea@gmail.com - Telephone: XXXX XXX XXXX</p> <!--Information on copyright and information about page creator-->
    <P>Open Monday - Sunday, 8am - 10pm(No late arrivals)</P> <!--Information on opening times-->
    <p>This page was created by Lewis Barton - For Northumbria University web dev submission A/B</p> <!--Information for submission-->
</footer>
</body>
</html>
