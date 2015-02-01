//alert('this works');
$(document).ready(function(){
  $('#register-form').submit(function(){
   // $('#button').click(function(){
        var data= $('#register-form').serialize();
        //alert(data);
        var url = "http://localhost/cvmaker/index.php/cvmaker/register_submit";
        //alert(url);
        $.ajax(url,{
           data : data,
           type : "POST",
           success : onSuccess,
           error : onError
        });
        
    });
});
var onSuccess=function(data){
    alert('success');
};
function onError(data){
    alert('ERROR');
};
