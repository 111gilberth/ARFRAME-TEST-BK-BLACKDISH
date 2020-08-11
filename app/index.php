<!-- Autor: AngelMqz--> /
<!--WEB: blackdish.mx -->
<!-- INFO: Codigo de programacion para implementacion de realidad aumentada web, con A-frame, -->
<!--  2020 todos los derechos reservados -->
<html>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
 
    <link href='https://fonts.googleapis.com/css?family=Alatsi' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
    <script src="https://cdn.rawgit.com/jeromeetienne/AR.js/dev/aframe/build/aframe-ar.js"></script>
    <script src="https://rawgit.com/donmccurdy/aframe-extras/master/dist/aframe-extras.loaders.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.0.5/gsap.min.js"></script>
    <script src="https://unpkg.com/merge-images"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="format-detection" content="telephone=no">
<meta name="mobile-web-app-capable" content="yes">

<!--Estilos -->
<style>
  .button {
   
    
    padding: 8px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
     font-size: 12px;
    margin: 3px 2px;
     background:white;
     border-radius: 50%;
     height: 70px;
     width: 70px;

  }
  .buttonimg{
       background-image:url(12.png);
       background-position:center;
       background-repeat:no-repeat;
     
  }


#output {
  display: inline-block;
  top: 4px;
  position: relative;
  border: dotted 1px #ccc;
  padding: 2px;
}

.button {
  border: solid 2px #ccc;
}

.menu2 {
    position:fixed;
    top:0px;
    width:100%;
    height:80px;
    background-color:black;
    z-index:100;
}
.logo2{
    z-index: 100;
    top: 0px;
    width: 100px;
    margin: 0px;
    margin-top: -30px;
    display: inline-block;
}
.navigation{
    width: 100%;
    list-style: none;
    text-align: center;
    height: 20px;
    line-height: 20px;
    display: inline-block;
}

.box{
	width:280px;
	height:90px;
    position:center;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius: 18px 18px 18px 18px;
    -moz-border-radius: 18px 18px 18px 18px;
    -webkit-border-radius: 18px 18px 18px 18px;


}
 .box{
	width:280px;
	height:90px;
    position:center;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius: 18px 18px 5px 5px;



}
.box2{
	width:280px;
	height:90px;
    position:center;
    text-align: center;
    text-decoration: none;
    display: inline-block;

    border-radius: 0px 0px 15px 15px;


}
.white{
	background:white;
}
p {
  margin: .5px 0;
}




.fle{
     width: 80px;
    height: 70px;
}
.start{
     width: 40px;
    height: 40px;
}
.two{
    position: absolute;
    width: 3%;
    height: 2.5%;
    top: 4.8%;
    left: 40%;
    opacity: 0.2;
}
.start1{
    position: absolute;
    width: 4%;
    height: 3.7%;
    top: 4.4%;
    left: 27%;
}
.textp{

    position: absolute;

    top: 25px;
    width:200px;
    text-align:
    center;

}
iframe{
    width:100%;
    height:60px;
    border-style:none ;
}
.box3{
    width:100%;
    height:60px;
}
.texd{
   font-size: 16px; 
    margin: 1px ;
    text-align: justify;
    font-family: 'Lato', ;
}
  </style>
  <!-- Fin De Estilos -->

  <!-- Script Mostrar y Ocultar Detalles -->
<script languague="javascript">
        function mostrar() {
            div = document.getElementById('flotante');
            div.style.display = '';
        }

        function cerrar() {
            div = document.getElementById('flotante');
            div.style.display = 'none';
        }
</script>
<script type='text/javascript'>
	document.oncontextmenu = function(){return false}
</script>
<!--Fin Script   -->

  <!--Div Menu  -->
  <div class="box3 white" style='position: fixed; bottom: 0; right: 0; left: 0%; top: 0%; width:100%; text-align: center; z-index: 1;'>

<?php include("cabecera.html"); ?>
    

</div>



 <!-- Fin Div Menu -->
 <!-- Div Flecha -->
 <div  style='position: fixed; bottom: 0; right: 0; left: 0%; top: 8%; width:100%; text-align: center; z-index: 1; '>
      <img class="fle" src="angle-up2.png" >
     </div>
 <!-- Fin div Flecha -->
 <!-- Div Atras -->
 <div  style='position: fixed; bottom: 0; right: ; left: 0; top: 84%; width:35%; text-align: center; z-index: 1;'>
     <img class="fle" src="return.png" >
     </div>
 <!-- Fin Div Atras -->
 <!-- Div strella -->
 <div  style='position: fixed; bottom: 0; right: ; left: 0; top: 86.5%; width:180%; text-align: center; z-index: 1;'>
     <img class="start" src="assets/start.png" >
     
     </div>
 <!-- Fin Div Strella -->
 <!-- Div Detalles -->
  <div  style='position: fixed; bottom: 0; right: 0; left: 0%; top: 15%; width:100%; text-align: center; z-index: 1; '>

