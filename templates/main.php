<!DOCTYPE html>
<html>
<head>

<title>PHP-Proxy</title>

<meta name="generator" content="php-proxy.com">
<meta name="version" content="<?=$version;?>">

<style type="text/css">
html body {
	font-family: Arial,Helvetica,sans-serif;
	font-size: 12px;
}

#container {
	width:500px;
	margin:0 auto;
	margin-top:150px;
}

#error {
	color:red;
	font-weight:bold;
}

#frm {
	padding:10px 15px;
	background-color:#FFC8C8;
	
	border:1px solid #818181;
	
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
}

#footer {
	text-align:center;
	font-size:10px;
	margin-top:35px;
	clear:both;
}
</style>

</head>

<body>


<div id="container">

	<div style="text-align:center;">
		<h1 style="color:blue;">Sansür Savan Proxy Sunucusu</h1>
	</div>
	
	<?php if(isset($error_msg)){ ?>
	
	<div id="error">
		<p><?php echo $error_msg; ?></p>
	</div>
	
	<?php } ?>
	
	<div id="frm">
	
	<!-- I wouldn't touch this part -->
	
		<form action="index.php" method="post" style="margin-bottom:0;">
			<input name="url" type="text" style="width:400px;" autocomplete="off" placeholder="http://" />
			<input type="submit" value="Go" />
		</form>
		
		<script type="text/javascript">
			document.getElementsByName("url")[0].focus();
		</script>
		
	<!-- [END] -->

    <br/>
    SansürSavan, kolektif biçimde geliştirilen bir internet sitesi / tarayıcı eklentisidir. <br/>
    Proxy sitemiz ile, Türkiye'de sansürlenen internet sitelerine erişebilirsiniz. <br/>
    Daha iyi bir deneyim için tarayıcı eklentimiz ile kullanmanız tavsiye edilir. <br/>

    <strong>Detaylar:</strong> <a href="https://sansursavan.org">https://sansursavan.org</a><br>
    <strong>Tarayıcı(Chrome) Eklentisi: </strong> <a href="https://chrome.google.com/webstore/detail/sans%C3%BCrsavan/iadmdopibichlaibpedpolfemeapmhdn">https://chrome.google.com/webstore/detail/sans%C3%BCrsavan/iadmdopibichlaibpedpolfemeapmhdn</a><br>
    <strong>Sansürlü Siteler Listesi: </strong> <a href="https://github.com/kolektif/sansur-listesi/blob/master/liste.json">https://github.com/kolektif/sansur-listesi/blob/master/liste.json</a>
    <br>
    <br>
    Not: Bu proxy sunucusu, yalnızca sansürlenen ve sansürsavan listesine kayıt edilen internet sitelerinde çalışır.
    Eğer sansürlü bir siteye proxy sunucumuz üzerinden erişmek istiyorsanız bizimle bir şekilde iletişime geçebilirsiniz.

	</div>
	
</div>

<div id="footer">
	Powered by <a href="//www.php-proxy.com/" target="_blank">PHP-Proxy</a> <?php echo $version; ?>
</div>


</body>
</html>