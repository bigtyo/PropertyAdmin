$(document).ready(function(){
   $("#btnLogin").click(function(){
       var user = $("#userid").val();
       var pass = $("#password").val();
       
       $.post('login/signin',{
           username : user,
           password : pass
       },
       function(res){
           var json = $.parseJSON(res);
           
           if(Number(json.status) == 1)
           {
               alert(json);
           }
       });
   }); 
});