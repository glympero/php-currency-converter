<?php
    //Include the exchange rates
    include('assets/php/models/exchangeRates.php');
    
    $rateFound = false;

	if (isset($_POST['convert'])) {
        //Validate and filter input data
		$from   = filter_input(INPUT_POST, 'from', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_ENCODED) ;
        $to     = filter_input(INPUT_POST, 'to', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_SANITIZE_ENCODED) ;
        $camount = filter_input(INPUT_POST, 'camount', FILTER_VALIDATE_INT);
        //Get the absolute value of the amount to convert
        $amount = abs($camount);
        
        //Getting a JSON file with the dynamically updated exhange rates
        //and convert them to an associative array
        $rates = json_decode($encodedRates, true);
        
        //If there is a value to convert
        if($amount != ''){
            //Iterate through the assosiative array
            foreach($rates as $rate) {
                //if the input base currency exists 
                if ($rate['from'] == $from) {
                    //if the target currency exists
                    if ($rate['to'] == $to) {
                        //Get the exchange rate and convert the value that needs to be converted
                        $result = $amount * $rate['rate'];
                        echo "<div class='alert alert-success'>";
                        echo $rate['from']. " ==> " .$result. " " .$rate['to'];
                        echo "</div>";
                        $rateFound = true;
                        
                        
                    } 
                }
            }
            //If the base or target currency has not be found, inform user
            if($rateFound == false){    
                exchangeRateNotAvailable($from, $to);
            }
        }
    }else{
        echo "<div class='alert alert-info'>";
        echo 'Ready to convert...';
        echo "</div>";
    }
    
    //This function informs the user that a specific conversion is not available yet
    function exchangeRateNotAvailable($from, $to){
        echo "<div class='alert alert-danger'>";
        echo "Conversion from " .$from. " to " .$to. " is not available yet.";
        echo "</div>";
    }
    
   
 ?>