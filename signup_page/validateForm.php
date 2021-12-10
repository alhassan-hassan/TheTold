<?php 
    class Validate {
        // variables to keep track of all the errors
        public static $total_errors;

        public function isEmpty($field){
            GLOBAL $total_errors;
            if (empty($field)) {
                $total_errors += 1;
                return "Required field!";
            };
        }

        public function nameFields($field) {
            GLOBAL $total_errors;
            if (empty($field)) {
                $total_errors += 1;
                return "Required Field!";
            } elseif (!preg_match('/^[a-zA-Z]+$/', $field)) {
                $total_errors += 1;
                return "Only letters allowed";
            }
        }

        public function verifyEmail($email) {
            GLOBAL $total_errors;
            if (empty($email)) {
                $total_errors += 1;
                return "Required Field!";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $total_errors += 1;
                return "Incorrect email format!";
            }
        }

       public function strongPassword($password, $c_password) {
           GLOBAL $total_errors;
           if (empty($password)) {
               $total_errors += 1;
               return "Required field";
           } else {
               $match = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{6,})/";
               if (!preg_match($match, $password)) {
                   $total_errors += 1;
                   return "Weak passwordword. include lowercase, uppercase and special characters";
                } elseif($password != $c_password) {
                    $total_errors += 1;
                    return "Oops! Password did not match! Try again. ";
                }
            }
        }
        
        public function matchPasswords($password, $c_password) {
           GLOBAL $total_errors;
           if (empty($c_password)) {
               $total_errors += 1;
               return "Required field";
           } else {
               $match = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{6,})/";
                if (preg_match($match, $password)) {
                    if ($password != $c_password) {
                        $total_errors += 1;
                        return "Oops! Password did not match! Try again. ";
                    }
                }
            }
        }
    }
?>