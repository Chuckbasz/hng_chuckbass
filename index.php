<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #ffffff;
}

.topnav a {
  float: right;
  display: block;
  color: #000000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: darkgrey;
  color: black;
}

.active {
  background-color: white;
  color: black;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }

  .footer{
  	margin-bottom: 0;
  	background-color: white;
  	padding-top: 200px;
  	height: 40px;
  }

}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
	<img src="image/butterfly.jpg" alt="My Logo" width="300px" height="110px">
  <a href="#gellery">GALLERY</a>
  <a href="#blog">BLOG</a>
  <a href="#sign_up">SIGN UP</a>
  <a href="#home" class="active">HOME</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<center>
<div class="container" style="margin-top: 200px;">
	<h4>WELCOME TO FIGMA</h4e>
	<p style="margin-top: -20px;"><h4>GREETINGS FROM CHUCKBASS TO HNG</h4></p>
  <p><strong>Current Time</strong> <?php
  // date_default_timezone_set('Africa/Lagos');
  //  echo date(' H:m:s', time());
   ?><span id="date_time"></span></p>
   
</div>
</center>


<div class="footer" style="background-color: white; height: 40px; margin-top: 200px; color: black">
	<center><p style="padding-top: 10px;"> COPYRIGHT OF CHUCKBASS HNG</p></center>
</div>
</body>
</html>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

function date_time(id)
{
        date = new Date;
        year = date.getFullYear();
        month = date.getMonth();
        months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'Jully', 'August', 'September', 'October', 'November', 'December');
        d = date.getDate();
        day = date.getDay();
        days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
        h = date.getHours();
        if(h<10)
        {
                h = "0"+h;
        }
        m = date.getMinutes();
        if(m<10)
        {
                m = "0"+m;
        }
        s = date.getSeconds();
        if(s<10)
        {
                s = "0"+s;
        }
        result = ''+days[day]+' '+months[month]+' '+d+' '+year+' '+h+':'+m+':'+s;
        document.getElementById(id).innerHTML = result;
        setTimeout('date_time("'+id+'");','1000');
        return true;
}
</script>
<script type="text/javascript">window.onload = date_time('date_time');</script>

