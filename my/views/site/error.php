<pre><?php
use yii\helpers\Html;

$this->title = $name;
?>
<script>

    //Задаем строку для вывода
    var line1=" Please contact us if you think this is a server error. Thank you.";
    var line=" "+"The above error occurred while the Web server was processing your request."+line1;
    //Повторять? 1-да, 0-нет
    var repeat=0;
    //Скорость вывода в мс
    var speed=150;
    var i=0;
    function m_line(){
        if(i++<line.length){
            document.getElementById("errtxt").innerHTML=line.substring (1,i);}
        else{
            if(repeat==0){exit();}
            if(repeat==1){
                document.getElementById("errtxt").innerHTML=" ";
                i=0;}}
        setTimeout('m_line()',speed);
    }

</script>

<div class="site-error">

    <h1><?php echo Html::encode($this->title); ?></h1>

    <div class="alert alert-danger">
        <?php echo nl2br(Html::encode($message)); ?>
    </div>
    <div id="errtxt"><div>
</div>

<script>
    m_line(); //вызов функции вывода
</script>