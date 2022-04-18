<?php
    $temperature = 17;
        if($temperature >= 15) {
            $clothes ="T-shirt";
            $should_i_wear_a_scarf = true;
        } else {
            $clothes = "Pull-over";
            $should_i_wear_a_scarf = true;
        }
        echo "Put a $clothes";
?>

<?php
/*        if ($gender == 'woman'){

        if ( $age <= 12 and $language == "English" ) {
            // Instructions here will be ran if gender is woman, age is below 13 and language is English.  
            ...
        } else{
            // Instructions here will be ran if gender is woman, and age is above 12 or language is not English. 
            ...
        }

        } else {
        // Instructions here will be ran if gender is not "woman"

        if ( $age <= 12 and $language == "Chinese" ) {
            // Instructions here will be ran if gender is not woman, and if age is below 13 and language is Chinese. 
            ...
        }
    }
    */
?>
<br>
<!--1.1 Clean your room Exercise-->

<?php 
    $room_is_filthy = false;

    if( $room_is_filthy == true ){
        echo "Yuk, Room is dirty : let's clean it up !";
        //cleanup_room();
        echo "<br>Room is now clean!";
        $room_is_filthy = false;
    } else {
        echo "<br>Nothing to do, room is neat.";
    }
?>
<br>
<br>
<h3>1.2. Clean your room, improved</h3>
<!-- Create the array of possible states -->
<?php 
    $possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

    // When testing, change the index value to navigate to the possible array values 
    $room_filthiness = $possible_states[3]; 
   
    if( $room_filthiness == "filthy" ){
        echo "Yuk, Room is Disgusting! Let's clean it up now !";
    } else if( $room_filthiness == "dirty" ){
        echo "Yuk, Room is dirty : let's clean it up !";
    } else if( $room_filthiness == "immaculate" ){
        echo "Yuk, Room is immaculate : I'm proud of you !";
    } else {
        echo "<br>Nothing to do, room is neat.";
    }
?>
<br>
<br>

<h3>2. Different greetings according to time</h3>
<?php 
    $now = date('H:i:s');
    
    if ($now >= 5 AND $now < 9) {
        echo "Good morning !";
    } else if($now >= 9 AND $now < 12) {
        echo "Good day !";
    } else if($now >= 12 AND $now< 16) {
        echo "Good afternoon !";
    } else if($now >= 16 AND $now< 21) {
        echo "Good evening !";
    } else {
        echo "Good night !";
    }
?>
<br>
<br>
<h3>3. Different greetings according to age</h3>
<form action="" method="get">
            <label for="age">Type your age here</label>
            <input type="" name="age">
            <input type="submit" name="submit" value="Greet me now">
        </form>
        <p>
            <?php

            if (isset($_GET['age'])) {
            
                if($_GET['age'] >= 1 AND $_GET['age'] < 12) {
                    echo "Hello kiddo !";
                } 
                if ($_GET['age'] >= 12 AND $_GET['age'] < 18) {
                    echo "Hello teenager !";
                } 
                if ($_GET['age'] >= 18 AND $_GET['age'] <= 115) {
                    echo "Hello adult !";
                }
                if ($_GET['age'] > 115) { 
                    echo "Wow! Still alive ? Are you a robot like me ? Can I hug you ?";
                }

            }

            ?>
        </p>
<br>
<br>

<h3>4. Display a different greeting according to the user's age and gender.</h3>

<form action="" method="get">
            <div>
                <label for="age_2">Age</label>
                <input type="" name="age_2">
            </div>
            <div>
                <input type="radio" name="gender" value="man">
                <label for="man">Man</label>
                <input type="radio" name="gender" value="woman">
                <label for="woman">Woman ?</label>
            </div>
            <input type="submit" name="submit" value="Greet me now">
        </form>

