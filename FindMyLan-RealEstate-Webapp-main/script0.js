function SendMail(){
    var params = {
        from_name:document.getElementById("fullname").ariaValueMax,
        email_id : document.getElementById("email_id").ariaValueMax,
        message: document.getElementById("message").value
    }
    emailjs.send("service_1cde4xo", "template_8c7yyugh", params).then(function(res) {
        alert("Success! "+res.status);
    })
}