<?php
require('config.php');
require('include.php');
if($_FILES['uploadimg']['error']>0){
    $uploadtype = false;
    switch($_FILES['uploadimg']['error']){
	    case 1:$errormsg = $message['error1'];break;
		case 2:$errormsg = $message['error2'];break;
		case 3:$errormsg = $message['error3'];break;
		case 4:$errormsg = $message['error4'];
	}
}

$suffix = strtolower(substr($_FILES['uploadimg']['name'],-4));
if(!valid_suffix($suffix)){
    $uploadtype = false;
	$errormsg = $message['error_valid'];
}


if($uploadtype === false){


}else{

/////////////////REMOVE////////////////
$userip = ip2long($_SERVER['REMOTE_ADDR']);
$time = time();
$newpath = UPLOAD_DIR . $time .'x'. $userip . $suffix;
if(is_uploaded_file($_FILES['uploadimg']['tmp_name'])){
    if(!move_uploaded_file($_FILES['uploadimg']['tmp_name'],$newpath)){
	    $uploadtype = false;
		$errormsg = $message['error_uploaded'];
	}else{
	    $uploadtype = true;
	}
}else{
    $uploadtype = false;
	$errormsg = $message['error_uploaded'];
}
/////////////////END_REMOVE////////////

}
if($uploadtype === false){
    //echo 'Error:'.$errormsg;
	//header('Location:'.SITE_DIR.'?error='.urlencode($errormsg));
}else{
	//header('Location:'.SITE_DIR.'?url='.urlencode($time.'x'.$userip.$suffix));
    //echo 'Your file URL: '.SITE_DIR.$newpath;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=SITE_NAME?> - <?=SITE_ADV?></title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
<!--
.STYLE2 {color: #9900FF}
.STYLE3 {color: #FF0000; font-size: large; }
.STYLE4 {font-size: small}
.STYLE5 {color: #FF0000; font-size: medium; }
-->
</style>
</head>
<body>
<div id="page">
	<div id="page-bg">
	  <div id="latest-post">
<?php
if($uploadtype === false){
?>
<p>
<strong>Error</strong><br />
<font color="#FF0000"><?=$errormsg?></font><br />
<a href="<?=SITE_DIR?>">&laquo; Return</a>
</p>
<?php
}else{
?>
<form enctype="multipart/form-data" action="upload.php" method="post">
			    <input type="hidden" name="MAX_FILE_SIZE" value="<?=MAX_SIZE?>" />
				<input type="file" name="uploadimg" />
				<input type="submit" value="Continue<?=$message['submit']?>" />
</form>
<p>







 　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　<a href="#top" class="STYLE2"></a>　　　　　　　　　　　　　　　　　　　　　　　　　　　　　
  </p>
  <p class="STYLE3 STYLE4">Mouse click box address, the text color on the copy that has been  
  <p class="STYLE5">点击坑内地址变色表示已经复制（只支持ie兼容
  模式）
  <p>
 
      <script> 
function oCopy(obj){ 
obj.select(); 
js=obj.createTextRange(); 
js.execCommand("Copy") 
} 
</script> 
图片地址：<input onclick="oCopy(this)" value=<?=SITE_DIR.$newpath?> size="80">
<p>

<script> 
function oCopy(obj){ 
obj.select(); 
js=obj.createTextRange(); 
js.execCommand("Copy") 
} 
</script> 
论坛个性签名代码<input onclick="oCopy(this)" value=[img]<?=SITE_DIR.$newpath?>[/img] size="80">
<p>
    
<script> 
function oCopy(obj){ 
obj.select(); 
js=obj.createTextRange(); 
js.execCommand("Copy") 
} 
</script> 
HTML代码<input onclick="oCopy(this)" value="<img src=<?=SITE_DIR.$newpath?> />" size="80">
<p>　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　      <br />
      <br />
      <style>
.highlighttext{
background-color:yellow;
font-weight:bold;
}
        </style>
      
      </head>
    <p><script type="text/javascript">

function OutDemo(img)
{
if (navigator.appVersion.indexOf("MSIE") == -1) return;
var demo = document.getElementById('DemoImg');
demo.style.display = 'none';
}

function OverDemo(img)
{
if (navigator.appVersion.indexOf("MSIE") == -1) return;
if (img.alt == '') return;

var demo = document.getElementById('DemoImg');
demo.style.display = '';
var ex, ey;
var jmg = demo.childNodes[0];
jmg.src = img.src;

ex = document.body.scrollLeft + window.event.clientX;
ey = document.body.scrollTop + window.event.clientY - jmg.height - 20;
demo.style.left = String(ex) + 'px';
demo.style.top = String(ey) + 'px';
}
function CopyImage(img)
{
if (img.tagName != 'IMG') return;
if (typeof img.contentEditable == 'undefined') return;
if (!document.body.createControlRange) return;
var ctrl = document.body.createControlRange();
img.contentEditable = true;
ctrl.addElement(img);
ctrl.execCommand('Copy');
img.contentEditable = false;
alert('复制完成，到QQ对话框里按Ctrl+V就可以啦！');
}
function SaveImage(img)
{
var win = document.getElementById('saveform').contentWindow;
if (img.tagName != 'IMG') return;
win.location.href = img.src;
setTimeout(function() { win.document.execCommand("SaveAs"); }, 100);
}

function SetStyle(id)
{
var es = document.form2.elements;
var en = document.form2.elements.length;
var ev = id;
for (var i = 0; i < en; i++)
{
if (es[i].type != 'radio') continue;
if (es[i].value == ev)
{
es[i].checked = true;
break;
}
}
document.form2.zi.focus();
}


</script>

<input type="submit" name="Submit" value="Copy Image 复制图像" width="80" height="25"onclick="CopyImage(document.getElementById('show'))" />
<img  id="show"  src="<?=SITE_DIR.$newpath?>" border="0" onload="if(this.width>700) {this.alt=this.title; this.width=700;}">


<br>





<br>


  
  
  <br>
<form enctype="multipart/form-data" action="upload.php" method="post">
			    <input type="hidden" name="MAX_FILE_SIZE" value="<?=MAX_SIZE?>" />
				<input type="file" name="uploadimg" />
				<input type="submit" value="Continue<?=$message['submit']?>" />
</form>
<?php
}
?>Share：<!-- JiaThis Button BEGIN -->
<div id="jiathis_style_32x32">
	<a class="jiathis_button_fb"></a>
	<a class="jiathis_button_twitter"></a>
	<a class="jiathis_button_hi"></a>
	<a class="jiathis_button_tsina"></a>
	<a class="jiathis_button_qzone"></a>
	<a class="jiathis_button_tqq"></a>
	<a class="jiathis_button_google"></a>
	<a class="jiathis_button_msn"></a>
	<a class="jiathis_button_t163"></a>
	<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank">更多</a>
	<a class="jiathis_counter_style"></a>
</div>
<script type="text/javascript" src="http://v2.jiathis.com/code/jia.js" charset="utf-8"></script>
<!-- JiaThis Button END -->
</p>
    </div>



		<div style="clear: both;">&nbsp;</div>

	</div>
</div>


<div id="footer">
	<p>Copyright 2006-2010 Image upload, free upload image, picture upload site, free of charge stored permanently All Rights Reserved.</p>
</div>
</body>
</html>