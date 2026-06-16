<html>
<head>
    <title>my web page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
    <div id="wrapper">

        <div class="header">
        </div>

        <div class="main-navigation">
            <a href="index.php">Home</a> /
            <a href="about_us.php">About us</a> /
            <a href="mission.php">Mission and vision</a> /
            <a href="gallery.php">Gallery</a>
        </div>

        <div class="container">

            <?php
            switch (@$_GET['page']) {

                case "about-us":
                    include("about_us.php");
                    break;

                case "mission-vision":
                    include("mission.php");
                    break;

                case "gallery":
                    include("gallery.php");
                    break;

                default:
                    include("home.php");
                    break;
            }
            ?>
            <h1>Mission & Vision</h1>

<h2>Mission</h2>
<p>
To serve our users with reliable information and excellent service.
</p>

<h2>Vision</h2>
<p>
To become a trusted and innovative platform for learning and communication.
</p>

        </div>

        <div class="footer">
        </div>

    </div>
</body>
</html>
