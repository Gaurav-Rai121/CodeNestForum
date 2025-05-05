<?php

require '../../vendor/autoload.php'; // Include Cloudinary SDK
include('../../components/database.php');

use Cloudinary\Cloudinary;

$cloudinary = new Cloudinary([
    'cloud' => [
        'cloud_name' => 'dppoxf3gz', // replace with your Cloudinary cloud name
        'api_key'    => '421172358313927',    // replace with your Cloudinary API key
        'api_secret' => 'l_TPH3fppYjX3j3wVdhUvLu0eU4', // replace with your Cloudinary API secret
    ],
]);

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    session_start();
    $id=$_SESSION['sno'];
    $file = $_FILES['profile-image'];
    $fileType = $file['type'];
    $fileSize = $file['size'];

        // Image validation parameters
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        $maxFileSize = 2 * 1024 * 1024; 

     
        if ($fileSize > $maxFileSize) {
            $error=" File size exceeds the maximum limit of 2 MB.";
            header('location:../../pages/userSetting/updateimage.php?error='.urldecode($error).'');
            exit;
        }
          
          
            // Validate file size
            else  if (!in_array($fileType, $allowedTypes)) {
                $error= "Invalid file type. Only JPG, PNG, and GIF types are allowed.";
                header('location:../../pages/userSetting/updateimage.php?error='.urldecode($error).'');
                exit;
            }


            else{
            try {
                $select = "SELECT * FROM `signup_page` WHERE `sno`='$id' ";
                $query1 = mysqli_query($myconnect, $select);
                $row = mysqli_fetch_assoc($query1);
        
                $oldImageUrl = $row['image'];
        
                // Extract the public ID from the old image URL
                $publicId = pathinfo(parse_url($oldImageUrl, PHP_URL_PATH), PATHINFO_FILENAME);
                

                // Delete the old image from Cloudinary
                $response = $cloudinary->uploadApi()->destroy($publicId);
                if (isset($response['error'])) {
                    echo "Error deleting image: " . $response['error'];
                    exit;
                }
            
                // Upload image to Cloudinary
                $uploadResult = $cloudinary->uploadApi()->upload($file['tmp_name'], [
                    'folder' => 'UserProfileImages', // replace with your desired Cloudinary folder
                ]);

                $imageUrl = $uploadResult['secure_url']; // Cloudinary image URL

                $update="UPDATE `signup_page` SET `image`='$imageUrl' WHERE `sno`='$id'";
                $querry2=mysqli_query($myconnect,$update);
               
                if ($querry2) {
                    header("location:../../home.php");
                } else {
                    echo "An error occurred while updating your profileImage. Please try again later.";
                    header('location:../../pages/userSetting/updateimage.php?error='.urldecode($error).'');
                    exit;
                }
            } catch (Exception $e) {
                $error= $e->getMessage();
                header('location:../../pages/userSetting/updateimage.php?error='.urldecode($error).'');
                exit;
            }
        }
            
    
    
    
    }?>