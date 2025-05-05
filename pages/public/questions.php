<?php 
include('./components/database.php');
session_start();
if(isset($_SESSION['LoggedIN'])) {
    $loggedin = true;
} else {
    $loggedin = false;
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to CodeHub - Coding Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
   <link rel="stylesheet" href="./styles/question.style.css">
</head>

<body class="light-mode" id="body">
<?php include('./components/header.php') ?>

    <div class="pt-20 m-2 content-wrapper" id="mainContentWrapper">
        <div
            class="flex justify-between items-center bg-white p-4 rounded shadow mb-4 border-2 border-gray-300 p-6 rounded-xl">
            <div class="text-2xl font-semibold text-gray-700">Programming Q&A</div>

            <div class="relative w-1/3">
                <input type="text" placeholder="Search questions..."
                    class="w-full px-4 py-2 pl-10 bg-gray-100 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:bg-white" />
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 4a7 7 0 107 7 7 7 0 00-7-7zm0 0l-4 4" />
                </svg>
            </div>
            <div>
                <span class="icon text-gray-600 hover:text-blue-600 cursor-pointer" id="askQuestionButton">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                </span>
            </div>
        </div>



        <?php
    if($loggedin)
    {

      echo'        <div
            class="bg-white border-2 border-gray-300 p-6 rounded-xl shadow-lg mb-6 hover:shadow-2xl transition-shadow duration-300 group">
            <div class=" mb-4">
                <h2
                    class=" flex items-center justify-center text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-gray-600 via-gray-700 to-gray-800 flex items-center gap-4 group-hover:text-gray-600 transition-colors duration-300 animate-fade-in">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-8 w-8 text-gray-600 group-hover:text-gray-800 transition-colors duration-300"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 16l-4-4m0 0l4-4m-4 4h16" />
                    </svg>
                    Followed Questions
                </h2>
                <div class="w-4/4 h-1 bg-gray-50 mt-2"></div>
            </div>

            <div id="questionsList" class="space-y-6">';

    }
  
  
  ?>


        <!-- Example Hardcoded Question -->

        <?php  
          include('./components/database.php');
          if($loggedin){
            $sno= $_SESSION['sno'];
          
          
          $following = "SELECT * FROM `userfollowing` WHERE `LoginuserId`='$sno'";
          $query7 = mysqli_query($myconnect, $following);

          while($totalfollowing = mysqli_fetch_assoc($query7)){
            $follwingid= $totalfollowing['FollwinguserId'];
  
          $select="SELECT * FROM `questions` WHERE `userId`='$follwingid'";
          $querry3=mysqli_query($myconnect,$select);


        
          while($row=mysqli_fetch_assoc($querry3)){
            $title=$row['title'];
            $description=$row['description'];
            $code=$row['code'];
            $typeQuestion=$row['type of question'];
            $time=$row['created at'];
            $username=$row['username'];
            $questionId=$row['sno'];
            $Id=$row['userId'];
            $selectTwo="SELECT * FROM `signup_page` WHERE `sno`='$Id'";
            $selectThree="SELECT * FROM `comments` WHERE `questionId`='$questionId'";
            $querry4=mysqli_query($myconnect,$selectTwo);
            $querry5=mysqli_query($myconnect,$selectThree);
            $comments=mysqli_num_rows($querry5);
            $rowTwo=mysqli_fetch_assoc($querry4);
           $image=$rowTwo['image'];

 
            echo '<div class="bg-white p-6 rounded shadow question-card">
                    <div class="flex justify-between">
                        <div class="flex items-center space-x-4">
                            <img src="'.$image.'" alt="User Profile" class="w-10 h-10 rounded-full">
                            <div>
                                <h2 class="text-lg font-semibold text-gray-800">'.$title.'</h2>
                                <p class="text-sm text-gray-600">Posted by ' . $username . ' • ' . $time . '</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2">';
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
             
                         $color= $currentAction=='follow'?'bg-gray-500':'bg-gradient-to-r from-gray-800 to-gray-900 ';
                         $follingvalue= $currentAction=='follow'?'Following':'Follow';
             
                         $loggedin = isset($_SESSION['LoggedIN']);
                     
                        if($loginuserId!=$Id)
                        {

                        echo '<form method="Post" action="./Formhandlers/Follow/handlefollow.php">
                           <input type="hidden" name="userId" value=" '.$Id.'">
                            <button type="submit" id="followButton" class="px-4 py-2 '.$color.' text-white shadow-lg  text-white rounded-lg " name="follow" value="follow">'.$follingvalue.'</button>   
                        </form>' ;
                        }
                    }
                                    echo '<div class="relative inline-block text-left">
                <!-- Report Button -->
                <button type="button" class="report-icon text-gray-600 hover:text-red-600 reportMenuButton">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 8v4m0 4h.01M19 12a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
                
                <!-- Dropdown Menu -->
                <div  class=" reportDropdown hidden absolute right-0 mt-2 w-48 bg-white border border-gray-300 rounded-md shadow-lg z-10">
                    <a href="reportuser.php?id=<?php echo $Id; ?>&reason=spam"
        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Spam</a>
        <a href="reportuser.php?id=<?php echo $Id; ?>&reason=abuse"
            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Abusive Language</a>
        <a href="reportuser.php?id=<?php echo $Id; ?>&reason=irrelevant"
            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Irrelevant</a>
        <a href="reportuser.php?id=<?php echo $Id; ?>&reason=other"
            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Other</a>
    </div>
    </div>
    <div class="dropdown relative">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 icon cursor-pointer dropdown-toggle" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h8m-4-4h4m-4 8h4" />
        </svg>
        <div class="dropdown-content absolute right-0 mt-2 rounded shadow p-2 bg-white space-y-1 hidden z-10">
            <a href="#" class="block px-4 py-2 hover:bg-gray-200">Edit</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-200">Delete</a>
            <a href="./pages/userProfile/userProfile.php?id='.$Id.'" class="block px-4 py-2 hover:bg-gray-200">View
                Profile</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-200">Share</a>
        </div>
    </div>
    </div>
    </div>
    <p class="text-gray-700 mt-4">
        ' . $description . '
    </p>';
    if($code!=null)
    {
    echo'

    <pre class="bg-gradient-to-r from-black via-gray-900 to-black p-4 mt-4 rounded text-sm overflow-x-auto "
        id="codeSection">
                        <code  class="overflow-auto text-yellow-300 bg-gradient-to-r from-black via-gray-900 to-black border-none">' . htmlspecialchars($code). '</code>
                    </pre>';
    }
    echo'
    <div class="mt-4 flex justify-between items-center">
        <div class="flex space-x-4">
            <button class="flex items-center text-gray-600 hover:text-red-600">
                <svg class="w-6 h-6 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                </svg>
                <span id="likeCount">0</span> Like
            </button>

            <a href="./comments.php?id='.$questionId.'">
                <button class="flex items-center text-gray-600 hover:text-blue-600">
                    <svg class="w-6 h-6 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 10v4a8 8 0 01-8 8H7l-4 4V5a2 2 0 012-2h4a2 2 0 012 2h8a2 2 0 012 2z"></path>
                    </svg>
                    <span id="commentCount">'.$comments.'</span>
                </button>
            </a>
        </div>
    </div>
    </div>
    '
    ;
    }
    } }
    ?>

    </div>
    </div>

    <div
        class="bg-white border-2 border-gray-300 p-6 rounded-xl shadow-lg mb-6 hover:shadow-2xl transition-shadow duration-300 group">
        <div class=" mb-4">
            <h2
                class=" flex items-center justify-center text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-gray-600 via-gray-700 to-gray-800 flex items-center gap-4 group-hover:text-gray-600 transition-colors duration-300 animate-fade-in">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-8 w-8 text-gray-600 group-hover:text-gray-800 transition-colors duration-300" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 16l-4-4m0 0l4-4m-4 4h16" />
                </svg>
                All Questions
            </h2>
            <div class="w-4/4 h-1 bg-gray-50 mt-2"></div>
        </div>

        <div id="questionsList" class="space-y-6">
            <!-- Example Hardcoded Question -->

            <?php  
          include('./components/database.php');
          $select="SELECT * FROM `questions`";
          $querry3=mysqli_query($myconnect,$select);


          
          while($row=mysqli_fetch_assoc($querry3)){
            $title=$row['title'];
            $description=$row['description'];
            $code=$row['code'];
            $typeQuestion=$row['type of question'];
            $time=$row['created at'];
            $username=$row['username'];
            $questionId=$row['sno'];
            $Id=$row['userId'];
            $selectTwo="SELECT * FROM `signup_page` WHERE `sno`='$Id'";
            $selectThree="SELECT * FROM `comments` WHERE `questionId`='$questionId'";
            $querry4=mysqli_query($myconnect,$selectTwo);
            $querry5=mysqli_query($myconnect,$selectThree);
            $comments=mysqli_num_rows($querry5);
            $rowTwo=mysqli_fetch_assoc($querry4);
           $image=$rowTwo['image'];

 
            echo '<div class="bg-white p-6 rounded shadow question-card">
                    <div class="flex justify-between">
                        <div class="flex items-center space-x-4">
                            <img src="'.$image.'" alt="User Profile" class="w-10 h-10 rounded-full">
                            <div>
                                <h2 class="text-lg font-semibold text-gray-800">'.$title.'</h2>
                                <p class="text-sm text-gray-600">Posted by ' . $username . ' • ' . $time . '</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2">';
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
             
                         $color= $currentAction=='follow'?'bg-gray-500':'bg-gradient-to-r from-gray-800 to-gray-900 ';
                         $follingvalue= $currentAction=='follow'?'Following':'Follow';
             
                         $loggedin = isset($_SESSION['LoggedIN']);
                     
                        if($loginuserId!=$Id)
                        {

                        echo '<form method="Post" action="./Formhandlers/Follow/handlefollow.php">
                           <input type="hidden" name="userId" value=" '.$Id.'">
                            <button type="submit" id="followButton" class="px-4 py-2 '.$color.' text-white shadow-lg  text-white rounded-lg " name="follow" value="follow">'.$follingvalue.'</button>   
                        </form>' ;
                        }
                    }
                    if($loggedin){
                       echo'<a href="reportuser.php?id='.$Id.'"><button class="report-icon text-gray-600 hover:text-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 8v4m0 4h.01M19 12a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>
                            </a>
                    <div class="dropdown relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 icon cursor-pointer dropdown-toggle" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h8m-4-4h4m-4 8h4" />
                        </svg>
                        <div class="dropdown-content absolute right-0 mt-2 rounded shadow p-2 bg-white space-y-1 hidden z-10">
                            <a href="#" class="block px-4 py-2 hover:bg-gray-200">Edit</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-200">Delete</a>
                    <a href="./pages/userProfile/userProfile.php?id='.$Id.'" class="block px-4 py-2 hover:bg-gray-200">View Profile</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-200">Share</a></div>
                    </div>'; 
                    }
                           echo '
                        
                        </div>
                    </div>                                                                             
                                        <p class="text-gray-700 mt-4">
                        ' . $description . '
                    </p>';
            if($code!=null)
            {
               echo'

                    <pre class="bg-gradient-to-r from-black via-gray-900 to-black p-4 mt-4 rounded text-sm overflow-x-auto " id="codeSection">
                        <code  class="overflow-auto text-yellow-300 bg-gradient-to-r from-black via-gray-900 to-black border-none">' . htmlspecialchars($code). '</code>
                    </pre>';
            }
            echo'
                    <div class="mt-4 flex justify-between items-center">
                        <div class="flex space-x-4">
                            <button class="flex items-center text-gray-600 hover:text-red-600">
                                <svg class="w-6 h-6 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                </svg>
                                <span id="likeCount">0</span> Like
                            </button>
            
                            <a href="./comments.php?id='.$questionId.'">
                                <button class="flex items-center text-gray-600 hover:text-blue-600">
                                    <svg class="w-6 h-6 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 10v4a8 8 0 01-8 8H7l-4 4V5a2 2 0 012-2h4a2 2 0 012 2h8a2 2 0 012 2z"></path>
                                    </svg>
                                    <span id="commentCount">'.$comments.'</span> 
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                '
                ;
            
                      }
          ?>

        </div>
    </div>
    <!-- Ask Question Modal -->
    
  <?php 
  
  if($loggedin){
    include('./Formhandlers/question/handleQuestion.php');
  }
  
  
  
  ?>

    <?php

