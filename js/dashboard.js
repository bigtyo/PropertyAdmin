
//$("#periodSelectSold").change(function(){
//    var id = $(this).children(":selected").attr("id");
//    if(id==1) // weekly
//    {
//        
//        
//        getDataListingSold(date_awal,date_akhir);
//    }else if(id==2){
//       var date_awal=new Date();
//       var date_akhir = new Date();
//       date_awal.setDate(date_awal.getDate()-30);
//        
//        getDataListingSold(date_awal,date_akhir);     
//    }else if(id == 3){
//            
//    }
//    
//    var range_awal = new Date();
//    var range_akhir = new Date();
//});
$("#periodSelectSold").change(function(){
    var id = $(this).children(":selected").attr("id");
    getDataListingSold(Number($(this).val()));
});	

$("#periodSelectSoldGlobal").change(function(){
    var id = $(this).children(":selected").attr("id");
    getDataListingSoldGlobal(Number($(this).val()));
});

$("#periodSelectListing").change(function(){
    var id = $(this).children(":selected").attr("id");
    getDataListingBaru(Number($(this).val()));
});	

$("#periodSelectVisit").change(function(){
    var id = $(this).children(":selected").attr("id");
    //getDataListingBaru(id);
});	
      
setInterval(function(){
    getFeeds();
    getDokumen();
},30000);	

//var date_awal=new Date();
//var date_akhir = new Date();
//date_awal.setDate(date_awal.getDate()-7);
        
getDataListingSold(1);
getDataListingBaru(1);
getDataListingSoldGlobal(1);

var last = "";  
function getFeeds()
{
    var now = new Date();
    var _time = now.getFullYear()+"-"+now.getMonth()+"-"
                +now.getDate()+" "+now.getHours()+":"
                +now.getMinutes()+":"+now.getSeconds();
    
    $.get('index.php/dashboard/getaktivitas',{
        time : _time,
        last : last
    },function(res){
        var feeds = res.feeds;
        for(var i=0;i<feeds.length;i++){
            var data = '<span class="label">'+
                       '<i class="icon-plus"></i>'+
                   '</span>'+feeds[i].feed;
           var $el = $("#randomFeed");
           auto = $el.parents(".box").find(".box-title .actions .custom-checkbox").hasClass("checkbox-active");
           $el.prepend("<tr><td>"+data+"</td></tr>").find("tr").first().hide();
		$el.find("tr").first().fadeIn();
		if($el.find("tbody tr").length > 20){
			$el.find("tbody tr").last().fadeOut(400, function(){
				$(this).remove();
			});
		}
            slimScrollUpdate($el.parents(".scrollable"));
        }
        
        if(last === "")
        {
           last = _time;
        }
    });
}

function getDokumen()
{
    $.get('index.php/dashboard/getDokumen',{},function(res){
        $("#randomDoc").html(res.html);
    });
    
}

function getDataListingBaru(periode)
{
    //var date_a = 1900 +date_awal.getYear() +"-"+date_awal.getMonth()+"-"+ date_awal.getDate();
    //var date_b = 1900 +date_akhir.getYear() +"-"+date_akhir.getMonth()+"-"+ date_akhir.getDate();
    $("#flot-newlisting").html("");
    $.get('index.php/dashboard/getListingBaru',{
        //date_awal : date_a,
       // date_akhir : date_b,
        periode : periode
    },function(res){
        var data = [];
        var detail = res.sold;
        var date_awal = new Date(res.date_awal);
        var date_akhir = new Date(res.date_akhir);
        for(var i=0;i<detail.length;i++){
            var tanggal = (new Date(detail[i].waktu)).getTime();
            //console.log(tanggal);
            
            data.push([tanggal,parseInt(detail[i].jml)]);
        }
        
        if(res.increase >= 0){
                $("#increaseListing").html(""+res.increase+"% <span><i class='icon-circle-arrow-up'></i></span>")
            }else{
                $("#increaseListing").html(""+res.increase+"% <span><i class='icon-circle-arrow-down'></i></span>")
            }
            var ticks = [];
            if(periode == 1){
               ticks = [1,"day"] ;
            }else if(periode == 2){
               ticks = [1,"week"] ; 
            }else{
                ticks = [1,"month"] ; 
            }
        $.plot($("#flot-newlisting"), [{ 
		label: "New Listings", 
		data: data,
		color: "#2c5e7b"
            }], {
                    xaxis: {
                           mode: "time",
                           minTickSize: ticks,
                           
                           min: date_awal.getTime(),
                           max: date_akhir.getTime()
                           
                            
                            
                    },
                    yaxis:{
                        ticks : 1
                    },
                    series: {
                            lines: {
                                    show: true, 
                                    fill: true
                            },
                            points: {
                                    show: true
                            }
                    },
                    grid: { hoverable: true, clickable: true },
                    legend: {
                            show: false
                    }
            });
        
    });
}

