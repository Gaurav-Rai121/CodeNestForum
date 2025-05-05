<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Followers</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- Header Section -->
<?php include('../../header&footer/header.php'); ?>

  <!-- Hero Section -->
  <section class="bg-blue-50 py-10">
    <div class="container mx-auto text-center">
      <h2 class="text-4xl font-bold text-blue-600 mb-4">Your Followers</h2>
      <p class="text-gray-600 max-w-md mx-auto">Here are the people who follow and support your journey. Connect, collaborate, and grow together!</p>
    </div>
  </section>

   <!-- Followers Grid -->
   <div class="container mx-auto py-10 px-4 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

  <?php      
  $sno=$_SESSION['sno'];
   $followers = "SELECT * FROM `userfollowing` WHERE `FollwinguserId`='$sno'";
    $query8 = mysqli_query($myconnect, $followers);
    $totalfollowers = mysqli_num_rows($query8);

   if($totalfollowers>0){
     while($rows=mysqli_fetch_assoc($query8))
     {
       $folowersid= $rows['LoginuserId'];

       $followers = "SELECT * FROM `signup_page` WHERE `sno`='$folowersid'";
       $query = mysqli_query($myconnect, $followers);
       $row = mysqli_fetch_assoc($query);
       $profileImage = $row['image'];
       $username = $row['username'];
       $email = $row['email'];

     echo'    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 border">
      <div class="flex items-center p-6">
        <img src="'.$profileImage.'" alt="Profile Picture" class="rounded-full w-16 h-16 border-2 border-blue-100">
        <div class="ml-4">
          <h3 class="text-xl font-semibold text-gray-800">'.$username.'</h3>
          <p class="text-sm text-gray-500">'.$email.'</p>
        </div>
      </div>
      <div class="border-t p-4 flex justify-between items-center">
        <button class="text-blue-600 font-medium hover:underline">View Profile</button>
        <button class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">Follow Back</button>
      </div>
    </div>
';




   }

    }

    if($totalfollowers==0)
    {
        echo '<div id="noFollowersMessage">
  <div class="container mx-auto py-16 px-4">
    <div class="flex flex-col md:flex-row items-center justify-center bg-white border border-gray-200 shadow-lg rounded-lg overflow-hidden">
      <!-- Illustration Section -->
      <div class="bg-blue-50 p-10 flex-shrink-0">
   
      </div>

      <!-- Text Section -->
      <div class="p-10 text-center md:text-left">
        <h3 class="text-4xl font-extrabold text-gray-800 mb-4">It’s Quiet Here...</h3>
        <p class="text-gray-600 text-lg leading-relaxed">
          You don’t have any followers yet. Once people start following you, their profiles will appear here. 
        </p>
        <p class="mt-4 text-gray-500 italic">"Every journey starts with a single step!"</p>
      </div>
    </div>
  </div>
</div>';
    }
  ?>
 
    <!-- Single Follower Card -->

 


  </div>

  <?php include('../../header&footer/footer.php'); ?>
</body>
</html>
