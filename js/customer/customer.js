/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function showNew()
{
    $("#btnShowSave").fadeOut();
    $("#frmnew").fadeIn();
    window.location = "#frmnew";
}

function cancelNew()
{
    $("#btnShowSave").fadeIn();
    $("#frmnew").fadeOut();
}

function cancelUpload()
{
    $("#btnShowUpload").fadeIn();
    $("#frmupload").fadeOut();
}

function showUpload()
{
    $("#btnShowUpload").fadeOut();
    $("#frmupload").fadeIn();
    window.location = "#frmupload";
}

function uploadFile()
{
    
}


function saveNew()
{
    var jsondata = {};
        jsondata.NAMA = $("#C_Nama").val();
        
        jsondata.EMAIL = $("#C_Email").val();
        jsondata.TELEPON = $("#C_Telepon").val();
        jsondata.ALAMAT = $("#C_Alamat").val();
        jsondata.TANGGAL_LAHIR = $("#C_Tanggal").val();
        jsondata.TANGGAL_PERNIKAHAN = $("#C_Tanggal_Nikah").val();
        jsondata.BUYER = Number($("#C_Buyer").is(':checked'));
        jsondata.VENDOR = Number($("#C_Vendor").is(':checked'));
        jsondata.INVESTOR = Number($("#C_Investor").is(':checked'));
        
        jsondata = JSON.stringify(jsondata);
        
        $.post('customer/save',{
            data : jsondata
        },function(res){
            
            var json = res;
            var status = Number(json.status);
            if(status == 1){
                $(".textsave").val("");
                $(".checksave").attr('checked',false);
            }else{
                alert(json.error);
            }
                
            
        });
}

