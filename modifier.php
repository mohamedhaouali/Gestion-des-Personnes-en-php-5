<html>

    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        require 'personne.php';
        $p = new Personne(null, "", "", "", "", "", "", "");
        $id = $_GET['id'];
        $p->affectPersonne($pdo, $id);





        if (isset($_POST['bt'])) {
            $p->nom = $_POST['n'];

            $p->prenom = $_POST['p'];


            $p->age = $_POST['a'];

            $p->sex = $_POST['s'];
            $p->ville = $_POST['ville'];




            $comp = '';
            foreach ($_POST['cours'] as $v) {
                $comp = $comp . ' ' . $v;
            }



            $p->competences = $comp;





            $p->photo = $_FILES['ph']['name'];
            move_uploaded_file($_FILES['ph']['tmp_name'], "images/" . $p->photo);
            
            $p->modifierPersonne($pdo, $id);
        }
        ?>   
        <form  method="post" enctype="multipart/form-data">
            <div>
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="n" value="<?php echo $p->nom ?>" />
            </div>
            <div>
                <label for="prenom">prenom :</label>
                <input type="text" id="prenom" name="p"  value="<?php echo $p->prenom ?>" />
            </div>

            <div>
                <label for="age">age :</label>
                <input type="text" id="age" name="a" value="<?php echo $p->age ?>"  />
            </div>






            sexe <label>h<input type="radio"  value="homme" name="s"value="homme" <?php if ($p->sex == "homme") echo "checked" ?>></label> </br>
            <label>f<input type="radio"  value="femme" name="s"value="femme" <?php if ($p->sex == "femme") echo "checked" ?>>  </label>

            <br>



            competences <br>
        
        <label><input type="checkbox" id="symfony" value="symfony" name="cours[]" <?php if (strpos($p->competences, "symfony") > -1) echo "checked" ?>>  symfony</label><br>

            <input type="checkbox" id="php5" value="php5" name="cours[]" <?php if (strpos($p->competences, "php5") > -1) echo "checked" ?>> <label for="cbox2">php5</label><br>


            <label><input type="checkbox" id="cbox1" value="html5" name="cours[]" <?php if (strpos($p->competences, "html5") > -1) echo "checked" ?>> html5</label><br>

            <label><input type="checkbox" id="cbox2" value="css3" name="cours[]" <?php if (strpos($p->competences, "css3") > -1) echo "checked" ?>> CSS3</label><br>


            ville <select name ="ville" value="<?php echo $p->ville ?>" >
                <option value="tunis"  <?php if ($p->ville == "tunis") echo 'selected' ?> >tunis</option>
                <option value="gafsa"  <?php if ($p->ville == "gafsa") echo 'selected' ?> >gafsa</option>
                <option value="nabel"  <?php if ($p->ville == "nabel") echo 'selected' ?> >nabel</option>
            </select>
            <br>
            photo  <input type="file"  name="ph"  ><br>
            <div class="button">
                <input type="submit" value="Enregistrer" name="bt">
            </div>
        </form>

    </body>
</html>