<!DOCTYPE html>
<html>
<head>
    <title>My Web Page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
    <div id="wrapper">

        <div class="header">
            <img src="image/lugu.png" alt="ITI Logo" class="logo">
            <h1>TechVision</h1>
        </div>

        <div class="main-navigation">
            <a href="index.php">Home</a> /
            <a href="index.php?page=project">Projects</a> /
            <a href="index.php?page=job">Job posting</a> /
            <a href="index.php?page=testimonies">Testimonies</a> /
            <a href="index.php?page=contact">Contact us</a>
        </div>

        <div class="container">
            <?php
            switch (@$_GET['page']) {
                case "project":
                    include("projects.php");
                    break;

                case "job":
                    include("job_postings.php");
                    break;

                case "testimonies":
                    include("testimonies.php");
                    break;
                
                case "contact":
                    include("contact_us.php");
                    break;

                default:
                    include("home.php");
                    break;
            }
            ?>
        </div>

        <div class="footer">
        </div>

    </div>
</body>
</html>