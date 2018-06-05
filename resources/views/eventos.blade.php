@include('menu')
<script>
  var ref = firebase.database().ref();

  ref.on("value", function(snapshot) {
    $('div.alumnos').empty();

    
    
   for(var i=0;i < snapshot.val().usuarios.length; i++){

       if(snapshot.val().usuarios[i].id == "1"
       || snapshot.val().usuarios[i].id == "2"
       ){

        var evento = snapshot.val().usuarios[i].eventos;
        
         for(var j=0;j < evento.length; j++){

            var titulo = evento[j].titulo;
            var descripcion = evento[j].descripcion;
            var extra = evento[j].extra;
            var mes = evento[j].mes;
            var dia = evento[j].dia;
            var relacion = responsable[j].relacion+" de "+snapshot.val().usuarios[i].nombre + ' '+snapshot.val().usuarios[i].apellido;
            
            var alumno = '<div class="card" style="width: 18rem;"><img class="card-img-top" src="images/'+foto+'" alt="Card image cap"><div class="card-body"><h5 class="card-title">'+nombre+' '+apellido+' - '+snapshot.val().usuarios[i].comision+'</h5><p class="card-text">'+relacion+'</p><a href="#" class="btn btn-primary">Ver alumno</a></div></div>';
            $('div.row.alumnos').append(alumno);
         }
       }
       
   }

}, function (error) {
   console.log("Error: " + error.code);
});
 </script>

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
