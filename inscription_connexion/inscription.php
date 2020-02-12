<link rel="stylesheet" href="style.css" />
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet"> 

<form action="action_page.php">
  <div class="container">
    <h1>Inscription</h1>
    <p>Veuillez remplir ces informations pour vous inscrire</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="mettre son adresse mail" name="email" required>

    <label for="psw"><b>Mot de Passe</b></label>
    <input type="password" placeholder="mettre son mot de passe" name="psw" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" required>

    <label for="psw-repeat"><b>Confirmez le Mot de Passe</b></label>
    <input type="password" placeholder="confirmez le mot de passe" name="psw-repeat" required>
    <hr>
    <button type="submit" class="registerbtn">S'inscrire</button>
  </div>

  <div class="container signin">
    <p>Vous êtes déjà inscrit ? <a href="#">Connexion</a>.</p>
  </div>
</form> 