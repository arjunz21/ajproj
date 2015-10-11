<!DOCTYPE html>
<html data-ng-app="userApp">
	<head>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>My page with Bootstrap</title>
		<link rel="icon" type="image/png" href="minions.jpg"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-cerulean.css">
		<style type="text/css">
			.box {
			    width: 320px;
			    padding: 10px;
			    border: 5px solid gray;
			    margin: 0;
			}
		</style>

		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/angular-min.js"></script>
		<script type="text/javascript" src="js/angular-route.js"></script>
		<script type="text/javascript" src="js/userapp.js"></script>
	</head>


	<body data-ng-controller="listController">
		<div class="container">
			<header>			
				<nav class="navbar navbar-inverse">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>

				      <a class="navbar-brand" href="#">
				        <img alt="Brand" src="minions.jpg" style="width:40px;height:35px;">
				      </a>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				        <li class="active"><a href="http://localhost/ajapp">Home <span class="sr-only">(current)</span></a></li>
				        <li><a href="#">About</a></li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"a ria-expanded="false">More... <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Blog</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="#">Contact</a></li>
				            <li><a href="#">Feedback</a></li>
				          </ul>
				        </li>
				      </ul>

				      <ul class="nav navbar-nav navbar-right">
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				          <span class="glyphicon glyphicon-log-in"></span>Login 
				          <span class="caret"></span></a>
				          <ul class="dropdown-menu" style="color:blue; width: 300px;">
				            <form class="navbar-form navbar-left" role="search">
						        <div class="form-group">
						        	<label>Userlogin</label>
						        	<div class="input-group">
							        	<div class="input-group-addon">@</div>
							        	<input type="text" class="form-control input-lg" placeholder="Username">
						        	</div>
						        	<div class="input-group">
							        	<span class="input-group-addon glyphicon glyphicon-eye-open" aria-hidden="true"></span>
							        	<input type="text" class="form-control" placeholder="Password">
							        </div>
						        </div>

						        <div class="checkbox">
								    <label>
								      <input type="checkbox"> Remember me
								    </label>
								</div>
							    <button type="submit" class="btn btn-primary active">Login</button>
						        
						    </form>
				          </ul>
				        </li>

				        <li>
				        	<form class="navbar-form navbar-left" role="search">
					        <div class="form-group">
					          <input type="text" class="form-control" placeholder="Search in this Site">
					        </div>
					        <button class="btn btn-default" type="submit" /><i class="glyphicon glyphicon-search"></i>
				      		</form>
				        </li>
				      </ul>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
			</header>

			<!-- Main Page Starts -->
			<div class="row">
			  <div class="col-xs-12 col-sm-6 col-md-8">
			  	<h3>Welcome to Registration page</h3>

			  	<div data-ng-view></div>

			  </div>

			  <!-- Right Side Bar -->
			  <div class="col-xs-6 col-md-4">
			  	<aside class="right_side">
					<div>
						<h3>Social links</h3>
						<ul class="list-group">
							<ol class="list-group-item"><a href="https://facebook.com">Facebook</a></ol>
							<ol class="list-group-item"><a href="https://twitter.com">Twitter</a></ol>
							<ol class="list-group-item"><a href="table.html">Table here</a></ol>
							<ol class="list-group-item"><a href="forms.html">Forms here</a></ol>
							<ol class="list-group-item"><a href="blog.html">MyBlog</a></ol>
						</ul>
					</div>
					<div>
						<h3>Related Articles</h3>
						<article>
							<header>
								<h4>This can be another story</h4>
							</header>
							<p>Get intreseted to click below</p>

							<address>
								  <strong>Twitter, Inc.</strong><br>
								  795 Folsom Ave, Suite 600<br>
								  San Francisco, CA 94107<br>
								  <abbr title="Phone">P:</abbr> (123) 456-7890
							</address>

							<address>
								  <strong>Full Name</strong><br>
								  <a href="mailto:#">first.last@example.com</a>
							</address>

							<footer>
								<a href="">See More</a>
							</footer>
						</article>
					</div>
				</aside>
			  </div>
			</div><!-- Right side bar end -->

			<!-- Second row of grid -->
			<div class="row">
				<div class="table-responsive col-xs-4 col-sm-4 col-md-4">
				<h2>another</h2>
				</div>

				<div class="col-xs-6 col-md-4">
				<h2>another block2</h2>
				</div>			
			</div>

			<br/><br/>
			<footer class="footer">
		      <div class="container">
		        <p class="text-muted">&copy Copyright by Arjun G</p>
		      </div>
		    </footer>
		</div>
	</body>
</html>