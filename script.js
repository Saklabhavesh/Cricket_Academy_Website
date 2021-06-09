

    document.querySelector(".btn-1").addEventListener("click",function(){
        var name = document.getElementById("name");
            var number = document.getElementById("no.").value;
            var email = document.getElementById("email");
            var age = document.getElementById("age").value;
            var phoneno = /^[6-9]\d{9}$/;
            var letters = /^[A-Za-z\s]+$/;
            if(name.value.match(letters))
            {  
            }
            else
            {
            alert("Only Characters Are Allowed For Name!");
            return false;
            }
            if(phoneno.test(number))
            {
            }
            else
            {
             alert("Please Enter a 10-digit number!");
             return false;
            }
            if(age < 5)
            {
                alert("Age Should be Greater Than 5!");
                return false;
            }
    });





