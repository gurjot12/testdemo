<html oncontextmenu="return false">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    
    $(document).keydown(function(e){        
        if(e.which === 123){
           return false;
        }
    });
    
    $(document).bind("contextmenu",function(e) { 
    	e.preventDefault(); 
    });
    
    
    
var xhr = new XMLHttpRequest();
xhr.responseType = 'blob';

xhr.onload = function() {
  
  var reader = new FileReader();
  
  reader.onloadend = function() {
  
    var byteCharacters = atob(reader.result.slice(reader.result.indexOf(',') + 1));
    
    var byteNumbers = new Array(byteCharacters.length);

    for (var i = 0; i < byteCharacters.length; i++) {
      
      byteNumbers[i] = byteCharacters.charCodeAt(i);
      
    }

    var byteArray = new Uint8Array(byteNumbers);
    var blob = new Blob([byteArray], {type: 'video/ogg'});
    var url = URL.createObjectURL(blob);
    
    document.getElementById('_video').src = url;
    
  }
  
  reader.readAsDataURL(xhr.response);
  
};

xhr.open('GET', 'http://web.iapptechnologies.com/blobVideo/river_murmur_splash_zen_relaxation_835.mp4');
xhr.send();

</script>        
        
    </head>
    <body oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;">
    
    <video controls="" preload="auto" id="_video"></video>

   
    
    </body>
</html>
