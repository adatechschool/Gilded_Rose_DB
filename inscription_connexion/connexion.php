<link rel="stylesheet" href="style.css" />
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet"> 

<form action="action_page.php" method="post">
  <div class="container">
    <h1>Connexion</h1>
    <p>Veuillez remplir ces informations pour vous connecter</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="mettre son adresse mail" name="email" required>

    <label for="psw"><b>Mot de Passe</b></label>
    <input type="password" placeholder="mettre son mot de passe" name="psw" required>

    <hr>
    <button type="submit" class="registerbtn">Se connecter</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container signin">
    <p>Vous avez oublié votre mot de passe ? <a href="#">Clique Ici</a>.</p>
  </div>
</form> 