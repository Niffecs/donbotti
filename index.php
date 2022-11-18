<?
if (isset($_GET['token']) && $_GET['r'] != "0") {
	$url = "https://www.donbotti.de/index.php?token=" . $_GET['token'] . "&r=0#donbotti";
	header("Location: " . $url);
}
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Donbotti</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="shortcut icon" href="DSS_neu.jpg">
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
</head>
<!-- Wrapper -->
<div id="wrapper">
    <!-- Header -->
    <header id="header">
        <div class="logo">
            <span class="icon fa-gem"></span>
        </div>
        <div class="content">
            <div class="inner">
                <h1>Donbotti</h1>
                <p>Find all cheaters in your Lichess team.</p>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="#id">Token</a></li>
                <!--<li><a href="#author">Author</a></li>-->
                <li><a href="#donate">Donate</a></li>
                <li><a href="#code">Code</a></li>
                <li><a href="#download">Download</a></li>
                <?
				if (isset($_GET['token']) && $_GET['token'] != "") {
					print("<li><a href='#donbotti'>Overview</a></li>");
				}

				?>
            </ul>
        </nav>
    </header>

    <!-- Main -->
    <div id="main">
        <!-- ID -->
        <article id="id">
            <h2 class="major">Token</h2>
            <span class="image main"><img src="images/pic02.jpg" alt="" /></span>
            <form action="https://www.donbotti.de/index.php#donbotti" id="token">
                <label for="token">Please enter a token:</label>
                <input type="text" name="token" id="token" maxlength="32" minlength="32">
                <button type="reset">Reset</button>
                <button type="submit">Send</button>
            </form>
        </article>
        <!-- https://github.com/jplight/faultybot" target="_blank" -->


        <!-- Code -->
        <article id="code">
            <h2 class="major">Source Code</h2>
            <span class="image main"><img src="images/pic02.jpg" alt="" /></span>
            Here you can find an overview of all source code systems used. All of them run via git, so everyone can use
            them freely. <br>
            <br>
            <br>
            <table>
                <tbody>
                    <tr>
                        <td>Group</td>
                        <td>Name</td>
                        <td>GitHub</td>
                    </tr>
                    <tr>
                        <td>Server</td>
                        <td>Faultybot</td>
                        <td><a href="https://github.com/Donbur4156/faultybot" target="_blank"> Faultybot </a> </td>
                    </tr>
                    <tr>
                        <td>Web</td>
                        <td>Donbotti</td>
                        <td> private </td>
                    </tr>
                </tbody>
            </table>
        </article>

        <!-- Download -->
        <article id="download">
            <h2 class="major">Download</h2>
            <span class="image main"><img src="images/pic02.jpg" alt="" /></span>
            Here you can find all source code for download.
            <br>
            <br>
            <br>
            <h3> Download </h3>
            <table>
                <tbody>
                    <tr>
                        <td>Group</td>
                        <td>Name</td>
                        <td>GitHub</td>
                    </tr>
                    <tr>
                        <td>Server</td>
                        <td>Faultybot</td>
                        <td><a href="https://github.com/Donbur4156/faultybot/archive/refs/heads/main.zip" target="_blank">
                                Faultybot </a> </td>
                    </tr>
                    <tr>
                        <td>Web</td>
                        <td>Donbotti</td>
                        <td>private</td>
                    </tr>
                </tbody>
            </table>
            <br><br>
            <h3> Git Clone </h3>
            Of course, all of them can be cloned as well.
            <ol>
                <li> Faultybot: <code>git clone https://github.com/Donbur4156/faultybot</code> </li>
                <li> Donbotti: <code>private</code> </li>

        </article>

        <!-- Donate -->
        <article id="donate">
            <h2 class="major">Donation</h2>
            <span class="image main"><img src="images/pic02.jpg" alt="" /></span>
            Hello chess friends,<br>
            this project was born from an idea. <br>
            We know that the costs are very low compared to other projects. Nevertheless, we would appreciate a
            small donation for the maintenance and updating of the website.
            <br>
            Thank you. <br>
            <br>

            <table>
                <tbody>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;Server</td>
                        <td>Domain</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Costs</td>
                        <td>&nbsp;12&euro;</td>
                        <td>7&euro;</td>
                    </tr>
                </tbody>
            </table>

            <center>
                <a href="#" target="_blank"><button
                        type="button">offline</button></a>

            </center>
        </article>

        <!-- Donbotti -->
        <article id="donbotti">
            <h2 class="major">Donbotti</h2>
            <span class="image main"><img src="images/pic03.jpg" alt="" /></span>
            <p>
                <?
				include __DIR__ . '/logger.php';
				include __DIR__ . '/variable.php';
				include __DIR__ . '/donbotti.php';
				print("<h3> Cheaters from the team:  " . $team . "</h3><br>");
				logger($team);
				content($zitate, $team);
				?>
            </p <div class="donation" id="donate">
            <center>
                <em>
                    <a href="https://www.donbotti.de/#donate">Please support this small project.</a>
                </em>
            </center>
    </div>
    </article>
</div>
<!-- Footer -->
<footer id="footer">
    <p class="copyright">&copy; Donbur4156 - Donbotti</p>
</footer>
</div>

<!-- BG -->
<div id="bg"></div>


<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>