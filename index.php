<!-- Developped By Benjamin Gagné -->
<!-- 2016/05/06 -->
<!-- page d'accueil -->
<?php 
  session_start(); 
  // prendre tous les users
  require_once('include/dbpackages.php');
  $page_user = get_user();
  global $page_user;
  $firstname1 = $page_user[0][1];

  $page_book = get_book();
  global $page_book;
  define('PSESS_USERNAME', 'username');
  $login_message = ''; // Message à afficher en cas de bonne ou de mauvaise connexion
  $user_is_loggedIn = false; // Indique que l'utilisateur est connecté ou ne l'est pas
  $username = null; // Valeur du username
  $password = null; // Valeur du password

// Ne plus le mettre ailleurs si le script courant est sur toutes les pages
   // L'utilisateur est-il en train de se connecter ?
  if (array_key_exists('connect', $_POST)
      && array_key_exists('username', $_POST)
      && array_key_exists('password', $_POST)) {
      // L'utilisateur cherche à se connecter ....
      $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
      $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
      require_once('include/_authenticate.php'); // Appel du script qui gère l'authentification
      if (authenticate($username, $password)) {
          // L'utilisateur est authentifié
          $_SESSION[PSESS_USERNAME] = $username;
          $user_is_loggedIn = true;
          $login_message = "Bonjour $username";
      } else {
          $login_message = 'L\'identificateur et le mot de passe fournis ne concordent pas.';
      }
  } elseif (array_key_exists('disconnect', $_POST)) {
      // L'utilisateur cherche à se déconnecter ....
      unset($_SESSION[PSESS_USERNAME]); // Supprimer la variable 'username' de la session
      $user_is_loggedIn = false;
  } else { // Cas du GET
      $user_is_loggedIn = array_key_exists(PSESS_USERNAME, $_SESSION);
      if ($user_is_loggedIn) {
          $username = $_SESSION[PSESS_USERNAME];
          $login_message = "Bonjour $username";
      }
}
 ?>
<!DOCTYPE html>
<html>
<?php 
  require_once('include/head_html.php');
 ?>
<body>
  <?php 
    require_once('include/views/top-page/menu.php');
    require_once('include/views/aside.php');
	require_once('data/data.php') ?>
  <!-- section 1 -->
  <section id="category1" class="objet roman Aventures">
    <div class="section_header">
      <h2><?= $firstname1 ?></h2>
    </div>
    <div class="section_content">
    	<ul>
      <?php for ($i = 0; $i < 4 ;$i++) { ?>
              <li>
                    <p class="nom"><?= $page_book[$i][1]; ?></p>
                    <img src="<?= $page_book[$i][6]; ?>" alt=""/>
                    <p class="prix"><?= $page_book[$i][5]; ?></p>
              </li>
          <?php } ?>
	    </ul>
    </div>
    <?php 
      require('include/views/bottom-page/footer.php');
     ?>  
  </section>


  <!-- section 2 -->
  <section id="category2" class="objet roman Science-fiction">
    <div class="section_header">
      <h2>Roman de Science-Fiction</h2>
    </div>
    <div class="section_content">
    	<ul>
	     <?php for ($i = 4; $i < 8 ;$i++) { ?>
              <li>
                    <p class="nom"><?= $page_book[$i][1]; ?></p>
                    <img src="<?= $page_book[$i][6]; ?>" alt=""/>
                    <p class="prix"><?= $page_book[$i][5]; ?></p>
              </li>
          <?php } ?>
	    </ul>
    </div>
    <?php 
      require('include/views/bottom-page/footer.php');
     ?>
  </section>


  <!-- section 3 -->
  <section id="category3" class="objet roman Biographie">
    <div class="section_header">
      <h2>Biographie</h2>
    </div>
	<div class="section_content">
    	<ul>
	     <?php for ($i = 8; $i < 12 ;$i++) { ?>
              <li>
                    <p class="nom"><?= $page_book[$i][1]; ?></p>
                    <img src="<?= $page_book[$i][6]; ?>" alt=""/>
                    <p class="prix"><?= $page_book[$i][5]; ?></p>
              </li>
          <?php } ?>
	    </ul>
    </div>
    <?php 
      require('include/views/bottom-page/footer.php');
     ?>
  </section>


  <!-- section 4 -->
  <section id="category4" class="objet roman Policier">
    <div class="section_header">
      <h2>Roman Policier</h2>
    </div>
    <div class="section_content">
    	<ul>
	     <?php for ($i = 12; $i < 16 ;$i++) { ?>
              <li>
                    <p class="nom"><?= $page_book[$i][1]; ?></p>
                    <img src="<?= $page_book[$i][6]; ?>" alt=""/>
                    <p class="prix"><?= $page_book[$i][5]; ?></p>
              </li>
          <?php } ?>
	    </ul>
    </div>
    <?php 
      require('include/views/bottom-page/footer.php');
     ?>
  </section>


  <!-- section 5 -->
  <section id="category5" class="objet roman Fantastique">
    <div class="section_header">
      <h2>Roman de Fantastique</h2>
    </div>  
	<div class="section_content">
    	<ul>
	     <?php for ($i =16; $i < 20 ;$i++) { ?>
              <li>
                    <p class="nom"><?= $page_book[$i][1]; ?></p>
                    <img src="<?= $page_book[$i][6]; ?>" alt=""/>
                    <p class="prix"><?= $page_book[$i][5]; ?></p>
              </li>
          <?php } ?>
	    </ul>
    </div>
    <?php 
      require('include/views/bottom-page/footer.php');
     ?>
  </section>

</body>
</html>