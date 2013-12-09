var map = {};
var marker = {};
var statusSubmit = 0;
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



function addListingBaru(obj)
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
        datalisting : JSON.stringify(json),
        tempid : $("#tempid").val()
    },function(res){
        var json = res;
        if(Number(json.status == 1)){
            $("#listingid").val(json.listingid);
            statusSubmit = 1;
            //activateForm(obj,4);
        }else{
            alert(json.error);
        }
        
    });
    //
}

function saveLongitude(latLng)
{
    
}

$(document).ready(function(obj){
    
    $("#next").click(function(){
        var id = Number($("li.active").attr('id').replace("li",""));
        //$("li.active").removeClass("active.replace("li","");
        var selectedid = id++;
        
        if(selectedid == 4 ){
            // save listing disini
            if(statusSubmit == 0){
                addListingBaru(this);
            }else{
                activateForm(this,4);
            }
                
            
            
        }
        
        if(selectedid == 3)
        {
            
        
        }
        $("#li" + selectedid).click();
    });
    
    $("#selPropinsi").change(function() {
        var id = $(this).children(":selected").attr("id");
        $.post('getTempat',{
            id : id,
            tipe : 'Kota'
        },function(res){
            var html = "";
            for(var i=0;i<res.length;i++)
            {
                var data = "<option id='"+res[i].id+"'>"+res[i].nama+"</option>";
                html += data;
            }
            $("#selKota").html(html);
        });
    });
    $("#selKota").change(function() {
        var id = $(this).children(":selected").attr("id");
        $.post('getTempat',{
            id : id,
            tipe : 'Lokasi'
        },function(res){
            var html = "";
            for(var i=0;i<res.length;i++)
            {
                var data = "<option id='"+res[i].id+"'>"+res[i].nama+"</option>";
                html += data;
            }
            $("#selLokasi").html(html);
        });
    });
    
    $("#selLokasi").change(function() {
        var id = $(this).children(":selected").attr("id");
        $.post('getTempat',{
            id : id,
            tipe : 'Area'
        },function(res){
            var html = "";
            for(var i=0;i<res.length;i++)
            {
                var data = "<option id='"+res[i].id+"'>"+res[i].nama+"</option>";
                html += data;
            }
            $("#selArea").html(html);
        });
    });
    
    $("#galerryAdd").click(function(object){
        
        
        //debugger;
//        var content = $(".fileupload-preview.fileupload-exists.thumbnail").find('img').attr('src');
//        var html = "<li>" +
//                       '<a href="#">' +
//                            '<div style="max-width: 200px; max-height: 150px;">'+
//                                '<img src="'+content+'" alt="" />' +
//                            '</div>'+
//                       '</a>'+
//                       '<div class="extras">'+
//                            '<div class="extras-inner">'+
//                                '<a href="'+content+'" class="colorbox-image" rel="group-1"><i class="icon-search"></i></a>'+
//                                '<a href="#"><i class="icon-pencil"></i></a>' +
//                                '<a href="#" class="del-gallery-pic"><i class="icon-trash"></i></a>'+
//                            '</div>'+
//                        '</div>'+
//                    '</li>';
//       $("#gallery").append(html).trigger('create');
//       $(".colorbox-image").colorbox({
//            
//			maxWidth: "90%",
//			maxHeight: "90%"
//			
//        });
//        $("#loading").ajaxStart(function(){
//			$(this).show();
//		})
//		.ajaxComplete(function(){
//			$(this).hide();
//		});
        /*
			prepareing ajax file upload
			url: the url of script file handling the uploaded files
                        fileElementId: the file type of input element id and it will be the index of  $_FILES Array()
			dataType: it support json, xml
			secureuri:use secure protocol
			success: call back function when the ajax complete
			error: callback function when the ajax failed
			
                */
               //$(":file").attr('id','fileUploadID');
               
//		$.ajaxFileUpload
//		(
//			{
//				url:NODE_URL+"listing/uploadimage",
//				secureuri:false,
//				fileElementId:'imagefile',
//				dataType: 'json',
//                                data : {
//                                    listingid : $("#listingid").val()
//                                },
//				success: function (data, status)
//				{
//                                  $(":hidden[name=imagefile]").remove();
//					if(typeof(data.error) != 'undefined')
//					{
//						if(data.error != '')
//						{
//							alert(data.error);
//						}else
//						{
//							alert(data.msg);
//						}
//					}
//				},
//				error: function (data, status, e)
//				{
//                                    //$("#fileUploadID").removeAttr('id');
//                                     $(":hidden[name=imagefile]").remove();
//					alert(e);
//                                        
//				}
//			}
//		);
		
		

	  
    });
    
    $("#map4").gmap3({
		map:{
			options:{
				center:[46.578498,2.457275],
				zoom:5
			}
		},
		marker:{
			values:[
			{latLng:[48.8620722, 2.352047], data:"Paris !"},
			{address:"86000 Poitiers, France", data:"Poitiers : great city !"},
			{address:"66000 Perpignan, France", data:"Perpignan ! GO USAP !", options:{icon: "http://maps.google.com/mapfiles/marker_green.png"}}
			],
			events:{
				click: function(marker, event, context){
					var map = $(this).gmap3("get"),
					infowindow = $(this).gmap3({get:{name:"infowindow"}});
					if (infowindow){
						infowindow.open(map, marker);
						infowindow.setContent(context.data);
					} else {
						$(this).gmap3({
							infowindow:{
								anchor:marker, 
								options:{content: context.data}
							}
						});
					}
				}
			}
		}
	});
});

