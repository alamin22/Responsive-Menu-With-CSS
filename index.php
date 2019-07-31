<html>
<head>
<title>Responsive Layout</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

	<script type="text/javascript">
		
			$(document).on('click','#menu',function(){
				$('#menuAttr,#menuAttr').toggle();
			});

	</script>
</head>
<body>
<div class="menubar">
  <ul>
  	<li id="menu"><a>MENU <span><i class="fa fa-angle-down"></i></span></a></li>
  	<li id="menuAttr"><a href="#">Home</a></li>
    <li id="menuAttr"><a href="#">My Travels</a></li>
    <li id="menuAttr"><a href="#">Location Day</a></li>
    <li id="menuAttr"><a href="#">About My</a></li>
    <li id="menuAttr"><a href="#">Get in Touch</a></li>
  
 </ul>
</div>
</body>
</html>

