var map = {};
var marker = {};
function activateForm(obj,index){
    $(obj).siblings().removeClass('active');
    $(obj).addClass('active');
    $(".form-content").fadeOut();
    $("#form"+index).fadeIn();
    
    if(index == 3){
        google.maps.event.addDomListener(window, 'load', initialize);
        google.maps.event.addListener(map, 'click', function(event) {
            debugger;
            //placeMarker(event.latLng);
            saveLongitude(event.latLng);
        });
    }
} 

function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(-7.340675,112.715607),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
}



function addListingBaru()
{
    var json = {};
    var jsonCustomer = {};
    jsonCustomer.NAMA = $("#L_Nama_Pemilik").val();
    jsonCustomer.TELEPON = $("#L_Telepon_Pemilik").val();
    jsonCustomer.EMAIL = $("#L_Email_Pemilik").val();
    jsonCustomer.VENDOR = 1;
    
    
    json.LUAS_BANGUNAN = Number($("#luasB").val());
    json.LUAS_TANAH = Number($("#luasT").val());
    json.FURNISHED = 1; //default
    json.KAMAR_TIDUR = Number($("#kamarTidur").val());
    json.LANTAI = Number($("#lantai").val());
    json.DAYA_LISTRIK = Number($("#listrik").val());
    json.SERTIFIKAT = Number($("#sertifikat").val());
    json.KONDISI = Number($("#kondisi").val());
    json.KAMAR_MANDI = Number($("#kamarMandi").val());
    json.GARASI = Number($("#garasi").val());
    json.JALUR_TELEPON = Number($("#jalurTelepon").val());
    json.HARGA = Number($("#Harga").val());
    json.ALAMAT_LENGKAP = $("#Alamat_Lengkap").val();
    json.ALAMAT_SINGKAT = $("#Alamat_Singkat").val();
    
    
    
    //json.TANGGAL = Date();
    json.AREAID = Number($("#selArea").val());
    json.LOKASIID = Number($("#selLokasi").val());
    json.PROPINSIID = Number($("#selPropinsi").val());
    json.KOTAID = Number($("#selKota").val());
    json.TIPEPROPID = Number($("#selProp").val());
    json.TIPELISTINGID = Number($("#selTipe").val());
    
    $.post('save',{
        datacustomer : JSON.stringify(jsonCustomer),
        datalisting : JSON.stringify(json)
    },function(res){
        var json = res;
        console.log(res);
    });
    //
}

function saveLongitude(latLng)
{
    
}

$(document).ready(function(obj){
    debugger;
    
    $("#galerryAdd").click(function(obj){
        //debugger;
        var content = $(".fileupload-preview.fileupload-exists.thumbnail").find('img').attr('src');
        var html = "<li>" +
                       '<a href="#">' +
                            '<div style="max-width: 200px; max-height: 150px;">'+
                                '<img src="'+content+'" alt="" />' +
                            '</div>'+
                       '</a>'+
                       '<div class="extras">'+
                            '<div class="extras-inner">'+
                                '<a href="'+content+'" class="colorbox-image" rel="group-1"><i class="icon-search"></i></a>'+
                                '<a href="#"><i class="icon-pencil"></i></a>' +
                                '<a href="#" class="del-gallery-pic"><i class="icon-trash"></i></a>'+
                            '</div>'+
                        '</div>'+
                    '</li>';
       $("#gallery").append(html).trigger('create');
       $(".colorbox-image").colorbox({
            
			maxWidth: "90%",
			maxHeight: "90%",
			
        });
    });
});

