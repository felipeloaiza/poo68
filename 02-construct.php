<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta e="viewport" content="width=device-width, initial-scale=1.0">
    <title>02-construct</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="flex min-h-[100vh] justify-center items-center text-white">
     <main class="bg-black/20 h-[640px] w-[380px] rounded">
        
        <header class="flex justify-center items-center py-2 gap-5 bg-black/25 rounded-md">
        <a href="index.php"> 

        </a>
            <h1 class="text-2xl">02-construct</h1>
        </header>
        <section class="p-5 my-2 overflow-y-auto h-[540px]">
              <?php
              class playlist {
                //Attributes 
                private $name;
                private $artist = Array();
                private $album = Array();
                private $cover = Array();
                private $year = Array();
                //Methods
                public function setplaylist($artist, $album,$cover, $year) {
                    $this-> artist []= $artist;
                    $this-> album []= $album;
                    $this-> cover []= $cover;
                    $this-> year []= $year;
                
                }
                public function __contruct($name, $artist, $album,$cover, $year) {
                         $this-> name = $name;
                         $this-> artist = $artist;
                         $this-> album = $album;
                         $this-> cover = $cover;
                         $this->  year = $year;

 
                }
                public function getplaylist(){
                    echo "<div class='p-2 ring-1 ring-white/80 rounded-md'> 
                              <h2 class='text-center text-2xl my-4'>$this->name </h2>";
                              for($i =0; $i < count($this-> artist); $i++){
                              echo "<div class='p-2 mb-4 flex text-white/80 flex-col gap-4 bg-black/40 rounded-md'>
                              <p> <strong> album: </strong>".$this->album[$i]."</p>
                              <img src='".$this->cover[$i]."' alt='cover' widt='280px'>
                              <p> <strong>artist</strong>".$this->artist[$i]."</p>
                              <p> <strong>year: </strong>".$this->year[$i]."</p>
                              </div>";
                            }
                           "</div>";
                }
              }
              $myplaylist = new playlist ('my favaorite music');
              $myplaylist-> setplaylist ('Black Panter', 'dark mind', 'https://tinyurl.com/yxdrcz9c', 2010);
              $myplaylist-> setplaylist ('Black Panter', 'dark mind', 'https://tinyurl.com/bdcs9ajh', 2010);
              $myplaylist-> setplaylist ('Black Panter', 'dark mind', 'https://tinyurl.com/bdcs9ajh', 2010);
              $myplaylist-> setplaylist ('Black Panter', 'dark mind', 'https://tinyurl.com/bdcs9ajh', 2010);
              $myplaylist-> setplaylist ('Black Panter', 'dark mind', 'https://tinyurl.com/bdcs9ajh', 2010);
              $myplaylist-> getplaylist ();

              ?>
        </section>
     </main>
     <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>


