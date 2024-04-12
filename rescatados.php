<?php include ("header.php")?>

<section>

    <div class="titulo"> 
        <h1 class= "h1" > CELEBRAMOS A LOS ADOPTADOS </h1> 
    </div>
  
    <nav> 
        <ul class="menu1">
            <li class="item"> <a href="rescatados.php?nom=mini_berta_renata">Mini, Berta y Renata</a> </li>
            <li class="item"> <a href="rescatados.php?nom=rosa"> Rosa </a> </li>  
            <li class="item"><a href="rescatados.php?nom=roman"> Román </a> </li>
            <li class="item"><a href="rescatados.php?nom=burbuja"> Burbuja </a> </li>
            <li class="item"><a href="rescatados.php?nom=guacho"> Guacho </a> </li>       
            <li class="item"><a href="rescatados.php?nom=fatima"> Fátima</a> </li>    
            <li class="item"><a href="rescatados.php?nom=junior"> Junior</a> </li>
        </ul>
    </nav> 
</section>    

<?php

 if (isset ($_GET["nom"])){
    switch(($_GET["nom"])){
        
        case "mini_berta_renata":
            $nombre = "Mini, Berta y Renata";
            $descri = "Abandonadas, adoptadas y amadas. No las dejan subir a la cama pero lo hacen igual";
            $img = "./img/IMG_2008.jpg";
        break;

        case "rosa":
            $nombre = "Rosa";
            $descri = "Rescatada de una cueva, feliz con su patio";
            $img = "./img/IMG_6227.jpg";
        break;

        case "roman":
            $nombre = "Roman";
            $descri = "Un casi caniche que consiguio que lo lleven a la peluqueria todos los meses y ama a su papá";
            $img = "./img/IMG_5629.jpg";
            break;

        case "burbuja":
             $nombre = "Burbuja";
             $descri = "Se fue a vivir al interior, apenas llegó casi infarta su hermano pero ya se llevan bien";
             $img = "./img/IMG_7545.jpg";
        break;

        case "guacho":
            $nombre = "Guacho";
            $descri = "Abandonado y rescatado, las fotos lo dicen todo.";
            $img = "./img/56ADB7BC-0991-4E3B-86BC-271BBDD1FFE9.jpg";
        break;

        case "fatima":
            $nombre = "Fati";
            $descri = "Se autoadoptó, se va semanas pero siempre vuelve. Un alma libre y feliz.";
            $img = "./img/IMG_5336.jpg";
        break;

        case "junior":
            $nombre = "Junior";
            $descri = "Nadie lo quería por que supuestamente era feo, pero a su mamá la conquistó con una mirada.";
            $img = "./img/IMG_1718.jpg";
        break;
    }
}
else{
    //$img="./img/7b086bf2d426e923c9c447f3797853a6.jpg";
    echo "<p class=\"parrafo\"> Conocel@s en su nueva vida </p>";
}
?>

<section>

        <?php if(isset($nombre)){ echo ("<h1 class=\"h1\"> $nombre </h1>");}?>
        <?php if(isset($descri)){ echo ("<p class=\"parrafo\"> $descri </p>");}?>
        <?php if(isset($img)){ echo (
    "<div class=\"portada1\">
         <img class=\"bb\" src=\" $img\" alt=\" $nombre\">
    </div>");}
    ?>

</section>

<section>
   
    <a href="./img/IMG_2008.jpg" data-lightbox= "rescatados" data-title="Mini, Renata y Berta"> <img src="./img/IMG_2008.jpg" alt="Berta" class="img_chica"></a>
    <a href="./img/IMG_6227.jpg" data-lightbox= "rescatados" data-title="Rosa"> <img src="./img/IMG_6227.jpg" alt="Tomi" class="img_chica"></a>
    <a href="./img/IMG_5629.jpg" data-lightbox= "rescatados" data-title="Roman"> <img src="./img/IMG_5629.jpg" alt="Berta" class="img_chica"></a>
    <a href="./img/IMG_7545.jpg" data-lightbox= "rescatados" data-title="Burbuja"> <img src="./img/IMG_7545.jpg" alt="Tomi" class="img_chica"></a>
    <a href="./img/56ADB7BC-0991-4E3B-86BC-271BBDD1FFE9.jpg" data-lightbox= "rescatados" data-title="Guacho"> <img src="./img/56ADB7BC-0991-4E3B-86BC-271BBDD1FFE9.jpg" alt="Berta" class="img_chica"></a>
    <a href="./img/IMG_5336.jpg" data-lightbox= "rescatados" data-title="Fati"> <img src="./img/IMG_5336.jpg" alt="Tomi" class="img_chica"></a>
    <a href="./img/IMG_1718.jpg" data-lightbox= "rescatados" data-title="Junior"> <img src="./img/IMG_1718.jpg" alt="Tomi" class="img_chica"></a>
</section>



<?php include ("footer.php") ?>

</body>
</html>
