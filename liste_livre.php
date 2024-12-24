<?php 
require_once "config.php";
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="overflow-x-auto">
      <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-lg">
        <thead>
          <tr class="bg-gray-800 text-white">
            <th class="py-3 px-4 text-left">Id</th>
            <th class="py-3 px-4 text-left">Titre</th>
            <th class="py-3 px-4 text-left">Auteur</th>
            <th class="py-3 px-4 text-left">Categorie</th>
            <th class="py-3 px-4 text-center">Date</th>
            <th class="py-3 px-4 text-center">Disponible</th>
          </tr>
        </thead>
        <tbody>
            <?php 
    
   
       $sql2 = "SELECT * from livres";
       $result = mysqli_query($conn, $sql2);
       while ($row = mysqli_fetch_row($result)) {
        if($row[5]==0) {
            $disponible="Non";
        }else{
            $disponible="Oui";
        }
         echo '<tr class="hover:bg-gray-100">
                 <td class="py-2 px-4 border-b">' . $row[0] . '</td>
                 <td class="py-2 px-4 border-b">' . $row[1] . '</td>
                 <td class="py-2 px-4 border-b">' . $row[2] . '</td>
                 <td class="py-2 px-4 border-b">' . $row[3] . '</td>
                 <td class="py-2 px-4 border-b">' . $row[4] . '</td>
                 <td class="py-2 px-4 border-b">' . $disponible . '</td>
               </tr>';
       }
     

     
  
     ?>
     
                
        
       
        
            
       
    
        </tbody>
      </table>
    </div>

<script src="script.js"></script>
</body>
</html>