<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
      
    </head>
    <body>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
            
            <?php
              //Function to strip each line of the datafile into individual arrays x variable passed from the function call 
            function DfExtraction($x)
            {
             //php explode used to strip the loaded datafile into master array
             $array = explode("\n", file_get_contents('../assets/w0000002.txt'));
             //grab the key from above and isolate by array key number via x variable passed from function parameter
             $exploded1 = array_values($array)[$x];
             //php explode used again to strip the array string into final array
             $result = explode(";", $exploded1);
             // returned result is an array selected by passing a number in x
             return $result;
             }
        
        //Grab an array and pass it to a variable     
        $File_header = (DfExtraction($x ="0"));
        $Dealer_information = (DfExtraction($x ="1"));
        $Dealer_address = (DfExtraction($x ="2"));
        $Dealer_delivery_address = (DfExtraction($x ="3"));
        $Project_info = (DfExtraction($x ="4"));


        //Output array data in tables or any other html
?>

<h4 class="text-center">File header</h4>
   <table class="table">
    <thead>
      <tr>
        <th>FileTypeID</th>
        <th>FileVersion</th>
        <th>MinorVersion</th>
        <th>DateStamp</th> 
        <th>TimeStamp</th>
        <th>AppName</th>
        <th>AppVersion</th> 
      </tr>
    </thead> 
    <tbody
     <tr>
        <td><?php echo $File_header[1];?></td>
        <td><?php echo $File_header[2];?></td>
        <td><?php echo $File_header[3];?></td>
        <td><?php echo $File_header[4];?></td>
        <td><?php echo $File_header[5];?></td>
        <td><?php echo $File_header[6];?></td>
        <td><?php echo $File_header[7];?></td>
     </tr>
    </tbody>
   </table>
   
   <h4 class="text-center">Dealer address</h4>
  
   <table class="table">
        <tbody>
          <tr><th>FullName</th><td><?php echo $Dealer_address[1];?></td><th>Ref.Fax</th><td><?php echo $Dealer_address[16];?></td></tr>
          <tr><th>Title</th><td><?php echo $Dealer_address[2];?></td><th>Ref.EMail</th><td><?php echo $Dealer_address[17];?></td></tr>
          <tr><th>Addr</th><td><?php echo $Dealer_address[3];?></td><th>Comment</th><td><?php echo $Dealer_address[18];?></td></tr>
          <tr><th>ZIP</th><td><?php echo $Dealer_address[4];?></td><th>Initials</th><td><?php echo $Dealer_address[19];?></td></tr>
          <tr><th>Post</th><td><?php echo $Dealer_address[5];?></td><th>SurName</th><td><?php echo $Dealer_address[20];?></td></tr>
          <tr><th>Phone</th><td><?php echo $Dealer_address[6];?></td><th>FirstName</th><td><?php echo $Dealer_address[21];?></td></tr>
          <tr><th>PhoneHome</th><td><?php echo $Dealer_address[7];?></td><th>Approach</th><td><?php echo $Dealer_address[22];?></td></tr>
          <tr><th>Mobile</th><td><?php echo $Dealer_address[8];?></td><th>Stage</th><td><?php echo $Dealer_address[23];?></td></tr>
          <tr><th>Fax</th><td><?php echo $Dealer_address[9];?></td><th>Country.Code</th><td><?php echo $Dealer_address[24];?></td></tr>
          <tr><th>EMail</th><td><?php echo $Dealer_address[10];?></td><th>Country.Value</th><td><?php echo $Dealer_address[25];?></td></tr>
          <tr><th>Ref.Name</th><td><?php echo $Dealer_address[11];?></td><th>Ref.Initials</th><td><?php echo $Dealer_address[26];?></td></tr>
          <tr><th>Ref.Title</th><td><?php echo $Dealer_address[12];?></td><th>Ref.SurName</th><td><?php echo $Dealer_address[27];?></td></tr>
          <tr><th>Ref.Phone</th><td><?php echo $Dealer_address[13];?></td><th>Ref.FirstName</th><td><?php echo $Dealer_address[28];?></td></tr>
          <tr><th>Ref.PhoneHome</th><td><?php echo $Dealer_address[14];?></td><th>Ref.Approach</th><td><?php echo $Dealer_address[29];?></td></tr>
          <tr><th>Ref.Mobile</th><td><?php echo $Dealer_address[15];?></td><th>WEB</th><td><?php echo $Dealer_address[30];?></td></tr>
      
        </tbody> 
  
       </table>
  
              </div>
          </div>
      </div>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" integrity="sha384-feJI7QwhOS+hwpX2zkaeJQjeiwlhOP+SdQDqhgvvo1DsjtiSQByFdThsxO669S2D" crossorigin="anonymous"></script>    </body>
</html>
