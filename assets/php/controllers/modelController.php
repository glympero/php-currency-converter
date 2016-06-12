<?php
include('assets/php/models/selectFromData.php');
include('assets/php/models/selectToData.php');

//This function takes the base currency and appends it to the select view
    function selectFromBox($fromCurrencies) {
        foreach ($fromCurrencies as $k => $v) {
            echo "<option value=\"$k\">$v</option>" ;
        }
    }

//This function takes the target currency and appends it to the select view
    function selectToBox($toCurrencies) {
        foreach ($toCurrencies as $k => $v) {
            echo "<option value=\"$k\">$v</option>" ;
        }
    }
?>