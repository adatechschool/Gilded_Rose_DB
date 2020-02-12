<link rel="stylesheet" href="style.css" />
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet"> 

<form action="action_page.php">

  <div class="container">
    
    <h1>Mon profil</h1>
    <p>Modifiez vos informations ici</p>
    <hr>
    <label for="fname"><b>Prénom</b></label>
    <input type="text" placeholder="Jean-Michelle" name="fname" required>

    <label for="lname"><b>Nom</b></label>
    <input type="text" placeholder="Dupont" name="lname" required>

    <label for="psw"><b>Mot de Passe</b></label>
    <input type="password" placeholder="mettre son mot de passe" name="psw" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" required>

    <label for="psw-repeat"><b>Confirmez le Mot de Passe</b></label>
    <input type="password" placeholder="confirmez le mot de passe" name="psw-repeat" required>

    <hr>
    <button type="submit" class="registerbtn">Mettre à jour son profil</button>
    <br>
    <button type="submit" class="deletebtn">Supprimer son compte</button>

  </div>
</form> 