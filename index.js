$(Document).ready(function () {
    $("#dv").click(function() {
        $("p").show("slow");         
    })
    $("#dv").hover(function() {    
        $("#tbl").show("fast");    
    },
    function() {    
        $("#tbl").hide("fast");    
    })
    $("#dv0").hover(
    function() {
        $(this).animate({"border-radius": "100px"},"fast");        
    },
    function() {
        $(this).animate({"border-radius": "0px"},"fast");
    })              
    // $(".el").click(handler); 
    $("#add_btn").click(
    function() {
        $("#adds").show("slow");
    })
})
function al(val) {
    $('#' + val).animate({height: "90px",
width: "110px"}, "fast");
}
function la(val){
    $('#' + val).animate({height: "70px",
width: "90px"}, "fast");
}
