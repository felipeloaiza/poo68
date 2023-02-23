<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-Class</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="flex min-h-[100vh] justify-center items-center text-white">
     <main class="bg-black/20 h-[640px] w-[380px] rounded">
        
        <header class="flex justify-center items-center py-2 gap-5 bg-black/25 rounded-md">
            <a href="index.php">
            <h1 class="text-2xl"> 01-Class</h1>
        </header>
        <section class="p-5 my-2 overflow-y-auto h-[540px]">
       <?php 
       class Vehicle {
               // atributes
               public $brand;
               public $refer;
               public $Model;
               public $Color;
               // Methods
               public function setAttributes($brand, $refer, $Model, $Color){
               $this ->brand = $brand;
               $this ->refer = $refer;
               $this ->Model = $Model;
               $this ->Color = $Color;
            }

            
             public function getAttributes() {
                return "<div class='p-4 mb-4 flex-col ring-1 ring-white/50 rounded-md'>
                            <p><strong>brand:</strong> $this->brand </p>
                            <p><strong>refer:</strong> $this->refer </p>
                            <p><strong>Model:</strong> $this->Model </p>
                            <p><strong>Color:</strong> $this->Color </p>
                        </div>";
             }
            
            }
            $vehicle1 = new vehicle;
            $vehicle1 ->setAttributes('Volkswagen', 'Tiguan', '2023', 'Black');
            echo $vehicle1 -> getAttributes();

            $vehicle2 = new vehicle;
            $vehicle2 ->setAttributes('Renault', 'Stepway', '2023', 'Grey');
            echo $vehicle2 -> getAttributes();

            $vehicle3 = new vehicle;
            $vehicle3 ->setAttributes('Nissan', 'March', '2023', 'Blue');
            echo $vehicle3 -> getAttributes();

       ?>
        </section>
     </main>
     <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>




