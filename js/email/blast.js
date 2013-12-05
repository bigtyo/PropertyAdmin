$("#istemplate").click(function(){
       if($("#istemplate").is(":checked")){
            $("#controlmsg").slideUp(400,function(){
                 $("#controltemplate").slideDown();
            });
        }
        else
        {
            $("#controltemplate").slideUp(400,function(){
                 $("#controlmsg").slideDown();
            });
        }
   });
   
   $("#btnSend").click(function(){
       
       var templateid = $("#select").val();
       var listings = [];
       var listingid = 0;
       $("#datalisting").find(":checked").each(function(){
           //debugger;
           var tr = $(this).parent().parent();
           listingid = Number($(tr).find("td.listingid").html());
           listings.push(listingid);
       });
       
       var recipientId = $("#s2").val();
       var subject = $("#textfieldSubject").val();
       
       $.post(NODE_URL + 'blastmail',{
           templateid : templateid,
           subject : subject,
           marketingid : $("#marketingid").val(),
           customerid : recipientId[0],
           message : $("#textarea").val()
           
       },function(res){
           debugger;
           alert(res);
       });
   });