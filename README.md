# Upload_Image
Copy upload_image.php file in wamp folder

Add permissions in Manifest

    <uses-permission android:name="android.permission.INTERNET"/>
    <uses-permission android:name="android.permission.READ_EXTERNAL_STORAGE"/>
    <uses-permission android:name="android.permission.CAMERA"/>
    
Make table in any database where image will be uploaded make column for image and set type of that column to LONGTEXT no need to give length.

You can also import table directly , here i had uploaded one file named images.sql so you don't need to create table by yourself in that case.
