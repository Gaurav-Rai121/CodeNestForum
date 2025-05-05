<?php
session_start();
$QuestionIdId = $_GET['id'];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to CodeHub - Coding Forum</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="components/styles/style.css">
    <!-- Animation Styles -->
 <link rel="stylesheet" href="./styles/comments.style.css">
</head>

<body class="light-mode" id="body">

    <?php include('components/header.php') ?>

    <div id="main-content" class="pt-20 main-content transition-transform duration-300 ease-in-out">

        <!-- Question Section -->
        <div class="relative bg-white p-6 rounded-lg shadow mb-4 m-4 overflow-hidden">
            <div class="absolute inset-y-0 left-0 w-2 bg-blue-600"></div>
            <h2 class="text-2xl font-semibold mb-2 text-blue-900">What is the difference between var, let, and const in JavaScript?</h2>
            <p class="text-gray-700 mb-4">Posted by <strong>John Doe</strong> • 2 hours ago</p>
            <code class="bg-gray-200 text-gray-800 p-1 rounded">var</code> is function-scoped, <code class="bg-gray-200 text-gray-800 p-1 rounded">let</code> and <code class="bg-gray-200 text-gray-800 p-1 rounded">const</code> are block-scoped. <code class="bg-gray-200 text-gray-800 p-1 rounded">const</code>

        </div>

        <!-- Answers Section -->
        <div class="bg-white p-6 rounded shadow mb-4 m-4">
            <h3 class="text-xl font-semibold mb-2">Answers:</h3>

            <?php

            include('./components/database.php');
            $select="SELECT * FROM comments Where questionId='$QuestionIdId'";
            $querry3=mysqli_query($myconnect,$select);
            $anyRow=mysqli_num_rows($querry3);
            $loggedin = isset($_SESSION['LoggedIN']);

            if($anyRow>0)
            {
                while($row=mysqli_fetch_assoc($querry3)){
                $comment=$row['comment'];
                $code=$row['code'];
                $time=$row['timestap'];
                $Id=$row['userId'];
                $answerId=$row['sno'];
                $selectTwo="SELECT * FROM signup_page WHERE sno='$Id'";
                $querry4=mysqli_query($myconnect,$selectTwo);
                $rowTwo=mysqli_fetch_assoc($querry4);
                $image=$rowTwo['image'];
                $username=$rowTwo['username'];
                $likeCountQuery = "SELECT COUNT(*) AS likes FROM `like&dislike` WHERE `answerId` = '$answerId' AND `action` = 'like'";
                $dislikeCountQuery = "SELECT COUNT(*) AS dislikes FROM `like&dislike` WHERE `answerId` = '$answerId' AND `action` = 'dislike'";
                $querry5=mysqli_query($myconnect,$likeCountQuery);
                $querry6=mysqli_query($myconnect,$dislikeCountQuery);
                $likes= mysqli_fetch_assoc($querry5)['likes'];
                $dislikes=mysqli_fetch_assoc($querry6)['dislikes'];
                if($loggedin=='true'){
                    $userId=$_SESSION['sno'];
                }
             
                else{
                    $userId=$Id;
                }
           
                $selectThree="SELECT *  FROM `like&dislike` WHERE `answerId` = '$answerId' And `userId`='$userId'";
                $querry7=mysqli_query($myconnect,$selectThree);
                    if ($row = mysqli_fetch_assoc($querry7)) {
                        $currentAction = $row['action']; // Access 'action' if the row exists
                    } else {
                        $currentAction = null; // Default to null if no row is found
                    }
           
                $color= $currentAction=='like'?'text-blue-600':'text-gray-600 ';
                $colorTwo= $currentAction=='Dislike'?'text-blue-600':'text-gray-600 ';
                

                
                echo '        <div class="answer-card bg-gray-50 p-4 rounded-lg shadow mb-4 relative overflow-hidden">
                    <div class="absolute inset-y-0 left-0 w-2 bg-red-600"></div>
                    <div class="flex items-start space-x-4 mb-2">
                        <img src="'.$image.'" alt="User Profile" class="w-10 h-10 rounded-full">
                        <div>
                        <div>
                            <p class="font-semibold text-gray-800">'.$username.' • '.$time.'</p>';



                            if($loggedin)
                            {
                                $loginuserId= $_SESSION['sno'];
                                $selectThree="SELECT * FROM `userfollowing` WHERE  `LoginuserId`='$loginuserId' AND `FollwinguserId`='$Id'";
                                $querry16=mysqli_query($myconnect,$selectThree);
                                
                                if ($row=mysqli_fetch_assoc($querry16)) {
                                 $currentAction = $row['follow']; // Access 'action' if the row exists
                                 } 
                                 else {
                                 $currentAction = null; // Default to null if no row is found
                                 }
                     
                                 $Followingcolor= $currentAction=='follow'?'bg-gray-500':'bg-gradient-to-r from-gray-800 to-gray-900 ';
                                 $follingvalue= $currentAction=='follow'?'Following':'Follow';
                     
                                 $loggedin = isset($_SESSION['LoggedIN']);
                             
                                if($loginuserId!=$Id)
                                {
        
                                echo '<form method="Post" action="./Formhandlers/Follow/handlefollow.php">
                                   <input type="hidden" name="userId" value=" '.$Id.'">
                                    <button type="submit" id="followButton" class="px-4 py-2 '.$Followingcolor.' text-white shadow-lg  text-white rounded-lg " name="follow" value="follow">'.$follingvalue.'</button>   
                                </form>' ;
                                }
                            }
                
                        echo '</div>
                            <p class="text-gray-700">'.$comment.'</p>';
                            
                if($code!='')
                {
                    echo'<pre class="bg-gray-100 p-2 rounded mt-2 overflow-x-auto"><code>'.$code.'</code></pre>';

                }   
                echo'</div>
                    </div>';
               
              if($loggedin=='true')
              {
                    $savedQuery = "SELECT * FROM `savedcommnets` WHERE `userId` = '{$_SESSION['sno']}' AND `answerId` = '$answerId'";
                    $savedResult = mysqli_query($myconnect, $savedQuery);
                    $isSaved = mysqli_num_rows($savedResult) > 0;
                    $saved=$isSaved ? ' <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>' : 'Save';
                 echo'   
                    <div class="flex items-center space-x-4 mt-2">
                     <form method="POST" action="./Formhandlers/like_dislike/like_dislike_answer.php" class="flex items-center space-x-4 mt-2">
                      <input type="hidden" name="answerId" value=" '.$answerId.'">

                        <button  type="submit" class="'.$color.' hover:text-blue-600 flex items-center" name="action" value="like">
                            <span class="ml-1">Like ('.$likes.')</span>
                        </button>

                        <button  type="submit" class="'.$colorTwo.' hover:text-blue-600 flex items-center" name="action" value="Dislike">
                            <span class="ml-1">Dislike ('.$dislikes.')</span>
                        </button>
                     </form>


                     <form method="POST" action="./Formhandlers/comment/handlesave.php" class="flex items-center space-x-1 mt-2">
                         <input type="hidden" name="answerId" value=" '.$answerId.'">
                         <button  type="submit" class=" text-gray-600  hover:text-blue-600 flex items-center" name="save" value="save">
                          <span class="ml-1">'.$saved.'</span>
                        </button>
                     </form>



                    </div>';
              }
                
                else{
                        echo'  <div class="flex items-center space-x-4 mt-2>
                        <button disabled type="submit" class="'.$color.' flex items-center btn-disabled" name="action" value="like">
                            <span class="ml-1">Like ('.$likes.')</span>
                        </button>

                        <button disabled type="submit" class="'.$colorTwo.'  flex items-center btn-disabled" name="action" value="Dislike">
                            <span class="ml-1">Dislike ('.$dislikes.')</span>
                        </button>
                     </div>';
                    }
              
       
              

                        echo' </div>';

        }
    }

    else
    {
    echo ' <div class="relative bg-gradient-to-r from-indigo-300 via-purple-200 to-pink-300 p-8 rounded-xl shadow-lg mb-6 text-center overflow-hidden transform transition duration-300 hover:scale-105"> 
    <div class="absolute inset-0 bg-cover bg-center opacity-20 animate-glow"></div>

    <!-- Alien Ship Animation -->
    <div class="absolute top-2 left-1/4 transform translate-x-10 animate-ship">
    <img src="https://media.istockphoto.com/id/491615068/photo/cartoon-rocket-space-ship.jpg?s=1024x1024&w=is&k=20&c=e6SAQvTobXA3dNXUfzXXGg4wIpWwIBq4w5-qc1KCv_M=" alt="Spaceship" class="w-16 h-16">
    </div>

    <!-- Main Content -->
    <div class="relative z-10">
    <div class="text-4xl font-bold text-gray-800 tracking-wide">
        No Answers Yet...
    </div>

    <div class="mt-2 text-xl text-gray-600">
        A brave soul is needed to answer this question!
    </div>

    <!-- Pulse Effect CTA Button -->
    <div class="mt-8">
        <button class="mybutton cta-button px-8 py-4 bg-yellow-400 text-gray-800 rounded-lg font-bold transform transition duration-500 ease-in-out hover:scale-110 animate-pulse">
            Be the First to Answer
        </button>
    </div>

    <!-- Scrolling Story -->
    <div class="mt-6 w-full text-sm text-gray-700 overflow-hidden">
        <div class="scrolling-text animate-scroll">
            <p>Our community is waiting for someone like you...</p>
            <p>Help this question reach its full potential by providing an answer!</p>
            <p>Remember, every question deserves an answer! ✨</p>
        </div>
    </div>

    <!-- 3D Hover Effect (Floating Particles/Answers) -->
    <div class="floating-answers absolute inset-0 flex justify-center items-center opacity-60">
        <div class="particle animate-particle bg-blue-300 rounded-full w-5 h-5 absolute top-20 left-1/3"></div>
        <div class="particle animate-particle bg-pink-300 rounded-full w-6 h-6 absolute top-32 left-1/2"></div>
        <div class="particle animate-particle bg-green-300 rounded-full w-4 h-4 absolute top-16 left-2/3"></div>
    </div>
    </div>
    </div>




';
}






