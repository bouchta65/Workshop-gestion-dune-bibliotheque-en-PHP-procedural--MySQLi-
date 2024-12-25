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
<button id="Ajouter_Livre" class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
  Ajouter un livre
</button>
<a href="liste_livre.php"><button class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
  Display les livres
</button>
</a>
</br>
</br>
<div id="LivreModel" class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-50 z-50 hidden">
  <form id="ArticleForm" class="bg-white rounded-lg w-full max-w-[40rem]  p-4 sm:p-6 shadow-lg overflow-y-auto" method='POST' action='#' >
    <div class="flex justify-between items-center mb-4 sm:mb-6">
      <h2 class="text-xl sm:text-2xl font-semibold text-gray-800">New Livre</h2>
      <button  id="closearticlemodel" class="text-gray-500 hover:text-gray-700 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>

    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-6">
      <!-- Left Side Inputs -->
      <div class="w-full space-y-4">
      <div class="flex flex-col">
          <label for="titre" class="font-medium text-gray-600 text-sm sm:text-base ">Title</label>
          <input type="text" id="titre" name="titre" class="mt-2 p-2 sm:p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required  >
        </div>
        <div class="flex flex-col">
          <label for="Auteur" class="font-medium text-gray-600 text-sm sm:text-base ">Auteur</label>
          <input type="text" id="Auteur" name="Auteur" class="mt-2 p-2 sm:p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required  >
        </div>
        <div class="flex flex-col">
          <label for="Categorie" class="font-medium text-gray-600 text-sm sm:text-base ">Categorie</label>
          <input type="text" id="Categorie" name="Categorie" class="mt-2 p-2 sm:p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required >
        </div>
        <div class="flex flex-col">
          <label for="Date" class="font-medium text-gray-600 text-sm sm:text-base ">Date Ajout</label>
          <input type="Date" id="Date" name="Date" class="mt-2 p-2 sm:p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required >
        </div>
        <div class="flex flex-col">
          <label for="Titre_Article" class="font-medium text-gray-600 text-sm sm:text-base ">Disponible</label>
          </div>
          <label for="oui">Oui</label>
            <input type="radio" id="oui" name="response" value="1">

            <label for="non">Non</label>
            <input type="radio"  id="non" name="response" value="0">
     
       
      </div>
    </div>

    <div class="mt-6 sm:mt-8 flex justify-between space-y-4 sm:space-y-0 sm:flex-row">
      <button id="closeModalBtn" class="bg-red-500 text-white py-2 sm:py-3 px-6 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">Annuler</button>
      <input type="submit" value="Valider" name="validateForm" id="validateForm" class="bg-green-600 text-white py-2 sm:py-3 px-6 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
    </div>
  </form>
</div>
<?php 


class Livre {
    private $conn;
    private $titre;
    private $auteur;
    private $categorie;
    private $date;
    private $response;

    public function __construct($conn, $titre, $auteur, $categorie, $date, $response) {
        $this->conn = $conn;
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->categorie = $categorie;
        $this->date = $date;
        $this->response = $response;
    }

    public function addLivre() {
        $sql = "INSERT INTO livres (titre, auteur, categorie, date_ajout, disponible) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sssss", $this->titre, $this->auteur, $this->categorie, $this->date, $this->response);
        $stmt->execute();
        $stmt->close();
    }
}
if(isset($_POST['validateForm'])){

    $titre = $_POST['titre'];
    $Auteur = $_POST['titre'];
    $Categorie = $_POST['titre'];
    $Date = $_POST['Date'];
    $response = $_POST['response'];

    $livre1 = new Livre($conn,$titre,$Auteur,$Categorie,$Date,$response,);
    $livre1->addLivre();
    }




?>

<script src="script.js"></script>
</body>
</html>