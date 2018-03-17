<html>
    
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

<form action="" method="post" enctype="multipart/form-data">
<div id="searchbar">
                
                        <h1>What would you like to search?</h1>
                
                    <input class="champ" type="text" value="" name="n"/>
                    <input class="bouton" type="submit" value="rechercher par nom " name="rechercher"/>
                    </div>
                </form> 
<?php        
        
        require 'personne.php';   
   $p=new Personne(null,"","","","","","","");
  
  

 if(isset($_POST['rechercher'])){
           $nom=$_POST['n'];


            $res=$p->rechercheparnom($pdo, $nom);
         ?>
        
        <table border="1">
        <?php
while ($row=$res->fetch()){?>
      <tr><td><?php echo $row ['nom']?></td>
 <td><?php echo $row ['prenom']?></td>
 <td><?php echo $row ['age']?></td>
 <td><?php echo $row ['sexe']?></td>
<td><?php echo $row ['ville']?></td>
 <td><?php echo $row ['competence']?></td> 
 <td><img src="images/<?php echo $row['photo']?>" width="200" height="200"></td>
      </tr>
 <?php
 }

 }

  ?>  
 </table>
 
 
 
                

</body>
</html>