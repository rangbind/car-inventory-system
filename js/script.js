$(document).ready(function (e) {
  $('#pic1').change(function(){
      var file_data = $('#pic1').prop('files')[0];   
      var form_data = new FormData();                  
      form_data.append('file', file_data);
      $.ajax({
          url: "ajaxupload1.php",
          type: "POST",
          data: form_data,
          contentType: false,
          cache: false,
          processData:false,
          success: function(data){
              console.log(data);
              if(data==0)
            {
              // invalid file format.
              alert('Invalid file format, only image file allowed here');
            }
            else
            {
              $('#preview1').attr('src','uploads/'+data);
              $('#preview1').css('display','');
              $('#pic1_name').val(data);
              //$("#form")[0].reset(); 
            }
          }
      });
  });
  $('#pic2').change(function(){
    var file_data = $('#pic2').prop('files')[0];   
    var form_data = new FormData();                  
    form_data.append('file', file_data);
    $.ajax({
        url: "ajaxupload2.php",
        type: "POST",
        data: form_data,
        contentType: false,
        cache: false,
        processData:false,
        success: function(data){
            console.log(data);
            if(data==0)
          {
            // invalid file format.
            alert('Invalid file format, only image file allowed here');
          }
          else
          {
            $('#preview2').attr('src','uploads/'+data);
            $('#preview2').css('display','');
            $('#pic2_name').val(data);
            //$("#form")[0].reset(); 
          }
        }
    });
  });
});