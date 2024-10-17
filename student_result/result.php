<?php

// Taking students 5 subjects marks as default in parameters;
function calculateResult(
    $bangla = 59, //default value of Bangla
    $english = 35,//default value of English
    $physics = 60,//default value of Physics
    $maths = 80, //default value of Mathematics
    $chemistry = 95,//default value of Chemistry
) {

    $total_marks = $bangla + $english + $physics + $maths + $chemistry;
    $avg_marks = $total_marks / 5;

    // Grading the students marks using switch-Case starts here
    $countGrade = "";//taking a variable to receive the value
    switch ($avg_marks) {
        case ($avg_marks >= 80 && $avg_marks <= 100): {
            $countGrade = "A+";
            break;
        }
        case ($avg_marks >= 70 && $avg_marks < 80): {
            $countGrade = "A";
            break;
        }
        case ($avg_marks >= 60 && $avg_marks < 70): {
            $countGrade = "A-";
            break;
        }
        case ($avg_marks >= 50 && $avg_marks < 60): {
            $countGrade = "B";
            break;
        }
        case ($avg_marks >= 40 && $avg_marks < 50): {
            $countGrade = "C";
            break;
        }
        case ($avg_marks >= 33 && $avg_marks < 40): {
            $countGrade = "D";
            break;
        }
        default: {
            $countGrade = "F";
        }

    }
    ;

    // Grading the students marks using switch-Case ends here

    $student_grades = "Total marks: {$total_marks}<br> Average marks: {$avg_marks}<br> Grade: {$countGrade}";
    //marks range validation starts here (using if-else) 
    if (
        ($bangla < 0 or $bangla > 100) or ($english < 0 or $english > 100)
        or ($physics < 0 or $physics > 100) or ($maths < 0 or $maths > 100)
        or ($chemistry < 0 or $chemistry > 100)
    ) {
        echo "mark range is invalid";
    } else {
        if (
            $avg_marks < 33 or
            ($bangla < 33) or ($english < 33)
            or ($physics < 33) or ($maths < 33)
            or ($chemistry < 33)
        ) {
            echo "You have failed the test";

        } else {
            echo $student_grades;
        }
    }

    //marks range validation ends here (using if-else)

}

//lets call the function for Result Output
calculateResult(83, 36, 45, 40, 45);

//Goodbye, you reached at the end of the program

?>