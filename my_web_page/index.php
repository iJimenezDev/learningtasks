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
            <h1>Home</h1>

<p>
Welcome to our website. We are happy to have you here.
Browse through our pages to learn more about us.
</p>

        </div>

        <div class="footer">
        </div>

    </div>
</body>
</html>