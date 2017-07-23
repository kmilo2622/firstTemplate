<div class="row contact">

    <div class="container">

        <div class="col-md-12">
            <h3 class="text-center">Contáctanos</h3>
            <div class="col-md-6">
                <form action="controllers/mail.php" method="post">
                    <div class="form-group">
                        <label for="name">Nombre *:</label>
                        <input type="name" required class="form-control" id="name" placeholder="Ingresar Nombre" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico *:</label>
                        <input type="email" required class="form-control" id="email" placeholder="Ingresar Correo Electrónico" name="email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Teléfono y/o Celular:</label>
                        <input type="text" class="form-control" id="phone" placeholder="Teléfono - Celular" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="pick_address">Dirección de Recogida:</label>
                        <input type="text" class="form-control" id="pick_address" placeholder="Ingresar Correo Electrónico" name="pick_address">
                    </div>
                    <div class="form-group">
                        <label for="return_address">Dirección de Entrega:</label>
                        <input type="text" class="form-control" id="return_address" placeholder="Ingresar Correo Electrónico" name="return_address">
                    </div>
                    <div class="form-group">
                        <label for="name">Observaciones *:</label>
                        <textarea class="form-control" name="observations" rows="8" cols="10">Solicito sus servicios...</textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Enviar</button>
                </form>
            </div>

            <div class="col-md-6">
                <img src="http://blogthinkbig.com/wp-content/uploads/2015/02/telefono-movil.jpg" alt="Contacto" width="100%" class="contact-picture">
                <p>
                    <div class="alert alert-info">
                        <strong>Info!</strong> Todos los campos marcados con asterisco (*) son requeridos.
                    </div>
                    Contáctanos a través de este formulario y en 10 minutos uno de nuestros asesores se pondrá en contacto contigo. 
                    <p>
                        <strong>Horarios de atención</strong>
                        <p>
                            <strong>Lunes a Viernes: </strong> 7:00 am - 5:00 pm <br>
                            <strong>Sábados: </strong> 8:00 am - 2:00 pm
                        </p>
                    </p>
                    <p>
                        <strong>Datos de Contacto</strong>
                        <p>
                            <strong>Celular: </strong> +57 302 282 4646 <br>
                            <strong>Ciudad: </strong> Bogotá D.C. <br>
                            <strong>E-mail: </strong> <a href="mailto:info@<?php echo $_SERVER['HTTP_HOST']; ?>">info@<?php echo $_SERVER['HTTP_HOST']; ?></a>
                        </p>
                    </p>
                </p>
            </div>
        </div>
    </div>
</div>