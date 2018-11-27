<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Teşekkürler</title>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src="img/jquery.png" alt="Jquery Eğitimi" width="220" height="60" /> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse  justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Anasayfa <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">Proje hakkında</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="thanks.php">Teşekkür</a>
      </li>
    </ul>
  </div>
</nav>
	</header>
<div class="container mt-5">
<div class="row justify-content-center">
	<div class="col col-md-10">
		<div class="card text-center">
	  <div class="card-header  text-center">
			<h3 class="p-3 mb-2 bg-primary text-white">Teşekkürler</h3>
	    </div>
	  <div class="card-body font-weight-bold">
			<h4 class="card-text">Bizlere Jquery ve Ajax programlamayı öğreten hocamız,</h4>
			<h4>  sayın <span class="font-italic">Fatma Betül Akdemir</span> hanımefendiye teşekkür ederiz...</h4>
			   	  </div>
	</div>
	</div>
</div>
</div>

  <script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/githubapi.js"></script>
	<script>
	var url = window.location;
	$('ul.navbar-nav a').filter(function() {
	    return this.href == url;
	}).parent().addClass('active');
	</script>
</body>
</html>
