<!DOCTYPE html>
<html>
<head>
    <script src="//code.jquery.com/jquery-1.10.1.min.js"></script>
    <script>
        opt =
        {
            <?php
            $i=0;
            foreach($fu as $v)
            {
                ++$i;
                echo
                '"'.$i.'" :
                            {
                                "id": "' . $v["fn"] . '",
                                "fn": "' . $v["fn"] .'",
                                "ln": "' . $v["ln"] .'",
                                "userpic": "' . $v["userpic"] . '",
                                "email": "' . $v["email"] . '",
                                "vk": "' . $v["vkontakte"] . '",
                                "fb": "' . $v["facebook"] . '",
                            },
                ';
            }
            ?>
        };
    </script>
    <style>@import url("fortune/style.css");</style>
    <title></title>
</head>
<body>
    <table border="0">
        <tr>
            <td>
                <div id="game">
                    <div id="tick">\/</div>
                    <img id="wheel" src="fortune/image.png" data-rotation="0">
                </div>
            </td>
            <td>
                <div style="width: 200px; height: 300px; overflow-y: scroll;">
                    <ol id="usr"></ol>
                </div>
                On-line:<?= $i; ?>
            </td>
        </tr>
        <tr>
            <td><button id="start">КРУТИТЬ</button></td>
            <td><button onclick="RndUser()">НАЧАТЬ</button></td>
        </tr>
    </table>
    <br />
<center>
    <div id="result" ></div>
</center>
<script src="fortune/script.js"></script>
</body>
</html>