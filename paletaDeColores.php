<!DOCTYPE html>
<html lang="es">
<head>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src='js/spectrum.js'></script>
    <link rel='stylesheet' href='css/spectrum.css' />
    
<meta charset="utf-8" />
</head>
<body>
   <div id="color"><input type='text' class="colores" /> </div> 
 <samp type="text" color.toHexString()>Color del equipo</samp>
    <script>
        $(".colores").spectrum({
            color: "#f00",
            showPalette: true,
            palette: [
                ['black', 'white', 'blanchedalmond'],
                ['rgb(255, 128, 0);', 'hsv 100 70 50', 'lightyellow']
            ], 
            change: function(color) {
              //  alert(color.toHexString());
               $('samp').css("background-color",color.toHexString());
              
            }
        });
       

            </script>
</body>
</html>