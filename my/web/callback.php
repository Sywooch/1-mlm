<?php
if (count($_POST)) {
file_put_contents(dirname(__FILE__).'/callback_robot.php', var_export($_POST, true) . "\r\n\r\n", FILE_APPEND | LOCK_EX);
}?>
<form id="go" method="POST" action="http://���_����/callback.php"" accept-charset="utf-8">
</form>
<button type="submit" form="go">��������</button>

<hr />
<pre>
<?php
    $file = file_get_contents('callback_robot.php');
    print_r($file);
?>
</pre>
