<?php
    require_once "SqlConnection.php";

    function getData4KW(){

    }

    function getNextEarlierWeek(){

    }

    function hasNoPreviousWeek(){

    }

    function getPreviousChartPosition(){

    }

    function getPrevWeekLabel(){

    }
?>

<!-- HTML starts here ------------->
 <!DOCTYPE html>
 <html lang="de">
    <head>
        <meta charset="UTF-8">
        <title>Top 40</title>
        <link href="styles.css" rel="stylesheet">
    </head>

    <body>
        <div class="form-container">
            <form method="post" class="form-container">
                <label for="kwYearDropdown">Wähle</label>
                <select name="kwYearDropdown" id="kwYearDropdown" class="dropdown">
                <button type="submit" class="button-submit">Submit</button>
            </form>
        </div>

        <table>
            <tr>
                <th>Platz</th>
                <th>Titel</th>
                <th>Interpret</th>
                <th>Cover</th>
                <th>KW</th>
                <th>Diff.</th>
            </tr>
        </table>
    </body> 
</html>