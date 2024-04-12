<?php include ("header.php")?>




<body class="hoja">
<div class="globo1">
    <h1 class="h1"> ¡Animate a adoptar!</h1>
    <p class="parrafo"> Si estás dispuesto a cambiar tu vida con un/a compañer@, <br/>

        completa este formulario, especifica el animalito que te interesa <br/>
        y nos comunicaremos con vos.</p>
</div>

<div>
    <form action="candidatos_Adoptantes.php" method="post">
        <input type="text". name= "Nombre". class="input". placeholder="Nombre">
        <input type="text". name= "Apellido". class="input". placeholder="Apellido">
        <input type="date". name= "Date". class="input". placeholder="Fecha de necimiento">
        <input type="text". name= "Localidad". class="input". placeholder="Lugar de residencia" >
        <input type="number". name= "NumeroCelular". class="input" placeholder="Tu número de celular">
        <textarea name="sugerencias" id="" cols="30" rows="10". class="input". placeholder="¿Cumplís con los requisitos de adopción? ¿Tenés algún incoveniente con estos? Comentanos"></textarea>
        <br/>
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
    <h1 class="encabezado"> Si queres comunicarte con nosotros por otro tema hacelo a través de los siguientes medios: </h1>

</div>

<nav>
    <ul class="h1">
        <li class="item"> <a href=https://www.linkedin.com/in/jul1alcaraz/> <img class="icono" src="./images/linkedin_logo_icon_247835.ico" ></a></li>    
        <li class="item"> <a href=https://github.com/jul1alcaraz> <img class="icono" src="./images/github_git_icon_145985.ico" ></a></li>
        <li class="item"> <a href="mailto:lic.alcarazaballay2022@gmail.com"> <img class="icono" src="./images/mail_email_message_electronic_online_web_icon-icons.com_59986.ico" ></a></li>
    </ul>
</nav>

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