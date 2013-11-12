$(document).ready(function(){
    $("#btnAdd").click(function(){
        //$.post('loaddialog',{
        //    dialog : 'history'
        //},function(res){
        //    $("#inputHistory").html(res);
        //   $("#inputHistory").show();
        //});
        $("#inputHistory").show();
    });
    
    $("#btnSave").click(function(){
        var json = {};
        
        json.CUSTOMERID = Number($("#custId").val());
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
        json.HARGA_AWAL = Number($("#rangeAwal").val());
        json.HARGA_AKHIR = Number($("#rangeAkhir").val());
        json.TANGGAL = Date();
        json.AREAID = Number($("#selArea").val());
        json.LOKASIID = Number($("#selLokasi").val());
        json.PROPINSIID = Number($("#selPropinsi").val());
        json.KOTAID = Number($("#selKota").val());
        json.TIPEPROPID = Number($("#selProp").val());
        //json.MARKETINGID = Number($("#custId").val()); 
        
        var jsondata = JSON.stringify(json);
        
        $.post('saveHistory',{
            data : jsondata
        },function(res){
            debugger;
            $("#inputHistory").hide();
            $.get('listHistory',{
                customerid : Number($("#custId").val())
            },function(res){
                $("#history").html(res);
            });
            //$("#inputHistory").hide();
        });
    });
    $("#btnCancel").click(function(){
        $("#inputHistory").hide();
    });
});