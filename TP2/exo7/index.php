<link rel="stylesheet" href="styles.css">
<?php require('debut.php'); ?>

<section class="oui">
     <div class="container">
     <h1>Choisissez une date :</h1>
          <form action="redirection.php" method="get">
               <label for="Jour">Jour:</label>
               <select name='Jour'>
                 <?php
                 //On boucle les 31 jours
                 for ($i = 1; $i < 32; $i++)
                 {
                   echo '<option value=\'' . $i . '\'>' . $i . '</option>';
                 }
                 ?>
               </select>
               <label for="Mois">Mois:</label>
               <select name='Mois'>
                 <?php                 
                 //On boucle les mois
                 for ($i = 0; $i < 12; $i++) {
                    $MoisList = date('M', strtotime("+ $i months")); $newi = $i+1; echo "<option value=$newi>".$MoisList ."</option>";
                 } 
                 ?>
               </select>
               <label for="Année">Année:</label>
               <select name='Année'>
                 <?php
                 //On boucle sur les années
                 for ($i = 1980; $i < 2006; $i++)
                 {
                   echo '<option value=\'' . $i . '\'>' . $i . '</option>';
                 }
                 ?>
               </select>

          <h1 class="secund">Choisissez une activité :</h1>
            <div class="container-btn-all">
              <div class="container-btn">
                  <label for="Sports">Sports:</label>
                 <input type="radio" name="Activite" value="Sports" checked>
              </div>
              <div class="container-btn">  
                 <label for="Musique">Musique:</label>
                 <input type="radio" name="Activite" value="Musique" >
              </div>  
              <div class="container-btn">
                 <label for="Jeux">Jeux:</label>
                 <input type="radio" name="Activite" value="Jeux" >
               </div>
               <div class="container-btn">
                 <label for="Voyages">Voyages:</label>
                 <input type="radio" name="Activite" value="Voyages" >
               </div>
            </div> 
          <h1 class="secund">Choisissez une autre activité :</h1>
            <div class="container-btn-all">
              <div class="container-btn">
                  <label for="Sports">Sports:</label>
                 <input type="checkbox" name="ActiviteSecund[]" value="Sports" >
              </div>
              <div class="container-btn">  
                 <label for="Musique">Musique:</label>
                 <input type="checkbox" name="ActiviteSecund[]" value="Musique" >
              </div>  
              <div class="container-btn">
                 <label for="Jeux">Jeux:</label>
                 <input type="checkbox" name="ActiviteSecund[]" value="Jeux" >
               </div>
               <div class="container-btn">
                 <label for="Voyages">Voyages:</label>
                 <input type="checkbox" name="ActiviteSecund[]" value="Voyages" >
               </div>
            </div> 
            


          <div class="send">
          <input type="submit" name="submit" value="Envoyer" style="cursor: pointer;">
          </div>
          </form>
          
<?php 
   if ( isset( $_GET['submit'] ) ) {
      $Activite = $_GET['Activite'];
      $ActiviteSecund = $_GET['ActiviteSecund'];
     exit; 
  }



?>  
     </div>
<p class="cc">Copyright 2022 Tout Droit Réservé par Elodie Teneur.</p>  
</section>

<?php require('fin.php'); ?>