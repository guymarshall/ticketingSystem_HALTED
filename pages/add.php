<?php

require 'page.php';

$content = '';

$content .= '
<form action="index.php" method="POST">
    <label for="title">Title: </label>
    <input type="text" name="title" id="title">
    <br>
    <label for="username">Username: </label>
    <input type="text" name="username" id="username">
    <br>
    <label for="description">Description: </label>
    <input type="text" name="description" id="description">
    <br>
    <label for="priority">Priority: </label>
    <select name="priority" id="priority">
        <option value="low">Low</option>
        <option value="medium">Medium</option>
        <option value="high">High</option>
        <option value="critical">Critical</option>
    </select>
    <br>
    <label for="comments">Comments: </label>
    <input type="text" name="comments" id="comments">
    <br>
    <input type="submit" value="Submit">
</form>';

$o_index_page = new Page();
$index_html = $o_index_page->create_page('Index', $content);
echo $index_html;