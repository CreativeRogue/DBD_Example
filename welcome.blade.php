<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

      
    </head>
    <body>
      
<?php
                   
$data = file("../assets/w0000002.txt");

foreach ($data as $value) {
    
 $value2=explode(";",$value);

foreach($value2 as $value) {
  if (empty($value)) 
  {
    continue;
   }

 echo $value . " $ ";
}echo "<br/>";
      


}
 
  ?>          
    </body>
</html>
