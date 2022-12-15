<?php

//autoloader
spl_autoload_register(function ($class) {
    $path = __DIR__ . DIRECTORY_SEPARATOR . $class . ".php";
    include_once $path;
});

testComposite();
testFactory();
testObserver();


//START AbstractFactory & FactoryMethod

function testFactory()
{
    $GUIManager = new \FactoryMethod\GUIManager();

//Android - not defined
//try {
//    $androidGUI = $GUIManager->createGUI("Android"); //Throw exception.
//    $androidGUI->createButton()->printButton();
//    $androidGUI->createInput()->printInput();
//    $androidGUI = null;
//} catch (Exception $exception) {
//    echo $exception->getMessage();
//    die;
//}

//Windows
    try {
        $windowsGUI = $GUIManager->createGUI(\FactoryMethod\GUIManager::WINDOWS_GUI);
        $windowsGUI->createButton()->printButton();
        $windowsGUI->createInput()->printInput();
        $windowsGUI = null;
    } catch (Exception $exception) {
        echo $exception->getMessage();
        die;
    }

//MAC
    try {
        $macGUI = $GUIManager->createGUI(\FactoryMethod\GUIManager::MAC_GUI);
        $macGUI->createButton()->printButton();
        $macGUI->createInput()->printInput();
        $macGUI = null;
    } catch (Exception $exception) {
        echo $exception->getMessage();
        die;
    }

//Ubuntu
    try {
        $ubuntuGUI = $GUIManager->createGUI(\FactoryMethod\GUIManager::UBUNTU_GUI);
        $ubuntuGUI->createButton()->printButton();
        $ubuntuGUI->createButton()->printButton();
        $ubuntuGUI->createInput()->printInput();
        $ubuntuGUI->createInput()->printInput();
        $ubuntuGUI = null;
    } catch (Exception $exception) {
        echo $exception->getMessage();
        die;
    }
}

//END


//START Composite

/**
 * Голяма Цветна кутия - 10.00
 *  - Средна Шарена кутия - 6.20
 *    - Колата на барби - 11.20
 *  - Малка Розова кутия - 2.44
 *    - Кукла Барби - 14.02
 *  - Къщика на кукла барби - 22.20
 */
function testComposite()
{
    try {
//        $bigBox = (new \Composite\Box())
//            ->setPrice(-10.00) // Throw exception
//            ->setName("Голяма Цветна кутия");

        $bigBox = (new \Composite\Box())
            ->setPrice(10.00)
            ->setName("Голяма Цветна кутия");

        $middleBox = (new \Composite\Box())
            ->setPrice(6.20)
            ->setName("Средна Шарена кутия");

        $car = (new \Composite\Product())
            ->setPrice(11.20)
            ->setName("Колата на барби");

        $smallBox = (new \Composite\Box())
            ->setPrice(2.44)
            ->setName("Малка Розова кутия");

        $barbi = (new \Composite\Product())
            ->setPrice(14.02)
            ->setName("Кукла Барби");

        $house = (new \Composite\Product())
            ->setPrice(22.20)
            ->setName("Къщика на кукла барби");

        $bigBox->add($middleBox);
        $bigBox->add($smallBox);
        $bigBox->add($house);

        $middleBox->add($car);
        $smallBox->add($barbi);

        echo "Съдържание на подаръка: " . $bigBox->getContent() . "<br />";
        echo "Цена на подаръка: " . $bigBox->getTotalPrice() . "<br/>";
        echo "<br /><br /><br />";
    } catch (Exception $exception) {
        echo $exception->getMessage();
        die;
    }
}

//END

//START Observer

/**
 * Apple пускат новия Iphone 15 и трябва да уведомят хората, които чакат за да го купят.
 */
function testObserver()
{
    $weatherData = new \Observer\WeatherData();

    $currentConditionsDisplay = new \Observer\CurrentConditionsDisplay($weatherData);
    $currentConditionsDisplay->display();

    $forecastDisplay = new \Observer\ForecastDisplay($weatherData);
    $forecastDisplay->display();

    $weatherData->setMeasurements(20,997);
    $weatherData->setMeasurements(22,999);
    $weatherData->removeObserver($forecastDisplay);
    $weatherData->setMeasurements(24,1005);
}
//END