?>
     
        </div>

        <!-- Leave a Comment Form Section -->
        <div id="commentFormSection" class="relative bg-gray-100 p-6 rounded-lg shadow-lg m-4">
            <div class="absolute inset-y-0 left-0 w-2 bg-purple-500 rounded-l-lg"></div>
            <h3 class="text-xl font-semibold mb-4 text-purple-700">Share Your Thoughts:</h3>
            <form id="commentForm" action="#" method="post">
                <!-- Description Field -->
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 mb-2">Comment:</label>
                    <textarea id="description" rows="3" class="w-full border border-gray-300 p-2 rounded" placeholder="Type a comment here..." name="comment" required></textarea>
                </div>

                <!-- Code Field -->
                <div class="mb-4">
                    <label for="code" class="block text-gray-700 mb-2">Code (optional):</label>
                    <textarea id="code" rows="3" class="w-full border border-gray-300 p-2 rounded" placeholder="Paste your code here..." name="code"></textarea>
                </div>

                <button type="submit" class="bg-purple-600 text-white py-2 px-4 rounded hover:bg-purple-700">Submit</button>
            </form>
        </div>

    </div>
    <?php include('./components/chatbox.php')?>

    <!-- Floating Action Button (FAB) -->
    <div id="fabButton" class="fab text-center" onclick="scrollToCommentForm()"  title="Add a answer">
        <span class="text-2xl" title="Add a answer">+</span>
    </div>

    <!-- Scripts -->
    <script src="./script/comments.script.js">

    </script>

<?php
include('./components/database.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $comment = mysqli_real_escape_string($myconnect, $_POST['comment']);
    $code = mysqli_real_escape_string($myconnect, $_POST['code']);
    $userId = $_SESSION['sno'];

    // Insert comment into database
    $insert = "INSERT INTO `comments`(`comment`, `code`, `questionId`, `userId`) VALUES ('$comment','$code','$QuestionIdId','$userId')";

    $queryResult = mysqli_query($myconnect, $insert);

    // After saving, redirect to prevent resubmission on page reload
    if ($queryResult) {
        echo '<script>window.location.href="comments.php?id=' . $QuestionIdId . '";</script>';
        exit;
    } else {
        echo "Error: " . mysqli_error($myconnect);
    }
}
?>
</body>

</html>
