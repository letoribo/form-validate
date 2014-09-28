<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
<link rel="stylesheet" href="./stylesheets/ui-test-task2.css">
<link href="/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
<script  src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
</head>
<body>
<div class="main">

<div id="section">
</div>
<div id="Layer14">
</div>
<div id="ActiveSublevelItem1">
<a href="#">ActiveSublevelItem1</a></div>
<div id="SublevelItem3">
<a href="#">SublevelItem3</a></div>
<div id="SublevelItem2">
<a href="#">SublevelItem2</a></div>
<div id="SublevelItem4">
<a href="#">SublevelItem4</a></div>
<div id="BackToMainlevelMenu">
<img src="images/BackToMainlevelMenu3.png" width="25" height="25" />
<!--<img class="icons-BackToMainlevelMenu3"/>-->
</div>
<div id="Layer6copy4">
</div>
<div id="Layer6">
</div>
<div id="Layer7">
</div>
<div id="Layer6copy">
</div>
<div id="Layer6copy2">
</div>
<div id="Layer6copy3">
</div>
<div id="Layer8">
<img src="images/Layer8.png" width="26" height="26" /></div>
<div id="Layer11copy">
<img src="images/Layer11copy.png" width="25" height="14" /></div>
<div id="OpenClosesectionicon">
<img src="images/OpenClosesectionicon.png" width="17" height="14" />
<!--<img class="icons-OpenClosesectionicon" />-->
</div>
<div id="UsersIcon">
<img src="images/UsersIcon.png" width="26" height="26" /></div>
<div id="ActiveMenuItem">
<img src="images/ActiveMenuItem.png" width="26" height="26" /></div>
<div id="ContentSection" ></div>

<div id="Line">
<img src="images/Line.png" width="747" height="1" /></div>
<div id="helpicon">
<img src="images/helpicon.png" width="19" height="19" /></div>
<div id="Envilope">
<img src="images/Envilope.png" width="24" height="17" /></div>
<div id="circle">
<img src="images/circle.png" width="17" height="18" /></div>
<div id="_99">
<img src="images/_99.png" width="12" height="7" /></div>
<!--</div>-->
<h1>Example of form</h1>
<form method="get" action="first.php">
 <input type="text" name="text1" id="text1" placeholder="Text field 1 (simple text)"/>
 <input type="text" name="text2" id="text2" placeholder="Text field 2 (simple text)"/>
 <p><input type="text" name="num" id="num" placeholder="Text field 3 (only 1234567890, max 10 pos)"/>
 <input type="text" name="email" id="email" placeholder="Text field 4 (E-mail ****@****)"/></p>
 <p><input type="text" name="text3" id="text3" placeholder="Text field 5 (simple text)"/>
 <input type="text" name="text4" id="text4" placeholder="Text field 6 (simple text)"/></p>
 <!--<p>-->
 <input type="submit" value="SUBMIT FORM" />
 <!--</p>-->
</form>
<?php include "second.php";?>

</div>
<script>
$(document).ready(function(){
  var panel = $('#section, #Layer14, #BackToMainlevelMenu, a').addClass('visible');
  var content = $('#ContentSection');

  $('#slide-panel').addClass('visible').css({'margin-left':'700px'});
  $('#BackToMainlevelMenu').on('click', function(){		
		
	 if(panel.hasClass("visible")){
		panel.removeClass('visible').animate({'width': 'hide'}, 300);
      content.animate({marginLeft: -201, width: 948}, 300);
    };
  });
  $('#OpenClosesectionicon').on('click', function(){
	 panel.addClass('visible').animate({'width': 'show'}, 200);
  });
	
  $('#num').bind("input", function(){
	 var re = /[^0-9]/g; var val = $(this).val();
	 var is_num = val.match(re);
	 if(val.length > 10){
      val.replace(/[^0-9]/g, ''); 
      $(this).val(val.substr(0,10));
    };
	 if(is_num){
	 	$('#num').removeClass("valid").addClass("invalid");
	 }
    else{$('#num').removeClass("invalid").addClass("valid");
      if(val == ""){$('#num').removeClass("valid");}
    }
  });

  $('#email').on('change keyup input click', function(){
    var input=$(this);
    var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var is_email=re.test(input.val());
    if(is_email){input.removeClass("invalid").addClass("valid");}
    else{input.removeClass("valid").addClass("invalid");}
  });
  $( "input[id^='text']" ).bind("change input", function(){
	 $(this).removeClass("invalid").addClass("valid");
  });    

  $('form').bind('submit', function(event){
    $(":input[type!='submit']").each(function(){
  	 var text1 = $("#text1").val();
	 var text2 = $("#text2").val();
	 var num = $("#num").val();
    var email = $("#email").val();
    var text3 = $("#text3").val();
	 var text4 = $("#text4").val();
    if(!$(this).val().length){
      event.preventDefault();
      $(this).addClass("invalid");
    }
    });
  });
});
</script>
</body>
</html>