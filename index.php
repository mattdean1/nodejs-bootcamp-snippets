<!DOCTYPE html>
<html>
<head>
	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
	<!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
	<title>Salesforce Lunch and Learn</title>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body style="background-color: whitesmoke">
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
	<script type="text/javascript">
		$( document ).ready(function() {
			$(".snippet-dropdown").dropdown();
			$(".object-dropdown").dropdown();
		});
	</script>

	<ul id ="object" class="dropdown-content">
		<li><a href="Object creation.docx">create objects doc</a></li>
	</ul>

	<ul id ="snippets" class="dropdown-content">
		<li><a href="#snippet1">snippet 1</a></li>
		<li><a href="#snippet2">snippet 2</a></li>
		<li><a href="#snippet3">snippet 3</a></li>
		<li><a href="#snippet4">snippet 4</a></li>
		<li><a href="#snippet5">snippet 5</a></li>
		<li><a href="#snippet6">snippet 6</a></li>
		<li><a href="#snippet7">snippet 7</a></li>
	</ul>

	<div class="navbar-fixed">
		<nav class="blue-grey darken-1">
			<div class="nav-wrapper">
				<a class="brand-logo center"><img src="img/LillyLogoWhite.png"/ height="70px"></a>
				&nbsp;&nbsp;Heroku Bootcamp
				<ul class="right">
					<li><a href="#welcome">Welcome</a></li>
					<li><a class="object-dropdown" href="#!" data-activates="object">Object &#9660;</a></li>
					<li><a class="snippet-dropdown" href="#!" data-activates="snippets">Snippets &#9660;</a></li>
				</ul>
			</div>
		</nav>
	</div>

	<div id="welcome" class="container" style="padding-top:40px">
		<div class="row">
			<div class="col s12 ">
				<div class="card blue-grey darken-1 z-depth-3">
					<div class="card-content white-text">
						<span class="card-title">Welcome...</span>
						<p>Here you will find code snippets for the bootcamp. If you get lost, use the navigation bar above to find the relevant snippet. If you get stuck, don't hesitate to ask a question.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="snippet1" class="container" style="padding-top:40px">
		<div class="row">
			<div class="col s12 ">
				<div class="card blue-grey darken-1 z-depth-3">
					<div class="card-content white-text">
						<span class="card-title">code snippet #1</span>
						<script src="https://gist.github.com/benewen96/b68a9b84b9b0afc660f30fac74df09d1.js"></script>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="snippet2" class="container" style="padding-top:40px">
	<div class="row">
		<div class="col s12 ">
			<div class="card blue-grey darken-1 z-depth-3">
				<div class="card-content white-text">
					<span class="card-title">code snippet #2</span>
					<script src="https://gist.github.com/benewen96/937a82e1f0007ae47c4e399dfcb0a721.js"></script>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="snippet3" class="container" style="padding-top:40px">
	<div class="row">
		<div class="col s12 ">
			<div class="card blue-grey darken-1 z-depth-3">
				<div class="card-content white-text">
					<span class="card-title">code snippet #3</span>
					<script src="https://gist.github.com/benewen96/9d89ef6c144eccbcbc9d849762733e50.js"></script>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="snippet4" class="container" style="padding-top:40px">
	<div class="row">
		<div class="col s12 ">
			<div class="card blue-grey darken-1 z-depth-3">
				<div class="card-content white-text">
					<span class="card-title">code snippet #4</span>
					<p>Before adding this code, add this static resource to salesforce.</p>
					<a href="BackLog_Resources.zip" class="waves-effect waves-light btn">Download</a>
					<div style="padding-top:15px">
						<script src="https://gist.github.com/benewen96/f2cc7c527bc33705f2ab050ddb0a654a.js"></script>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="snippet5" class="container" style="padding-top:40px">
	<div class="row">
		<div class="col s12 ">
			<div class="card blue-grey darken-1 z-depth-3">
				<div class="card-content white-text">
					<span class="card-title">code snippet #5</span>
					<script src="https://gist.github.com/benewen96/6cb0b3b45b38a9aa30b14f7b647cd8f4.js"></script>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="snippet6" class="container" style="padding-top:40px">
	<div class="row">
		<div class="col s12 ">
			<div class="card blue-grey darken-1 z-depth-3">
				<div class="card-content white-text">
					<span class="card-title">code snippet #6</span>
					<script src="https://gist.github.com/benewen96/27f66dad56b9bd7cb77321a808e44922.js"></script>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="snippet7" class="container" style="padding-top:40px">
	<div class="row">
		<div class="col s12 ">
			<div class="card blue-grey darken-1 z-depth-3">
				<div class="card-content white-text">
					<span class="card-title">code snippet #7</span>
					<script src="https://gist.github.com/benewen96/02875614c9c072aa5bb6b568ee9e5bb5.js"></script>
				</div>
			</div>
		</div>
	</div>
</div>


</body>



</html>
