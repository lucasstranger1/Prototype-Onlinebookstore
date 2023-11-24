<!DOCTYPE html>
<html>
    <body>
        <?php
        class car {
            private $make;
            private $model;
            private $year;
            private $price;
            private $image;
            private $color;
            function __construct($make, $model, $year, $price, $image){
                $this->make = $make;
                $this->model = $model;
                $this->year = $year;
                $this->price = $price;
                $this->image = $image;
            }
            function getMake(){
                return $this->make;
            }
            function getModel(){
                return $this->model;
            }
            function getYear(){
                return $this->year;
            }
            function getPrice(){
                return $this->price;
            }
            function getImage(){
                return $this->image;
            }
            function getColor(){
                return $this->color;
            }
            function setMake($color){
                $this->color = $color;
            }
            function setModel($model){
                $this->model = $model;
            }
            function setYear($year){
                $this->year = $year;
            }
            function setPrice($price){
                $this->price = $price;
            }   
            function setImage($image){
                $this->image = $image;
            }
            function display(){
                echo "<img src='$this->image' alt='$this->make' style='width:200px;height:200px;'>";
                echo "<p>Make: $this->make</p>";
                echo "<p>Model: $this->model</p>";
                echo "<p>Year: $this->year</p>";
                echo "<p>Price: $this->price</p>";
            }
            function __destruct(){
                echo "The class is destroyed";
            }
        }
        $car1 = new car("Toyota", "Camry", 2014, 24000, "images/car1.jpg");
        $car1->display();
        $car2 = new car("Honda", "Accord", 2015, 28000, "images/car2.jpg");
        $car2->display();
        $car3 = new car("Nissan", "Altima", 2013, 17000, "images/car3.jpg");
        $car3->display();
        $car4 = new car("Ford", "Focus", 2012, 15000, "images/car4.jpg");
        $car4->display();
        $car5 = new car("Honda", "Civic", 2014, 21000, "images/car5.jpg");
        $car5->display();
        $car6 = new car("Toyota", "Corolla", 2014, 16000, "images/car6.jpg");
        $car6->display();
        $car7 = new car("Ford", "Taurus", 2016, 38000, "images/car7.jpg");
        $car7->display();
        $car8 = new car("Nissan", "Maxima", 2016, 44000, "images/car8.jpg");
        $car8->display();
        $car9 = new car("Toyota", "Prius", 2015, 32000, "images/car9.jpg");
        $car9->display();
        $car10 = new car("Honda", "Fit", 2014, 19000, "images/car10.jpg");
        $car10->display();
        $car11 = new car("Ford", "Mustang", 2016, 59000, "images/car11.jpg");
        $car11->display();
        $car12 = new car("Nissan", "370Z", 2016, 46000, "images/car12.jpg");
        $car12->display();
        $car13 = new car("Toyota", "Rav4", 2015, 34000, "images/car13.jpg");
        $car13->display();
        $car14 = new car("Honda", "Pilot", 2016, 41000, "images/car14.jpg");
        $car14->display();
        $car15 = new car("Ford", "Escape", 2016, 32000, "images/car15.jpg");
        $car15->display();
        $car16 = new car("Nissan", "Rogue", 2016, 38000, "images/car16.jpg");
        $car16->display();
        $car17 = new car("Toyota", "Highlander", 2016, 48000, "images/car17.jpg");
        $car17->display();
        $car18 = new car("Honda", "CR-V", 2016, 39000, "images/car18.jpg");
        $car18->display();
        $car19 = new car("Ford", "Edge", 2016, 41000, "images/car19.jpg");
        $car19->display();
        $car20 = new car("Nissan", "Pathfinder", 2016, 45000, "images/car20.jpg");
        $car20->display();
        $car21 = new car("Toyota", "4Runner", 2016, 46000, "images/car21.jpg");
        $car21->display();
        $car22 = new car("Honda", "Odyssey", 2016, 36000, "images/car22.jpg");
        $car22->display();
        
        ?>
    <?php
    //  echo readfile("carinfo.txt");
    // $infile=fopen("carinfo.txt","r") or die("Unable to open file!");
    // echo fread($infile,filesize("carinfo.txt"));
    // fclose($infile);
    // $infile=fopen("carinfo.txt","r") or die("Unable to open file!");
    // while(!feof($infile)){
    //     echo fgets($infile)."<br>";
    // }
    // fclose($infile);
    ?>
    </body>

</html>