<!-- Developped By Benjamin Gagné -->
<!-- 2016/05/06 -->
<!-- page d'accueil -->
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
      <h2>Roman d'Aventure</h2>
    </div>
    <div class="section_content">
    	<ul>
	     <?php foreach ($aventure_data as $id => $item) { ?>
	            <li>
                    <p><?= $item['nom'] ?>, <span class=".prix"><?= $item['prix'] ?></span></p>
                    <img src="<?= $item['photo'] ?>" alt=""/>
	            </li>
	        <?php } ?>
	    </ul>
    </div>  
  </section>


  <!-- section 2 -->
  <section id="category2" class="objet roman Science-fiction">
    <div class="section_header">
      <h2>Roman de Science-Fiction</h2>
    </div>
    <div class="section_content">
    	<ul>
	     <?php foreach ($sciencefiction_data as $id => $item) { ?>
	            <li>
                    <p><?= $item['nom'] ?>, <span class=".prix"><?= $item['prix'] ?></span></p>
                    <img src="<?= $item['photo'] ?>" alt=""/>
	            </li>
	        <?php } ?>
	    </ul>
    </div>
  </section>


  <!-- section 3 -->
  <section id="category3" class="objet roman Biographie">
    <div class="section_header">
      <h2>Biographie</h2>
    </div>
	<div class="section_content">
    	<ul>
	     <?php foreach ($biographie_data as $id => $item) { ?>
	            <li>
                    <p><?= $item['nom'] ?>, <span class=".prix"><?= $item['prix'] ?></span></p>
                    <img src="<?= $item['photo'] ?>" alt=""/>
	            </li>
	        <?php } ?>
	    </ul>
    </div>
  </section>


  <!-- section 4 -->
  <section id="category4" class="objet roman Policier">
    <div class="section_header">
      <h2>Roman Policier</h2>
    </div>
    <div class="section_content">
    	<ul>
	     <?php foreach ($policier_data as $id => $item) { ?>
	            <li>
                    <p><?= $item['nom'] ?>, <span class=".prix"><?= $item['prix'] ?></span></p>
                    <img src="<?= $item['photo'] ?>" alt=""/>
	            </li>
	        <?php } ?>
	    </ul>
    </div>
  </section>


  <!-- section 5 -->
  <section id="category5" class="objet roman Fantastique">
    <div class="section_header">
      <h2>Roman de Fantastique</h2>
    </div>  
	<div class="section_content">
    	<ul>
	     <?php foreach ($fantastique_data as $id => $item) { ?>
	            <li>
                    <p><?= $item['nom'] ?>, <span class=".prix"><?= $item['prix'] ?></span></p>
                    <img src="<?= $item['photo'] ?>" alt=""/>
	            </li>
	        <?php } ?>
	    </ul>
    </div>
  </section>

</body>
</html>