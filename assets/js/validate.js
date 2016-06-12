//Prevent user to try to use same currency as base and target
function checkSameCurrency() {
    var from = document.forms["converter"]["from"].value;
    var to = document.forms["converter"]["to"].value;
    if (from === to) {
        var $newDiv = $("<div/>")   // creates a div element
                 .addClass("alert alert-warning")   // add a class
                 .html("<div>No need to convert same currency</div>");
        $("#result").html($newDiv);
        return false;
    }
}
