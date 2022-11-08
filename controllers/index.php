<?php

require 'page.php';

require '../views/v_index.php';

$o_index_page = new Page();
$index_html = $o_index_page->create_page('All', $content);
echo $index_html;