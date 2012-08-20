<html>
	<head>
		<title>Opp Cell | Redirecting..</title>
		<link rel="Shortcut Icon" href=<?php echo "\"".URL::base()."/img/favicon.ico\""; ?> >
		<script type="text/javascript" src=<?php echo "\"".URL::base()."/js/jquery-1.7.2.js\""; ?>> </script>
	</head>
	
	<body>
		Redirecting..
		<script type="text/javascript"> 
			var form = $('<form action="' + {{ "'".URL::to('oppcell')."'" }} + '" method="get">' + 
			  '<input type="hidden" name="notBlank" value="Blank" />' +
			  '</form>');
			$('body').append(form);
			$(form).submit();
		</script>
	</body>
</html>