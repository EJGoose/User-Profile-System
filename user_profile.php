<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile System</title>
</head>
<body>
    <?php
    // set time and hour
    $current_time = date("H:i:s");
    $current_hour = date("H");

    //access the current time, in a useable format
    function get_time(){
        $current_time = date("H:i:s");
    }
    
    // choose an appropriate greeting for the user
    function get_timed_message($current_hour) {
        if ($current_hour > 5 && $current_hour < 12) {
            echo "<br>Good morning!<br>";
        } elseif ($current_hour > 11 && $current_hour < 17) {
            echo "<br>Good afternoon!<br>";
        } elseif ($current_hour > 16 && $current_hour < 23) {
            echo "<br>Good evening!<br>";
        } else {
            echo "<br>you should probably be asleep<br>";
        }
    }

    //Age verification system
    //function to respond to users of varying ages
    function age_verification ($user_age) {
        echo "<br>Welcome to:";
        if ($user_age <= 12) {
            echo "<br>Welcome to Bubles big adventures, a children's site<br>";
        } elseif ($user_age > 12 && $user_age < 18) {
            echo "<br>Welcome to Teen Tunes epic apps for teens and young adults<br>";
        } elseif ($user_age > 18 && $user_age < 65) {
            echo "<br>Hello and welcome to a serious site for serious people - Here is the news:<br>";
        } else {
            echo "<br>Exciting skiing holidays for the over 65s<br>";
        }
    }
    
    

    // switch statement to asses user classification based on number of visits 

    function get_user_type($number_of_visits) {
        switch (true) {
            case $number_of_visits == 1:
                return "New Users";
                break;
            case $number_of_visits > 1 && $number_of_visits < 5:
                return "Beginner Users";
                break;
            case $number_of_visits > 5 && $number_of_visits < 13:
                return "Regular Users";
                break;
            case $number_of_visits > 12:
                return "Expert Users";
                break;
            default:
                return "Error, unknown user type";
                
        }
    }

    // example user data
    $user_name = "Barry Manilow";
    $user_age = 72;
    $number_of_visits = 145;

    //Main execution

    //greeting
    get_timed_message($current_hour);
    //current time
    // call the time function and show it on screen
    get_time();
    echo "The Current time is: $current_time <br>";
    //users name and age
    echo "<br>";
    echo "Hi $user_name <br>";
    echo "According to our records you are $user_age, years old. <br>";
    // relevant age related message
    age_verification($user_age);
    //user type
    echo "<br>";
    echo "This is visit number $number_of_visits <br> you are one of our " . get_user_type($number_of_visits);
    //login count
    echo "<br>";
    echo get_user_type($number_of_visits) == "Expert Users" ? "<br>Thank you for helping to make this site what it is." : "<br>Welcome, it is a pleasure to have you on our site." ;



    ?>
</body>
</html>