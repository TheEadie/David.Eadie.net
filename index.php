<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>David Eadie</title>
    
	<!-- Bootstrap -->
    <link href="css/site.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
   <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">David Eadie</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Portfolio</a></li>
            <li><a href="http://www.github.com/TheEadie">GitHub</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right social">
          	<li><a href="https://www.linkedin.com/in/david-eadie-0789a637"><i class="fa fa-lg fa-linkedin"></i></a></li>
            <li><a href="https://www.facebook.com/David.Eadie"><i class="fa fa-lg fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/The_Eadie"><i class="fa fa-lg fa-twitter"></i></a></li>
            <li><a href="https://www.pinterest.com/TheEadie/"><i class="fa fa-lg fa-pinterest-p"></i></a></li>
            <li><a href="https://www.instagram.com/the.eadie/"><i class="fa fa-lg fa-instagram"></i></a></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container" style="margin-top: 70px;">
	
	<div class="row">
	<div class="col-md-3">
		<section class="well">
			<img src="images/me3.jpg" style="width: 100%;" />
		</section>
		<section class="well">
			<h4 class="media-heading">About</h4>
			<p>Professional software developer currently working primarily in C#, ASP.Net and SQL. </p>
			<p>This page showcases a number of personal projects I have worked on over the years.</p>
		</section>
	</div>
	
	<div class="col-md-9">
		<section class="well">
			<figure class="media-left">
				<img src="images/playerrank.png" class="media-object" style="width: 100px; height: 100px;" />
			</figure>	
			<article class="media-body">
				<h4 class="media-heading">Player Rank</h4>
				<p>
				A C# library to track Elo rankings of players in multiplayer games.
				</p>
				<div class="pull-right">
					<a class="btn btn-primary" href="http://www.nuget.org/packages/PlayerRank" role="button" >Download</a>
					<a class="btn btn-default" href="http://github.com/TheEadie/PlayerRank" role="button" >Source Code</a>
				</div>
			</article>
		</section>
		<section class="well">
			<figure class="media-left">
				<img src="images/lazystorage.png" class="media-object" style="width: 100px; height: 100px;" />
			</figure>	
			<article class="media-body">
				<h4 class="media-heading">Lazy Storage</h4>
				<p>
				A simple C# library to automate writing a storage layer when producing quick prototypes. Can also be used to mock out storage in unit tests.
				</p>
				<div class="pull-right">
					<a class="btn btn-primary" href="http://www.nuget.org/packages/LazyStorage" role="button" >Download</a>
					<a class="btn btn-default" href="http://github.com/TheEadie/LazyStorage" role="button" >Source Code</a>
				</div>
			</article>
		</section>
		<section class="well">
			<figure class="media-left">
				<img src="images/stratus.png" class="media-object" style="width: 100px; height: 100px;" />
			</figure>	
			<article class="media-body">
				<h4 class="media-heading">Stratus</h4>
				<p>
				A light-weight home cloud solution. A simple windows app that can be used to keep two directories synced on your local network. Built on top of Microsoft sync framework.
				</p>
				<div class="pull-right">
					<a class="btn btn-primary" href="#" role="button" disabled>Download</a>
					<a class="btn btn-default" href="https://github.com/TheEadie/Stratus" role="button" >Source Code</a>
				</div>
			</article>
		</section>
		<section class="well">
			<figure class="media-left">
				<img src="images/musicclassifier.png" class="media-object" style="width: 100px; height: 100px;" />
			</figure>  
			<article class="media-body">
				<h4 class="media-heading">Musical Genre Classifier</h4>
				<p>
				My final year dissertation. Automatically determine the genre of a piece of music by analysing its waveform.
				</p>
				<div class="pull-right">
					<a class="btn btn-primary" href="#" role="button" disabled>Download</a>
					<a class="btn btn-default" href="#" role="button" disabled>Source Code</a>
				</div>
			</article>
		</section>
		
		<section class="well">
			<figure class="media-left">
				<img src="images/fangames2.png" class="media-object" style="width: 100px; height: 100px;" />
			</figure>	
			<article class="media-body">
				<h4 class="media-heading">Fangames.co.uk</h4>
				<p>
				A website I built and maintained in my teenage years. The site was dedicated to making games celebrating the click and point adventures of the 90s.
				The site enjoyed a cult following and was once mentioned in PC Gamer magazine. Currently inactive but still available to view online.
				</p>
				<div class="pull-right">
					<a class="btn btn-primary" href="http://www.fangames.co.uk" role="button">Visit</a>
				</div>
			</article>
		</section>

	</div>
	
	</div>
	<footer>
		<div class="pull-right">
			Version <?php file_get_contents("version.txt") ?>
			<span class="glyphicon glyphicon-copyright-mark"></span> 2012 - <?php echo date("Y"); ?> David Eadie
		</div>
	<footer>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
