<?

/**
 * User Info
 */
function user_info($token, $format_date, $formmat_time, $team)
{
    print("Token: " . $token . "<br>");
    print("Tag: " . $format_date . "<br>");
    print("Zeit: " . $formmat_time . "<br>");
    print("Team: " . $team . "<br>");
    print("<br><h2> Cheaters from the team " . $team . "</h2>");
}

/**
 *  Content
 */
function content($zitate, $team)
{
    $blocked = false;
    for ($i = 2; $i < count($zitate); $i++) {
        $user = $zitate[$i];
        if ($user != "Riffecx" &&  $user != "Donbur") {
            $c = $i - 1;
            print($c . ": <a href='https://lichess.org/@/" . $user . "' target='_blank'>" . $user . "</a> <br>");
        } else {
            $blocked = true;
        }
    }


    if ($blocked) {
        print("<div style='color: red'>The file was redacted</div>");
    }

    if (count($zitate) == 2) {
        print("<div style='color: red'>No users have been flagged</div>");
    }

    if ($team == "") {
        print("<h1><center> INVALID TOKEN</center> </h1>");
    }
}