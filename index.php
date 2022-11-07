<?php

$form_fields = [
    'Title',
    'Room',
    'Description',
    'Priority',
    'Comments'
];

$form_html = '
<form action="index.php" method="POST">
    <label for="title">Title: </label>
    <input type="text" name="title" id="title">
    <br>
    <label for="room">Room: </label>
    <input type="text" name="room" id="room">
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

echo $form_html;

if (isset($_POST['priority'])) {
    echo $_POST['priority'];
}