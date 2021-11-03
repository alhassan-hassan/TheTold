<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Told</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class = "signup-main">
        <div class = "signup-side">
            <img src="../assets/koi.png" alt="comp_logo" id = "signup-logo">
            <p id = "welcome">WELCOME TO THETOLD</p>
            <p id = "brief">A system that allows Ghanaians to post
                environmental bugs for solutions to be 
                meted out at the national level.
            </p>
        </div>

        <div class = "signup-input">
            <form action="#">
                <div class = "order">
                    <p id = "signup-go">Sign Up</p>
                    <p id = "rule">Please make sure you fill out all required fields.</p>
                </div>
    
                <div class = "input_field">
                    <input type="text" placeholder = "First *" name = "first-name">
                    <input type="text" placeholder = "Last Name*" name = "last-name" >
                </div>
                
                <div class = "input_field">
                    <select id="region">
                        <option value="" selected disabled hidden>Choose region</option>
                        <option value="north">Northern Region</option>
                        <option value="accra">Greater Accra</option>
                        <option value="ashanti">Ashanti Region</option>
                        <option value="volta">Volta Region</option>
                    </select>
                    <input type="date" placeholder = "Date of Birth; DD/MM/YYYY*" name = "date" >
                </div>
                
                <div class = "input_field">
                    <input type="email" placeholder = "Email*" name = "email" id = "email">
                </div>
                
                <div class = "input_field">
                    <input type="password" placeholder = "Password*" name = "password">
                    <input type="password" placeholder = "Confirm Password*" name = "c-password" >
                </div>

                <div class = "submit">
                    <input type="submit" id = "signup-submit">
                    <p id = "already">Already have an account? <a href="#login/login.php">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>