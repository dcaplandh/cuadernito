@include('menu')
<script>
  var iduser = 0;
  var cantPosts;

  var ref = firebase.database().ref();
  ref.on("value", function(snapshot) {
    cantPosts = snapshot.val().usuarios[iduser].posts.length;
    console.log(cantPosts);
  });

function crearUrgencia(iduser){
    var hoy = new Date();
    var dd = hoy.getDate();
    var mm = hoy.getMonth()+1; //January is 0!

    var yyyy = hoy.getFullYear();
    if(dd<10){
        dd='0'+dd;
    } 
    if(mm<10){
        mm='0'+mm;
    } 
    today = yyyy+'-'+mm+'-'+dd;
  firebase.database().ref('usuarios/'+iduser+'/posts/'+cantPosts+'/').set({
    
    
    "tipo" : "urgencia",
		"titulo" : $('#titulo').val(),
		"descripcion" : "",
		"extra" : $('#extra').val(),
		"fecha" : today,
		"vistos" : [
			{
			"quien" : "Padre de Ana Perez",
			"fecha" : "2018-03-09"
			}
			]
  });
  location.href = "http://localhost/cuadernito/public/";
}

/*firebase.database().ref('usuarios/0/posts/3/').update({
    
    
    "tipo" : "urgencia",
		"titulo" : "Reunion de Padres",
		"descripcion" : "Nos juntamos a debatir el presupuesto 2019",
		"extra" : "Jueves 24 a las 18hs.",
		"fecha" : "2018-06-24",
		"vistos" : [
			{
			"quien" : "Padre de Ana Perez",
			"fecha" : "2018-03-09"
			}
			]
  });*/
</script>

    <div class="container-fluid separador">
        <h1>Nueva Urgencia</h1>
        <div class="row">
            <div class="col-12">
            <form>
            <div class="form-group">
                <label for="formGroupExampleInput">Título</label>
                <input required type="text" class="form-control" id="titulo" placeholder="Ingresar título">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Descripción</label>
                <input required type="text" class="form-control" id="extra" placeholder="Ingresar descripción">
            </div>
            <button type="button" onclick="crearUrgencia(0)" class="btn btn-danger">Agregar Urgencia</button>
            </form>
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
    