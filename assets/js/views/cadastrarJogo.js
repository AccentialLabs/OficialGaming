/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function (){
    
    $("#myonoffswitch").change (function(){
        
       if($(this).is(':checked')){
        $("#status").val(1);
       } else{
           $("#status").val(0);
       };
           
    })
});


$(function (){
    
    $("#myonoffswitch2").change (function(){
        
       if($(this).is(':checked')){
        $("#status2").val(1);
       } else{
           $("#status2").val(0);
       };
           
    })
});