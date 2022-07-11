<?php
include '../../../database/database_connection.php';
include '../../reusable_function/functions.php';

if (isset($_POST["submit_thesis"])){
    $thesis_title = $_POST["thesis_title"];
    $thesis_owner = $_POST["thesis_owner"];
    $datePublished = $_POST["date_published"];
    $t_course = $_POST["t-course"];
    $t_file= $_FILES["t_file"];

    $t_fileName = extract_name($t_file);
    $t_fileTmpName = extract_tmp_name($t_file);
    $t_fileSize = extract_size($t_file);
    $t_fileError = extract_error($t_file);
    $t_fileExt = extract_ext($t_fileName);

    $allowedExtension = array("pdf");

    if($t_course === '1'){
        if (check_file_extension($t_fileExt,$allowedExtension)){
            if (check_upload_error($t_fileError)){
                if(check_file_size($t_fileSize)){
                    $location = '../../../thesis-images/BSCS/';
                    $t_fileRenamed = rename_file($t_fileExt);
                    $t_fileUploadDestination = file_Destination($location,$t_fileRenamed);

                    $queryResult = sql_query_thesis($con, $thesis_title, 
                    $thesis_owner,$t_course, $datePublished, $t_fileUploadDestination);

                    move_uploaded_file($t_fileTmpName, $t_fileUploadDestination);
                    
                    echo '<script type="text/javascript">alert("SUCCESSFUL!");    
                    location="../home-admin.php"; </script>';
                } else {
                    echo '<script type="text/javascript">alert("FILE TOO BIG!");    
                    location="../home-admin.php"; </script>';
                }
            } else {
                echo '<script type="text/javascript">alert("ERROR UPLOADING!");    
                location="../home-admin.php"; </script>';
            }
        } else {
            echo '<script type="text/javascript">alert("INCORRECT FILE EXTENSION!");    
            location="../home-admin.php"; </script>';
        }
    }
    if($t_course === '2'){
        if (check_file_extension($t_fileExt,$allowedExtension)){
            if (check_upload_error($t_fileError)){
                if(check_file_size($t_fileSize)){
                    $location = '../../../thesis-images/BSIT/';
                    $t_fileRenamed = rename_file($t_fileExt);
                    $t_fileUploadDestination = file_Destination($location,$t_fileRenamed);

                    $queryResult = sql_query_thesis($con, $thesis_title, 
                    $thesis_owner,$t_course, $datePublished, $t_fileUploadDestination);

                    move_uploaded_file($t_fileTmpName, $t_fileUploadDestination);
                    
                    echo '<script type="text/javascript">alert("SUCCESSFUL!");    
                    location="../home-admin.php"; </script>';
                } else {
                    echo '<script type="text/javascript">alert("FILE TOO BIG!");    
                    location="../home-admin.php"; </script>';
                }
            } else {
                echo '<script type="text/javascript">alert("ERROR UPLOADING!");    
                location="../home-admin.php"; </script>';
            }
        } else {
            echo '<script type="text/javascript">alert("INCORRECT FILE EXTENSION!");    
            location="../home-admin.php"; </script>';
        }
    }
    if($t_course === '3'){
        if (check_file_extension($t_fileExt,$allowedExtension)){
            if (check_upload_error($t_fileError)){
                if(check_file_size($t_fileSize)){
                    $location = '../../../thesis-images/ABJOURN/';
                    $t_fileRenamed = rename_file($t_fileExt);
                    $t_fileUploadDestination = file_Destination($location,$t_fileRenamed);

                    $queryResult = sql_query_thesis($con, $thesis_title, 
                    $thesis_owner,$t_course, $datePublished, $t_fileUploadDestination);

                    move_uploaded_file($t_fileTmpName, $t_fileUploadDestination);
                    
                    echo '<script type="text/javascript">alert("SUCCESSFUL!");    
                    location="../home-admin.php"; </script>';
                } else {
                    echo '<script type="text/javascript">alert("FILE TOO BIG!");    
                    location="../home-admin.php"; </script>';
                }
            } else {
                echo '<script type="text/javascript">alert("ERROR UPLOADING!");    
                location="../home-admin.php"; </script>';
            }
        } else {
            echo '<script type="text/javascript">alert("INCORRECT FILE EXTENSION!");    
            location="../home-admin.php"; </script>';
        }
    }
    if($t_course === '4'){
        if (check_file_extension($t_fileExt,$allowedExtension)){
            if (check_upload_error($t_fileError)){
                if(check_file_size($t_fileSize)){
                    $location = '../../../thesis-images/BECE/';
                    $t_fileRenamed = rename_file($t_fileExt);
                    $t_fileUploadDestination = file_Destination($location,$t_fileRenamed);

                    $queryResult = sql_query_thesis($con, $thesis_title, 
                    $thesis_owner,$t_course, $datePublished, $t_fileUploadDestination);

                    move_uploaded_file($t_fileTmpName, $t_fileUploadDestination);
                    
                    echo '<script type="text/javascript">alert("SUCCESSFUL!");    
                    location="../home-admin.php"; </script>';
                } else {
                    echo '<script type="text/javascript">alert("FILE TOO BIG!");    
                    location="../home-admin.php"; </script>';
                }
            } else {
                echo '<script type="text/javascript">alert("ERROR UPLOADING!");    
                location="../home-admin.php"; </script>';
            }
        } else {
            echo '<script type="text/javascript">alert("INCORRECT FILE EXTENSION!");    
            location="../home-admin.php"; </script>';
        }
    }
    if($t_course === '5'){
        if (check_file_extension($t_fileExt,$allowedExtension)){
            if (check_upload_error($t_fileError)){
                if(check_file_size($t_fileSize)){
                    $location = '../../../thesis-images/BEE/';
                    $t_fileRenamed = rename_file($t_fileExt);
                    $t_fileUploadDestination = file_Destination($location,$t_fileRenamed);

                    $queryResult = sql_query_thesis($con, $thesis_title, 
                    $thesis_owner,$t_course, $datePublished, $t_fileUploadDestination);

                    move_uploaded_file($t_fileTmpName, $t_fileUploadDestination);
                    
                    echo '<script type="text/javascript">alert("SUCCESSFUL!");    
                    location="../home-admin.php"; </script>';
                } else {
                    echo '<script type="text/javascript">alert("FILE TOO BIG!");    
                    location="../home-admin.php"; </script>';
                }
            } else {
                echo '<script type="text/javascript">alert("ERROR UPLOADING!");    
                location="../home-admin.php"; </script>';
            }
        } else {
            echo '<script type="text/javascript">alert("INCORRECT FILE EXTENSION!");    
            location="../home-admin.php"; </script>';
        }
    }
    if($t_course === '6'){
        if (check_file_extension($t_fileExt,$allowedExtension)){
            if (check_upload_error($t_fileError)){
                if(check_file_size($t_fileSize)){
                    $location = '../../../thesis-images/BSBM/';
                    $t_fileRenamed = rename_file($t_fileExt);
                    $t_fileUploadDestination = file_Destination($location,$t_fileRenamed);

                    $queryResult = sql_query_thesis($con, $thesis_title, 
                    $thesis_owner,$t_course, $datePublished, $t_fileUploadDestination);

                    move_uploaded_file($t_fileTmpName, $t_fileUploadDestination);
                    
                    echo '<script type="text/javascript">alert("SUCCESSFUL!");    
                    location="../home-admin.php"; </script>';
                } else {
                    echo '<script type="text/javascript">alert("FILE TOO BIG!");    
                    location="../home-admin.php"; </script>';
                }
            } else {
                echo '<script type="text/javascript">alert("ERROR UPLOADING!");    
                location="../home-admin.php"; </script>';
            }
        } else {
            echo '<script type="text/javascript">alert("INCORRECT FILE EXTENSION!");    
            location="../home-admin.php"; </script>';
        }
    }
    if($t_course === '7'){
        if (check_file_extension($t_fileExt,$allowedExtension)){
            if (check_upload_error($t_fileError)){
                if(check_file_size($t_fileSize)){
                    $location = '../../../thesis-images/BSE/';
                    $t_fileRenamed = rename_file($t_fileExt);
                    $t_fileUploadDestination = file_Destination($location,$t_fileRenamed);

                    $queryResult = sql_query_thesis($con, $thesis_title, 
                    $thesis_owner,$t_course, $datePublished, $t_fileUploadDestination);

                    move_uploaded_file($t_fileTmpName, $t_fileUploadDestination);
                    
                    echo '<script type="text/javascript">alert("SUCCESSFUL!");    
                    location="../home-admin.php"; </script>';
                } else {
                    echo '<script type="text/javascript">alert("FILE TOO BIG!");    
                    location="../home-admin.php"; </script>';
                }
            } else {
                echo '<script type="text/javascript">alert("ERROR UPLOADING!");    
                location="../home-admin.php"; </script>';
            }
        } else {
            echo '<script type="text/javascript">alert("INCORRECT FILE EXTENSION!");    
            location="../home-admin.php"; </script>';
        }
    }
    if($t_course === '8'){
        if (check_file_extension($t_fileExt,$allowedExtension)){
            if (check_upload_error($t_fileError)){
                if(check_file_size($t_fileSize)){
                    $location = '../../../thesis-images/BSHM/';
                    $t_fileRenamed = rename_file($t_fileExt);
                    $t_fileUploadDestination = file_Destination($location,$t_fileRenamed);

                    $queryResult = sql_query_thesis($con, $thesis_title, 
                    $thesis_owner,$t_course, $datePublished, $t_fileUploadDestination);

                    move_uploaded_file($t_fileTmpName, $t_fileUploadDestination);
                    
                    echo '<script type="text/javascript">alert("SUCCESSFUL!");    
                    location="../home-admin.php"; </script>';
                } else {
                    echo '<script type="text/javascript">alert("FILE TOO BIG!");    
                    location="../home-admin.php"; </script>';
                }
            } else {
                echo '<script type="text/javascript">alert("ERROR UPLOADING!");    
                location="../home-admin.php"; </script>';
            }
        } else {
            echo '<script type="text/javascript">alert("INCORRECT FILE EXTENSION!");    
            location="../home-admin.php"; </script>';
        }
    }
    if($t_course === '9'){
        if (check_file_extension($t_fileExt,$allowedExtension)){
            if (check_upload_error($t_fileError)){
                if(check_file_size($t_fileSize)){
                    $location = '../../../thesis-images/BSOA/';
                    $t_fileRenamed = rename_file($t_fileExt);
                    $t_fileUploadDestination = file_Destination($location,$t_fileRenamed);

                    $queryResult = sql_query_thesis($con, $thesis_title, 
                    $thesis_owner,$t_course, $datePublished, $t_fileUploadDestination);

                    move_uploaded_file($t_fileTmpName, $t_fileUploadDestination);
                    
                    echo '<script type="text/javascript">alert("SUCCESSFUL!");    
                    location="../home-admin.php"; </script>';
                } else {
                    echo '<script type="text/javascript">alert("FILE TOO BIG!");    
                    location="../home-admin.php"; </script>';
                }
            } else {
                echo '<script type="text/javascript">alert("ERROR UPLOADING!");    
                location="../home-admin.php"; </script>';
            }
        } else {
            echo '<script type="text/javascript">alert("INCORRECT FILE EXTENSION!");    
            location="../home-admin.php"; </script>';
        }
    }
    if($t_course === '10'){
        if (check_file_extension($t_fileExt,$allowedExtension)){
            if (check_upload_error($t_fileError)){
                if(check_file_size($t_fileSize)){
                    $location = '../../../thesis-images/BSP/';
                    $t_fileRenamed = rename_file($t_fileExt);
                    $t_fileUploadDestination = file_Destination($location,$t_fileRenamed);

                    $queryResult = sql_query_thesis($con, $thesis_title, 
                    $thesis_owner,$t_course, $datePublished, $t_fileUploadDestination);

                    move_uploaded_file($t_fileTmpName, $t_fileUploadDestination);
                    
                    echo '<script type="text/javascript">alert("SUCCESSFUL!");    
                    location="../home-admin.php"; </script>';
                } else {
                    echo '<script type="text/javascript">alert("FILE TOO BIG!");    
                    location="../home-admin.php"; </script>';
                }
            } else {
                echo '<script type="text/javascript">alert("ERROR UPLOADING!");    
                location="../home-admin.php"; </script>';
            }
        } else {
            echo '<script type="text/javascript">alert("INCORRECT FILE EXTENSION!");    
            location="../home-admin.php"; </script>';
        }
    }
    if($t_course === '11'){
        if (check_file_extension($t_fileExt,$allowedExtension)){
            if (check_upload_error($t_fileError)){
                if(check_file_size($t_fileSize)){
                    $location = '../../../thesis-images/BSE/';
                    $t_fileRenamed = rename_file($t_fileExt);
                    $t_fileUploadDestination = file_Destination($location,$t_fileRenamed);

                    $queryResult = sql_query_thesis($con, $thesis_title, 
                    $thesis_owner,$t_course, $datePublished, $t_fileUploadDestination);

                    move_uploaded_file($t_fileTmpName, $t_fileUploadDestination);
                    
                    echo '<script type="text/javascript">alert("SUCCESSFUL!");    
                    location="../home-admin.php"; </script>';
                } else {
                    echo '<script type="text/javascript">alert("FILE TOO BIG!");    
                    location="../home-admin.php"; </script>';
                }
            } else {
                echo '<script type="text/javascript">alert("ERROR UPLOADING!");    
                location="../home-admin.php"; </script>';
            }
        } else {
            echo '<script type="text/javascript">alert("INCORRECT FILE EXTENSION!");    
            location="../home-admin.php"; </script>';
        }
    }
    if($t_course === '12'){
        if (check_file_extension($t_fileExt,$allowedExtension)){
            if (check_upload_error($t_fileError)){
                if(check_file_size($t_fileSize)){
                    $location = '../../../thesis-images/BSEME/';
                    $t_fileRenamed = rename_file($t_fileExt);
                    $t_fileUploadDestination = file_Destination($location,$t_fileRenamed);

                    $queryResult = sql_query_thesis($con, $thesis_title, 
                    $thesis_owner,$t_course, $datePublished, $t_fileUploadDestination);

                    move_uploaded_file($t_fileTmpName, $t_fileUploadDestination);
                    
                    echo '<script type="text/javascript">alert("SUCCESSFUL!");    
                    location="../home-admin.php"; </script>';
                } else {
                    echo '<script type="text/javascript">alert("FILE TOO BIG!");    
                    location="../home-admin.php"; </script>';
                }
            } else {
                echo '<script type="text/javascript">alert("ERROR UPLOADING!");    
                location="../home-admin.php"; </script>';
            }
        } else {
            echo '<script type="text/javascript">alert("INCORRECT FILE EXTENSION!");    
            location="../home-admin.php"; </script>';
        }
    }
    if($t_course === '13'){
        if (check_file_extension($t_fileExt,$allowedExtension)){
            if (check_upload_error($t_fileError)){
                if(check_file_size($t_fileSize)){
                    $location = '../../../thesis-images/BSEMM/';
                    $t_fileRenamed = rename_file($t_fileExt);
                    $t_fileUploadDestination = file_Destination($location,$t_fileRenamed);

                    $queryResult = sql_query_thesis($con, $thesis_title, 
                    $thesis_owner,$t_course, $datePublished, $t_fileUploadDestination);

                    move_uploaded_file($t_fileTmpName, $t_fileUploadDestination);
                    
                    echo '<script type="text/javascript">alert("SUCCESSFUL!");    
                    location="../home-admin.php"; </script>';
                } else {
                    echo '<script type="text/javascript">alert("FILE TOO BIG!");    
                    location="../home-admin.php"; </script>';
                }
            } else {
                echo '<script type="text/javascript">alert("ERROR UPLOADING!");    
                location="../home-admin.php"; </script>';
            }
        } else {
            echo '<script type="text/javascript">alert("INCORRECT FILE EXTENSION!");    
            location="../home-admin.php"; </script>';
        }
    }
    if($t_course === '14'){
        if (check_file_extension($t_fileExt,$allowedExtension)){
            if (check_upload_error($t_fileError)){
                if(check_file_size($t_fileSize)){
                    $location = '../../../thesis-images/TCP/';
                    $t_fileRenamed = rename_file($t_fileExt);
                    $t_fileUploadDestination = file_Destination($location,$t_fileRenamed);

                    $queryResult = sql_query_thesis($con, $thesis_title, 
                    $thesis_owner,$t_course, $datePublished, $t_fileUploadDestination);

                    move_uploaded_file($t_fileTmpName, $t_fileUploadDestination);
                    
                    echo '<script type="text/javascript">alert("SUCCESSFUL!");    
                    location="../home-admin.php"; </script>';
                } else {
                    echo '<script type="text/javascript">alert("FILE TOO BIG!");    
                    location="../home-admin.php"; </script>';
                }
            } else {
                echo '<script type="text/javascript">alert("ERROR UPLOADING!");    
                location="../home-admin.php"; </script>';
            }
        } else {
            echo '<script type="text/javascript">alert("INCORRECT FILE EXTENSION!");    
            location="../home-admin.php"; </script>';
        }
    }
    if($t_course === '15'){
        if (check_file_extension($t_fileExt,$allowedExtension)){
            if (check_upload_error($t_fileError)){
                if(check_file_size($t_fileSize)){
                    $location = '../../../thesis-images/MPS/';
                    $t_fileRenamed = rename_file($t_fileExt);
                    $t_fileUploadDestination = file_Destination($location,$t_fileRenamed);

                    $queryResult = sql_query_thesis($con, $thesis_title, 
                    $thesis_owner,$t_course, $datePublished, $t_fileUploadDestination);

                    move_uploaded_file($t_fileTmpName, $t_fileUploadDestination);
                    
                    echo '<script type="text/javascript">alert("SUCCESSFUL!");    
                    location="../home-admin.php"; </script>';
                } else {
                    echo '<script type="text/javascript">alert("FILE TOO BIG!");    
                    location="../home-admin.php"; </script>';
                }
            } else {
                echo '<script type="text/javascript">alert("ERROR UPLOADING!");    
                location="../home-admin.php"; </script>';
            }
        } else {
            echo '<script type="text/javascript">alert("INCORRECT FILE EXTENSION!");    
            location="../home-admin.php"; </script>';
        }
    }
    if($t_course === '16'){
        if (check_file_extension($t_fileExt,$allowedExtension)){
            if (check_upload_error($t_fileError)){
                if(check_file_size($t_fileSize)){
                    $location = '../../../thesis-images/MAE/';
                    $t_fileRenamed = rename_file($t_fileExt);
                    $t_fileUploadDestination = file_Destination($location,$t_fileRenamed);

                    $queryResult = sql_query_thesis($con, $thesis_title, 
                    $thesis_owner,$t_course, $datePublished, $t_fileUploadDestination);

                    move_uploaded_file($t_fileTmpName, $t_fileUploadDestination);
                    
                    echo '<script type="text/javascript">alert("SUCCESSFUL!");    
                    location="../home-admin.php"; </script>';
                } else {
                    echo '<script type="text/javascript">alert("FILE TOO BIG!");    
                    location="../home-admin.php"; </script>';
                }
            } else {
                echo '<script type="text/javascript">alert("ERROR UPLOADING!");    
                location="../home-admin.php"; </script>';
            }
        } else {
            echo '<script type="text/javascript">alert("INCORRECT FILE EXTENSION!");    
            location="../home-admin.php"; </script>';
        }
    }
    if($t_course === '17'){
        if (check_file_extension($t_fileExt,$allowedExtension)){
            if (check_upload_error($t_fileError)){
                if(check_file_size($t_fileSize)){
                    $location = '../../../thesis-images/MBA/';
                    $t_fileRenamed = rename_file($t_fileExt);
                    $t_fileUploadDestination = file_Destination($location,$t_fileRenamed);

                    $queryResult = sql_query_thesis($con, $thesis_title, 
                    $thesis_owner,$t_course, $datePublished, $t_fileUploadDestination);

                    move_uploaded_file($t_fileTmpName, $t_fileUploadDestination);
                    
                    echo '<script type="text/javascript">alert("SUCCESSFUL!");    
                    location="../home-admin.php"; </script>';
                } else {
                    echo '<script type="text/javascript">alert("FILE TOO BIG!");    
                    location="../home-admin.php"; </script>';
                }
            } else {
                echo '<script type="text/javascript">alert("ERROR UPLOADING!");    
                location="../home-admin.php"; </script>';
            }
        } else {
            echo '<script type="text/javascript">alert("INCORRECT FILE EXTENSION!");    
            location="../home-admin.php"; </script>';
        }
    }
}

function sql_query_thesis($con, $thesis_title, $thesis_owner, $t_course, $datePublished, $t_fileUploadDestination){

    $thesis_rate = 0;

    $query = "INSERT INTO thesis 
    (course_id, thesis_title, thesis_file, authors, 
    date_published, thesis_rate)
    VALUES
    ('$t_course', '$thesis_title', '$t_fileUploadDestination', '$thesis_owner', 
    '$datePublished','$thesis_rate')";

    $queryResult = mysqli_query($con,$query);
    return $queryResult;
}
