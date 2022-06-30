
// trigger when registration form is submitted
$('#signupbtn').click(function(){
    
    var firstname = document.getElementById('firstname').value;
    var lastname = document.getElementById('lastname').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var cpassword = document.getElementById('cpassword').value;
    var phone = document.getElementById('phone').value;
    // get form data
    var form_data= {
        firstname : firstname,
        lastname : lastname,
        email : email,
        password : password,
        cpassword : cpassword,
        phone : phone
    }

    if(false){
        $('#inputPassword2').focus();
        new NotifyJS({
            message: "Password doesn't match. Please try again!",
            duration: 5000
        },
        {
            color: 'rgb(245,233,23)',
            textColor: 'red',
            fontFamily: 'Lexend Deca',
            customCSSBox: `border-bottom: 3px solid red; background-color: white;`
        })
        return false;
    } else {
        // submit form data to api
        $.ajax({
            url: "api/register.php",
            type : "POST",
            contentType : 'application/json',
            data : JSON.stringify(form_data),
            success : function(result) {
                // if response is a success, tell the user it was a successful sign up & empty the input boxes
                window.location.href = 'index.html#success';
            },

            error: function(xhr, resp, text){
                // on error, tell the user sign up failed
                $('#response').html("<div class='alert alert-danger'>Unable to sign up. Please contact admin.</div>");
            }
        });
    }
    return false;
});

