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
            
            //var event = '<div class="card" style="width: 18rem;"><img class="card-img-top" src="images/'+foto+'" alt="Card image cap"><div class="card-body"><h5 class="card-title">'+nombre+' '+apellido+' - '+snapshot.val().usuarios[i].comision+'</h5><p class="card-text">'+relacion+'</p><a href="#" class="btn btn-primary">Ver alumno</a></div></div>';
            event = '<a href="#" class="list-group-item list-group-item-action flex-column align-items-start"><div class="d-flex w-100 justify-content-between"><small class="badge badge-primary badge-pill bigger">'+dia+'</small><h5 class="mb-1">'+titulo+'</h5></div><p class="mb-1">'+descripcion+'</p><small>'+extra+'</small></a>';

            if(mes == '06'){
                $('.junio').append(event);
            }else if(mes == '07'){
                $('.julio').append(event);
            }
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

        <div class="junio">
        

        </div>

        <button type="button" class="btn btn-danger separador">Julio</button>
        <div class="julio">
        
        </div>


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
