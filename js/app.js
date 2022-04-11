$(document).ready(function(){
	
	$('body').on('click','#add',function(){
		//var nom = $("#nom").val();
		//alert(nom)

	var data = 	$("#form").serializeArray() 
console.log(data)

     $.ajax({
     		url: 'CatDone.php',
     		type: 'post',
     		data: data,  
     		success: function (ecoin) {
     			if (ecoin==1) {
     				$(".ahide1").show(3000).hide(2000)
     			}else if (ecoin==2) {
     				$("#nom").css({"border":"2px solid red"})
     				$("#nom").after("<span>الرجاء ملئ البينات</span>")
     			}

     			else {
     				$(".ahide2").show(3000).hide(2000)
     			}
     		}
     	}); // ajax 
	})  // function 



$('body').on('click','.delete',function(){
	swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
  	 var id = $(this).data('cid')
  	 /**********************Ajax*************************/
  	  $.ajax({
     		url: 'DeleteDone.php',
     		type: 'post',
     		data: {id:id},
     		success: function (de) {
     			if (de==1) {
     				  swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });

     				  window.location.href= "index.php"
     			}

     			else {
     				 swal("Your imaginary file is safe!dsdsfs");
     			}
     		}
     	}); // ajax 
  	 /***********************************************/
  
  } else {
    swal("Your imaginary file is safe!");
  }
});

})  // function Delete


}) //ready





/*swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});*/