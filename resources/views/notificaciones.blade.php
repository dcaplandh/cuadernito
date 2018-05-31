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
    $('ul.notificaciones-lista').empty();
   

   for(var i=0;i < snapshot.val().usuarios.length; i++){

       

        if(snapshot.val().usuarios[i].id == "1"
        || snapshot.val().usuarios[i].id == "2"
        ){

        var notificacion = snapshot.val().usuarios[i].notificaciones;

        for(var j=0;j < notificacion.length; j++){

            var texto = notificacion[j].notificacion;
            var icono = notificacion[j].icono;
            var fecha = notificacion[j].fecha;
             
            var nota = '<li class="list-group-item d-flex align-items-center"><img id="icono" src="./storage/images/'+icono+'.png" alt="'+icono+'"><span class="text">'+texto+'</span><span class="badge badge-primary badge-pill">1</span><h5 style="font-size:10px;margin-left:10px;margin-top:11px;">'+fecha+'</h5></li>'
       
            $('ul.notificaciones-lista').append(nota);
        }
    }

}

}, function (error) {
   console.log("Error: " + error.code);
});
 </script>
<div class="container-fluid notificaciones">

    <ul class="list-group notificaciones-lista">
        
        

        <!--<li class="list-group-item d-flex align-items-center">
            <img id="icono" src="./storage/images/urgente.png" alt="Urgente">
            <span class="text">
            Tienes novedades de urgencia, por favor, chequealas!
            </span>
            <span class="badge badge-primary badge-pill">2</span>
        </li>-->

        
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
