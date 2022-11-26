<?php
$users = "<h1>Users:</h1>
<ul>
<li>Administrator</li>
<li>Editor</li>
<li>Subscriber</li>
</ul>";
echo preg_replace('#<li>(\w+)</li>#', "<li><a href=\"http://www.php.kh.ua/script.php?role=$1\">$1</a></li>", $users);