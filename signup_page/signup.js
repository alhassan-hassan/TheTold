// Select UI elements or inputs
const form = $('#form');
const fname = $('#fname');
const lname = $('#lname');
const region = $('#region');
const date = $('#date');
const email = $('#email');
const password = $('#password');
const con_pw = $('#c_password');


//errors tracker
let errors = 0;
 
// show input error message
const showError = (displayPlace, message) => {
    displayPlace.html(message);
    errors += 1;
}

// check for required field
const checkRequired = (inputArr) => { 
    inputArr.forEach(function(input){
        if(input.val() === '') {
            showError(input.next(), `field is required`);
        }
    })
}

//check fname and lname
const checkName = (username) => {
    const pattern = /^[A-Za-z]+$/;
    if (!pattern.test(username.val())) {
        showError(input.next(), `Name must contain only characters.`);
    }
}


const checkEmail = (input) => {
    const regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if(!regex.test(input.val())){
        showError(input.next(), 'Email is not valid');
    }
}

//validate date
const checkDate = (date) => {
    const regex = /^(0[1-9]|1[012])[- /.] (0[1-9]|[12][0-9]|3[01])[- /.] (19|20)\d\d$/
    if (!regex.test(date.val())) {
         showError(date.next(), 'Invalid date format!');
    }
}

// check for password constraints
const validatePassord = (password) => {
    let pattern = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,20}$/;

    if (!pattern.test(password.val())) {
        showError(input.next(), 'Password must be at least 6 characters including lowercase, uppercase and special character(s)');
    }
}

//check for passwords length
const checkPasswordMatch = (password1, password2) => {
    if(password1.val() != password2.val()){
        showError(password2.next(), 'Your passwords do not match');
    }
}


const validateForm = (e) =>{
    //e.preventDefault();
    $('small').html('');
    errors = 0;
    checkPasswordMatch(password, con_pw);

    checkEmail(email);
    // TODO check for required inputs
    checkRequired([fname, lname, date, region, email, password, con_pw]);
    checkName(fname);
    checkName(lname);
    // TODO check for valid email

    //check password 
    validatePassord(password);

    // TODO check if the passwords match

    //check names
    checkName(fname)
    checkName(lname)

    //check date
    checkDate(date)

    if(errors === 0){
        return true;
    }else{
        return false;
    }
}
