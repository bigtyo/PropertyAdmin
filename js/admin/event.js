/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$("#tanggal").datepicker();

function edit(id){
    $.post('getEvent',{
        eventid : id
    },function(data){
//        $("#btnSimpan").unbind('click');
//        $("#btnSimpan").click(function(){
//            update();
//        });
        $("#modalId").val(data.eventid);
        $("#judul").val(data.judul);
        $("#tanggal").val(data.tanggal);
        $("#tanggal").datepicker();
        $("#tempat").val(data.Tempat);
        $("#description").val(data.description);
    });
}

function formNew(){
    $("#modalContent").find("input").val("");
}


function save(){
    
}

function update(){
    
}