<?php
    switch ($name)
    {
        case "404":
            $this->render('//errors/404');
        break;
        case "403":
            $this->render('//errors/403');
        break;
        case "500":
            $this->render('//errors/500');
        break;
        default:
            echo "error";
        break;
    }
?>