<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Quiz.css">
    <title> Quiz</title>
	<link rel="stylesheet" type="text/css" href="Questions1.css">
</head>
<body>
    <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'registration');

// Attempt select query execution
$n=rand(1,5);
$sql = "SELECT * FROM question WHERE id='$n'";
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
           /* echo "<tr>";
                echo "<th>id</th>";
                echo "<th>Question</th>";
                echo "<th>answer1</th>";
                echo "<th>answer2</th>";
                echo "<th>answer3</th>";
            echo "</tr>";*/
        while($row = mysqli_fetch_array($result)){
           // print_r($row);
            
            $answers=array();
            $answers[0]=$row['answer1'];
            $answers[1]=$row['answer2'];
            $answers[2]=$row['answer3'];
            $answers[3]=$row['correct answer'];
            shuffle($answers);

            //echo "<div class='signup'>";
            echo("<center><b><div class='title'>Welcome to QUIZ</div></b></center>");
            echo "<br><br><br>";
			echo"<div class='a1'>";
            echo "<div class='c1'><br>Question</div><br>";
            echo "<div class='c2'>".$row['question']."</div>";
            echo "<br>";
            echo "<br>";
			echo "<div class=''>";
            for ($i=0; $i < 4; $i++) { 
                $j=$i+1;
                echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$j.").".$answers[$i];

            }
			echo "</div>";
            echo "<br><br>";
            echo "<br><center><form method='post'><input type='text' name='enter' placeholder='Enter answers'><br>";
            echo "<br><center><input type='submit' name = 'submit' value='Enter'></center></form>";
            echo "</div>";
			echo "</div>";
	
            //validate answer
            if (isset($_POST['submit'])) {
                $entered_answer=$_POST['enter'];
                $check=$answers[$entered_answer-1];
                if($row['correct answer']==$check){
                    echo "<script type='text/javascript'> 
                            prompt('Answer is correct');
                            </script>";
                }else{
                    echo "<script type='text/javascript'> 
                            alert('Answer isn't correct');
                            </script>";
                }
            }
            
            /*echo "<tr>";
                echo "<td>" . $row['ques']. "</td>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['ans1'] . "</td>";
                echo "<td>" . $row['ans2'] . "</td>";
                echo "<td>" . $row['ans3'] . "</td>";
            echo "</tr>";*/
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
// Close connection
mysqli_close($con);
?>
<br>
    <br>

    
</body>
</html>