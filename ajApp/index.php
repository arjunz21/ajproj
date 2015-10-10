<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>My page with Bootstrap</title>
		<link rel="icon" type="image/png" href="minions.jpg"/>
		<link rel="stylesheet" type="text/css" href="bootstrapmain.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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

		<!-- MYAjaXScript -->
		<script type="text/javascript">
			$(document).ready(function(){
			    $("#links ol a").click(function(){
		    		$("#loadajax").load(this.href);
		    		return false;
			    });
			});
		   	//$("#loadajax").load(this.href);
		    // $.ajax({url:turl,success:function(result){
		    //  		$("#loadajax").html(result);
		    // }})
		</script>
	</head>


	<body>
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
				        <li class="active"><a href="http://localhost/mytoto/bootstrap/bootindex.html">Home <span class="sr-only">(current)</span></a></li>
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
			  <div id="loadajax" class="col-xs-12 col-sm-6 col-md-8">
			  	<h1>Welcome to My Minions Page</h1>
			  	<button data-toggle="collapse" class="btn btn-info" data-target="#demo">Collapsible</button>

				<div id="demo" class="collapse">
					Lorem ipsum dolor text....
				</div>

				<p>This is para. . .</p>

				<div class="container box">
				    <a href="#" title="Dismissible popover" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">Check my page</a><br/>

				    A div tag <span>span here</span> ends here.<br/>

					<a href="https://www.youtube.com/watch?v=QsW0cjsBf6o&index=44&list=PL41lfR-6DnOruqMacTfff1zrEcqtmm7Fv">Html Tutorial Cont ...</a>
				</div>

				<script>
				$(document).ready(function(){
				    $('[data-toggle="popover"]').popover();   
				});
				</script>
				
				<section class="left_side">
					<article>
						<header>
							<div class="container">
							  <h3>Tabs</h3>
							  <ul class="nav nav-tabs">
							    <li class="active"><a href="#">Home</a></li>
							    <li><a href="#">Menu 1</a></li>
							    <li><a href="#">Menu 2</a></li>
							    <li><a href="#">Menu 3</a></li>
							  </ul>
							</div>

							<h2>This is an article header!</h2>
							<h3>Sub Header</h3>
						</header>
					<p>Marking here: <mark>Marked text here</mark></p>
					<p><del>Deleted text Here...</del></p>
					<p><s>Strike Line Here</s></p>
					<p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
					<p><u>This line of text will render as underlined</u></p>
					<p><em>rendered as italicized text</em></p>
					
					<footer>- written by Arjun G</footer>
					</article>
				</section>
			  </div>

			  <div class="col-xs-6 col-md-4">
			  	<aside class="right_side">
					<div>
						<h2>Social links</h2>
						<ul class="list-group">
							<ol class="list-group-item"><a href="https://facebook.com">Facebook</a></ol>
							<ol class="list-group-item"><a href="https://twitter.com">Twitter</a></ol>
							<ol class="list-group-item"><a href="table.html">Table here</a></ol>
							<ol class="list-group-item"><a href="forms.html">Forms here</a></ol>
							<ol class="list-group-item"><a href="blog.html">MyBlog</a></ol>
						</ul>
					</div>
					<div>
						<h2>Related Articles</h2>
						<article>
							<header>
								<h3>This can be another story</h3>
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
			</div>

			<!-- Second row of grid -->
			<div class="row">
				<div class="table-responsive col-xs-4 col-sm-4 col-md-4">
					<ul class="pagination">
					  <li><a href="#">1</a></li>
					  <li class="active"><a href="#">2</a></li>
					  <li><a href="#">3</a></li>
					</ul>

					<ul class="pager">
					   <li><a href="#">Previous</a></li>
					   <li><a href="#">Next</a></li>
					</ul>

					<div class="panel panel-primary">
				      <div class="panel-heading">Panel with panel-primary class</div>
				      <div class="panel-body">Panel Content</div>
				    </div>
				</div>

				<div class="col-xs-6 col-md-4">
					<div class="well well-lg">Large Well</div>
					<div class="alert alert-success">
					  <strong>Success!</strong> Indicates a successful or positive action.
					</div>
					<a href="#">Comments <span class="badge">10</span></a><br>
					<a href="#">Updates <span class="badge">2</span></a>
					<button type="button" class="btn btn-primary">Primary <span class="badge">7</span></button>
					
					<div class="progress">
					  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50"
					  aria-valuemin="0" aria-valuemax="100" style="width:50%">
					    50% Complete (info)
					</div>
					
					<div class="progress">
					  <div class="progress-bar progress-bar-striped active" role="progressbar"
					  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
					    40%
					  </div>
					</div>

					</div>
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