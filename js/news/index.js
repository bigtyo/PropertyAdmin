/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


$(".timeline-images").each(function(){
    var listid = $(this).attr("id");
    
    var id = listid.replace("list_","");
    var ul = $(this);
    $.get(NODE_URL+"imageslistingbackend",{
        listingid : id
    },function(res){
        ul.html(res);
    });
});