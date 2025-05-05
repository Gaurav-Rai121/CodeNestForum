<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Password</title>
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
        <li><a href="generalsettings.php" class="block px-4 py-2 rounded-md  hover:bg-gradient-to-r from-blue-500 to-blue-600 hover:text-white transition duration-200">General Settings</a></li>
      </ul>
    </nav>
    <!-- Main Content -->
    <main class="flex-1 px-6 py-8">
      <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-xl font-semibold mb-6">Update Password</h2>

        <?php 
          $error = isset($_GET['error']) ? urldecode($_GET['error']) : '';
          if($error){
             echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4" role="alert">
          <strong>Error:</strong>'.$error.'</div>';

          }
          ?>

        <!-- Update Password Form -->
        <form action="../../Formhandlers/userProfileEdit/handleupdatepassword.php" method="post" class="space-y-6">
          <div>
            <label for="current-password" class="block text-sm font-semibold mb-2">Current Password</label>
            <input 
              type="password" 
              id="current-password" 
              name="current-password" 
              required 
              class="w-full p-3 border rounded-lg focus:ring-blue-500 focus:border-blue-500" 
              minlength="4" 
              placeholder="Enter your current password">
          </div>

          <div>
            <label for="new-password" class="block text-sm font-semibold mb-2">New Password</label>
            <input 
              type="password" 
              id="new-password" 
              name="new-password" 
              required 
              class="w-full p-3 border rounded-lg focus:ring-blue-500 focus:border-blue-500" 
              minlength="4" 
              placeholder="Enter a new password">
          </div>

          <div>
            <label for="confirm-password" class="block text-sm font-semibold mb-2">Confirm New Password</label>
            <input 
              type="password" 
              id="confirm-password" 
              name="confirm-password" 
              required 
              class="w-full p-3 border rounded-lg focus:ring-blue-500 focus:border-blue-500" 
              minlength="4" 
              placeholder="Re-enter your new password">
          </div>

          <!-- Save Button -->
          <div class="text-right">
            <button 
              type="submit" 
              class="bg-blue-600 text-white py-3 px-6 rounded-lg shadow hover:bg-blue-700 transition">
              Update Password
            </button>
          </div>
        </form>
      </div>
    </main>

  </div>

</body>
</html>
