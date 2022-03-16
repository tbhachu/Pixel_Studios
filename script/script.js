/*when form is submitted execute validate function*/
document.getElementById("form").onsubmit = validate;

function validate() {
    //clear previous errors / start fresh
    let errors = document.getElementsByClassName("errJS");
    for (let i = 0; i < errors.length; i++) {
        errors[i].style.display = "none";
    }

    let isValid = true;


    let first = document.getElementById("fname").value;
    if (first === "") {
        document.getElementById("err-fname").style.display = "block";
        isValid = false;
    }

    let last = document.getElementById("lname").value;
    if (last === "") {
        document.getElementById("err-lname").style.display = "block";
        isValid = false;
    }

    let email = document.getElementById("email").value;
    if (email.length === 0) {
        if (email.length >= 5 && !email.includes("@")) {
            document.getElementById("err-email").innerHTML = "Invalid Format";
            document.getElementById("err-email").style.display = "block";
            document.getElementById("err-email").style.visibility = "visible";
            isValid = false;
        } else if (email.length >= 5 && !email.includes(".")) {
            document.getElementById("err-email").innerHTML = "Invalid Format";
            document.getElementById("err-email").style.display = "block";
            document.getElementById("err-email").style.visibility = "visible";
            isValid = false;
        } else if (email.length < 5) {
            document.getElementById("err-email").innerHTML = "Please enter your email";
            document.getElementById("err-email").style.display = "block";
            document.getElementById("err-email").style.visibility = "visible";
            isValid = false;
        }
    }

    let phone = document.getElementById("phone").value;
    if (phone.length < 10) {
            document.getElementById("err-phone").style.display = "block";
            isValid = false;
        }

    let address = document.getElementById("address").value;
    if (address.length < 5) {
        document.getElementById("err-address").style.display = "block";
        isValid = false;
    }

    return isValid;
}

function setActive(){

    /*if(document.getElementById("1").className == "carousel-item"){
        document.getElementById("1").className = "carousel-item active";
    }
    else{
        document.getElementById("1").className = "carousel-item"
    }

    document.getElementsByClassName("carousel-inner").firstChild.className = "carousel-item active";*/

    let active = document.getElementsByClassName("carousel-item");
    console.log(active);

}