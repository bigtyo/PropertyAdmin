var MAILER = "rumahsuper.test@gmail.com";
var port = 3000;
var domain = "http://localhost";
//GLOBALS
var http = require("http");
var url = require("url");
var express = require('express');
var app = express();
var mailer = require('nodemailer');
var fs = require("fs");

var monthNames = [ "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December" ];

app.engine('.html', require('ejs').__express);

app.set('views', __dirname + '/views');

// Without this you would need to
// supply the extension to res.render()
// ex: res.render('users.html').
app.set('view engine', 'html');

app.use(express.bodyParser());
app.use(express.static(__dirname + '/Public'));

var transport = mailer.createTransport("SMTP", {
	service : "Gmail",
	auth: {
        user: MAILER,
        pass: "rumahP@ssw0rd"
    }
});
var mysql      = require('mysql');
	var connection = mysql.createConnection({
	  host     : 'localhost',
	  user     : 'root',
	  password : 'radityabp',
	});


//FUNCTIONS
function format_money(number){
					var isNegative = /-/.test(number.toString());
					if (isNegative) {
						number = number.toString().replace("-", "");
					}
					var numberStr = parseFloat(number).toFixed(2).toString();
					var numFormatDec = numberStr.slice(-2); /*decimal 00*/
					numberStr = numberStr.substring(0, numberStr.length-3); /*cut last 3 strings*/
					var numFormat = new Array;
					while (numberStr.length > 3) {
						numFormat.unshift(numberStr.slice(-3));
						numberStr = numberStr.substring(0, numberStr.length-3);
					}
					numFormat.unshift(numberStr);
					return (isNegative ? "-" : "") + numFormat.join('.')+','+numFormatDec; /*format 000.000.000,00 */
				}

function sendMailListing(template,customer,listings,_subject,res)
{
	var query = "select * from rumahsuper.email_template where templateid = " +template ;
	connection.query(query, function(err, rows, fields) {
		if (err) throw err;
		for(var i =0;i<rows.length;i++)
		{
			
			var temp = rows[i];
			
			// res.render(temp['PATH'],{ 
				 // customer : customer,
				 // month : "(" +monthNames[new Date().getMonth()] +") " + (1900 +new Date().getYear()),
				 // listings : listings
			 // });
			res.render(temp['PATH'],
			{ 
				customer : customer,
				month : "(" +monthNames[new Date().getMonth()] +") " + (1900 +new Date().getYear()),
				listings : listings
			},function(err,html){
				if(err) throw err;
				var mailOptions = {
					from : MAILER,
					to : customer.EMAIL,
					subject : _subject,
					html : html
				};
				transport.sendMail(mailOptions, function(error, responseStatus){
					if(!error){
						console.log(responseStatus.message); // response from the server
						console.log(responseStatus.messageId); // Message-ID value used
						
					}
				});
				return html;
			});
		}
	});
}



function getListingsMailHTML(template,customer,listings,res)
{
	
	var query = "select * from rumahsuper.email_template where templateid = " +template ;
	connection.query(query, function(err, rows, fields) {
		if (err) throw err;
		for(var i =0;i<rows.length;i++)
		{
			
			var temp = rows[i];
			
			
			res.render(temp['PATH'],
			{ 
				customer : customer
			},function(err,html){
				if(err) throw err;
				
				return html;
			});
		}
	});
	return "";
}

