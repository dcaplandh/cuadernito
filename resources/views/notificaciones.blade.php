@include('menu')

<div class="container-fluid notificaciones">

    <ul class="list-group notificaciones-lista">
        
        <li class="list-group-item d-flex align-items-center">
            <img id="icono" src="./storage/images/recordatorio.png" alt="Recordatorio">
            <span class="text">
            No olvides ir a la reunión de padres este jueves.
            </span>
            <span class="badge badge-primary badge-pill">2</span>
        </li>

        <li class="list-group-item d-flex align-items-center">
            <img id="icono" src="./storage/images/nuevo.png" alt="Nuevo">
            <span class="text">
            @EduardoPalazzo ha subido una nueva comunicación. 
            </span>
            <span class="badge badge-primary badge-pill">2</span>
        </li>
        
        <li class="list-group-item d-flex align-items-center">
            <img id="icono" src="./storage/images/evento.png" alt="Evento">
            <span class="text">
            El próximo jueves, tenes una reunión de padres.
            </span>
        </li>
        
        <li class="list-group-item d-flex align-items-center">
            <img id="icono" src="./storage/images/mensaje.png" alt="Mensaje">
            <span class="text">
            @MonicaBarreda te ha enviado un mensaje privado.
            </span>
            <span class="badge badge-primary badge-pill">3</span>
        </li>

        <li class="list-group-item d-flex align-items-center">
            <img id="icono" src="./storage/images/urgente.png" alt="Urgente">
            <span class="text">
            Tienes novedades de urgencia, por favor, chequealas!
            </span>
            <span class="badge badge-primary badge-pill">2</span>
        </li>

        
    </ul>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="./js/bigSlide.js"></script>
    <script>
        $(document).ready(function() {
            $('.menu-link').bigSlide();
        });
    </script>
   </body>
</html>
