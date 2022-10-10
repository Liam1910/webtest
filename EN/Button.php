<?php session_start();

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>

<!doctype html>
<html>
<head>
 <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div id="YT">
      <div id="YTd">
         <button onclick="YTo()" id="YTb">YouTube</button>
      </div>
      <div id="YTd2"></div>
   </div>
<div id="EDA">
      <div id="EDAd">
         <button onclick="EDAo()" id="EDAb">EasyEDA</button>
      </div>
      <div id="EDAd2"></div>
   </div>
<div id="FnF">
      <div id="FnFd">
         <button onclick="FnFo()">Friday Night Funkin</button>
      </div>
      <div id="FnFd2"></div>
   </div>
<div id="wwp">
      <div id="wwpd">
         <button onclick="wwpo()">WinWorldPc</button>
      </div>
      <div id="wwpd2"></div>
   </div>
<div id="web">
      <div id="webd">
         <button onclick="webo()">Webador</button>
      </div>
      <div id="webd2"></div>
   </div>
<div id="pdf">
      <div id="pdfd">
         <button onclick="pdfo()">Pdf.io</button>
      </div>
      <div id="pdfd2"></div>
	</div>
<div id="Mlw">
      <div id="Mlwd">
         <button onclick="Mlwo()">Malwarewatch</button>
      </div>
      <div id="Mlwd2"></div>
   </div>
<div id="DLMlw">
      <div id="DLMlwd">
         <button onclick="DLMlwo()">dl.Malwarewatch</button>
      </div>
      <div id="DLMlwd2"></div>
   </div>
<br>
<br>
<a href="./main.php" class="Link">Go Back</a>

 <script src="/scripts/js/script.js"></script>
</body>
    
</html>
