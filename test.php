<?php
$tokens = explode('/' , rtrim($_SERVER['REQUEST_URI'],'/'));
echo '<pre>';
print_r($_SERVER);
print_r($tokens);
echo '</pre>';
