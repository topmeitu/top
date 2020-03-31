<?php
require('config.php');
require('include.php');
v();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>图片上传-小明免费图床</title>
<meta name="Keywords" content="图片上传,上传图片,图片上传网站,免费图床" />
<meta name="Description" content="png.hstn.me是免费提供图片上传的网站，我们一直致力于为用户提供稳定的图片外链服务！" />
<link href="default.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
<!--
.STYLE1 {color: #FF0000}
-->
</style>
</head>
<body>
 <a href="/" target="_blank" class="STYLE1">免费上传图片</a> 
<div id="logo">
	<h1><a href="/"><?=SITE_NAME?></a></h1>
	<p><?=SITE_ADV?></p>
</div>
<div id="menu">
	<ul>
		<li class="current_page_item"><a href="/"><?=$message['message']?></a></li>
		
            <li><a  href="/" target="_blank" class="STYLE1">批量上传</a>
</li>		
	</ul>
</div>



<div id="page">
	<div id="page-bg">
		<div id="latest-post">
            
		    <a name="upload"></a>
			<h1><?=$message['message']?></h1>
			<p><?=$message['info']?></p>
			<p>
			<form enctype="multipart/form-data" action="upload.php" method="post">
			    <input type="hidden" name="MAX_FILE_SIZE" value="<?=MAX_SIZE?>" />
				<input type="file" name="uploadimg" />
				<input type="submit" value="<?=$message['submit']?>" />
			</form>
			</p>			
		</div>



		<div id="content">
			<div class="post">
				<div class="entry">
				    <a name="histroy"></a><!--<?=$_COOKIE['uploaded']?>-->
					<h2><img src="2015022713135822.png" /></h2>
					</div>
			</div>
			<div class="post">
			    <a name="terms"></a>
				<h2 class="title"><?=$message['terms']?></h2>
				<div class="entry">
					<p>
                    <?=$message['terms_list']?>
					</p>
				</div>
			</div>
		</div>


		<div style="clear: both;">&nbsp;</div>

	</div>
</div>


<div id="footer">
	<p>使用程序过程中，有什么问题可以给我发邮件pqbq@vip.qq.com我尽力解答！&copy;2007-2019 All Rights Reserved.  </p>
</div>
<a href="http://www.topa8.com/" target="_blank" class="STYLE1" class="STYLE1">爱top图吧</a>
<a href="http://www.kangfen.net/" target="_blank" class="STYLE1">网赚实验室</a>
<a href="http://www.nmu3.cn/" target="_blank" class="STYLE1">手赚测评网</a>
<a href="http://www.2b6b.cn/" target="_blank" class="STYLE1">老榕树赚钱联盟</a>
<a href="http://www.qkshu.cn/" target="_blank" class="STYLE1">网赚渠道资源网</a>
<a href="http://www.lzcy8.cn/" target="_blank" class="STYLE1">辣椒学习网</a>
<a href="http://www.junzic.cn/" target="_blank" class="STYLE1">君君学习网</a>
<a href="http://www.yeyux.cn/" target="_blank" class="STYLE1">业余学习网</a>
<a href="http://www.jub8.cn/" target="_blank" class="STYLE1">俱创学习网</a>
<a href="http://www.qiaozz.cn/" target="_blank" class="STYLE1">巧妙妙学习网</a>
<a href="http://www.ccy8.cn/" target="_blank" class="STYLE1">创优学习网</a>
<a href="http://www.0gz.com.cn/" target="_blank" class="STYLE1">君子爱财网</a>
<a href="http://www.cxw8.cn/" target="_blank" class="STYLE1">麒麟手机赚钱联盟</a>
<a href="http://umstn.cn/" target="_blank" class="STYLE1">网赚站长圈</a>
<a href="http://www.bo2.com.cn/" target="_blank" class="STYLE1">网赚VIP资源网</a>
<a href="http://www.9ix.com.cn/" target="_blank" class="STYLE1">xxx赚钱网</a>
</body>
</html>
