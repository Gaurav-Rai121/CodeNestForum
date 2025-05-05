<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Profile Image</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

  <!-- Container -->
  <div class="flex min-h-screen">

    <!-- Sidebar -->
    <nav class="w-64 bg-gradient-to-b from-gray-800 to-gray-900 text-white px-6 py-8 hidden md:block shadow-lg rounded-r-lg">
      <h1 class="text-3xl font-bold mb-6">Settings</h1>
      <ul class="space-y-4">
        <li><a href="usersetting.php" class="block px-4 py-2 rounded-md hover:bg-gradient-to-r from-blue-500 to-blue-600 hover:text-white transition duration-200">Account</a></li>
        <li><a href="updatepassword.php" class="block px-4 py-2 rounded-md hover:bg-gradient-to-r from-blue-500 to-blue-600 hover:text-white transition duration-200">Password</a></li>
        <li><a href="updateimage.php" class="block px-4 py-2 rounded-md hover:bg-gradient-to-r from-blue-500 to-blue-600 hover:text-white transition duration-200">Profile Image</a></li>
        <li><a href="generalsettings.php" class="block px-4 py-2 rounded-md   hover:bg-gradient-to-r from-blue-500 to-blue-600 hover:text-white transition duration-200">General Settings</a></li>
      </ul>
    </nav>

    <?php

 
      session_start();
      $id=$_SESSION['sno'];

      include('../../components/database.php');

      $select="SELECT * FROM `signup_page` WHERE `sno`='$id' ";
      $querry1=mysqli_query($myconnect,$select);
      $rows=mysqli_fetch_assoc($querry1);
      $profileimage=$rows['image'];
    
    
    
    ?>
    <!-- Main Content -->
    <main class="flex-1 px-6 py-8">
      <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-xl font-semibold mb-6">Update Profile Image</h2>

        <?php 
          $error = isset($_GET['error']) ? urldecode($_GET['error']) : '';
          if($error){
             echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4" role="alert">
          <strong>Error: </strong>'.$error.'</div>';

          }
          ?>

        <!-- Profile Image Update Form -->
        <form action="../../Formhandlers/userProfileEdit/handleupdateimage.php" method="post" enctype="multipart/form-data" class="space-y-6">
          <!-- Current Profile Image -->
          <div class="flex flex-col items-center">
            <img 
              src=<?php echo $profileimage; ?> 
              alt="Current Profile Image" 
              class="w-32 h-32 rounded-full border border-gray-300 mb-4 shadow"
              name="old-image">
            <p class="text-sm text-gray-600">Current Profile Image</p>
            
          </div>

          <!-- Upload New Image -->
          <div>
            <label for="profile-image" class="block text-sm font-semibold mb-2">Upload New Profile Image</label>
            <input 
              type="file" 
              id="profile-image" 
              name="profile-image" 
              accept="image/*" 
              required 
              class="w-full p-3 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
          </div>

          <!-- Submit Button -->
          <div class="text-right">
            <button 
              type="submit" 
              class="bg-blue-600 text-white py-3 px-6 rounded-lg shadow hover:bg-blue-700 transition">
              Update Image
            </button>
          </div>
        </form>
      </div>
    </main>

  </div>

</body>
</html>
