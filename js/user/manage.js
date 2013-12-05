$("#btnAddUser").click(function(){
    modalUser(null);
});


function modalUser(id)
{
    
    $("#modalContent").html("");
        //var id = $("")
        $.get('adduser',{
            id : id
        },function(res){

            $("#modalContent").html(res);
            $("#modalTitle").html("Menambah USer Baru");
    //        $("#tanggal"+aksi).datepicker();
            $("#btnSimpan").unbind('click');
            $("#btnSimpan").click(function(){
                simpanUser();
            });
        });
    
}

function simpanUser(){
    $.post('',{
        
    },function(res){
        
    });
}