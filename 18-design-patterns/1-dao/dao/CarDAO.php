<?php
    include_once("models/Car.php");

    class CarDAO implements CarDAOInterface {

        private $conn;

        public function __construct($conn) {
            $this->conn = $conn;
        }

        public function findAll() {
            $cars = array();

            $stmt = $this->conn->query("SELECT * FROM cars");

            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach($data as $car) {
                $newCar = new Car();

                $newCar->setId($car["id"]);
                $newCar->setBrand($car["brand"]);
                $newCar->setKm($car["km"]);
                $newCar->setColor($car["color"]);

                $cars[] = $newCar;
            }

            return $cars;
        }

        public function create(Car $car) {
            $stmt = $this->conn->prepare("INSERT INTO cars (brand, km, color) VALUES (:brand, :km, :color)");

            $stmt->bindValue(":brand", $car->getBrand());
            $stmt->bindValue(":km", $car->getKm());
            $stmt->bindValue(":color", $car->getColor());

            $stmt->execute();
        }
    }