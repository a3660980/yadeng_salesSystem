      var count=0;
     var str="";
function countMyself() {
    // Check to see if the counter has been initialized
    if ( typeof countMyself.counter == 'undefined' ) {
        // It has not... perform the initialization
        countMyself.counter = 0;
    }

    // Do something stupid to indicate the value
    count=++countMyself.counter; 

     
     
  str="<div class='row' id='p1'>";
  str+="<div class='col-md-2'>";
  str+="</div>";
  str+="<div class='col-md-2'><div class='input-group'>";
  str+="<input id='code"+count+"' type='text' name='product_id[]' class='form-control'>";
  str+="</div>";
    str+="";
     str+="</div>";
     str+="<div class='col-md-2'>";
      str+="<div class='input-group'>";
         str+="<input id='name"+count+"' type='text' class='form-control' name='product_name[]' >"; 

       str+="</div>"; 

        str+="</div>";
        str+="<div class='col-md-1'>";
        str+="<div class='input-group'>";
str+="<input type='number' class='form-control' name='product_quantity[]' id='quota"+count+"'>";
       str+="</div>";
        
        str+="</div>";

        str+="<div class='col-md-1'>";
        str+="<div class='input-group'>";
         str+="<input type='text' class='form-control' name='product_price[]' id='price"+count+"' disabled='disabled' >";
       str+="</div>";
      
       
        str+="</div>";
       
       
        
        
       
        str+="<div class='col-md-2'>";
        str+="<div class='input-group'>";
      
        
        str+="    <input type='text' class='form-control' name='product_sum[]' disabled='disabled' id='sum"+count+"'>";
       
        str+="</div>";
        str+="</div>";
       str+="</div>";
    
       

       
}
     
     $("#pro_btn").on('click',function(){
         
          countMyself();
          $("#pro").append(str);
           
           
    
    
       $( "#code"+count ).autocomplete({
        source: '/html/Product/search.php',
        
        select: function(event, ui) {
                $('#name'+count).val(ui.item.name);
                $('#price'+count).val(ui.item.price);
                $('#quota'+count).val(ui.item.quota);
                 
                
            }
      
    });


     
    
     });
     
 
     
   
   