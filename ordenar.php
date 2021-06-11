<?php require 'controllers/form_controller.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>One Step Hair RD</title>
</head>

<link rel="stylesheet" href="css/ordenar.css">



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



<link rel="icon" type="image/png" href="img/favicon.ico"/>




<body>

   

   <!-- Formulario de orden-->
<div class="container">

   
   

   <script type="text/javascript">
    swal("Aviso!", "Pagos en efectivo solo en Santiago de los Caballeros");</script>
   

   <div class="row">


       <form class="formulario" action="ordenar.php" method="POST">
       <img src="img/logo3.png" alt="logo" class="logo">

       <h4 class="ordene-ahora">Ordene Ahora!</h4>
       <hr width="565px;"
        size="10">

         <p class="para-1 text-center">

 Envío Nacional GRATIS! <br>Garantía 90 días<br>



                        </p>

<!---Mostrar errores via php-->
<?php if (count($error) > 0): ?>

<div class="alert alert-danger">

    <?php foreach ($error as $errors): ?>
 <li><?php echo $errors; ?></li>
    <?php endforeach;?>

</div>

<?php endif;?>
<!---Mostrar errores via php-->

  <div class="form-row d-flex">

    <div class="form-group col-md-3">
      <label for="nombre">Nombre*</label>
      <input type="text" class="form-control" id="nombre" name="nombre" value="<?=$nombre?>">
    </div>

    <div class="form-group col-md-5">
      <label for="apellido">Apellido*</label>
      <input type="text" class="form-control" id="apellido" name="apellido" value="<?=$apellido?>">
    </div>
    <div class="form-group col-md-5">
      <label for="telefono/celular">Teléfono / Celular / WhatsApp*</label>
      <input type="number" min="0" class="form-control" id="apellido" name="tel_cel" value="<?=$tel_cel?>">
    </div>

  </div>




  <div class="form-row d-flex">
    <div class="form-group col-md-4 ">
      <label for="email">Email*</label>
      <input type="email" class="form-control" id="email" name="email" value="<?=$email?>">
    </div>


  </div>

  <div class="form-group col-md-4" id="agencia-envio">
    <label for="direccion">Agencia de Envío*</label>
    <select id="pais" class="form-control" name="envio" required="required" value="<?=$envio?>">
        <option>Seleccionar</option>
        <option value="Caribe Tours">Caribe Tours</option>
        <option value="Metro">Metro</option>
        <option value="Vimenpaq">Vimenpaq</option>
        <option value="Mensajero">Mensajero (Santiago)</option>
      </select>


  </div>

 <div class="form-group">
    <label for="exampleFormControlTextarea1">Comentarios sobre la orden*</label>
    <textarea class="form-control col-md-8" id="exampleFormControlTextarea1" placeholder="Si fue referido favor poner el nombre en la caja de comentarios..." rows="3" name="coment" value="<?=$coment?>"></textarea>
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="ciudad">Ciudad*</label>
      <input type="text" class="form-control" id="ciudad" name="ciudad" value="<?=$ciudad?>">
    </div>
    <div class="form-group col-md-3">
      <label for="pais">País*</label>
      <select id="pais" class="form-control" name="pais" required="required">
        <option>Seleccionar</option>
        <option value="rep_dom">República Dominicana</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip code*</label>
      <input type="text" class="form-control" id="inputZip" name="zip_code" value="<?=$zip_code?>">
    </div>


  </div>


  <h4 class="heading-2" id="productos" >Seleccione el Producto a Ordenar</h4>
   <div id="showLate-Night-Pink" class="myDiv">
	<img src="img/negrorosado/1.jpg" alt="Manager" class="img-responsive img-thumbnail"/><span>Negro Rosado</span><br><h4 class="precios">RD $2,000</h4>
</div>
<div id="showZafiro" class="myDiv">
	<img src="img/blue/4.jpg" alt="HR" class="img-responsive img-thumbnail"/><span>Azul Negro</span><br><h4 class="precios">RD $2,200</h4>
</div>
<div id="showTiffany-Blue" class="myDiv">
	<img src="img/lightblue/1.jpg" alt="Developer" class="img-responsive img-thumbnail"/><span>Azul Cielo</span><br><h4 class="precios">RD $2,200</h4>
</div>

 <div id="showGolden-Black" class="myDiv">
	<img src="img/negrooro/1.jpg" alt="Developer" class="img-responsive img-thumbnail"/><span>Negro Oro</span><br><h4 class="precios">RD $2,200</h4>
</div>

 <div id="showIrish-Green" class="myDiv">
	<img src="img/verdeoro/1.jpg" alt="Verde Oro" class="img-responsive img-thumbnail"/><span>Verde Oro</span><br><h4 class="precios">RD $2,200</h4>
</div>
 <div id="showPink-Mist" class="myDiv">
	<img src="img/greypink/1.jpg" alt="Developer" class="img-responsive img-thumbnail"/><span>Gris Rosado</span><br><h4 class="precios">RD $2,200</h4>
</div>

  <!--Formulario final -->
  <div class="form-row d-flex">

   <div class="metodo_pago form-group col-md-3">
      <label for="metodo_pago">Método de Pago*</label>
      <select id="metodo_pago" class="form-control" name="metodo_pago" required="required" value="<?=$metodo_pago?>" >
        <option>Seleccionar</option>
        <option value="Efectivo">Efectivo</option>

        <option value="Transferencia Bancaria">Transferencia Bancaria</option>

        <option value="PayPal">Paypal</option>

      </select>
    </div>

    <!-- Seleccion de color -->



  <select id="myselection" class="form-control col-md-3" name="color" required="required" value="<?=$color?>">


	<option>Seleccionar Color</option>
	<option value="Late-Night-Pink">Late Night Pink</option>
	<option value="Zafiro">Zafiro </option>
	<option value="Tiffany-Blue">Tiffany Blue</option>
	<option value="" disabled="disabled">─Colores Exclusivos────────</option>
	<option value="Golden-Black">Golden Black</option>
	<option value="Irish-Green">Irish Gold</option>
	<option value="Pink-Mist">Pink Mist</option>

</select>
<!-- fin seleccion color -->


   <!-- Cantidad -->
   <div class="cantidad form-group col-md-2">
      <label for="cantidad">Cantidad*</label>
      <input type="number" min="0" class="form-control" id="cantidad" name="cantidad" value="<?=$cantidad?>">
    </div>



  </div>



 <button type="submit" class="btn btn-primary btn-lg col-md-8 btn-block" id="realizarpedido" name="submit">SOLICITAR PRODUCTO</button>
 <div class="volver">
 <a href="index.php"><h4 class="volver">Volver al Inicio</h4></a>
 </div>

 <p class="aviso text-center"> Aviso, tras realizar su pedido uno de nuestros representantes lo <br>contactará via correo electrónico, teléfono o WhatsApp<br> Contacto: (829)947-9002</p>



</form>



   </div>

</div>

<script>
$(document).ready(function(){
    $('#myselection').on('change', function(){
    	var demovalue = $(this).val();
        $("div.myDiv").hide();
        $("#show"+demovalue).show();
    });
});
</script>



</body>
</html>
