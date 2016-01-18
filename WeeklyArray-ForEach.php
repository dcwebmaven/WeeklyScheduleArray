<?php

//array of arrays with my weekly schedule
$weekly_schedule = array("Sunday" => array("9am" => "Wake Up", 
				   "10am" => "Go to Church", 
				   "11am" => "Sunday School",
				   "12pm" => "Relief Society", 
				   "1pm" => "Go Home", 
				   "2pm" => "Have Dinner with Family", 
				   "3pm" => "Take a Nap", 
				   "4pm" => "Read a Book", 
				   "5pm" => "Watch TV"), 
                      "Monday" => array("9am" => "Start Working", 
				   "10am" => "Conference Call", 
				   "11am" => "Work",
				   "12pm" => "Lunch Meeting", 
				   "1pm" => "Travel to Appointment", 
				   "2pm" => "Psychoanalysis Appointment", 
				   "3pm" => "Travel to School", 
				   "4pm" => "Pick up Kids", 
				   "5pm" => "Eat Dinner with Family"), 
                      "Tuesday" => array("9am" => "Start Working", 
				   "10am" => "Conference Call", 
				   "11am" => "Work",
				   "12pm" => "Lunch Meeting", 
				   "1pm" => "Travel to Appointment", 
				   "2pm" => "Psychoanalysis Appointment", 
				   "3pm" => "Travel to School", 
				   "4pm" => "Take Son to Bass Lesson", 
				   "5pm" => "Eat Dinner with Family"), 
                      "Wednesday" => array("9am" => "Start Working", 
				   "10am" => "Work", 
				   "11am" => "Travel to Appointment",
				   "12pm" => "Psychoanalyis Appointment", 
				   "1pm" => "Travel to School", 
				   "2pm" => "Pick up Kids", 
				   "3pm" => "Work", 
				   "4pm" => "Work", 
				   "5pm" => "Eat Dinner with Family"), 
                      "Thursday" => array("9am" => "Start Working", 
				   "10am" => "Film Webinar", 
				   "11am" => "Work",
				   "12pm" => "Lunch Meeting", 
				   "1pm" => "Travel to Appointment", 
				   "2pm" => "Psychoanalysis Appointment", 
				   "3pm" => "Pick up Kids", 
				   "4pm" => "Teach Piano Lessons", 
				   "5pm" => "Eat Dinner with Family"), 
                      "Friday" => array("9am" => "Start Working", 
				   "10am" => "Conference Call", 
				   "11am" => "Work",
				   "12pm" => "Lunch Meeting", 
				   "1pm" => "Work on O'Reilly Course", 
				   "2pm" => "Finish Assignment for O'Reilly Course", 
				   "3pm" => "Travel to School", 
				   "4pm" => "Pick up Kids", 
				   "5pm" => "Eat Dinner with Family"),  
                      "Saturday" => array("9am" => "Work on O'Reilly Course", 
				   "10am" => "More Work on O'Reilly Course", 
				   "11am" => "Play with Kids",
				   "12pm" => "Lunch", 
				   "1pm" => "Visit Museums", 
				   "2pm" => "Go Swimming", 
				   "3pm" => "Travel Home", 
				   "4pm" => "Take a Nap", 
				   "5pm" => "Eat Dinner with Family"));

//lists the values of the weekly_schedule array
foreach($weekly_schedule as $first_level_key=>$first_level_value) {

echo 'What I do on '. $first_level_key .':<br /><br/>';//loops through the first-level array (days of the week)
    
    //traverses the second-level array and echoes each day's times and activities
    foreach ($first_level_value as $second_level_key => $second_level_value) {
        echo '<li>'.$second_level_key.': '.$second_level_value.'</li>';
            }
    echo '<br/>';
}

?>