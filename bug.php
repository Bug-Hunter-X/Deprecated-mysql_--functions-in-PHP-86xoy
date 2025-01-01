This code uses the `mysql_*` functions, which are deprecated and removed in PHP 7.0.  Attempting to use them will result in errors.  The `mysql_*` functions are also known to be insecure and prone to SQL injection vulnerabilities. 
```php
<?php
$link = mysql_connect('localhost', 'user', 'password');
if (!$link) {
die('Could not connect: ' . mysql_error());
}
mysql_select_db('database_name', $link);
$result = mysql_query("SELECT * FROM my_table", $link);
while ($row = mysql_fetch_assoc($result)) {
    print_r($row);
}
mysql_close($link);
?>
```