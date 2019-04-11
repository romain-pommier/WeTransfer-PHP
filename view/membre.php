<?php
ob_start();

?>



    <div id="membre" >
        <form method="POST" enctype="multipart/form-data">
            <input type="file" name="fichier" value="">
            <input type="submit" value="upload">
        </form>

        <form action="#" method="POST"  enctype ="multipart/form-data">
            <input type="submit" name="delete" value="supprimer fichier" > 
        </form>
        <form method="POST" >
        <input  type='hidden' name="deconnection" class="ml-2">
        <input type="submit"  name='deco'value="deconnection">
        </form>
    </div>

<?php
    $content = ob_get_clean();
    require('template.php');
?>