include('./components/database.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $title = $_POST['title'];
    $description = $_POST['description'];
    $code = $_POST['code'];
    $typeQuestion = $_POST['typeQuestion'];
    $userId = $_SESSION['sno'];
    $username = $_SESSION['username'];

    // Insert question into database
    $insert = "INSERT INTO `questions`(`title`, `description`, `code`, `type of question`, `userId`, `username`)
               VALUES ('$title', '$description', '$code', '$typeQuestion', '$userId', '$username')";

    $queryResult = mysqli_query($myconnect, $insert);

    // After saving, redirect to prevent resubmission on page reload
    if ($queryResult) {
        echo '<script>window.location.href="questions.php";</script>';
        exit;
    } else {
        echo "Error: " . mysqli_error($myconnect);
    }
}    

?>


  <?php 
  
   if(!$loggedin)
   {
      echo'   <div class="modal" id="loginModal">
        <div class="modal-content relative">
            <h2 class="text-xl font-semibold mb-4 text-center">Log In</h2>
            <form id="loginForm" action="handlelogin.php" method="post">
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                    <input type="email" name="email" id="email" required placeholder="Enter your email"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 p-3">
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                    <input type="password" name="password" id="password" required placeholder="Enter your password"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 p-3">
                </div>
                <div>
                    <input type="submit" value="Login"
                        class="w-full bg-blue-600 text-white font-semibold rounded-lg p-3 hover:bg-blue-500 transition">
                </div>
            </form>
            <p class="text-sm mt-2 text-center">Dont have an account?
                <a href="signup.php" class="text-blue-600 cursor-pointer" id="openSignupModal">Sign up</a>
            </p>
            <span class="absolute top-3 right-3 cursor-pointer" id="closeLoginModal">X</span>
        </div>
    </div>';


   }
   
  ?>
    <!-- JavaScript for modal functionality -->
    <?php include('./script/question.script.php') ?>

    </div>

    <?php include('components/footer.php') ?>
</body>

</html>