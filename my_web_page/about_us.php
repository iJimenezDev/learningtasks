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
            <h1>About Us</h1>

<p>
We are dedicated to providing quality service and information.
Our goal is to create useful and engaging content for our visitors.
</p>

        </div>

        <div class="footer">
        </div>

    </div>
</body>
</html>
