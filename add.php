<?php

session_start();

require 'page.php';

$content = '';

$content .= '
    <form action="add.php" method="POST">
        <label for="time">Time:</label>
        <input type="time" id="time" name="time">
        <br>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date">
        <br>
        <label for="bloodSugar">Blood sugar (mmol/L):</label>
        <input type="number" id="bloodSugar" name="bloodSugar" step="0.1">
        <br>
        <label for="carbs">Carbs (g):</label>
        <input type="text" id="carbs" name="carbs" step="0.1">
        <br>
        <label for="insulinShort">Insulin (short):</label>
        <input type="number" id="insulinShort" name="insulinShort">
        <br>
        <label for="insulinLong">Insulin (long):</label>
        <input type="number" id="insulinLong" name="insulinLong">
        <br>
        <label for="insulinCorrection">Insulin (correction):</label>
        <input type="number" id="insulinCorrection" name="insulinCorrection">
        <br>
        <label for="notes">Notes:</label>
        <input type="text" id="notes" name="notes">
        <br>

        <input type="submit" value="Submit">
    </form>
';

$o_add_page = new Page();
$add_html = $o_add_page->create_page('Add', $content);
echo $add_html;
