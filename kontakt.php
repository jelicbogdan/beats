<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/png" href="Images/logo.png" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/oceni.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/forma.js"></script>

    <script>
        $(document).ready(function() {
            $("#menuOpener").click(function() {
                if ($(".navbar-menu").hasClass("active")) {
                    $(".navbar-menu").removeClass("active");
                } else {
                    $(".navbar-menu").addClass("active");
                }

            });
        });
    </script>


    <script type="text/javascript">
        function validate() {


            if (document.myForm.ime.value == "") {
                alert("Name is a required field!");
                document.myForm.ime.focus();
                return false;
            }

            if (document.myForm.prezime.value == "") {
                alert("Last name is a required field!");
                document.myForm.prezime.focus();
                return false;
            }


            if (document.myForm.email.value == '') {
                alert("Email is a required field!");
                document.myForm.email.focus();
                return false;
            }

            if (document.myForm.email.value.indexOf('@') == -1) {
                alert("Error!");
                document.myForm.email.focus();
                return false;

            }


            return confirm("Successful!")
            return (true);
        }
    </script>

    <title>Oceni Beats</title>
</head>

<body class="index">
    <div class="page-content-wrapper">
        <div class="navbar" id="index-nav">
            <div>
                <ul id="list-navbar">

                    <li><a href="index.html">Početna</a></li>
                    <li><a href="galerija.html">Slušalice</a></li>
                    <li><a class="active" href="oceni.html">Oceni</a></li>
                    <li><a href="autor.html">Autor</a></li>

                    <span id="menuOpener"><i class="fa fa-bars"></i></span>
                </ul>
            </div>
        </div>

        <div class="mobile-nav">
            <nav class="navbar-menu">

                <ul class="menu-listing">

                    <li><a href="index.html">Početna</a></li>
                    <li><a href="galerija.html">Slušalice</a></li>
                    <li><a href="oceni.html">Oceni</a></li>
                    <li><a href="autor.html">Autor</a></li>

                </ul>
            </nav>
        </div>


        <div id="telo">

            <?php

            $obj->name = $_GET['ime'];
            $obj->surname =  $_GET['prezime'];
            $obj->email =  $_GET['email'];
            $obj->number =  $_GET['telefon'];
            $obj->choice =  $_GET['sell'];
            $obj->comment =  $_GET['comment'];

            $json = json_encode($obj);
            file_put_contents('forma.json', $json);
            ?>
            <div class="kontakt query">
                <div class="bg_shadow">
                    <p>Ime: <?php echo $obj->name; ?></p>
                    <p>Prezime: <?php echo $obj->surname; ?></p>
                    <p>E-mail: <?php echo $obj->email; ?></p>
                    <p>Telefon: <?php echo $obj->number; ?></p>
                    <p>Slušalice: <?php echo $obj->choice; ?></p>
                    <p>Komentar: <?php echo $obj->comment; ?></p>
                </div>
            </div>
        </div>


        <div class="footer">
            <div class="telo red ">

                <div>
                    <p>
                        Kontaktirajte nas:
                        <a href="mailto:ocenibeats@gmail.com">ocenibeats@gmail.com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>