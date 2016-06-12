<?php
    //Simulating an assosiative array with the currency exchange rates
    $rates = array(
        array(
            "from" => "EUR",
            "to" => "USD",
            "rate" => 1.3764
        ),
        array(
            "from" => "EUR",
            "to" => "CHF",
            "rate" => 1.2079
        ),
        array(
            "from" => "EUR",
            "to" => "GBP",
            "rate" => 0.8731
        ),
        array(
            "from" => "USD",
            "to" => "JPY",
            "rate" => 76.7200
        ),
        array(
            "from" => "CHF",
            "to" => "USD",
            "rate" => 1.1379
        ),
        array(
            "from" => "GBP",
            "to" => "CAD",
            "rate" => 1.5648
        )
    );
    //Creating a JSON string which will be the source for the application for the currency exchange rates.
    //The application can respond correctly to dynamically exchange rates as it reads them from a JSON string,
    //which can be provided independently to the application
    $encodedRates = json_encode($rates);

?>