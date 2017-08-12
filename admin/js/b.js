$(document).ready(function(){
    //alert("Working");
    
    $('#selectall').click(function(){
      
      if(this.checked){
        $('.checkBox').each(function(){
            this.checked=true;
        });
    }
        else
            {
                $('.checkBox').each(function(){
                    this.checked=false;
                });
            }
      
      
      });
    
    
});

//function loadonlineuser()
//{
//    alert("hello");
//    .get("method.php?online=rel",function(data){
//        $('.usercount').text(data);
//    });
//}
//loadonlineuser();
//setInterval(function(){
//loadonlineuser();    
//},500);
//
//alert("hello");
