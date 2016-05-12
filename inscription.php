<?php
var_dump($_POST);

$nom = "";
$nom_valide = true;
if (array_key_exists('nom', $_POST)) {
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
    $nom_valide = (1 === preg_match('/\w{2,}/', $nom));
    if ( ! $nom_valide) {
        $nom_msg_validation = "**Le nom doit comporter au moins deux lettres";
    }
}
$prenom = "";
if (array_key_exists('prenom',$_POST) && !empty(trim($_POST['prenom']))) {
    $prenom = $_POST['prenom'];
}
$email = "";
if(array_key_exists('email',$_POST) && !empty(trim($_POST['email']))){
    $email = $_POST['email'];
}
$user = "";
if(array_key_exists('user',$_POST) && !empty(trim($_POST['user']))){
    $user = $_POST['user'];
}
$pass = "";
if(array_key_exists('pass',$_POST) && !empty(trim($_POST['pass']))){
    $pass = $_POST['pass'];
}
$repass = "";
if(array_key_exists('repass',$_POST) && !empty(trim($_POST['repass']))){
    $repass = $_POST['repass'];
}
$addresse = "";
if(array_key_exists('addresse',$_POST) && !empty(trim($_POST['addresse']))){
    $addresse = $_POST['addresse'];
}
$postal = "";
if(array_key_exists('postal',$_POST) && !empty(trim($_POST['postal']))){
    $postal = $_POST['postal'];
}
$ville = "";
if(array_key_exists('ville',$_POST) && !empty(trim($_POST['ville']))){
    $postal = $_POST['ville'];
}
$province = "";
if(array_key_exists("province",$_POST) && !empty(trim($_POST['province']))){
    $province = $_POST["province"];
}
?>


<div>
    <form method="post">
        <p><label for="user">Pseudo : </label>
            <input type="text" name="user" id="user" value="<?= $user ?>" />
        </p>
        <p><label for="pass">Mot de passe : </label>
            <input type="password" name="pass" id="pass" value="<?= $pass ?>" />
        </p>
        <p><label for="repass">Refaire Mot de passe : </label>
            <input type="password" name="repass" id="repass" value="<?= $repass ?>" />
        </p>
        <p>Information personelle :</p>
        <?php if ( ! $nom_valide) { echo "<span class='msg_validation'>$nom_msg_validation<span>"; } ?>
        <p><label for="nom">Nom : </label>
        <input type="text" name="nom" id="nom" value="<?= $nom ?>"/>
        </p>
        <p><label for="prenom">Prenom : </label>
        <input type="text" name="prenom" id="prenom" value="<?= $prenom ?>"/>
        </p>
        <p><label for="email">Addresse Courielle : </label>
        <input type="text" name="email" id="email" value="<?= $email ?>"/>
        </p>
        <p><label for="addresse">Addresse Civile: </label>
        <input type="text" name="addresse" id="addresse" value="<?= $addresse ?>" />
        </p>
        <select id="province" name="province">
            <option value="ab" <?= 'ab' == $province ? 'selected="selected"' : "" ?>>Alberta</option>
            <option value="cb"<?= 'cb' == $province ? 'selected="selected"' : "" ?>>Colombrie-Britannique</option>
            <option value="ipe"<?= 'ipe' == $province ? 'selected="selected"' : "" ?>>Île-du-Prince-Édouard</option>
            <option value="mb"<?= 'mb' == $province ? 'selected="selected"' : "" ?>>Manitoba</option>
            <option value="nb"<?= 'nb' == $province ? 'selected="selected"' : "" ?>>Nouveau-Brunswick</option>
            <option value="ne"<?= 'ne' == $province ? 'selected="selected"' : "" ?>>Nouvelle-Écosse</option>
            <option value="on"<?= 'on' == $province ? 'selected="selected"' : "" ?>>Ontario</option>
            <option value="qc"<?= 'qc' == $province ? 'selected="selected"' : "" ?>>Québec</option>
            <option value="sk"<?= 'sk' == $province ? 'selected="selected"' : "" ?>>Saskatchewan</option>
            <option value="nl"<?= 'nl' == $province ? 'selected="selected"' : "" ?>>Terre-Neuve-et-Labrador</option>
            <option value="nu"<?= 'nu' == $province ? 'selected="selected"' : "" ?>>Nunavut</option>
            <option value="nt"<?= 'nt' == $province ? 'selected="selected"' : "" ?>>Territoires du Nord-Ouest</option>
            <option value="yt"<?= 'yt' == $province ? 'selected="selected"' : "" ?>>Yukon</option>
        </select>
        <p><label for="postal">Code Postal : </label>
        <input type="text" name="postal" id="postal" value="<?= $postal ?>" />
        </p>
        <p><label for="ville">ville : </label>
        <input type="text" name="ville" id="ville" value="<?= $ville ?>" />
        </p>

        <input type="submit" name="soumettre" value="Soumettre"/>

    </form>
</div>