function start()
{
	app.all('*', function(req, res, next) {
	  res.header('Access-Control-Allow-Origin', '*');
	  res.header('Access-Control-Allow-Methods', 'PUT, GET, POST, DELETE, OPTIONS');
	  res.header('Access-Control-Allow-Headers', 'Content-Type');
	  next();
	});
	
	app.get('/checkroutes', function(req, res){
	  console.log(app.routes);
	});
	
	app.get('/home/',function(req,res){
		
	});

	app.post('/sendlistingmail',function(req,res){
		var marketingid = req.query.marketingid;
		var customerid = req.query.customerid;
		var listings = req.query.listings;
		
		//console.log(listings);
	});
	
	app.post('/sendmail',function(req,res){
		//debugger;
		//var userid = req.query.userid;
		var template = req.body.templateid;
		var subject = req.body.subject;
		//var listings = JSON.parse(req.body.listings);
		var listings = req.body.listings;
		var marketingid = req.body.marketingid;
		var customerId = req.body.customerid;
		var json = {};
		var listingids = "";
		for(var i = 0; i< listings.length ; i++)
		{
			if(i == 0)
			{
				listingids += "(" + listings[i];
			}else if(i == listings.length - 1)
			{
				listingids += "," + listings[i] + ")";
			}else
			{
				listingids += "," + listings[i];
			}
			
		}
		debugger;
		//console.log("query : " + JSON.stringify(req.body));
		//return;
		//console.log("header: " +req.header);
		//console.log(subject);
		//console.log(marketingid);
		//console.log(customerid);
		//connection.connect();
		
		// listings = [
			// {
				// gambar : ["http://localhost:85/present/html/img/rumah70.jpg","http://localhost:85/present/html/img/rumah70.jpg"],
				// statusdata, 
				// nama_area : "Surabaya Pusat", 
				 
				// nama_kota : "Surabaya", 
				// nama_propinsi : "Jawa Timur", 
				// nama_tipe : "", 
				// nama, 
				// nama_lokasi, 
				// alamat_singkat, 
				// alamat_lengkap, 
				// luas_bangunan, 
				// luas_tanah, 
				// furnished, 
				// kamar_tidur, 
				// lantai, 
				// daya_listrik, 
				// serifikat, 
				// harga, 
				// kondisi, 
				// kamar_mandi, 
				// garasi, 
				// jalur_telepon, 
				// longitude, 
				// latitude
			// },
		// ];
		
		connection.query("SELECT * from rumahsuper.view_listing_marketing where marketingid = " + marketingid + 
		" AND customerid = " +customerId + " AND listingid in "+listingids,		
		function(err_listing,rows_listing,listing_fields){
			if(err_listing){
				json.status = 0;
				json.error = "gagal verifikasi data listing";
				json.detail = err_listing;
				json.query = "SELECT * from rumahsuper.view_listing_marketing where marketingid = " + marketingid + 
		" AND customerid = " +customerId + " AND listingid in "+listingids;
				res.send(JSON.stringify(json));
			}else{
				connection.query("SELECT * from rumahsuper.view_customer_marketing where marketingid = " + marketingid + 
				" AND customerid = " +customerId, 
					function(err, rows, fields) {
					  if (err){
						json.status = 0;
						json.error = "gagal verifikasi data customer";
						json.detail = err;
						res.send(JSON.stringify(json));
					  }else
					  {
						for(var i=0;i<rows.length;i++)
						  {
							//var json = JSON.stringify(rows[i]);
							
							sendMailListing(template,rows[i],rows_listing,subject,res);
						  }
					  }

					  
					  //res.send("Email sedang dikirim");
				});
			}			
			
			
		});
		

		//connection.end();
		
		
		
		
	});
	
	app.get('/listing/savelisting',function(req,res){
		var jsonCustomer = JSON.parse(req.body.customer);
		var jsonlisting = JSON.parse(req.body.listing);
	});
	
	app.get('/template',function(req,res)
	{
		var id = req.query.templateid;
		var json = {};
		var _query = "SELECT * from rumahsuper.email_template where templateid = "+id;
		
		connection.query(_query,function(err, rows, fields){
			if(err)
			{
				json.status = 0;
				json.error = "gagal mengambil detail template dari database";
				json.detail = err;
				res.send(JSON.stringify(json));
			}else
			{
				if(rows.length > 0)
				{
					
					fs.readFile(__dirname+'/Views/Backend/Templates/'+rows[0].PATH+'.html', 
					{
						encoding : "UTF-8"
					},
					function (err, data) {
						if (err) {
							json.status = -2;
							json.error = "gagal membaca file dari server.";
							json.detail = err;
							
						}
						else
						{
							json.status =1;
							json.data = rows[0];
							json.html = data;
							//console.log(data);
							
						}
						res.send(JSON.stringify(json));
					  
					});
					
				}else
				{
					json.status = -1;
					json.error = "template tidak ditemukan di database";
					res.send(JSON.stringify(json));
				}
				
			}
			
			
		});
	});
	
	
	
	app.get('/listing/detail',function(req,res){
		var listingid = req.query.id;
		
		var _query = "SELECT * FROM listing where listingid = " +listingid;
		
		connection.query(_query,function(err,rows,fields){
			if(err){
				json.status = 0;
				json.error = "gagal saat mengambil data listing (error 1)";
				json.detail = err;
				
				res.send(JSON.stringify(json));
			}
			else{
				res.send(JSON.stringify(rows));
			}
		});
	});
	
	app.post('/listing',function(req,res){
		var jsondata = JSON.parse(req.body.jsondata);
		
		var query = "";
		if(jsondata.harga_awal != "" && jsondata.harga_awal != 0)
		{
			query += " AND harga >= "+jsondata.harga_awal;
		}
		
		if(jsondata.harga_akhir != "" && jsondata.harga_akhir != 0)
		{
			query += " AND harga <= "+jsondata.harga_akhir;
		}
		
		if(jsondata.propinsi != null && jsondata.propinsi != "")
		{
			query += " AND propinsiid = "+jsondata.propinsi;
		}
		
		if(jsondata.kota != null && jsondata.kota != "")
		{
			query += " AND kotaid = "+jsondata.kota;
		}
		
		if(jsondata.area != null && jsondata.area != "")
		{
			query += " AND areaid = "+jsondata.area;
		}
		
		if(jsondata.lokasi != null && jsondata.lokasi != "")
		{
			query += " AND lokasiid = "+jsondata.lokasi;
		}
		
		if(jsondata.luas_tanah != null && jsondata.luas_tanah != "")
		{
			query += " AND luas_tanah = "+jsondata.luas_tanah;
		}
		
		if(jsondata.luas_bangunan != null && jsondata.luas_bangunan != "")
		{
			query += " AND luas_bangunan = "+jsondata.luas_bangunan;
		}
		
		if(jsondata.kamar_tidur != null && jsondata.kamar_tidur != "")
		{
			query += " AND kamar_tidur = "+jsondata.kamar_tidur;
		}
		
		if(jsondata.kamar_mandi != null && jsondata.kamar_mandi != "")
		{
			query += " AND kamar_mandi = "+jsondata.kamar_mandi;
		}
		
		
		
		var _query = "SELECT * FROM rumahsuper.view_listing where statusjualid = 2 AND statusdataid = 2 "+ query;
		var json = {};
		connection.query(_query,function(err, rows, fields){
			if(err){
				json.status = 0;
				json.error = "gagal saat mengambil data listing (error 1)";
				json.detail = err;
				
				res.send(JSON.stringify(json));
			}
			else{
				if(rows.length == 0){
					json.status = 0;
					json.error = "Data tidak ditemukan";
				}else
				{
					json.status = 1;
					json.rows = rows;
				}
				res.send(JSON.stringify(json));
			}
		});
	});
	
	app.post('/subscribe',function(req,res){
		var email = req.body.email;
		var nama = req.body.nama;
		var telepon = req.body.telepon;
		var panggilan = req.body.panggilan;
		var _query = "INSERT INTO rumahsuper.subscriber(email,nama,panggilan,telepon) VALUES('"+email+"','"+nama+"','"+telepon+"','"+panggilan+"')";
		connection.query(_query,function(err,results){
			if(err){
				json.status = 0;
				json.error = "gagal saat malakukan penyimpanan (error 1)";
				json.detail = err;
				
			}
			else
			{
				json.status = 1;
				
			}
			res.send(JSON.stringify(json));
		});
	});
	
	app.post('/listing/uploadimage',function(req,res){
		//var listingid = req.body.listingid;
		var imagedata = req.files.imagefile;
		var listingid = req.body.listingid;
		var json = {};
		
		fs.readFile(imagedata.path, function (err, data) {
		  // ...
			if(err){
				json.status = 0;
				json.error = "gagal membaca file hasil upload";
				json.detail = err;
				res.send(JSON.stringify(json));
			}else{
				var newPath = __dirname + "/Public/Images/"+listingid+"/";
				fs.exists(newPath, function (exists) {
					if(exists){
						fs.readdir('public/images/'+listingid,function(err,list){
							if(err){
								json.status = 0;
								json.error = "gagal membaca directory listing";
								json.detail = err;
								res.send(JSON.stringify(json));
							}else{
								var newimagename = list.length + 1;
								var arrayName = imagedata.originalFilename.split(".");
								var extension = arrayName[arrayName.length-1];
								
								fs.writeFile(newPath+newimagename+"."+extension, data, function (err) {
									if(err){
										json.status = 0;
										json.error = "gagal menulis file hasil upload ke server";
										json.detail = err;
										res.send(JSON.stringify(json));
									}else{
										json.status = 1;
										json.imagelink = domain + ":" + port + "/images/"+listingid+"/"+newimagename+"."+extension;
										res.send(JSON.stringify(json));
									}
								
								});
							}
						});
						
					}else
					{
						fs.mkdir(newPath,function(err){
							if(err){
								json.status = 0;
								json.error = "gagal membuat folder untuk listing";
								json.detail = err;
								res.send(JSON.stringify(json));
							}else
							{
								fs.readdir('public/images/'+listingid,function(err,list){
									if(err){
										json.status = 0;
										json.error = "gagal membaca directory listing";
										json.detail = err;
										res.send(JSON.stringify(json));
									}else{
										var newimagename = list.length + 1;
										var extension = imagedata.type.split("/")[1];
										fs.writeFile(newPath+newimagename+"."+extension, data, function (err) {
											if(err){
												json.status = 0;
												json.error = "gagal menulis file hasil upload ke server";
												json.detail = err;
												res.send(JSON.stringify(json));
											}else{
												json.status = 1;
												json.imagelink = domain + ":" + port + "/images/"+listingid+"/"+newimagename+"."+extension;
												res.send(JSON.stringify(json));
											}
										
										});
									}
								});
							}
							
						});
					}
					
				});
			}
			
		});
		  
	});

		//fs.
	
	
	app.get('/listing/images',function(req,res){
		var listingid = req.query.listingid;
		var json = {};
		fs.lstat('public/images/'+listingid,function(err, stats){
			if(err){
				json.status = 0;
				json.error = "gagal mengambil file";
				json.detail = err;
				res.send(JSON.stringify(json));
			}
			else{
				fs.readdir('public/images/'+listingid,function(err,list){
					if(err){
						json.status = 0;
						json.error = "gagal mengambil file";
						json.detail = err;
						res.send(JSON.stringify(json));
						
					}else{
						res.render('Backend/listingimage',
						{
							files : list,
							listingid : listingid,
							node_url : domain+ ":" + port
						},function(err,html){
							res.send(html);
						});
						
					}
					
					
					
					
				});
			}
			
		});
	});
	
	
	
	app.post('/template/save',function(req,res)
	{
		var html =req.body.data;
		var namafile =req.body.nama;
		var adminid = req.body.adminid;
		//console.log(JSON.stringify(req.body));
		var json = {};
		
		var _query = "INSERT INTO rumahsuper.email_template(ADMINID,NAMA) VALUES("+adminid+",'"+namafile+"')";
		
		connection.query(_query,function(err,results){
			if(err){
				json.status = 0;
				json.error = "gagal saat malakukan penyimpanan (error 1)";
				json.detail = err;
				res.send(JSON.stringify(json));
			}
			else
			{
				var resid = results.insertId;
				_query = "UPDATE rumahsuper.email_template SET PATH = '"+namafile+"_"+results.insertId+"' WHERE TEMPLATEID = "+results.insertId+"";
				console.log(_query);
				connection.query(_query,function(err,results){
					if(err){
						json.status = 0;
						json.error = "gagal saat malakukan penyimpanan (error 2)";
						json.detail = err;
						res.send(JSON.stringify(json));
					}else
					{
						
						fs.writeFile(__dirname+"/Views/Backend/Templates/"+namafile+"_"+resid+".ejs", html, function(err) {
							if(err) {
								json.status = 0;
								json.error = "gagal saat malakukan penyimpanan (error 3)";
								json.detail = err;
								res.send(JSON.stringify(json));
							} else {
								console
								json.status = 1;
								res.send(JSON.stringify(json));
							}
						});
						
					}
				});
			}
		});
				
				//console.log("The file was saved!");
		
		
		
		
		
		
	});
	
	app.get('/frontend/recent',function(req,res){
		var date = Date();
		var _query = "select * from rumahsuper.view_listing";
		var json = {};
		connection.query(_query,function(err, rows, fields){
			if(err){
				json.status = 0;
				json.error="gagal mengambil listing terbaru";
				json.detail = err;
				res.send(JSON.stringify(json));
			}else{
				var func = format_money;
				
				res.render('Frontend/recent',
				{ 
					listings : rows,
					format_money : func
				},function(error,html){
					
					if(err){
						json.status = 0;
						json.error = "gagal menampilkan listing terbaru";
						json.detail = error;
						res.send(JSON.stringify(json));
					}else{
						//json.status = 1;
						//json.html = html
						//res.send(JSON.stringify(json));
						res.send(html);
					}
				});
			}
			
		});
	});
	
	app.get('/frontend/agencies',function(req,res){
		var _query = "SELECT * from rumahsuper.office";
		var json = {};
		connection.query(_query,function(err,rows,fields){
			if(err)
			{
				json.status = 0;
				json.error = "gagal mengambil data agensi";
				json.detail = err;
				res.send(JSON.stringify(json));
			}else
			{
				res.render('Frontend/agent',{
					office : rows
				}
				,function(err,html){
					if(err)
					{
						json.status = 0;
						json.error = "gagal menampilkan agensi";
						json.detail = error;
						res.send(JSON.stringify(json));
					}
					else{
						res.send(html);
					}
				});
			}
			
			
		});
	});
	
	app.get('/frontend/properties',function(req,res){
		var _query="select * from rumahsuper.view_listing";
		var json = {};
		connection.query(_query,{},function(err,rows,fields){
			if(err)
			{
				json.status = 0;
				json.error = "gagal mendapatkan data listing";
				json.detail = err;
				res.send(JSON.stringify(json));
			}
			else{
				res.render('Frontend/properties',{
					listings : rows,
					format_money : format_money
				},function(err,html){
					if(err){
						json.status = 0;
						json.error = "gagal menampilkan data listing";
						json.detail = err;
						res.send(JSON.stringify(json));
					}else{
						res.send(html);
					}
					
				});
			}
		});
	});
	
	app.get('/Frontend/propdetail',function(req,res){
		var id = req.query.id;
		
		var _query = "SELECT * from rumahsuper.view_listing where listingid = " + id;
		var json = {};
		connection.query(_query,function(err,rows,fields){
			if(err){
				json.status = 0;
				json.error = "gagal mendapatkan data listing";
				json.detail = err;
				res.send(JSON.stringify(json));
			}else{
				
				res.render('Frontend/propetydetail',{
					listing : rows,
					format_money : format_money
				},
				function(err,html){
					if(err){
						json.status = 0;
						json.error = "gagal menampilkan data listing";
						json.detail = err;
						res.send(JSON.stringify(json));
					}else{
						if(rows.length != 0){
							res.send(html);
						}else
						{
							json.status = 0;
							json.error = "gagal menampilkan data listing";
							json.detail = err;
							res.send(JSON.stringify(json));
						}
					}
				});
			}
		});
	});
	
	app.listen(port);
	console.log('Listening on port 3000');
	//console.log(__dirname + '/RumahSuper');
}
exports.start = start;

// function start(){
	// function onRequest(request, response) {
		// var pathname = url.parse(request.url).pathname;
		// console.log("Request for " + pathname + " received.");
		// response.writeHead(200, {"Content-Type": "text/plain"});
		// response.write("Hello World");
		// response.end();
	// }
	
	// http.createServer(onRequest).listen(8030);

	// console.log("server started at port 8030");
// }


// exports.start = start;