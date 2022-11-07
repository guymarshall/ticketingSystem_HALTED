<?php

require 'page.php';

$content = '';

$content .= '
<p>
    This is where a table of tickets will go.
</p>';

$o_index_page = new Page();
$index_html = $o_index_page->create_page('All', $content);
echo $index_html;