<?php

    if (isset($_GET['gender']) AND isset($_GET['age_2'])) {

        if ($_GET['gender'] == "man") {
            
            if ($_GET['age_2'] >=1 AND $_GET['age_2'] < 12) {
                echo "Hello mister kid !";
            }
            if ($_GET['age_2'] >= 12 AND $_GET['age_2'] < 18) {
                echo "Hello mister teen !";
            }
            if ($_GET['age_2'] >= 18 AND $_GET['age_2'] < 115) {
                echo 'Hello mister !';
            }
            if ($_GET['age_2'] >= 115) {
                echo 'WOW ! Still alive? Are you a robot like me ? Can I hug you ?';
            }
        } else if ($_GET['gender'] == "woman") {
            
            if ($_GET['age_2'] >=1 AND $_GET['age_2'] < 12) {
                echo "Hello miss kid !";
            }
            if ($_GET['age_2'] >= 12 AND $_GET['age_2'] < 18) {
                echo "Hello miss teen !";
            }
            if ($_GET['age_2'] >= 18 AND $_GET['age_2'] < 115) {
                echo 'Hello madam !';
            }
            if ($_GET['age_2'] >= 115) {
                echo 'WOW ! Still alive? Are you a robot like me ? Can I hug you ?';
            }
        } else {
            echo "Enter your age and your gender please !";
        }
    }
?>
<br>
<br>
<h3>5. Display a different greeting according to the user's age, gender and mothertongue.</h3>


<form action="" method="get">
            <div>
                <label for="age_3">Age</label>
                <input type="" name="age_3">
            </div>
            <div>
                <input type="radio" name="gender_2" value="man">
                <label for="man">Man</label>
                <input type="radio" name="gender_2" value="woman">
                <label for="woman">Woman ?</label>
            </div>
            <div>
                <p>Do you speak english ?</p>
                <input type="radio" name="language" value="yes">
                <label for="yes">Yes</label>
                <input type="radio" name="language" value="no">
                <label for="no">No</label>
            </div>
            <input type="submit" name="submit" value="Greet me now">
        </form>

<?php

    if (isset($_GET['gender_2']) AND isset($_GET['age_3']) AND isset($_GET['language'])) {

        if ($_GET['gender_2'] == "man" AND $_GET['language'] == "yes") {
            
            if ($_GET['age_3'] >=1 AND $_GET['age_3'] < 12) {
                echo "Hello mister kid !";
            }
            if ($_GET['age_3'] >= 12 AND $_GET['age_3'] < 18) {
                echo "Hello mister teen !";
            }
            if ($_GET['age_3'] >= 18 AND $_GET['age_3'] < 115) {
                echo 'Hello mister !';
            }
            if ($_GET['age_3'] >= 115) {
                echo 'WOW ! Still alive? Are you a robot like me ? Can I hug you ?';
            } 
        } else if ($_GET['gender_2'] == "man" AND $_GET['language'] == "no") {

            if ($_GET['age_3'] >=1 AND $_GET['age_3'] < 12) {
                echo "Aloha boy !";
            }
            if ($_GET['age_3'] >= 12 AND $_GET['age_3'] < 18) {
                echo "Aloha mister teen !";
            }
            if ($_GET['age_3'] >= 18 AND $_GET['age_3'] < 115) {
                echo 'Aloha mister !';
            }
            if ($_GET['age_3'] >= 115) {
                echo "WOW!";
            } 
        }    
        else if ($_GET['gender_2'] == "woman" AND $_GET['language'] == "yes") {
            
            if ($_GET['age_3'] >=1 AND $_GET['age_3'] < 12) {
                echo "Hello miss kid !";
            }
            if ($_GET['age_3'] >= 12 AND $_GET['age_3'] < 18) {
                echo "Hello miss teen !";
            }
            if ($_GET['age_3'] >= 18 AND $_GET['age_3'] < 115) {
                echo 'Hello madam !';
            }
            if ($_GET['age_3'] >= 115) {
                echo 'WOW ! Still alive? Are you a robot like me ? Can I hug you ?';
            } 
        } else if ($_GET['gender_2'] == "woman" AND $_GET['language'] == "no") {

            if ($_GET['age_3'] >=1 AND $_GET['age_3'] < 12) {
                echo "Aloha girl !";
            }
            if ($_GET['age_3'] >= 12 AND $_GET['age_3'] < 18) {
                echo "Aloha miss teen !";
            }
            if ($_GET['age_3'] >= 18 AND $_GET['age_3'] < 115) {
                echo 'Aloha madam !';
            }
            if ($_GET['age_3'] >= 115) {
                echo "WOW!";
            }
        }
        
    } else {
            echo "Enter your age and your gender please !";
        }
    
