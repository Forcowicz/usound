$(document).ready(function() {
    $("#hideInfoBox").click(function() {
       $("#infoBox").hide();
       $("#contactBox").show();
    });

    $("#hideContactBox").click(function () {
       $("#infoBox").show();
       $("#contactBox").hide();
    });
});