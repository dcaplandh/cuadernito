@include('menu')
<script>
  var ref = firebase.database().ref();

  ref.on("value", function(snapshot) {
    $('div.alumnos').empty();
   
   for(var i=0;i < snapshot.val().usuarios.length; i++){
    var comision = snapshot.val().usuarios[i].comision;
    
       if(comision == "Arcoiris"
        || comision == "Delfines"
       ){
        var nombre = snapshot.val().usuarios[i].nombre;
       var apellido = snapshot.val().usuarios[i].apellido;
       var foto = snapshot.val().usuarios[i].foto;
       var celular = snapshot.val().usuarios[i].responsables[0].celular;
       
    
       var alumno = '<div class="card" style="width: 18rem;"><img class="card-img-top" src="images/'+foto+'" alt="Card image cap"><div class="card-body"><h5 class="card-title">'+nombre+' '+apellido+'</h5><p class="card-text">'+comision+'</p><a href="#" class="btn btn-primary">Ver autorizados para retiro</a></div></div>';
       $('div.row.alumnos').append(alumno);
       }
       
   }


}, function (error) {
   console.log("Error: " + error.code);
});
 </script>
<div class="container separador">
    <h1>
        Alumnos
    </h1>
    <div class="row alumnos">
    
    
        

        
        
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
