$("#btnAddUser").click(function(){
    $("#modalContent").html("");
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
});


function simpanUser(){
    $.post('',{
        
    },function(res){
        
    });
}