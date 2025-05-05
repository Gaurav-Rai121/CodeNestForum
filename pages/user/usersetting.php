<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Settings</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    .navlink {
  transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
}

/* Highlight the active nav link */
.navlink.active {
  background-color: rgba(59, 130, 246, 0.3); /* Light blue background */
  color: #3B82F6; /* Blue text */
  font-weight: bold;
}
  </style>
</head>
<body class="bg-gray-100 text-gray-900">

  <!-- Container -->
  <div class="flex min-h-screen">

    <!-- Sidebar -->
    <nav class="w-64 bg-gradient-to-b from-gray-800 to-gray-900 text-white px-6 py-8 hidden md:block shadow-lg rounded-r-lg">
      <h1 class="text-3xl font-bold mb-6">Settings</h1>
      <ul class="space-y-4">
        <li><a href="usersetting.php" class="navlink block px-4 py-2 rounded-md hover:bg-gradient-to-r from-blue-500 to-blue-600 hover:text-white transition duration-200">Account</a></li>
        <li><a href="updatepassword.php" class="block px-4 py-2 rounded-md hover:bg-gradient-to-r from-blue-500 to-blue-600 hover:text-white transition duration-200">Password</a></li>
        <li><a href="updateimage.php" class="block px-4 py-2 rounded-md hover:bg-gradient-to-r from-blue-500 to-blue-600 hover:text-white transition duration-200">Profile Image</a></li>
        <li><a href="generalsettings.php" class="block px-4 py-2 rounded-md   hover:bg-gradient-to-r from-blue-500 to-blue-600 hover:text-white transition duration-200">General Settings</a></li>
      </ul>
    </nav>
<?php 
session_start();

$id=$_SESSION['sno'];

 include('../../components/database.php');
 $select="SELECT * FROM `signup_page` WHERE `sno`='$id'";
 $querry1=mysqli_query($myconnect,$select);
 $rows=mysqli_fetch_assoc($querry1);
 $username=$rows['username'];
 $email=$rows['email'];
 $dob=$rows['dob'];
 $mobile=$rows['mobile no'];
 $gender=$rows['gender'];


?>
    <!-- Main Content -->
    <main class="flex-1 px-6 py-8">
      <div class="bg-white rounded-lg shadow p-6">
        <!-- Profile Settings -->
        <div id="profile-settings" class="space-y-6">
          <h2 class="text-xl font-semibold mb-4">Edit Profile</h2>


          <?php 
          $error = isset($_GET['edit']) ? urldecode($_GET['edit']) : '';
          if($error){
             echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4" role="alert">
          <strong>Error:</strong> This email is already in use by another account.</div>';

          }
          ?>
          <!-- Integrated Form -->

          <form action="../../Formhandlers/userProfileEdit/userProfileedit.php" method="post" enctype="multipart/form-data">
            <div class="">
              <div class="mb-4">
                <label for="name" class="block text-sm font-semibold">Name</label>
                <input type="text" id="name" name="name" required class="mt-1 p-2 w-full border rounded-lg focus:ring-blue-500 focus:border-blue-500" minlength="4" value=<?php echo $username ?>>
              </div>
              <div class="mb-4">
                <label for="email" class="block text-sm font-semibold">Email</label>
                <input type="email" id="email" name="email" required class="mt-1 p-2 w-full border rounded-lg focus:ring-blue-500 focus:border-blue-500" value=<?php echo $email ?>>
              </div>
              <div class="mb-4">
                <label for="password" class="block text-sm font-semibold">Password</label>
                <input type="password" id="password" name="password" required class="mt-1 p-2 w-full border rounded-lg focus:ring-blue-500 focus:border-blue-500" minlength="4" value="******" disabled>
              </div>

              <div class="mb-4">
                <label for="mobile" class="block text-sm font-semibold">Mobile Number</label>
                <input type="text" id="mobile" name="mobile" required class="mt-1 p-2 w-full border rounded-lg focus:ring-blue-500 focus:border-blue-500" value=<?php echo $mobile ?>>
              </div>
              <div class="mb-4">
                <label for="gender" class="block text-sm font-semibold">Gender</label>
                <select id="gender" name="gender" required class="mt-1 p-2 w-full border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                  <option value=""
                  <?php   if($gender==null)
                           {
                            echo 'selected';
                           }  ?>
                  >Select Gender</option>
                  <option value="male" 
                  <?php   if($gender=='male')
                           {
                            echo 'selected';
                           }  ?>
                  
                  >Male</option>
                  <option value="female"
                  <?php   if($gender=='female')
                           {
                            echo 'selected';
                           }  ?>
                  >Female</option>
                  <option value="other"
                  <?php   if($gender=='other+')
                           {
                            echo 'selected';
                           }  ?>
                  >Other</option>
                </select>
              </div>
              <div class="mb-4">
                <label for="dob" class="block text-sm font-semibold">Date of Birth</label>
                <input type="date" id="dob" name="dob" required class="mt-1 p-2 w-full border rounded-lg focus:ring-blue-500 focus:border-blue-500" value=<?php echo $dob ?>>
              </div>
            <!-- Submit Button -->
            <button type="submit" class="w-36 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Save Changes</button>
          </form>
        </div>
      </div>
    </main>


  </div>

</body>
</html>
