function edit_template(id)
{
        $.get(NODE_URL +'template',{
            templateid : id
        },function(res){
            var json = $.parseJSON(res);
            var data = json.data;
            $("#tempID").html("(" +data.TEMPLATEID+")");
            $("#textfield").val(data.NAMA);
            CKEDITOR.instances.templateEditor.setData(json.html);
        });
 }
 
 function saveTemplate()
 {
     var templateHTML = CKEDITOR.instances.templateEditor.getData();
        var templateID = $("#tempID").html();
        $.post(NODE_URL +'template/save',{
            nama : $("#textfield").val(),
            data : templateHTML,
            adminid : $("#adminid").val()
        },
        function(res){
            var json = $.parseJSON(res);
            var status = Number(json.status);
            
            if(status != 1)
            {
                alert(json.error);
            }else
            {
                 $("#tempID").html("");
                 CKEDITOR.instances.templateEditor.setData("");
                 $("#textfield").val("");
            }    
             
        });
 }



