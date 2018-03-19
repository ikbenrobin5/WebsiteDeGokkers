<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>De Gokkers</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!--[if lte IE 9]-->
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->



        <div class="header">
            <h1>De Gokkers</h1>
            <nav>
                <a href="#information">Informatie</a>
                <a href="#video">Video</a>
                <a href="">Login</a>
            </nav>
        </div>

        <div class="informationtitle">
            <h1>Information</h1>
            <a name="information"></a>
        </div>

        <div class="informatie">
            <div class="infotekst">
                <p>This is the settings menu,
                    you can change the number of players,
                    the amount of starting money an the player names here.
                    You can choose your own custom names!
                    There are diffrent amounts of starting money to choose from to make it harder to play the game
                    and earn money. The amounts to choose from are: 0, 25, 50, 100, 250, 500, 1000, 5000, 100000, 100000.
                    You can play with up to three people!
                    You can press the "Start Game" button to advance to the next form.</p>
            </div>

            <div class="infoscreens" id="settings">
                <img src="./img/settings.png" alt="settings">
            </div>

        </div>

        <div class="informatie">
            <div class="infotekst">
                <p>This is what the game looks like,
                    On the left side you can see the racing ostriches.
                    Under the ostriches is the "Start!" button, press this once you're ready to race.
                    Then under the start button is the player's name.
                    Next to that is the amount of money the player has.
                    Next to that is the menu where you can choose an ostrich to place your bet on.
                    You can bet a minimum of 5 dollars and a maximum of 15 dollars.
                    if you're ready to place your bet the check the button next to the label that shows how much you've bet.
                    And press the "Bet!" button to place your bet.</p>
            </div>



            <div class="infoscreens">
                <img src="./img/program.png" alt="Program">
            </div>
        </div>

        <div class="videotilte">
            <h1>Video of the program</h1>
            <a name="video"></a>
        </div>

        <div class="video">

            <video
                width="700" controls
                src="./video/Settings 19-3-2018 15_19_30.mp4">
            </video>
        </div>







        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>


