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
            <div class="title"> <!-- Styling for main header -->
            <h1>Admin - Find Out More Queries</h1>
            </div>
            <p>This table includes the various queries submitted via the "Find Out More page on our website. Here you can find information involving their Surname, Forename, Query, Postal Address, LandLine, Mobile, Email and Send Method.</p>
            <p>To edit any of these queries please click here.. This will bring you to another table allowing you to select a specific query, edit and save it.</p>
            <p>For any information involving this table, please email XXXXXX@live.com with your question about this information, you can also use this email to report any bugs or deficiencies in our results/information. Thank you.</p>
            <p>All Information present should be up to date unless there is an issue involving the database or maitanence is in progress</p>
        </div>
        <div class="Text"> <!-- Used to style text present in the table -->
        <table>
            <tr> <!-- headers on the admin page table -->
                <th>Surname</th>
                <th>Forename</th>
                <th>Query</th>
                <th>Postal Address</th>
                <th>LandLine</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Send Method</th>
            </tr>
<?php
include 'database_conn.php'; //Make Database connection
$sql = "SELECT expressInterestID, catDesc, forename, surname, postalAddress, landLineTelNo, mobileTelNo, email, sendMethod
        FROM CT_expressedInterest
  	    INNER JOIN CT_category
	    ON CT_category.catID = CT_expressedInterest.catID
	    ORDER BY surname ASC"; //Get data from php my admin from Ct_expressedInterest and CT_category

$queryResult = $dbConn->query($sql);
if ($queryResult->num_rows > 0) { //Put data from phpmyadmin into table
    while ($row = $queryResult->fetch_assoc()) {
        echo "<tr><td>".$row["surname"]."</td><td>".$row["forename"]."</td><td>".$row["catDesc"]."</td><td>".$row["postalAddress"]."</td><td>".$row["landLineTelNo"]."</td><td>".$row["mobileTelNo"]."</td><td>".$row["email"]."</td><td>".$row["sendMethod"]."</td></tr>";
    }
    echo "</table>"; //End of table
}
else
    echo "<p>Servers are down</p>";
$queryResult->close(); //End of table results
$dbConn->close(); //close connection
?>
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
