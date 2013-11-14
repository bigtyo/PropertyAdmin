var NODE_URL = "http://localhost:3000/";
// listing detail
function getListing(listingid)
{
	$.post(NODE_URL+'listing/detail',{
		id : listingid,
	},function(res){
		var json = JSON.parse(res);
		
		// masukkan ke masing2 field yang bersangkutan
	});
}

// search listing
function getListing()
{

	$.post(NODE_URL+'listing',{
		harga_awal : "",
		harga_akhir : "",
		luas_tanah : "",
		luas_bangunan : "",
		propinsiid : "",
		kotaid : "",
		areaid : "",
		lokasiid : "",
		lantai : "",
		kamar_tidur : "",
		kamar_mandi : "",
		propertyid : "",
		garasi : "",
		listrik : "",
		sertifikat : ""
		
	},function(res){
		var json = JSON.parse(res);
		
		// masukkan ke masing2 field yang bersangkutan,rendering
	});
}


// subscribe 