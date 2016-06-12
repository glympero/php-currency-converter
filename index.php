<!DOCTYPE html>
<html lan="en_US">
<head>
    <meta charset="utf-8" />
    <title>Curency Converter</title>
    <script type="text/javascript" src="assets/js/lib/jquery-3.0.0.min.js"></script>
    <link href='assets/css/lib/bootstrap.min.css' rel='stylesheet' />
    <link href='assets/css/styles.css' rel='stylesheet' />
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
</head>
<body>
    <div class="container">
        <div class="page-header">
    
        <h1 class="center">Currency Converter</h1>
        </div>
        
        <form class="center" id="conversion" name="converter" action="" method="post" onsubmit="return checkSameCurrency()" role="form">
            <div class="form-group">
                <label for="from">From</label>
                <select name="from" class="form-control text-center" >
                    <?php 	require_once 'assets/php/controllers/modelController.php'; selectFromBox($fromCurrencies) ; ?>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="to">To</label>
                <select name="to" class="form-control">
                    <?php 	require_once 'assets/php/controllers/modelController.php'; selectToBox($toCurrencies) ; ?>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="c_input">Amount</label>
                <input type="number" step="any" class="form-control" name="camount" required=""/>
            </div>
            <br>
            <input type="submit" value="Convert" name="convert" class="btn btn-success"  />
        </form>
        <hr>
        <div id="result" class="center">
            <?php 	require_once 'assets/php/controllers/currencyController.php' ?>
        </div>
        <hr>
    </div>
    <footer class="center">
        <small>© Copyright 2016, Georgios Lymperopoulos</small>
    </footer>
    <script type="text/javascript" src="assets/js/validate.js"></script>
</body>
</html>