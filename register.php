<!-- Auteur : Antoine Couprie -->

<!-- START -->

<html>

	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="author" content="Antoine COUPRIE" />
		<meta name="copyleft" content="Antoine COUPRIE - 2018" />
		<meta name="description" content="Site de partage de liste de souhait de Noël" />
		<meta name="keywords" content="noël christmas liste souhait wish list" />
		<meta name="viewport"	 content="width=device-width, user-scalable=no"/>
		<meta charset="utf-8" />

		<link rel="stylesheet" href="scripts/style.css">

		<script type="text/javascript" src="scripts/register.js"></script>

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<title>My Christmas Wishlist</title>

	</head>

	<body>
		<header>

			<nav>
				<ul id="onglets">
					<li><a href="index.php" class="current">Accueil</a></li>
				</ul>
			</nav>

		</header>

		<section class="mainSection">

			<h1><span class=tabulation></span>Enregistrement</h1>
            <form action="register.php" method="post" id="register" onsubmit="return validateForm()">
				<label>Email :</label>
				<input type="text" name="mail" autofocus required /><br />
				<label>Pseudonyme :</label>
				<input type="text" name="pseudo" required /><br />
				<label>Mot de passe :</label>
				<input type="password" name="password" required /><br />
				<label>Confirmation du mot de passe :</label>
				<input type="password" name="conf_password" required /><br />
				<br />
                <input type="submit" value="Enregistrement" />
            </form>

		</section>

	</body>

</html>

<!-- THIS IS THE END -->