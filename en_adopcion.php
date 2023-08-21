<?php include ("header.php")?>

<section class="globo1">
        <div class="titulo">
            <h1 class="h1">¡Perritos en adopcion!</h1>
        </div> 

        <div>
            <p class="parrafo">Te presentamos los perritos que buscan hogar </p>
        </div>
    
    <nav>
        <ul class="menu1">
        <li class="item"> <a href="en_adopcion.php?nom=berta"> Berta </a>
        <li class="item"> <a href="en_adopcion.php?nom=tomi">Tomi</a>
        </ul>
    </nav>
</section>

<?php

 if (isset ($_GET["nom"])){
    switch(($_GET["nom"])){
        
        case "berta":
            $nombre = "Berta";
            $descri = "Te presentamos a Berta: perrita que se porta mal, no la pueden tener y busca familia";
            $img = "./img/7671c53c-0440-4fe1-a763-fe97e346c706.jpg";
        break;

        case "tomi":
            $nombre = "Tomi";
            $descri = "Machito de 6 meses que busca hogar";
            $img = "./img/e8efa5a9-ed02-41fe-a2a4-d7260371c33a.jpg";
        break;}
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

<div class="titulo">
        <li class="h1"> <a href="comunicate.php"> Adoptar </a>
 </div>
<?php include ("footer.php")?>
