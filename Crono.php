
  <script src="js/jquery-3.1.1.min.js"></script>
   <script src="js/timer.jquery.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css"> 
   <link id="avast_os_ext_custom_font" href="css/fonts.css" rel="stylesheet" type="text/css"></head>
       <div class="container-fluid">
           <div class="text-center">
          
               
           </div>
               </div>
               
       <div class="jumbotron col-md-4 ">
           
           <h1 id="timerDiv">02:59:47</h1>
       </div>
               
               <div class="row">
                   <div class="col-md-4 col-md-offset-4">
                       
           <div class="col-md-4">
               Hora
           <input class="form-control" type="number" id="h" value="0" min="0" max="60">
           </div>
           <div class="col-md-4">
               Minutos
           <input class="form-control" type="number" value="1" min="0" max="60" id="m">
           </div>
           <div class="col-md-4">
               Segundos
           <input class="form-control" type="number" min="0" max="60" value="60" id="s">
           </div>
                 <div class="col-md-12">
                  <br>   
                 <button type="button" class="btn btn-success btn-lg btn-block" onclick="empezar()">Empezar</button>
                     </div>  
                      
           </div>
           </div>
     
               <br>
               <br>
               <div class="col-md-12 text-center">
   
       <script async="" src="js/funcion.js"></script>
<!-- Header -->
<ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-4331617637495482" data-ad-slot="2764029251"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

</div>
               </div>
      </div>
       
<script>
audio = new Audio("sound/alarma.mp3"); 
function empezar(){
  audio.pause();
  audio.currentTime = 0;
 $('#timerDiv').timer('remove');
 $('#timerDiv').timer({
   countdown: true,
   duration: $('#h').val()+"h"+$('#m').val()+"m"+$('#s').val()+'s',     
   callback: function() {  
       audio.addEventListener('ended', function() {
   this.currentTime = 0;
   this.play();
}, false);
       audio.play();
   },
   format: '%H:%M:%S'  
});
   }
</script>
       <script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
 ga('create', 'UA-74824848-1', 'auto');
 ga('send', 'pageview');
</script>
