@include('menu')

<div class="container-fluid notificaciones">

        <div class="list-group" class="separador">

        <button type="button" class="btn btn-danger separador">Junio</button>

        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
            <small class="badge badge-primary badge-pill bigger">6</small>
            <h5 class="mb-1">Reunion de Padres</h5>
            </div>
            <p class="mb-1">Nos juntamos para charlar temas importantes de los chicos.</p>
            <small>Salita Delfines (Aula 2)</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
            <small class="badge badge-primary badge-pill bigger">12</small>
            <h5 class="mb-1">Excursión al Zoo</h5>
            </div>
            <p class="mb-1">Ya hay 3 padres confirmados para acompañarnos.</p>
            <small>Gracias por las confirmaciones</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
            <small class="badge badge-primary badge-pill bigger">16</small>
            <h5 class="mb-1">Reunion con la Directora</h5>
            </div>
            <p class="mb-1">Presentarse a la mañana parar discutir el comportamiento del alumno.</p>
            <small>En Direccion a las 9:00</small>
        </a>

        <button type="button" class="btn btn-danger separador">Julio</button>

        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
            <small class="badge badge-primary badge-pill bigger">9</small>
            <h5 class="mb-1">Feriado</h5>
            </div>
            <p class="mb-1">Dia sin clases por Revolución de Mayo</p>
            <small>Disfruten!</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
            <small class="badge badge-primary badge-pill bigger">14</small>
            <h5 class="mb-1">Reunion con la Directora</h5>
            </div>
            <p class="mb-1">Presentarse a la mañana parar discutir el comportamiento del alumno.</p>
            <small>En Direccion a las 9:00</small>
        </a>



        </div>


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
