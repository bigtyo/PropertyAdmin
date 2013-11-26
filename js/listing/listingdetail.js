function showmodal(aksi,id)
{
    $("#modalContent").html("");
    $.get('add'+aksi,{
        id : id
    },function(res){
        
        $("#modalContent").html(res);
        $("#modalTitle").html(aksi);
        $("#tanggal"+aksi).datepicker();
        $("#btnSimpan").unbind('click');
        $("#btnSimpan").click(function(){
            var funcName = "simpan"+aksi;
            var fn = window[funcName];
            fn();
        });
    });
}


function simpanAktivitas()
{
    $.post('../listing/saveAktivitas',{
        id : $("#modalId").val(),
        marketingid : $("#marketing").val(),
        listingid : $("#listingid").html(),
        tanggal : $("#tanggalAktivitas").val(),
        jenis : $("#selJenisAktivitas").val(),
        nama_customer : $("#nama_customer").val(),
        keterangan : $("#keterangan").val()
    },function(res){
        if(res.status == 1){
            var row = "<tr id='tr_akt_"+res.id+"' >"+
                        "<td>"+$("#tanggalAktivitas").val()+"</td>"+
                        "<td>"+$("#selJenisAktivitas").children(':selected').html()+"</td>"+
                        "<td>"+$("#nama_customer").val()+"</td>"+
                        "<td>"+$("#keterangan").val()+"</td>"+
                        "<td>" +
                            "<a href='#modalAktivitas' role='button' class='btn' onclick='showmodal(\"Aktivitas\","+res.id+");' data-toggle='modal' >edit</a>" +
                            "<a href='#' class='btn'>delete</a>"+
                        "</td>"+
                      "</tr>";
            $("#dataaktivitas").append(row);
        }else if(res.status == 2){
            var rowupdate =     "<td>"+$("#tanggalAktivitas").val()+"</td>"+
                                "<td>"+$("#selJenisAktivitas").children(':selected').html()+"</td>"+
                                "<td>"+$("#nama_customer").val()+"</td>"+
                                "<td>"+$("#keterangan").val()+"</td>"+
                                "<td>" +
                                    "<a href='#modalAktivitas' role='button' class='btn' onclick='showmodal(\"Aktivitas\","+res.id+");' data-toggle='modal' >edit</a>" +
                                    "<a href='#' class='btn'>delete</a>"+
                                "</td>";
           $("#tr_akt_"+res.id).html(rowupdate);
        }else{
            alert(res.error);
        }
            
    });
}

function simpanPromosi()
{
    $.post('../listing/savePromosi',{
        id : $("#modalId").val(),
        marketingid : $("#marketing").val(),
        listingid : $("#listingid").html(),
        tanggal : $("#tanggalPromosi").val(),
        jenispromosiid : $("#selJenisPromosi").val(),
        jumlah : $("#jumlah").val()
        
    },function(res){
        if(res.status == 1){
            var row = "<tr id='tr_pro_"+res.id+"'>"+
                        "<td>"+$("#tanggalPromosi").val()+"</td>"+
                        "<td>"+$("#selJenisPromosi").children(':selected').html()+"</td>"+
                        "<td>"+$("#jumlah").val()+"</td>"+
                        
                        "<td>" +
                            "<a href='#modalAktivitas' role='button' class='btn' onclick='showmodal(\"Promosi\","+res.id+");' data-toggle='modal' >edit</a>" +
                            "<a href='#' class='btn'>delete</a>"+
                        "</td>"+
                      "</tr>";
            $("#datapromosi").append(row);
        }else if(res.status == 2){
           var rowupdate =  "<td>"+$("#tanggalPromosi").val()+"</td>"+
                            "<td>"+$("#selJenisPromosi").children(':selected').html()+"</td>"+
                            "<td>"+$("#jumlah").val()+"</td>"+
                        
                            "<td>" +
                                "<a href='#modalAktivitas' role='button' class='btn' onclick='showmodal(\"Promosi\","+res.id+");' data-toggle='modal' >edit</a>" +
                                "<a href='#' class='btn'>delete</a>"+
                            "</td>";
           $("#tr_pro_"+res.id).html(rowupdate);
        }else{
            alert(res.error);
        }
    });
}