
//---Start Menu ----//
$(document).ready( function() {
    //---- START NAV BAR MENU ---//
    $("#i-menu").load("html/menu.html");
    //---- END NAV BAR MENU ---//
        //---Start Open Mant
        $("#nav-mant").on("click", function() {
            $("#side_bar").load("html/menu-mantenaince.html");    
        });
        //---End Open Mant
        //---Start Open Mant Sub M
            //---Start Mant Users
            $("#i-user").on("click", function() {
                $("#form-container").load("html/mant-users.html");
            });
            //---End Mant Users
            //---Start Mant Rights
            $("#i-rights").on("click", function() {
                $("#form-container").load("html/mant-rigths.html");
            });
            //---End Mant Rights
            //---Start Mant Clients
            $("#i-clie").on("click", function() {
                $("#form-container").load("html/mant-clients.html");    
            });
            //---End Open Mant Clients
        //---End Open Mant Sub M
        //---Start Open Fact
        $("#nav-fact").on("click", function() {
            $("#side_bar").load("html/menu-facturation.html");    
        });
        //---End Open Fact
        //---Start Open Fact Sub M
            //---Start Open Fact Browse
            $("#i-brow").on("click", function() {
                $("#form-container").load("html/fact-brow.html");    
            });
            //---End Open Fact Browse
 
            //---Start Open Fact Form
            $("#i-fact").on("click", function() {
                $("#form-container").load("html/fact-form.html");    
            });
            //---End Open Fact Form

            //---Start Open Fact Budget
            $("#i-budg").on("click", function() {
                $("#form-container").load("html/fact-budg.html");    
            });
            //---End Open Fact Budget

            //---Start Open Fact Reports
            $("#i-repo").on("click", function() {
                $("#form-container").load("html/fact-repo.html");    
            });
            //---End Open Fact Reports
        //---End Open Fact Sub M
});
