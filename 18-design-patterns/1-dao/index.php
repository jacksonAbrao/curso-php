<?php
    include_once("db.php");
    include_once("dao/CarDAO.php");

    $carDao = new CarDAO($conn);

    $cars = $carDao->findAll();
?>

<h1>Insira um carro:</h1>
<form action="process.php" method="post">
    <div>
        <label for="brand">Marca:</label>
        <input type="text" name="brand" id="brand">
    </div>
    <div>
        <label for="km">Kilometragem:</label>
        <input type="text" name="km" id="km">
    </div>
    <div>
        <label for="color">Cor:</label>
        <input type="text" name="color" id="color">
    </div>
    <div>
        <input type="submit" value="Salvar">
    </div>
    
</form>

<ul>
    <?php foreach($cars as $car) : ?>
        <li>
            <?php echo $car->getBrand() . " - " . $car->getKm() . " - " . $car->getColor(); ?>
        </li>
    <?php endforeach; ?>
</ul>