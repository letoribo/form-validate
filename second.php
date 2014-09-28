<?php
if(isset($_GET['text1']))
{
$text1 = $_GET['text1'];
$text2 = $_GET['text2'];
$num = $_GET['num'];
$email = $_GET['email'];
$text3 = $_GET['text3'];
$text4 = $_GET['text4'];

echo "<span class='success'>Form Submitted By <b>GET METHOD</b><br/><i>Text1 : ".$text1."</i>&nbsp&brvbar;<i> Text2 : ".$text2."</i>&nbsp&brvbar;<i> Text3 : ".$num."</i>&nbsp&brvbar;<i> Text4 : ".$email."</i>&nbsp&brvbar;<i> Text5 : ".$text3."</i>&nbsp&brvbar;<i> Text6 : ".$text4."</i></span>";
}
?>