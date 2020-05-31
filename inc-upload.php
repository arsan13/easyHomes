<?php
    include 'inc-dbconn.php';
    session_start();

    $ownerId = $_SESSION['uid'];
    
    if(isset($_POST['upload']))
    {
        $rent = $_POST['rent'];
        $deposit = $_POST['deposit'];
        $type = $_POST['type'];
        $size = $_POST['size'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $furnished = $_POST['furnished'];
        $description = $_POST['description'];
        
        $files = $_FILES['files'];

        $file = $_FILES['file'];

        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];
        
        $fileExt = explode('.',$fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array("jpg","jpeg","png",);

        if(in_array($fileActualExt, $allowed))
        {
            if($fileError === 0)
            {
                if($fileSize < 200000)
                {
                    $fileNameNew = uniqid('main').'.'.$fileActualExt;
                    $fileDest = "uploads/main/".$fileNameNew;
                    if(file_exists($fileDest))
                    {
                        header("Location: input.php?upload=existError");
                        exit();
                    }
                    else
                    {   
                        $sql = "INSERT INTO properties
                            (ownerId,rent,deposit,type,size,address,city,furnished,description,mainImage) 
                            VALUES
                            ('$ownerId','$rent','$deposit','$type','$size','$address','$city','$furnished','$description','$fileDest');";
                        
                        $insert=$conn->query($sql);
                        if($insert)
                            move_uploaded_file($fileTmpName, $fileDest);
                        else
                            echo "Properties insertion error";
                        
                    }
                }
                else
                {
                    header("Location: input.php?upload=sizeError");
                    exit();
                }
            }
            else
            {
                header("Location: input.php?upload=error");
                exit();
            }
        }
        else
        {
            header("Location: input.php?upload=typeError");
            exit();
        }

        $pid= $conn->insert_id;
        $count= count($_FILES['files']['name']);
        if($insert)
        {
            if($count < 10)
            {
                for($i=0; $i<$count; $i++)
                {
                    $filesName = $_FILES['files']['name'][$i];
                    $filesTmpName = $_FILES['files']['tmp_name'][$i];
                    $filesSize = $_FILES['files']['size'][$i];
                    $filesError = $_FILES['files']['error'][$i];
                    $filesType = $_FILES['files']['type'][$i];
                
                    $filesExt = explode('.',$filesName);
                    $filesActualExt = strtolower(end($filesExt));

                    $allowed = array("jpg","jpeg","png",);

                    if(in_array($filesActualExt, $allowed))
                    {
                        if($filesError === 0)
                        {
                            if($filesSize < 2000000)
                            {
                                $filesNameNew = uniqid('int',true).'.'.$filesActualExt;
                                $filesDest = "uploads/interior/".$filesNameNew;
                                if(file_exists($filesDest))
                                {
                                    header("Location: input.php?upload=existError");
                                    exit();
                                }
                                else
                                {   
                                    $sql = "INSERT INTO interiorimages
                                        (images,pid) VALUES ('$filesDest','$pid');";
                                    
                                    $insert = $conn->query($sql);
                                    if($insert)
                                        move_uploaded_file($filesTmpName, $filesDest);
                                    else
                                        echo "interior images insertion error";
                                }
                            }
                            else
                            {
                                header("Location: input.php?upload=sizeError");
                                exit();
                            }
                        }
                        else
                        {
                            header("Location: input.php?upload=error");
                            exit();
                        }
                    }
                    else
                    {
                        header("Location: input.php?upload=typeError");
                        exit();
                    }
                }  
                header("Location: input.php?upload=success");
                exit();
            }
            else
            {
                header("Location: index.php?upload=limitError");
                exit();
            }
            
        }

    }


?>


