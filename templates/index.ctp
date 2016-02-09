<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Cache-Control" content="no-cache">
		<title><?=$site_name?></title>
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
        <script type="text/javascript" src="/js/jquery.js"></script>
        <script type="text/javascript" src="/js/my.js"></script>
    </head>
    <body onload="getPage(0)">
	<div id="container">
        <div class="header">
             <h1><?=$site_name?></h1>
             <br>
        </div>
        <div>
        <form class="form" id="myForm">
			Добавить задачу:<br/><input id="task" name="task" placeholder="Ввведите задачу"/>
			<input id="btn" type="submit" style="width: 20px !important;" value=">">
        </form>
        </div>
        <br>
        <div id="messages">
        </div>
        <div class="footer">
            © 2016 Виктор.
        </div>
	</div>
    </body>
</html>