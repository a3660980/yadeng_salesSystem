      var count=0;
     var str="";


     
        
 
       

       

     
     $("#pro_btn").on('click',function(){
         
          count++;
           str="<div class='row' id=p1>";
  
  str+="<div class='col-md-1'>";
  str+="<input  type='button' onclick='deleterow(this)' value='刪除'>"; 
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
          str+="<input type='number' class='form-control' name='product_quantity[]' id='quota"+count+"' onchange='sum(this)'>";
       str+="</div>";
        
        str+="</div>";

        str+="<div class='col-md-1'>";
        str+="<div class='input-group'>";
         str+="<input type='text' class='form-control' name='product_price[]' id='price"+count+"' disabled='disabled' >";
       str+="</div>";
      
       
        str+="</div>";
       
        str+="<div class='col-md-1'>";
        str+="<div class='input-group'>";
        str+="<input type='text' class='form-control' name='product_discount[]' value='1'  id='discount"+count+"' onchange='sum(this)'>";
        str+="</div>";
        
        
        str+="</div>";
        str+="<div class='col-md-2'>";
        str+="<div class='input-group'>";
      
        
        str+="    <input type='text' class='form-control' name='product_sum[]' disabled='disabled' id='sum"+count+"'>";
       
        str+="</div>";
        str+="</div>";
       str+="</div>";
    
          
          
          
         $("#pro").append(str);
          
          
          
    
    
    
       $( "#code"+count ).autocomplete({
        source: '/html/Product/search.php',
        select: function(event, ui) {
                
                addrow(this,ui); 
                sum(this);
            }
          });
  
     });
     
     
     function sum(obj){
            var tr = $(obj).parent().parent().parent();
            var qty = $('[name="product_quantity[]"]', tr).val();
            var price = $('[name="product_price[]"]', tr).val();
            var dic = $('[name="product_discount[]"]', tr).val();
            
            $('[name="product_sum[]"]', tr).attr("value",qty*price*dic);
            sumtotal();
         
     }
     function addrow(obj,ui) {
         var tr = $(obj).parent().parent().parent();
         $('[name="product_name[]"]', tr).val(ui.item.name);
         $('[name="product_price[]"]', tr).val(ui.item.price);
         $('[name="product_quantity[]"]', tr).val(ui.item.quota);
     }
    function deleterow(obj) {
        var tr = $(obj).parent().parent().remove();
        sumtotal();
    }
 
   function sumtotal(){
       var sum=0;
       $('[name="product_sum[]"]').each(function(){
           if($(this).val()!="") {
              sum+=parseInt($(this).val());
           }
          
          
       });
       $('#sum').val(sum); 
   }
  

   