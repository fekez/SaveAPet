<h1>Image upload to the gallery:</h1>
<br>
<?php
    if (isset($_POST['upload'])) {
     foreach($_FILES as $file) {
            if ($file['error'] == 4);
            elseif (!in_array($file['type'], $MEDIATYPES))
                $message = "The type is not correct:  " . $fajl['name'];
            elseif ($file['error'] == 1  
                        or $file['error'] == 2
                        or $file['size'] > $MAXSIZE) 
                $message = "Too big file: ".$fajl['name'];
            else {
                $target_dir = $FOLDER.strtolower($file['name']);
                if (file_exists($target_dir))
                    $message = "Already exist: ". $file['name'];
                else {
                    move_uploaded_file($file['tmp_name'], $target_dir);
                    $message = "The image uploaded successfully:  " . $file['name'];
                }
            }
        }
    }
?>
    <form action="?page=galleryup" method="post"
                enctype="multipart/form-data">
        <label>Image:
            <input type="file" name="select" value="Select file" required>
        </label>
        <input type="submit" name="upload" value="Upload">
    </form>  

<?php
    if (!empty($message))
    {
        echo $message."<br> \n";
    }
