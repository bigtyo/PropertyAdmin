function activateForm(obj,index){
    $(obj).siblings().removeClass('active');
    $(obj).addClass('active');
    $(".form-content").fadeOut();
    $("#form"+index).fadeIn();
} 

function setTipeCustomer(id)
{
    if(id == 1) return;
    if($("#chk" +id).is(":checked")){
        $("#li"+id).show();
    }else
    {
        $("#li"+id).hide();
    }
}

function addCallinBaru()
{
    var jsonCustomer = {};
   
    var historyJson = "";
    var listingJson = "";
    
    jsonCustomer.NAMA = $("#nama").val();
    jsonCustomer.EMAIL = $("#email").val();
    jsonCustomer.TELEPON = $("#telepon").val();
    jsonCustomer.ALAMAT = $("#alamat").val();
    jsonCustomer.INVESTOR = Number($("#chk1").is(":checked"));
    jsonCustomer.BUYER = Number($("#chk2").is(":checked"));
    jsonCustomer.VENDOR = Number($("#chk3").is(":checked"));
    
    if($("#chk2").is(":checked")){
       
        var jsonHistory = {};
        jsonHistory.LUAS_BANGUNAN = Number($("#luas_bangunan").val());
        jsonHistory.LUAS_TANAH = Number($("#luas_tanah").val());
        jsonHistory.FURNISHED = 0; //default
        jsonHistory.KAMAR_TIDUR = Number($("#kamar_tidur").val());
        jsonHistory.LANTAI = Number($("#lantai").val());

        //jsonHistory.SERTIFIKAT = Number($("#sertifikat").val());

        jsonHistory.KAMAR_MANDI = Number($("#kamar_mandi").val());

        jsonHistory.HARGA_AWAL = Number($("#harga_awal").val());
        jsonHistory.HARGA_AKHIR = Number($("#harga_akhir").val());
        jsonHistory.TANGGAL = Date();
        jsonHistory.AREAID = Number($("#selArea").val());
        jsonHistory.LOKASIID = Number($("#selLokasi").val());
        jsonHistory.PROPINSIID = Number($("#selPropinsi").val());
        jsonHistory.KOTAID = Number($("#selKota").val());
        jsonHistory.TIPEPROPID = Number($("#selProp").val());

        
        
        historyJson = JSON.stringify(jsonHistory);
    }
        
    if($("#chk2").is(":checked")){
        var jsonListing = {};
        jsonListing.AREAID = Number($("#selArea_listing").val());
        jsonListing.LOKASIID = Number($("#selLokasi_listing").val());
        jsonListing.PROPINSIID = Number($("#selPropinsi_listing").val());
        jsonListing.KOTAID = Number($("#selKota_listing").val());
        jsonListing.TIPEPROPID = Number($("#selProp_listing").val());
        jsonListing.ALAMAT_LENGKAP = Number($("#alamat_listing").val());
        
        listingJson = JSON.stringify(jsonListing);
    }
        
    
    $.post('saveCallin',{
        customerdata : JSON.stringify(jsonCustomer),
        historydata : historyJson,
        listingdata : listingJson,
        marketingid : Number($("#marketingid").val())
        
    },function(res){
        if(res.status != 1)
        {
            alert(res.error);
        }else{
            
            //window.location = "admin/callin";
        }
            
    });
}