/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function modalUser(id)
{
    $.post('getDokumen',{id : id},function(json){
        $("#modalId").val(id);
        $("#nama").val(json.NAMA);
        
    });
}

