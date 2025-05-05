<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>General Settings</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900">

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
    <main class="flex-1 px-8 py-6">

      <!-- Heading for General Settings -->
      <div class="mb-8">
        <h2 class="text-4xl font-semibold text-gray-800 mb-2">General Settings</h2>
        <p class="text-lg text-gray-600">Here you can update your bio, privacy settings, and social media links to personalize your profile and manage your account's visibility.</p>
      </div>

      <!-- Card for Bio Settings -->
      <div class="bg-white shadow-lg rounded-xl p-6 mb-8 transition-all duration-300 ease-in-out hover:shadow-xl hover:border-blue-600 hover:border-2">
        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Edit Bio & Social Media Links</h3>
        <p class="text-gray-600 text-sm mb-6">Update your personal bio and social media links to enhance your profile visibility.</p>

        <!-- Bio Field -->
        <div class="mb-6">
          <label for="bio" class="block text-sm font-medium text-gray-800">Personal Bio</label>
          <p class="text-sm text-gray-600 mt-2">Write a brief description of yourself. This will appear on your profile to help others know more about you.</p>
        </div>

        <!-- Social Media Links Section -->
        <div class="space-y-4">
          <h4 class="text-lg font-semibold text-gray-800">Social Media Links</h4>
          <p class="text-sm text-gray-600">Provide links to your social media profiles to help others connect with you easily.</p>
          
          <!-- Social Media Inputs -->
          <div class="space-y-2">
            <div>
              <label for="github" class="text-sm font-medium text-gray-800">GitHub Profile</label>
              <p class="text-sm text-gray-600">Add your GitHub link to showcase your repositories and open-source projects.</p>
            </div>
            <div>
              <label for="linkedin" class="text-sm font-medium text-gray-800">LinkedIn Profile</label>
              <p class="text-sm text-gray-600">Share your LinkedIn profile to network with professionals in your field.</p>
            </div>
            <div>
              <label for="twitter" class="text-sm font-medium text-gray-800">Twitter Profile</label>
              <p class="text-sm text-gray-600">Connect with others on Twitter by providing your profile link.</p>
            </div>
            <div>
              <label for="facebook" class="text-sm font-medium text-gray-800">Facebook Profile</label>
              <p class="text-sm text-gray-600">Provide your Facebook link to connect with friends and colleagues.</p>
            </div>
          </div>
        </div>

        <!-- Bio Edit Button -->
        <div class="mt-6">
          <a href='../userSetting/bio.php'>
            <button class="w-full bg-blue-600 text-white py-3 px-6 rounded-md hover:bg-blue-700 transition-all duration-200">
              Edit Bio Settings
            </button>
          </a>
        </div>
      </div>

      <!-- Card for Account Privacy Setting -->
      <div class="bg-white shadow-xl rounded-xl p-8 mb-8 transition-all duration-300 ease-in-out hover:shadow-2xl hover:border-blue-500 hover:border-2">
  <!-- Heading and Description -->
  <h3 class="text-2xl font-semibold text-gray-900 mb-4">Account Privacy</h3>
  <p class="text-gray-600 text-sm mb-6">Manage who can view your profile and control the visibility of your profile picture. Enhance your privacy with these settings.</p>

  <!-- Make Account Private -->
  <div class="mb-6">
    <label for="private-account" class="block text-sm font-semibold text-gray-800 mb-2">Make My Account Private</label>
    <div class="flex items-center space-x-4">
      <input type="checkbox" id="private-account" name="private-account" class="w-6 h-6 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
      <span class="text-gray-700">Only I can see my profile</span>
    </div>
    <p class="text-sm text-gray-600 mt-2">When enabled, only you will be able to view your profile details. This provides additional privacy and prevents others from seeing your personal information.</p>
  </div>

  <!-- Profile Picture Visibility -->
  <div>
    <label for="profile-picture-visibility" class="block text-sm font-semibold text-gray-800 mb-2">Profile Picture Visibility</label>
    <div class="flex items-center space-x-4">
      <input type="checkbox" id="profile-picture-visibility" name="profile-picture-visibility" class="w-6 h-6 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
      <span class="text-gray-700">Show my profile picture to others</span>
    </div>
    <p class="text-sm text-gray-600 mt-2">Toggle this setting to decide if your profile picture should be visible to others. If disabled, only you will be able to see your profile picture.</p>
  </div>
</div>

      

      <!-- Danger Zone Card: Account Deletion -->
      <div class="bg-red-50 border border-red-500 rounded-xl p-6 mb-8">
        <h3 class="text-2xl font-semibold text-red-600 mb-4">Danger Zone: Delete Your Account</h3>
        <p class="text-sm text-gray-700 mb-4">If you delete your account, all of your data (profile, posts, etc.) will be permanently lost. This action cannot be undone. Please proceed with caution.</p>
        <button type="submit" name="delete-account" class="w-full bg-red-600 text-white py-3 px-6 rounded-lg shadow hover:bg-red-700 transition-all duration-200">
          Delete My Account
        </button>
      </div>

    </main>

  </div>

</body>
</html>
