<form id="formulaire" name="loadtopo" action="" method="POST">
    <div>
        <label for="file">Sélectionner le fichier à envoyer</label>
        <input type="file" id="file" name="file" required>
    </div>
    <div>
        <button>Envoyer</button>
    </div> 
</form>

<table>
  <tr>
    <th>Nom du fichier</th>
    <th>Localisation du fichier</th>
    <th>Action</th>
  </tr>
  <?php foreach ($files as $key => $value){ 
      if($key != 0 && $key != 1){ ?>
  <tr>
    <td><?php echo $value; ?></td>
    <td><?php echo $dossier_gml.$value; ?></td>
    <td><a href="http://localhost/SiteFilRouge/index.php?page=liretopology&file=<?php echo $dossier_gml.$value;?>"><button>Utiliser</button></a></td>
  </tr>
  <?php }}?>
 
</table>

