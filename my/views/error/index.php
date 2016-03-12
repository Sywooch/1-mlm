<?php
switch ($name)
{
    case "404":
       echo $this->render('404');
    break;
    case "403":
       echo $this->render('403');
    break;
    case "500":
       echo $this->render('500');
    break;
    default:
       echo "error";
    break;
}
?>