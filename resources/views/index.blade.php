    @include('menu')
    <script> 
  var ref = firebase.database().ref();

  ref.on("value", function(snapshot) {
    $('div.posteos').empty();
   

   for(var i=0;i < snapshot.val().usuarios.length; i++){

       

        if(snapshot.val().usuarios[i].id == "1"
        || snapshot.val().usuarios[i].id == "2"
        ){

        var post = snapshot.val().usuarios[i].posts;
        console.log(post);
        for(var j=0;j < post.length; j++){
            
            var cual = post[j].tipo;
            console.log(cual);
            if(cual == 'imagen'){
                var icono = post[j].icono;
                var titulo = post[j].titulo;
                var descripcion = post[j].descripcion;
                var fecha = post[j].fecha;
                var vistos = post[j].vistos.length;
                var foto = post[j].foto;
                var poner = ' <div class="card" style="width:100%;margin-bottom: 15px;"><img class="card-img-top" src="images/'+foto+'" alt="'+titulo+'"><div class="card-body"><h5 class="card-title">'+titulo+'</h5><p class="card-text">'+descripcion+'</p><p class="card-text extra-left"><small class="text-muted">'+fecha+'</small></p><p class="card-text extra-right"><small class="text-muted">'+vistos+'<img src="images/visto.png" style="width:20px;" alt="Vistos"></small></p></div></div>';
            }else if (cual == 'video'){
                var icono = post[j].icono;
                var titulo = post[j].titulo;
                var descripcion = post[j].descripcion;
                var fecha = post[j].fecha;
                var vistos = post[j].vistos.length;
                var video = post[j].video;
                var poner = ' <div class="card" style="width:100%;margin-bottom: 15px;"><img class="card-img-top" src="images/'+video+'" alt="'+titulo+'"><div class="card-body"><h5 class="card-title">'+titulo+'</h5><p class="card-text">'+descripcion+'</p><p class="card-text extra-left"><small class="text-muted">'+fecha+'</small></p><p class="card-text extra-right"><small class="text-muted">'+vistos+'<img src="images/visto.png" style="width:20px;" alt="Vistos"></small></p></div></div>';
            }else if (cual == 'texto'){
                var icono = post[j].icono;
                var titulo = post[j].titulo;
                var descripcion = post[j].descripcion;
                var fecha = post[j].fecha;
                var vistos = post[j].vistos.length;
                var poner = '<div class="card" style="width:100%;margin-bottom: 15px;"><div class="card-body"><h5 class="card-title">'+titulo+'</h5><p class="card-text">'+descripcion+'</p><p class="card-text extra-left"><small class="text-muted">'+fecha+'</small></p><p class="card-text extra-right"><small class="text-muted">'+vistos+'<img src="images/visto.png" style="width:20px;" alt="Vistos"></small></p></div></div>'
            }else if(cual == 'urgencia'){
                var icono = post[j].icono;
                var titulo = post[j].titulo;
                var descripcion = post[j].descripcion;
                var extra = post[j].extra;
                var fecha = post[j].fecha;
                var vistos = post[j].vistos.length;
                var poner = '<div class="card text-white bg-danger mb-3" style="max-wi100%8rem;"><div class="card-header">'+extra+'</div><div class="card-body"><h5 class="card-title">'+titulo+'</h5><p class="card-text">'+descripcion+'</p><p class="card-text extra-left"><small class="text-muted">'+fecha+'</small></p><p class="card-text extra-right"><small class="text-muted">'+vistos+'<img src="images/visto.png" style="width:20px;" alt="Vistos"></small></p></div></div>';
            }else if(cual == 'encuesta'){
                var icono = post[j].icono;
                var titulo = post[j].titulo;
                var respuestas = post[j].respuestas;
                var fecha = post[j].fecha;
                var vistos = post[j].vistos.length;
                var poner = '<div class="card" style="width:100%;margin-bottom: 15px;"><div class="card-body"><h5 class="card-title">'+titulo+'</h5><div class="form-check"><input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked><label class="form-check-label" for="exampleRadios1">'+respuestas[0]["respuesta"]+'</label><div class="progress"><div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: '+respuestas[0]["numero"]+'%" aria-valuenow="'+respuestas[0]["numero"]+'" aria-valuemin="0" aria-valuemax="100"></div></div></div><div class="form-check"><input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2"><label class="form-check-label" for="exampleRadios2">'+respuestas[1]["respuesta"]+'</label><div class="progress"><div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: '+respuestas[1]["numero"]+'%" aria-valuenow="'+respuestas[1]["numero"]+'" aria-valuemin="0" aria-valuemax="100"></div></div></div><div class="form-check"><input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3"><label class="form-check-label" for="exampleRadios3">'+respuestas[2]["respuesta"]+'</label><div class="progress"><div class="progress-bar bg-warning progress-bar-striped" role="progressbar" style="width: '+respuestas[2]["numero"]+'%" aria-valuenow="'+respuestas[2]["numero"]+'" aria-valuemin="0" aria-valuemax="100"></div></div><br><button type="button" class="btn btn-dark btn-lg btn-block">Votar</button><p class="card-text extra-left"><small class="text-muted">'+fecha+'</small></p><p class="card-text extra-right"><small class="text-muted">'+vistos+'<img src="images/visto.png" style="width:20px;" alt="Vistos"></small></p></div></div>';
            }else{
                var poner = "";
            }
            
             


            
            

            $('div.posteos').append(poner);
        }
    }

}

}, function (error) {
   console.log("Error: " + error.code);
});
 </script>        
    
        

        <div class="container-fluid">
            <div class="row separador">

                <div class="col-12 posteos">
                <h1 class="h1">Últimas comunicaciones</h1>
            
            
           
            
            <!--<div class="card" style="width:100%;margin-bottom: 15px;">
            <img class="card-img-top" src="images/video.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Cancion del Sapo Pepe</h5>
                <p class="card-text">Aprendida hoy en clase!!!</p>
                <p class="card-text extra-left"><small class="text-muted">Hace 7 minutos</small></p>
                <p class="card-text extra-right"><small class="text-muted">12
                    <img src="images/visto.png" style="width:20px;" alt="Vistos">
                </small></p>                </div>
            </div>

            <div class="card" style="width:100%;margin-bottom: 15px;">
            <div class="card-body">
                <h5 class="card-title">Lista de cosas para traer</h5>
                <p class="card-text">
                ||      -Carton</br>
                        -Hueveras</br>
                        -Bidones</br>
                        -Cajas de carton</br>
                        -Cartulina</br>
                        -Tapitas de botellas</br>
                        -Telgopor</br>
                </p>
                <p class="card-text extra-left"><small class="text-muted">Hace 5 horas</small></p>
                <p class="card-text extra-right"><small class="text-muted">43
                    <img src="images/visto.png" style="width:20px;" alt="Vistos">
                </small></p>                </div>
            </div>

            <div class="card text-white bg-danger mb-3" style="max-wi100%8rem;">
            <div class="card-header">Jueves 24 a las 18hs.</div>
            <div class="card-body">
                <h5 class="card-title">Reunion de padres</h5>
                <p class="card-text">Nos juntamos todos para debatir los ultimos temas del trimestre.</p>
                <p class="card-text extra-left"><small class="text-muted">Hace 1 dia</small></p>
                <p class="card-text extra-right"><small class="text-muted">7
                    <img src="images/visto.png" style="width:20px;" alt="Vistos">
                </small></p>            </div>
            </div>

            <div class="card" style="width:100%;margin-bottom: 15px;">
            <img class="card-img-top" src="images/fotopost3.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Aseo en clase</h5>
                <p class="card-text">Estamos de a poco aprendiendo a ordenar y juntar despues de jugar.
                    Por favor, mantener el ejemplo en casa.</p>
                <p class="card-text extra-left"><small class="text-muted">Hace 2 dias</small></p>
                <p class="card-text extra-right"><small class="text-muted">8
                    <img src="images/visto.png" style="width:20px;" alt="Vistos">
                </small></p>                </div>
            </div>

            <div class="card" style="width:100%;margin-bottom: 15px;">
            <div class="card-body">
                <h5 class="card-title">¿A dónde prefieren hacer la excusión?</h5>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                    al zoológico...
                </label>
                <div class="progress">
                    <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                    a un teatro...
                </label>
                <div class="progress">
                    <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                <label class="form-check-label" for="exampleRadios3">
                    Prefiero no hacer excursión.
                </label>
                <div class="progress">
                    <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <br>
                <button type="button" class="btn btn-dark btn-lg btn-block">Votar</button>
                <p class="card-text extra-left"><small class="text-muted">Hace 5 dias</small></p>
                <p class="card-text extra-right"><small class="text-muted">52
                    <img src="images/visto.png" style="width:20px;" alt="Vistos">
                </small></p>                </div>
            </div>-->

            </div>
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
