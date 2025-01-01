The solution involves replacing the deprecated `mysql_*` functions with either the MySQLi extension or the PDO (PHP Data Objects) extension.  Both are more secure and offer improved performance. Here's an example using MySQLi:

```php
<?php
$link = new mysqli('localhost', 'user', 'password', 'database_name');
if ($link->connect_error) {
die('Connect Error: ' . $link->connect_error);
}
$result = $link->query("SELECT * FROM my_table");
if ($result) {
    while ($row = $result->fetch_assoc()) {
        print_r($row);
    }
    $result->free_result();
}
$link->close();
?>
```

Remember to replace placeholders like 'localhost', 'user', 'password', and 'database_name' with your actual credentials.