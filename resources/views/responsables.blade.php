@include('menu')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBlT432SDJL7zn6ALXCNeI96UaaTLVyz-8",
    authDomain: "cuadernito-ba068.firebaseapp.com",
    databaseURL: "https://cuadernito-ba068.firebaseio.com",
    projectId: "cuadernito-ba068",
    storageBucket: "cuadernito-ba068.appspot.com",
    messagingSenderId: "667313446859"
  };
  firebase.initializeApp(config);
  
  var ref = firebase.database().ref();

  ref.on("value", function(snapshot) {
    $('div.alumnos').empty();

    
    
   for(var i=0;i < snapshot.val().usuarios.length; i++){

       if(snapshot.val().usuarios[i].id == "1"
       || snapshot.val().usuarios[i].id == "2"
       ){

        var responsable = snapshot.val().usuarios[i].responsables;
        
         for(var j=0;j < responsable.length; j++){

            var nombre = responsable[j].nombre;
            var apellido = responsable[j].apellido;
            var foto = responsable[j].foto;
            var celular = responsable[j].celular;
            var relacion = responsable[j].relacion+" de "+snapshot.val().usuarios[i].nombre + ' '+snapshot.val().usuarios[i].apellido;
            
            var alumno = '<div class="card" style="width: 18rem;"><img class="card-img-top" src="./storage/images/'+foto+'" alt="Card image cap"><div class="card-body"><h5 class="card-title">'+nombre+' '+apellido+' - '+snapshot.val().usuarios[i].comision+'</h5><p class="card-text">'+relacion+'</p><a href="#" class="btn btn-primary">Tel: '+celular+'</a></div></div>';
            $('div.row.alumnos').append(alumno);
         }
       }
       
   }

}, function (error) {
   console.log("Error: " + error.code);
});
 </script>


<div class="container separador">
    <h1>
        Responsables
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
