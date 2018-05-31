<html>
</head>
<title> Whatsapp Share </title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function() {

var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};
 $(document).on("click", '.whatsapp', function() {
        if( isMobile.any() ) {

            var text = "";//$(this).attr("data-text");
            var url = $(this).attr("data-link");
            var message = encodeURIComponent(text) + " - " + encodeURIComponent(url);
            var whatsapp_url = "whatsapp://send?text=" + message;
            window.location.href = whatsapp_url;
        } else {
            alert("Please share this article in mobile device");
        }

    });
});
</script>
<style>
 .w3_whatsapp_btn {
    background-image: url('icon.png');
    border: 1px solid rgba(0, 0, 0, 0.1);
    display: inline-block !important;
    position: relative;
    font-family: Arial,sans-serif;
    letter-spacing: .4px;
    cursor: pointer;
    font-weight: 400;
    text-transform: none;
    color: #fff;
    border-radius: 2px;
    background-color: #5cbe4a;
    background-repeat: no-repeat;
    line-height: 1.2;
    text-decoration: none;
    text-align: left;
}

.w3_whatsapp_btn_small {
    font-size: 12px;
    background-size: 16px;
    background-position: 5px 2px;
    padding: 3px 6px 3px 25px;
}

.w3_whatsapp_btn_medium {
    font-size: 16px;
    background-size: 20px;
    background-position: 4px 2px;
    padding: 4px 6px 4px 30px;
}

.w3_whatsapp_btn_large {
    font-size: 16px;
    background-size: 20px;
    background-position: 5px 5px;
    padding: 8px 6px 8px 30px;
    color: #fff;
}
a.whatsapp { color: #fff;}
#share {
  text-align: center;
  width: 100%;
}
.w3_whatsapp_btn {
  background-color: #5cbe4a;
  background-image: url("icon.png");
  background-repeat: no-repeat;
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-radius: 2px;
  color: #ffffff;
  cursor: pointer;
  display: inline-block !important;
  font-family: Arial,sans-serif;
  font-weight: 400;
  letter-spacing: 0.4px;
  line-height: 1.2;
  position: relative;
  text-align: left;
  text-decoration: none;
  text-transform: none;
}
</style>
</head>
<body>
	<div id="share"> <p>WHATSAPP SHARE BUTTON</p> 
	<div id="sharebutton"><a data-text="Your message goes here.." data-link="https://www.google.co.in/" class="whatsapp w3_whatsapp_btn w3_whatsapp_btn_large">Share</a> </div></div>
</body>
</html>