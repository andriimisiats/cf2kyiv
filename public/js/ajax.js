document.getElementById('submit').addEventListener('click', function(e) 
{
   	var email 	     = document.getElementById('email').value;
    var phone 	     = document.getElementById('phone').value;
    var ajax_message = document.getElementById('message').value;

    if (ajax_message == "" || phone == "" || email == "" || phone.length != 12 || !validateEmail(email))
    {
        return;
    }

    e.preventDefault();

    $.ajaxSetup(
    {
  		headers: 
  		{
    		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  		}
	});

    $.ajax(
    {
        type: "POST",
        url: '/',
        data: 
        {
           	'email': email, 
            'phone': phone, 
            'ajax_message': ajax_message
        }
    });

    $('.slide-form').hide(600);
    $('.slide-thank-you').delay(600).show(600);
});

function validateEmail(email) 
{
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}