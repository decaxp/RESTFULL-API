<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Dolgov</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	   <script src="https://yastatic.net/jquery/3.1.1/jquery.min.js"></script>
  </head>

  <body>

    <div class="container">
      <div class="header">
     
        <span class="h3class  text-muted">Dolgov RESTFUL API</span>
      </div>

      <div class="jumbotron">
        <h2>Добавить инфу о  новом пользователе</h2>
		<form name="newuserform" id="newtaskform" action="newtask.php" method="POST" >
			<p class="lead">
				<label for="apikey">API KEY</label>
				<input type="text" class="wid100" id="apikey" name="apikey">
				<label for="apikey">Максимальное количество дней пользования API</label>
				<input type="text" class="wid100" id="daysmax" name="daysmax" placeholder="30">
				
			</p>
			<p><input id="newUser" type="button" name="button"  class="btn btn-primary " value="Добавить пользователя"></p>
		</form>
      </div>

     

    </div> <!-- /container -->


	<script>

	$("#newUser").click(function(){
		var apikey=$('#apikey').val();
		var daysmax=$('#daysmax').val();
				
		
        var data={'apikey':apikey,'daysmax':daysmax};
        var url = "parser.php"; // the script where you handle the form input.
        $.ajax({
            url: url,
            type: 'POST',
            data: data,            
            success: function(responseData, textStatus, jqXHR) {
				console.log(responseData);
                
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(errorThrown);
            },
            
        });
        return false;
    });
	
	function getUsers(){
		
		
		var apikey=$('#apikey').val();
		var daysmax=$('#daysmax').val();
				
		
        var data={'apikey':apikey,'daysmax':daysmax};
        var url = "parser.php"; // the script where you handle the form input.
        $.ajax({
            url: url,
            type: 'GET',
            data: data,            
            success: function(responseData, textStatus, jqXHR) {
				console.log(responseData);
                
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(errorThrown);
            },
            
        });
        return false;
    }
	
	
</script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>