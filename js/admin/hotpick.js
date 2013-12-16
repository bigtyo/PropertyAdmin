/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function submithotpick()
{
    var array = [];
    
    $(".selectedlist").each(function(index){
        if($(this).is(":checked")){
            var listingid = $(this).siblings(".listingid").html();
            
            array.push(listingid); 
        }
    });
    
    $.post('submithotpick',{
        listings : array,
        listid : $("#listid").val()
    },function(res){
        
    });
}
