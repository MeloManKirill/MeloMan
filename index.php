<html>

<head>
 <title>Простая форма обратной связи html + php + css</title>

 <style>
#blok_tel {
width:300px; border:0px solid red;text-align:center;margin:0 auto;
box-shadow:
   0 1px 4px rgba(0, 0, 0, .3),
   -23px 0 20px -23px rgba(0, 0, 0, .8),
   23px 0 20px -23px rgba(0, 0, 0, .8),
   0 0 40px rgba(0, 0, 0, .1) inset;
background: #ffffff; /* Old browsers */
background: -moz-linear-gradient(top,  #ffffff 0%, #e5e5e5 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#e5e5e5)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #ffffff 0%,#e5e5e5 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #ffffff 0%,#e5e5e5 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #ffffff 0%,#e5e5e5 100%); /* IE10+ */
background: linear-gradient(to bottom,  #ffffff 0%,#e5e5e5 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e5e5e5',GradientType=0 ); /* IE6-9 */

}
.p_tel {font-family:tahoma;font-size:24px;font-weight:bold;text-align:center;margin:0;padding:0;outline:none;color:#222222;}
.p_tel2 {font-family:tahoma;font-size:15px;font-weight:bold;text-align:center;margin:0;padding:0;color:#333333;}
.form1 {margin:10px;padding:10px;}
.form1 input[type='text']{width:250px; height:40px;text-align:center;margin:0;padding:0;outline:none;
font-size:22px; color:#666666;font-family:tahoma;
  box-shadow:
  -20px 20px 0 -17px #fff,
   20px -20px 0 -17px #fff,
   20px 20px 0 -20px rgba(182,224,38,1),
   0 0 0 2px rgba(182,224,38,1);
}
.form1 input[type='submit']{width:250px; height:40px;text-align:center;
border:2px solid #cccccc;font-weight:bold;font-size:13px;font-family:tahoma;
outline:none;
background: rgb(182,224,38); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(182,224,38,1) 0%, rgba(171,220,40,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(182,224,38,1)), color-stop(100%,rgba(171,220,40,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(182,224,38,1) 0%,rgba(171,220,40,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(182,224,38,1) 0%,rgba(171,220,40,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(182,224,38,1) 0%,rgba(171,220,40,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(182,224,38,1) 0%,rgba(171,220,40,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b6e026', endColorstr='#abdc28',GradientType=0 ); /* IE6-9 */

}
 </style>

</head>

<body>

<div id="blok_tel">
	<form action="" method="post" class="form1">
<p class="p_tel">ЗАКАЗАТЬ</p>
<p class="p_tel2">Обратный звонок!</p>
<p><input type="text" name="tel" value="0123456789"
       onfocus="(this.value == '0123456789') && (this.value = '')"
       onblur="(this.value == '') && (this.value = '0123456789')"></p>
<p><input type="submit" name="submit_tel"></p>
	</form>
<?if(isset($_POST["submit_tel"])) 
{
$email = 'admin@site.ru';
/* Отправляем email */
mail($email, "Заказ обратного звонка на сайте ...", "\n
Посетитель заказал обратный звонок! \n
Телефон : ".$_POST['tel']."
");
echo '<p class="p_tel2">Заявка <big><b>принята!</big></b></p><br/>';
}
?>
</div>

</body>
</html>