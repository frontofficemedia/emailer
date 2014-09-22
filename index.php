<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>Emailer</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Emailer</a>
        </div>
      </div>
    </div>

    <div class="container">
      <h1 id="overview" class="page-header">Mass Email Form</h1>
      <form id="emailer_form" role="form" method="post" action="process.php" enctype="multipart/form-data">
      <div class="form-group">
        <label for="csv">Upload CSV</label>
        <input type="file" name="csv" value="" placeholder="Please Select a CSV" required>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" rows="4" id="message" name="message" placeholder="Please Type a Message Here..."></textarea>
      </div>
      <button type="submit" name="submit" value="Send" class="btn btn-default">
         <span class="glyphicon glyphicon-envelope"></span> Send Email
      </button>
    </form>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  

  </body>
</html>