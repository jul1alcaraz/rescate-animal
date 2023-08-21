<?php include ("header.php")?>

<body class="hoja">
<div class="globo1">
    <h1 class="h1"> ¡Animate a adoptar!</h1>
    <p class="parrafo"> Si estas dispuesto a cambiar tu vida con un/a compañer@ de vida, 
        completa este formulario, especifica el animalito que te interesa y nos comunicaremos con vos.</p>
</div>

<div>
    <form action="candidatos_Adoptantes.php" method="post">
        <input type="text". name= "Nombre". class="input". placeholder="Nombre">
        <input type="text". name= "Apellido". class="input". placeholder="Apellido">
        <input type="date". name= "Date". class="input". placeholder="Fecha de necimiento">
        <input type="text". name= "Localidad". class="input". placeholder="Lugar de residencia" >
        <input type="number". name= "NumeroCelular". class="input" placeholder="Tu numero de celular">
        <textarea name="sugerencias" id="" cols="30" rows="10". class="input". placeholder="¿Cumplis con los requisitos de adopcion? ¿Tenes algun incoveniente con estos? Comentanos"></textarea>
        <input type="submit" value="Enviar formulario" class="boton">
    </form>
</div>

<?php 
if(isset($_GET ['ok']))
echo "<h1> Tu mensaje ha sido recibido con exito";
?>

</div>
</section>  

<div>
    <h1 class="encabezado"> Si queres comunicarte con nosotros por otro tema hacelo a traves de los siguientes medios: </h1>
    <p class="parrafo">rescate.lr@gmail.com</p>
</div>

<section class="globo2">
        <div class="descripcion">
            <p>¡Nuestra secretaria te responderá a la brevedad!</p>
        </div>

        <div class="portada">
            <img class="bb" src="./img/2c2d710a-c555-4941-97d1-fb0f3ab8686b.jpg" alt="Gatito con compu">
        </div>
</section>

<?php include ("footer.php") ?>


</body>
</html>