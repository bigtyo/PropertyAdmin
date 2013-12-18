/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function showNew()
{
    $("#btnShowSave").fadeOut();
    $("#frmnew").fadeIn();
    $("#btnSave").unbind('click');
    $("#btnSave").click(function(){saveNew();});
    $(".datepicker").datepicker({ dateFormat: "yyyy-mm-dd" });
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

function edit(id)
{
    $.post('customer/getCustomer',{listingid : id},function(res){
        
        if(res.status == 1){
            var data = res.data;
            $("#btnShowSave").fadeOut();
            $("#frmnew").fadeIn();
            window.location = "#frmnew";
            //$("#btnSave").unbind('click');
            $("#C_Nama").val(data.NAMA);
            
            $("#C_Email").val(data.EMAIL);
            $("#C_Telepon").val(data.TELEPON);
            $("#C_Alamat").val(data.ALAMAT);
            
            //data.TANGGAL_LAHIR = parseDatePicker("C_Tanggal");
            $("#C_Tanggal").datepicker("setDate", new Date(data.tgl_lahir));
            //data.TANGGAL_PERNIKAHAN = parseDatePicker("C_Tanggal_Nikah");
            $("#C_Tanggal_Nikah").datepicker("setDate", new Date(data.tgl_lahir));
            if(data.BUYER == 1){
                $("#C_Buyer").attr('checked','checked');
            }else{
                $("#C_Buyer").removeAttr('checked');
            }
            
            if(data.VENDOR == 1){
                $("#C_Vendor").attr('checked','checked');
            }else{
                $("#C_Vendor").removeAttr('checked');
            }
            
            if(data.INVESTOR == 1){
                $("#C_Investor").attr('checked','checked');
            }else{
                $("#C_Investor").removeAttr('checked');
            }
            
            $("#btnSave").unbind('click');
            $("#btnSave").click(function(){update(id);});
        }
        
        $("#btnSave").unbind('click');
        $("#btnSave").click(function(){update(id);});
    });
    
}

function update(id){
    var jsondata = {};
        jsondata.NAMA = $("#C_Nama").val();
        jsondata.CUSTOMERID = id;
        jsondata.EMAIL = $("#C_Email").val();
        jsondata.TELEPON = $("#C_Telepon").val();
        jsondata.ALAMAT = $("#C_Alamat").val();
        jsondata.TANGGAL_LAHIR = parseDatePicker("C_Tanggal");
                    //$("#C_Tanggal").datepicker("setDate", new Date(data.tgl_lahir));
                    
        jsondata.TANGGAL_PERNIKAHAN = parseDatePicker("C_Tanggal_Nikah");
        //jsondata.TANGGAL_LAHIR = $("#C_Tanggal").val();
        //jsondata.TANGGAL_PERNIKAHAN = $("#C_Tanggal_Nikah").val();
        jsondata.BUYER = Number($("#C_Buyer").is(':checked'));
        jsondata.VENDOR = Number($("#C_Vendor").is(':checked'));
        jsondata.INVESTOR = Number($("#C_Investor").is(':checked'));
        
        jsondata = JSON.stringify(jsondata);
        
        $.post('customer/update',{
            data : jsondata
        },function(res){
            
            var json = res;
            var status = Number(json.status);
            if(status == 1){
               //window.location.href = "customer";
            }else{
                alert(json.error);
            }
                
            
        });
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

