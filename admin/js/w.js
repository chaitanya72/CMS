function loadonlineuser()
{
        
    //alert("hello");
    $.get("method.php?online=rel", function(data){
        $(".usercount").text(data);
    });
}
//loadonlineuser()
setInterval(function(){
loadonlineuser();    
},500);

//alert("hello");