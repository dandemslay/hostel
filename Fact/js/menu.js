
//---Start Menu ----//
$(document).ready( function() {
    //---- START NAV BAR MENU ---//
    $("#i-menu").load("html/menu.html");
    //---- END NAV BAR MENU ---//
    //---Start Open Mant
    $("#nav-mant").on("click", function() {
        $("#side_bar").load("html/mantenaince.html");    
    });
    //---End Open Mant
    //---Start Open Mant Users
    $("#i-user").on("click", function() {
        $("#form-container").load("html/mant-usr.html");
    });
    //---End Open Mant Users
    //---Start Open Mant Rights
    $("#i-rights").on("click", function() {
        $("#form-container").load("html/mant-rigths.html");
    });
    //---End Open Mant Rights
    
    $("#i-clie").on("click", function() {
        $("#side_bar").load("html/clients.html");    
    });
    $("#nav-fact").on("click", function() {
        $("#side_bar").load("html/facturation.html");    
    });
});
