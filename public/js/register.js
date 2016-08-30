$("#name, #password, #passwordtwo, #email").change(function() {
   if($(this).val() != ""){
   		$(this).addClass("form--green");
   }
   else{
   		$(this).removeClass("form--green");
   }
});