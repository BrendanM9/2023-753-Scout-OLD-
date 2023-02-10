<!DOCTYPE HTML>
<html>
    <head>
        <title>Official 753 Scouting Interface</title>
        <link rel="stylesheet" href="scoutstyle.css">
    </head>
    <?php
    date_default_timezone_set("America/Los_Angeles"); 
    echo "The day is " . date("M/D/Y");
    echo ".  The time is " . date("h:ma");
    ?>
    <form name="enter" action="dataentry.php" method="post">
        <input name="a1" value="yes" type="checkbox">A1
        <input name="b1" value="yes" type="checkbox">B1
        <input name="c1" value="yes" type="checkbox">C1<br>
        <br>
        <input name="a2" value="yes" type="checkbox">A2
        <input name="b2" value="yes" type="checkbox">B2
        <input name="c2" value="yes" type="checkbox">C2<br>
        <br>
        <input name="a3" value="yes" type="checkbox">A3
        <input name="b3" value="yes" type="checkbox">B3
        <input name="c3" value="yes" type="checkbox">C3<br>
        -------------------------<br>
        <input name="a4" value="yes" type="checkbox">A4
        <input name="b4" value="yes" type="checkbox">B4
        <input name="c4" value="yes" type="checkbox">C4<br>
        <br>
        <input name="a5" value="yes" type="checkbox">A5
        <input name="b5" value="yes" type="checkbox">B5
        <input name="c5" value="yes" type="checkbox">C5<br>
        <br>
        <input name="a6" value="yes" type="checkbox">A6
        <input name="b6" value="yes" type="checkbox">B6
        <input name="c6" value="yes" type="checkbox">C6<br>
        -------------------------<br>
        <input name="a7" value="yes" type="checkbox">A7
        <input name="b7" value="yes" type="checkbox">B7
        <input name="c7" value="yes" type="checkbox">C7<br>
        <br>
        <input name="a8" value="yes" type="checkbox">A8
        <input name="b8" value="yes" type="checkbox">B8
        <input name="c8" value="yes" type="checkbox">C8<br>
        <br>
        <input name="a9" value="yes" type="checkbox">A9
        <input name="b9" value="yes" type="checkbox">B9
        <input name="c9" value="yes" type="checkbox">C9<br>
        -------------------------<br>
        <br>
        <input type="checkbox" name="chrga" value="yes">Charge Station, Autonomous<br>
        <input type="checkbox" name="chrgt" value="yes">Charge Station, Teleoperated<br>
        <input type="checkbox" name="lva" value="yes">Leave During Autonomous<br>
        <input type="checkbox" name="cb" value="yes">Coopertition Bonus<br>
        <label>Main Focus:</label><br>
        <select id="focus" name="focus" required>
            <option></option>
            <option name="cone" value="cone">Cone</option>
            <option name="cube" value="cube">Cube</option>
          </select><br>
          <label for="penalties">Penalty Amount:</label>
          <select id="penalties" name="penalties" required>
            <option></option>
            <option name="&lt;1" value="<1">&lt;1</option>
            <option name="1-2" value="1-2">1-2</option>
            <option name="3-5" value="3-5">3-5</option>
            <option name="&gt;5" value=">5">&gt;5</option>
          </select><br>
          <br>
          <label for="integrity">Structural Integrity:</label>
          <select id="integrity" name="integrity" required>
            <option></option>
            <option name="phenomenal" value="phen">Phenomenal</option>
            <option name="mediocre" value="medi">Mediocre</option>
            <option name="bad" value="outr">Outrageously Bad</option>
          </select><br>
          <br>
          <label for="nice">How much of a team player do they seem to be?(between 0 and 10):</label>
  <input type="range" id="nice" name="nice" min="0" max="10" required><br>
  <br>
          <label for="pts">Alliance Points:</label>
          <input type="number"id="pts" name="pts" required><br>
          <label for="number">Team Number:</label>
          <input type="number" id="t#" name="t#" required>
        <br>
        <input type="submit" value="Submit">
      </form> 
      
</html>