function getDataListingSoldGlobal(periode)
{
    $("#flot-global").html("");
    $.get('index.php/dashboard/getListingSold',{
        //date_awal : date_a,
        //date_akhir : date_b,
        periode : periode,
        isglobal : 1
    },function(res){
            var data = [];
            var detail = res.sold;
            var date_awal = new Date(res.date_awal);
            var date_akhir = new Date(res.date_akhir);
            
            for(var i=0;i<detail.length;i++){
                var tanggal = (new Date(detail[i].waktu)).getTime();
                //console.log(tanggal);
                data.push([tanggal,parseInt(detail[i].jml)]);
            }
            //var data = [[1262304000000, 1300], [1264982400000, 2200], [1267401600000, 3600], [1270080000000, 5200], [1272672000000, 4500], [1275350400000, 3900], [1277942400000, 3600]];
            if(res.increase >= 0){
                $("#increaseSoldGlobal").html(""+res.increase+"% <span><i class='icon-circle-arrow-up'></i></span>")
            }else{
                $("#increaseSoldGlobal").html(""+res.increase+"% <span><i class='icon-circle-arrow-down'></i></span>")
            }
            var ticks = [];
            
            if(periode == 1){
               ticks = [1,"day"] ;
            }else if(periode == 2){
               ticks = [1,"week"] ; 
            }else{
                ticks = [1,"month"] ; 
            }
                

            $.plot($("#flot-global"), [{ 
		label: "Properties Sold", 
		data: data,
		color: "#56af45"
            }], {
                    xaxis: {
                           mode: "time",
                           minTickSize: ticks,
                           
                           min: date_awal.getTime(),
                           max: date_akhir.getTime()
                           
                            
                            
                    },
                    yaxis:{
                        ticks : 1
                    },
                    series: {
                            lines: {
                                    show: true, 
                                    fill: true
                            },
                            points: {
                                    show: true
                            }
                    },
                   // grid: { hoverable: true, clickable: true },
                    legend: {
                            show: false
                    }
            });
    });
}

function getDataListingSold(periode)
{
    //var date_a = 1900 +date_awal.getYear() +"-"+date_awal.getMonth()+"-"+ date_awal.getDate();
    //var date_b = 1900 +date_akhir.getYear() +"-"+date_akhir.getMonth()+"-"+ date_akhir.getDate();
    $("#flot-hdd").html("");
    
    $.get('index.php/dashboard/getListingSold',{
        //date_awal : date_a,
        //date_akhir : date_b,
        periode : periode,
        isglobal : 0
    },function(res){
            var data = [];
            var detail = res.sold;
            var date_awal = new Date(res.date_awal);
            var date_akhir = new Date(res.date_akhir);
            
            for(var i=0;i<detail.length;i++){
                var tanggal = (new Date(detail[i].waktu)).getTime();
                //console.log(tanggal);
                data.push([tanggal,parseInt(detail[i].jml)]);
            }
            //var data = [[1262304000000, 1300], [1264982400000, 2200], [1267401600000, 3600], [1270080000000, 5200], [1272672000000, 4500], [1275350400000, 3900], [1277942400000, 3600]];
            if(res.increase >= 0){
                $("#increaseSold").html(""+res.increase+"% <span><i class='icon-circle-arrow-up'></i></span>")
            }else{
                $("#increaseSold").html(""+res.increase+"% <span><i class='icon-circle-arrow-down'></i></span>")
            }
            var ticks = [];
            
            if(periode == 1){
               ticks = [1,"day"] ;
            }else if(periode == 2){
               ticks = [1,"week"] ; 
            }else{
                ticks = [1,"month"] ; 
            }
                

            $.plot($("#flot-hdd"), [{ 
		label: "Properties Sold", 
		data: data,
		color: "#56af45"
            }], {
                    xaxis: {
                           mode: "time",
                           minTickSize: ticks,
                           
                           min: date_awal.getTime(),
                           max: date_akhir.getTime()
                           
                            
                            
                    },
                    yaxis:{
                        ticks : 1
                    },
                    series: {
                            lines: {
                                    show: true, 
                                    fill: true
                            },
                            points: {
                                    show: true
                            }
                    },
//                    grid: { hoverable: true, clickable: true },
                    legend: {
                            show: false
                    }
            });

//            $("#flot-hdd").bind("plothover", function (event, pos, item) {
//                    if (item) {
//                            if (previousPoint != item.dataIndex) {
//                                    previousPoint = item.dataIndex;
//
//                                    $("#tooltip").remove();
//                                    var y = item.datapoint[1].toFixed();
//
//                                    showTooltip(item.pageX, item.pageY,
//                                                item.series.label + " = " + y+"%");
//                            }
//                    }
//                    else {
//                            $("#tooltip").remove();
//                            previousPoint = null;            
//                    }
//            });
            
            

            
        });
}