<div class="box white">

    <p style="font-family:Alatsi;font-size: 16px; ">Tacos de pollo </p>
   <!--Precio -->
    <p align="right" style="margin: 1px  ; opacity: 0.6;">$100.00 </p><!--Precio -->
    <!--Clientes -->


    <p align="center" class="textp">(10&nbsp;&nbsp; &nbsp;  )</p>
    <img class=" two" src="assets/two.png" >
    <img class=" start1" src="starty.png" >
    <!--Precio -->

    <br>
    <!--Ocultar --><a href="javascript:mostrar();">Detalles<i class="fas fa-sort-down"></i> </a> 
    <div id="flotante" style="display:none;" >
     <div  class="box2 white" id="close"><a href="javascript:cerrar();"><i class="fas fa-sort-up"></i></a>
      <p class="textd" style="">Ricos tacos de pollo con jitomate y lechuga. </p>
      
</div>
  </div>
  </div>
  </div>
  <!-- Fin Div Detalles -->
  <div  style='position: fixed; bottom: 0; right: 0; left: 0%; top: 15%; width:100%; text-align: center; z-index: 1; '>
  
  </div>
  <!--  Div Contador -->



      <!-- Fin -->
  <!--Div Boton tomar foto -->
  <div  style='position: fixed; bottom: 0; right: 0; left: 0%; top: 84%; width:100%; text-align: center; z-index: 1;'>
 <button style='font-size:60px;' class= 'button buttonimg' id="snap-button"></button>
    <a  id="download-link" href="#"></a>

  </div>
  <!--Div Boton tomar foto Final -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="format-detection" content="telephone=no">
<body  style='margin: 0px; overflow: hidden; width:100%;'>

    <a-scene embedded arjs="debugUIEnabled: false;" vr-mode-ui="enabled: false">
    <!--Entidad para texto AR sin tarjet-->


     <a-marker preset='custom' type='pattern' url='assets/pattern-frame.patt'> <!--Tarjet para ubicar el platillo -->
              <!--Imagen a mostrar en AR(modelo) -->
                <a-image   width="4.3" height="2.6" src="tacos.png" look-controls  ></a-image>
                <!--Fin Modelo(modelo) -->

<!--Script Tomar foto -->

   <script>
      var m = document.querySelector("a-marker")
      m.addEventListener("markerFound", (e)=>{
      console.log("found")
      var v = document.querySelector('#mivideo').play();

})
      m.addEventListener("markerLost", (e)=>{
      console.log("lost")
      var v = document.querySelector('#mivideo').play();


})





function resizeCanvas(origCanvas, width, height) {
  let resizedCanvas = document.createElement("canvas");
  let resizedContext = resizedCanvas.getContext("2d");

  resizedCanvas.height = height;
  resizedCanvas.width = width;

  resizedContext.drawImage(origCanvas, 0, 0, width, height);
  return resizedCanvas.toDataURL();
}

document.getElementById("snap-button").addEventListener("click", function() {
  let aScene = document.querySelector("a-scene").components.screenshot.getCanvas("perspective");
  let frame = captureVideoFrame("video", "png");
  aScene = resizeCanvas(aScene, frame.width, frame.height);
  frame = frame.dataUri;

  mergeImages([frame, aScene]).then(b64 => {
    let link = document.getElementById("download-link", "jpeg");
    link.setAttribute("download", "AR.jpeg");
    link.setAttribute("href", b64);
    link.click();
    console.log("foto tomada");
  });
});


function captureVideoFrame(video, format, width, height) {
        if (typeof video === 'string') {
            video = document.querySelector(video);
        }

        format = format || 'jpeg';

        if (!video || (format !== 'png' && format !== 'jpeg')) {
            return false;
        }

        var canvas = document.createElement("CANVAS");

        canvas.width = width || video.videoWidth;
        canvas.height = height || video.videoHeight;
        canvas.getContext('2d').drawImage(video, 0, 0);
        var dataUri = canvas.toDataURL('image/' + format);
        var data = dataUri.split(',')[1];
        var mimeType = dataUri.split(';')[0].slice(5)

        var bytes = window.atob(data);
        var buf = new ArrayBuffer(bytes.length);
        var arr = new Uint8Array(buf);

        for (var i = 0; i < bytes.length; i++) {
            arr[i] = bytes.charCodeAt(i);
        }

        var blob = new Blob([ arr ], { type: mimeType });
        return { blob: blob, dataUri: dataUri, format: format, width: canvas.width, height: canvas.height };
    };

     </script>
     <!--Fin Script tomar foto -->
      </a-marker>
      <!-- Fin marker-->
      <a-entity camera></a-entity> <!--Se inicializa la entidad con el el atributo camara que muestra el modelo solo cuando ve el tarjet, si no aparece el tarjet el modelo no aparece. -->
    </a-scene>
    <!--Fin de toda la escena AR -->
</body>


</html>
