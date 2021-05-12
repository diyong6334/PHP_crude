
$('.btn').click(function(e){
    var first = $('.first').val();
    var last = $('.last').val();
    var other = $('.other').val();
    var email = $('.email').val();
    var pass = $('.pass').val();
    var pass1 = $('.pass1').val();

//alert(rptpondid);

if (first =="" || last =="" || other =="" || email =="" || pass ==""  || pass1=="")
 {
    Swal.fire({
        icon: 'error',
        position: 'top',
        title: 'Errors',
        text: "Please Fill all Fields Correctly and try again",
        type: 'error',
        showConfirmButton: false,
        timer: 2000
    });
}

else if (pass!=pass1)
{
	Swal.fire({
        icon: 'error',
        position: 'top',
        title: 'Errors',
        text: "Password do not Match, Doublecheck it and try again",
        type: 'error',
        showConfirmButton: false,
        timer: 2000
    });
}

else
	{
		$.ajax({
	    url: "actions/add-employee.php",
	    method: "POST",
	    dataType: "text",
	    data: {
	            first: first,
	            last: last,
	            other: other,
	            email: email,
	            pass: pass,
	            pass1: pass1
	    },
	        success: function(data) {
	            Swal.fire({
	                icon: 'success',
	                position: 'top',
	                title: 'Success',
	                text: data,
	                type: 'success',
	                showConfirmButton: false,
	                timer: 2000
	            });

	            $("input").val("");
	        },

	        error: function(data) {
	            Swal.fire({
	                icon: 'error',
	                position: 'top',
	                title: 'Errors',
	                text: "Something went wrong, Re-check your data and try again",
	                type: 'error',
	                showConfirmButton: false,
	                timer: 2000
	            });
	        }
	    });
	}
});