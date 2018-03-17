<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
   require 'personne.php';   
   $p=new Personne(null,"","","","","","","");
   if(isset($_POST['bt'])){
       
      $p->nom=$_POST['n'];
         
      $p->prenom=$_POST['p'];
           
           
       $p->age=$_POST['a'];
           
       $p->sex=$_POST['s'];
         
          $p->ville=$_POST['ville'];
               
           
               
        
          $comp='';
         foreach ($_POST['cours'] as $v )
           {
           $comp=$comp.' '.$v;
           
           } 
   
   
           
         $p->competences=$comp;
            
           
          
          
           
       $p->photo=$_FILES['ph']['name'];
       move_uploaded_file($_FILES['ph']['tmp_name'],"images/".$p->photo);
                $p->affiche();  
                
       $p->ajoutPersonne($pdo);
       
     
   }
        
        
        
          $res=$p->affichetableaux($pdo);
          
        
         
         
          
        
     ?>   
        
           <?php
         if (isset($_GET['idd']))
         {
          ?>  
             <form method="POST">
             <input type="submit" value="valider" name="su" />
             
                 <input type="SUBMIT" value="annuler" name="rest"/></a>
             </form>
        
        <?php 
        if (isset($_POST['su']))
        {
             $id=$_GET['idd'];
             $p->Supprimer($pdo,$id);
         }
         if (isset($_POST['rest']))
        {
             header("location:index.php");
         }
         }
        ?>  
        
        

        <form action="" method="post" enctype="multipart/form-data">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="n" />
    </div>
    <div>
        <label for="prenom">prenom :</label>
        <input type="text" id="prenom" name="p" />
    </div>

 <div>
        <label for="age">age :</label>
        <input type="text" id="age" name="a" />
    </div>


  <label>h<input type="radio"  value="homme" name="s"></label> </br>
  <label>f<input type="radio"  value="femme" name="s"> </label>

  <br>



<label><input type="checkbox" id="symfony" value="symfony" name="cours[]"> symfony</label><br>

<input type="checkbox" id="php5" value="php5" name="cours[]"> <label for="cbox2">php5</label>


<label><input type="checkbox" id="cbox1" value="html5" name="cours[]"> html5</label><br>

<input type="checkbox" id="cbox2" value="css3" name="cours[]"> <label for="css3">CSS3</label>


ville <select name ="ville">
    <option value="tunis"> tunis</option>
<option value="gafsa"> gafsa</option>
<option value="nabel"> nabel</option>
</select>
<br>
photo  <input type="file"  name="ph"><br>
    <div class="button">
        <input type="submit" value="Enregistrer" name="bt">
    </div>
</form>

<table border ="1">
 <?php
 while ($row=$res->fetch()){
 ?>
 <tr><td><?php echo $row ['nom']?></td>
 <td><?php echo $row ['prenom']?></td>
 <td><?php echo $row ['age']?></td>
 <td><?php echo $row ['sexe']?></td>
<td><?php echo $row ['ville']?></td>
 <td><?php echo $row ['competence']?></td> 
 <td><img src="images/<?php echo $row['photo']?>" width="200" height="200"></td>
 
 <td> <a href="modifier.php?id=<?php echo $row ['id']?>">modifier</a></td>
 <td><a href="index.php?idd=<?php echo $row ['id'] ?>">supprimer </a>
 </td>               "    
 </tr> 
 
    <?php } ?>
    
</table>
        
        
        
        
       
    </body>
</html>
