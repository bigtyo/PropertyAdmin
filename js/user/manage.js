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
    $.post('simpanuser',{
        loginid : $("#login").val(),
        nama : $("#nama").val(),
        email : $("#email").val(),
        telepon : $("#telepon").val(),
        ismarketing : $("#marketing").is(':checked'),
        isadmin : $("#admin").is(':checked'),
        isprincipal : $("#principal").is(':checked')
        
        
    },function(res){
        var json = res;
        if(json.status == 0){
            alert(json.error);
        }
    });
}