?>
<br>
<br>

<h3>6. The Girl Soccer team</h3>
<form action="" method="get">
    <div>
        <label for="age_4">Your age</label>
        <input type="" name="age_4">
    </div>
    <div>
        <input type="radio" name="gender_3" value="man">
        <label for="man">Man</label>
        <input type="radio" name="gender_3" value="woman">
        <label for="woman">Woman</label>
    </div>
    <div>
        <label for="name">Your name</label>
        <input type="text" name="name">
    </div>
    <input type="submit" name="submit" value="Join the team !">
</form>

<?php
    if (isset($_GET['gender_3']) AND isset($_GET['age_4']) AND isset($_GET['name'])) {
        if ($_GET['gender_3'] == "woman" AND $_GET['age_4'] >= 21 AND $_GET['age_4'] <= 40) {
            echo "Welcome to the team " . $_GET['name'] . " !" ;
        } else {
            echo "Sorry " . $_GET['name'] . ", you don't fit the criteria.";
        }
    }
?>
<br>
<br>

<h3>7. Achieve the same, without the ELSE.</h3>

<form action="" method="get">
    <div>
        <label for="age_5">Your age between 21 and 40 includes .</label>
        <input type="" name="age_5">
    </div>
    <div>
        <input type="radio" name="gender_4" value="man">
        <label for="man">Man</label>
        <input type="radio" name="gender_4" value="woman">
        <label for="woman">Woman</label>
    </div>
    <input type="submit" name="submit" value="Join the team !">
</form>
<?php 

    if (isset($_GET['gender_4']) AND isset($_GET['age_5'])) {
        if ($_GET['gender_4'] == "woman" AND $_GET['age_5'] >= 21 AND $_GET['age_5'] <= 40) {
            echo "Welcome to the team !";
        }
        if ($_GET['gender_4'] == "woman" AND $_GET['age_5'] < 21 AND $_GET['age_5'] > 40) {
            echo "Sorry, you don't fit the criteria !";
        }
        if ($_GET['gender_4'] == "man" AND $_GET['age_5']) {
            echo "Sorry, you don't fit the criteria.";
        }
    }
?>
<br>
<br>

<h3>8."School sucks!" Exercise</h3>

<form action="" method = "get">
    <div>
        <label for="note">Note</label>
        <input type="" name="note">
        <input type="submit" name="submit" value="result">
    </div>
</form>
<?php
    if (isset($_GET['note'])) {
        if ($_GET['note'] >= 0 AND $_GET['note'] <= 4) {
            echo "This work is really bad! What a dumb kid!";
        }
        else if ($_GET['note'] >= 5 AND $_GET['note'] <= 9) {
            echo "This is not sufficient.. More studying is required !";
        }
        else if ($_GET['note'] == 10) {
            echo "Barely enough !";
        }
        else if ($_GET['note'] >= 11 AND $_GET['note'] <= 14) {
            echo "Not bad!";
        }
        else if ($_GET['note'] >= 15 AND $_GET['note'] <= 18) {
            echo "Bravo, bravissimo !!";
        }
        else if ($_GET['note'] == 19 AND $_GET['note'] == 20) {
            echo "Too good to be true : confront the cheater!";
        }  else {
            echo "Please, enter a note between 0 and 20.";
        }
    }
?>