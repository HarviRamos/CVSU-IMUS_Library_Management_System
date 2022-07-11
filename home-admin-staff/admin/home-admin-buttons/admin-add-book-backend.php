<?php
include '../../../database/database_connection.php';
include '../../reusable_function/functions.php';

if (isset($_POST["submit_book"])){
    $department_id = $_POST["department_id"];
    $book_title = $_POST["book_title"];
    $title_photo_location = $_FILES["title_photo_location"];
    $overview_photo_location = $_FILES["overview_photo_location"];
    $table_of_contents_location = $_FILES["table_of_contents_location"];
    $ISBN_number = $_POST["ISBN_number"];
    $author = $_POST["author"];
    $date_published = $_POST["date_published"];
    $number_of_stocks = $_POST["number_of_stocks"];
    $rack_number = $_POST["rack_number"];
    $rack_level_number = $_POST["rack_level_number"];
    

    $titlePhotoName = extract_name($title_photo_location);
    $overviewPhotoName = extract_name($overview_photo_location);
    $tableOfContentsPhotoName = extract_name($table_of_contents_location);

    $titlePhotoTmpName = extract_tmp_name($title_photo_location);
    $overviewPhotoTmpName = extract_tmp_name($overview_photo_location);
    $tableOfContentsTmpName = extract_tmp_name($table_of_contents_location);

    $titlePhotoExt = extract_ext($titlePhotoName);
    $overviewPhotoExt = extract_ext($overviewPhotoName);
    $tableOfContentsPhotoExt = extract_ext($tableOfContentsPhotoName);

    $titlePhotoSize = extract_size($title_photo_location);
    $overviewPhotoSize = extract_size($overview_photo_location);
    $tableOfContentsPhotoSize = extract_size($table_of_contents_location);

    $titlePhotoError = extract_error($title_photo_location);
    $overviewPhotoError = extract_error($overview_photo_location);
    $tableOfContentsPhotoError = extract_error($table_of_contents_location);

    $allowedExtension = array('jpg', 'jpeg', 'png');

    if ($department_id === '0'){

        if (check_file_extension($titlePhotoExt,$allowedExtension) && check_file_extension($overviewPhotoExt,$allowedExtension) && check_file_extension($tableOfContentsPhotoExt,$allowedExtension)){
            if (check_upload_error($titlePhotoError) && check_upload_error($overviewPhotoError) && check_upload_error($tableOfContentsPhotoError)){
                if(check_file_size($titlePhotoSize) && check_file_size($overviewPhotoSize) && check_file_size($tableOfContentsPhotoSize)){
                    $location = '../../../book-images/DDS/';
                    $titlePhotoRenamed = rename_file($titlePhotoExt);
                    $overviewPhotoRenamed = rename_file($overviewPhotoExt);
                    $tableOfContentsPhotoRenamed = rename_file($tableOfContentsPhotoExt);

                    $titlePhotoUploadDestination = file_Destination($location,$titlePhotoRenamed);
                    $overviewPhotoUploadDestination = file_Destination($location,$overviewPhotoRenamed);
                    $tableOfContentsPhotoUploadDestination = file_Destination($location,$tableOfContentsPhotoRenamed);

                    $queryResult = sql_query($con, $department_id, $book_title, $titlePhotoUploadDestination, $overviewPhotoUploadDestination, $tableOfContentsPhotoUploadDestination,
                $ISBN_number,$author, $date_published,$number_of_stocks, $rack_number, $rack_level_number);

                    move_uploaded_file($titlePhotoTmpName, $titlePhotoUploadDestination);
                    move_uploaded_file($overviewPhotoTmpName, $overviewPhotoUploadDestination);
                    move_uploaded_file($tableOfContentsTmpName, $tableOfContentsPhotoUploadDestination);
                    
                    // header('Location: ../home-admin.php?uploadsuccessful');
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
    if ($department_id === '1'){

        if (check_file_extension($titlePhotoExt,$allowedExtension) && check_file_extension($overviewPhotoExt,$allowedExtension) && check_file_extension($tableOfContentsPhotoExt,$allowedExtension)){
            if (check_upload_error($titlePhotoError) && check_upload_error($overviewPhotoError) && check_upload_error($tableOfContentsPhotoError)){
                if(check_file_size($titlePhotoSize) && check_file_size($overviewPhotoSize) && check_file_size($tableOfContentsPhotoSize)){
                    $location = '../../../book-images/DBPS/';
                    $titlePhotoRenamed = rename_file($titlePhotoExt);
                    $overviewPhotoRenamed = rename_file($overviewPhotoExt);
                    $tableOfContentsPhotoRenamed = rename_file($tableOfContentsPhotoExt);

                    $titlePhotoUploadDestination = file_Destination($location,$titlePhotoRenamed);
                    $overviewPhotoUploadDestination = file_Destination($location,$overviewPhotoRenamed);
                    $tableOfContentsPhotoUploadDestination = file_Destination($location,$tableOfContentsPhotoRenamed);

                    $queryResult = sql_query($con, $department_id, $book_title, $titlePhotoUploadDestination, $overviewPhotoUploadDestination, $tableOfContentsPhotoUploadDestination,
                $ISBN_number,$author, $date_published,$number_of_stocks,$rack_number, $rack_level_number);

                    move_uploaded_file($titlePhotoTmpName, $titlePhotoUploadDestination);
                    move_uploaded_file($overviewPhotoTmpName, $overviewPhotoUploadDestination);
                    move_uploaded_file($tableOfContentsTmpName, $tableOfContentsPhotoUploadDestination);
                    
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
    if ($department_id === '2'){

        if (check_file_extension($titlePhotoExt,$allowedExtension) && check_file_extension($overviewPhotoExt,$allowedExtension) && check_file_extension($tableOfContentsPhotoExt,$allowedExtension)){
            if (check_upload_error($titlePhotoError) && check_upload_error($overviewPhotoError) && check_upload_error($tableOfContentsPhotoError)){
                if(check_file_size($titlePhotoSize) && check_file_size($overviewPhotoSize) && check_file_size($tableOfContentsPhotoSize)){
                    $location = '../../../book-images/DCS/';
                    $titlePhotoRenamed = rename_file($titlePhotoExt);
                    $overviewPhotoRenamed = rename_file($overviewPhotoExt);
                    $tableOfContentsPhotoRenamed = rename_file($tableOfContentsPhotoExt);

                    $titlePhotoUploadDestination = file_Destination($location,$titlePhotoRenamed);
                    $overviewPhotoUploadDestination = file_Destination($location,$overviewPhotoRenamed);
                    $tableOfContentsPhotoUploadDestination = file_Destination($location,$tableOfContentsPhotoRenamed);

                    $queryResult = sql_query($con, $department_id, $book_title, $titlePhotoUploadDestination, $overviewPhotoUploadDestination, $tableOfContentsPhotoUploadDestination,
                $ISBN_number,$author, $date_published,$number_of_stocks,$rack_number, $rack_level_number);

                    move_uploaded_file($titlePhotoTmpName, $titlePhotoUploadDestination);
                    move_uploaded_file($overviewPhotoTmpName, $overviewPhotoUploadDestination);
                    move_uploaded_file($tableOfContentsTmpName, $tableOfContentsPhotoUploadDestination);
                    
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
    if ($department_id === '3'){

        if (check_file_extension($titlePhotoExt,$allowedExtension) && check_file_extension($overviewPhotoExt,$allowedExtension) && check_file_extension($tableOfContentsPhotoExt,$allowedExtension)){
            if (check_upload_error($titlePhotoError) && check_upload_error($overviewPhotoError) && check_upload_error($tableOfContentsPhotoError)){
                if(check_file_size($titlePhotoSize) && check_file_size($overviewPhotoSize) && check_file_size($tableOfContentsPhotoSize)){
                    $location = '../../../book-images/DE/';
                    $titlePhotoRenamed = rename_file($titlePhotoExt);
                    $overviewPhotoRenamed = rename_file($overviewPhotoExt);
                    $tableOfContentsPhotoRenamed = rename_file($tableOfContentsPhotoExt);

                    $titlePhotoUploadDestination = file_Destination($location,$titlePhotoRenamed);
                    $overviewPhotoUploadDestination = file_Destination($location,$overviewPhotoRenamed);
                    $tableOfContentsPhotoUploadDestination = file_Destination($location,$tableOfContentsPhotoRenamed);

                    $queryResult = sql_query($con, $department_id, $book_title, $titlePhotoUploadDestination, $overviewPhotoUploadDestination, $tableOfContentsPhotoUploadDestination,
                $ISBN_number,$author, $date_published,$number_of_stocks ,$rack_number, $rack_level_number);

                    move_uploaded_file($titlePhotoTmpName, $titlePhotoUploadDestination);
                    move_uploaded_file($overviewPhotoTmpName, $overviewPhotoUploadDestination);
                    move_uploaded_file($tableOfContentsTmpName, $tableOfContentsPhotoUploadDestination);
                    
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
    if ($department_id === '4'){

        if (check_file_extension($titlePhotoExt,$allowedExtension) && check_file_extension($overviewPhotoExt,$allowedExtension) && check_file_extension($tableOfContentsPhotoExt,$allowedExtension)){
            if (check_upload_error($titlePhotoError) && check_upload_error($overviewPhotoError) && check_upload_error($tableOfContentsPhotoError)){
                if(check_file_size($titlePhotoSize) && check_file_size($overviewPhotoSize) && check_file_size($tableOfContentsPhotoSize)){
                    $location = '../../../book-images/DHM/';
                    $titlePhotoRenamed = rename_file($titlePhotoExt);
                    $overviewPhotoRenamed = rename_file($overviewPhotoExt);
                    $tableOfContentsPhotoRenamed = rename_file($tableOfContentsPhotoExt);

                    $titlePhotoUploadDestination = file_Destination($location,$titlePhotoRenamed);
                    $overviewPhotoUploadDestination = file_Destination($location,$overviewPhotoRenamed);
                    $tableOfContentsPhotoUploadDestination = file_Destination($location,$tableOfContentsPhotoRenamed);

                    $queryResult = sql_query($con, $department_id, $book_title, $titlePhotoUploadDestination, $overviewPhotoUploadDestination, $tableOfContentsPhotoUploadDestination,
                $ISBN_number,$author, $date_published,$number_of_stocks ,$rack_number, $rack_level_number);

                    move_uploaded_file($titlePhotoTmpName, $titlePhotoUploadDestination);
                    move_uploaded_file($overviewPhotoTmpName, $overviewPhotoUploadDestination);
                    move_uploaded_file($tableOfContentsTmpName, $tableOfContentsPhotoUploadDestination);
                    
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
    if ($department_id === '5'){

        if (check_file_extension($titlePhotoExt,$allowedExtension) && check_file_extension($overviewPhotoExt,$allowedExtension) && check_file_extension($tableOfContentsPhotoExt,$allowedExtension)){
            if (check_upload_error($titlePhotoError) && check_upload_error($overviewPhotoError) && check_upload_error($tableOfContentsPhotoError)){
                if(check_file_size($titlePhotoSize) && check_file_size($overviewPhotoSize) && check_file_size($tableOfContentsPhotoSize)){
                    $location = '../../../book-images/DLMC/';
                    $titlePhotoRenamed = rename_file($titlePhotoExt);
                    $overviewPhotoRenamed = rename_file($overviewPhotoExt);
                    $tableOfContentsPhotoRenamed = rename_file($tableOfContentsPhotoExt);

                    $titlePhotoUploadDestination = file_Destination($location,$titlePhotoRenamed);
                    $overviewPhotoUploadDestination = file_Destination($location,$overviewPhotoRenamed);
                    $tableOfContentsPhotoUploadDestination = file_Destination($location,$tableOfContentsPhotoRenamed);

                    $queryResult = sql_query($con, $department_id, $book_title, $titlePhotoUploadDestination, $overviewPhotoUploadDestination, $tableOfContentsPhotoUploadDestination,
                $ISBN_number,$author, $date_published,$number_of_stocks ,$rack_number, $rack_level_number);

                    move_uploaded_file($titlePhotoTmpName, $titlePhotoUploadDestination);
                    move_uploaded_file($overviewPhotoTmpName, $overviewPhotoUploadDestination);
                    move_uploaded_file($tableOfContentsTmpName, $tableOfContentsPhotoUploadDestination);
                    
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
    if ($department_id === '6'){

        if (check_file_extension($titlePhotoExt,$allowedExtension) && check_file_extension($overviewPhotoExt,$allowedExtension) && check_file_extension($tableOfContentsPhotoExt,$allowedExtension)){
            if (check_upload_error($titlePhotoError) && check_upload_error($overviewPhotoError) && check_upload_error($tableOfContentsPhotoError)){
                if(check_file_size($titlePhotoSize) && check_file_size($overviewPhotoSize) && check_file_size($tableOfContentsPhotoSize)){
                    $location = '../../../book-images/DM/';
                    $titlePhotoRenamed = rename_file($titlePhotoExt);
                    $overviewPhotoRenamed = rename_file($overviewPhotoExt);
                    $tableOfContentsPhotoRenamed = rename_file($tableOfContentsPhotoExt);

                    $titlePhotoUploadDestination = file_Destination($location,$titlePhotoRenamed);
                    $overviewPhotoUploadDestination = file_Destination($location,$overviewPhotoRenamed);
                    $tableOfContentsPhotoUploadDestination = file_Destination($location,$tableOfContentsPhotoRenamed);

                    $queryResult = sql_query($con, $department_id, $book_title, $titlePhotoUploadDestination, $overviewPhotoUploadDestination, $tableOfContentsPhotoUploadDestination,
                $ISBN_number,$author, $date_published,$number_of_stocks ,$rack_number, $rack_level_number);

                    move_uploaded_file($titlePhotoTmpName, $titlePhotoUploadDestination);
                    move_uploaded_file($overviewPhotoTmpName, $overviewPhotoUploadDestination);
                    move_uploaded_file($tableOfContentsTmpName, $tableOfContentsPhotoUploadDestination);
                    
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
    if ($department_id === '7'){

        if (check_file_extension($titlePhotoExt,$allowedExtension) && check_file_extension($overviewPhotoExt,$allowedExtension) && check_file_extension($tableOfContentsPhotoExt,$allowedExtension)){
            if (check_upload_error($titlePhotoError) && check_upload_error($overviewPhotoError) && check_upload_error($tableOfContentsPhotoError)){
                if(check_file_size($titlePhotoSize) && check_file_size($overviewPhotoSize) && check_file_size($tableOfContentsPhotoSize)){
                    $location = '../../../book-images/DSSH/';
                    $titlePhotoRenamed = rename_file($titlePhotoExt);
                    $overviewPhotoRenamed = rename_file($overviewPhotoExt);
                    $tableOfContentsPhotoRenamed = rename_file($tableOfContentsPhotoExt);

                    $titlePhotoUploadDestination = file_Destination($location,$titlePhotoRenamed);
                    $overviewPhotoUploadDestination = file_Destination($location,$overviewPhotoRenamed);
                    $tableOfContentsPhotoUploadDestination = file_Destination($location,$tableOfContentsPhotoRenamed);

                    $queryResult = sql_query($con, $department_id, $book_title, $titlePhotoUploadDestination, $overviewPhotoUploadDestination, $tableOfContentsPhotoUploadDestination,
                $ISBN_number,$author, $date_published,$number_of_stocks ,$rack_number, $rack_level_number);

                    move_uploaded_file($titlePhotoTmpName, $titlePhotoUploadDestination);
                    move_uploaded_file($overviewPhotoTmpName, $overviewPhotoUploadDestination);
                    move_uploaded_file($tableOfContentsTmpName, $tableOfContentsPhotoUploadDestination);
                    
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
    if ($department_id === '8'){

        if (check_file_extension($titlePhotoExt,$allowedExtension) && check_file_extension($overviewPhotoExt,$allowedExtension) && check_file_extension($tableOfContentsPhotoExt,$allowedExtension)){
            if (check_upload_error($titlePhotoError) && check_upload_error($overviewPhotoError) && check_upload_error($tableOfContentsPhotoError)){
                if(check_file_size($titlePhotoSize) && check_file_size($overviewPhotoSize) && check_file_size($tableOfContentsPhotoSize)){
                    $location = '../../../book-images/PED/';
                    $titlePhotoRenamed = rename_file($titlePhotoExt);
                    $overviewPhotoRenamed = rename_file($overviewPhotoExt);
                    $tableOfContentsPhotoRenamed = rename_file($tableOfContentsPhotoExt);

                    $titlePhotoUploadDestination = file_Destination($location,$titlePhotoRenamed);
                    $overviewPhotoUploadDestination = file_Destination($location,$overviewPhotoRenamed);
                    $tableOfContentsPhotoUploadDestination = file_Destination($location,$tableOfContentsPhotoRenamed);

                    $queryResult = sql_query($con, $department_id, $book_title, $titlePhotoUploadDestination, $overviewPhotoUploadDestination, $tableOfContentsPhotoUploadDestination,
                $ISBN_number,$author, $date_published,$number_of_stocks ,$rack_number, $rack_level_number);

                    move_uploaded_file($titlePhotoTmpName, $titlePhotoUploadDestination);
                    move_uploaded_file($overviewPhotoTmpName, $overviewPhotoUploadDestination);
                    move_uploaded_file($tableOfContentsTmpName, $tableOfContentsPhotoUploadDestination);
                    
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
    if ($department_id === '9'){

        if (check_file_extension($titlePhotoExt,$allowedExtension) && check_file_extension($overviewPhotoExt,$allowedExtension) && check_file_extension($tableOfContentsPhotoExt,$allowedExtension)){
            if (check_upload_error($titlePhotoError) && check_upload_error($overviewPhotoError) && check_upload_error($tableOfContentsPhotoError)){
                if(check_file_size($titlePhotoSize) && check_file_size($overviewPhotoSize) && check_file_size($tableOfContentsPhotoSize)){
                    $location = '../../../book-images/TED/';
                    $titlePhotoRenamed = rename_file($titlePhotoExt);
                    $overviewPhotoRenamed = rename_file($overviewPhotoExt);
                    $tableOfContentsPhotoRenamed = rename_file($tableOfContentsPhotoExt);

                    $titlePhotoUploadDestination = file_Destination($location,$titlePhotoRenamed);
                    $overviewPhotoUploadDestination = file_Destination($location,$overviewPhotoRenamed);
                    $tableOfContentsPhotoUploadDestination = file_Destination($location,$tableOfContentsPhotoRenamed);

                    $queryResult = sql_query($con, $department_id, $book_title, $titlePhotoUploadDestination, $overviewPhotoUploadDestination, $tableOfContentsPhotoUploadDestination,
                $ISBN_number,$author, $date_published,$number_of_stocks ,$rack_number, $rack_level_number);

                    move_uploaded_file($titlePhotoTmpName, $titlePhotoUploadDestination);
                    move_uploaded_file($overviewPhotoTmpName, $overviewPhotoUploadDestination);
                    move_uploaded_file($tableOfContentsTmpName, $tableOfContentsPhotoUploadDestination);
                    
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
    else {
        echo '<script type="text/javascript">alert("FAILED!");    
                location="../home-admin.php"; </script>';
    }
}
// Functions for SQL 

function sql_query ($con, $departmentId, $bookTitle, $titlePhotoLocation, $overviewPhotoLocation,
    $tableOfContentsLocation, $ISBNNumber, $author, $datePublished, $numberOfStocks, $rack_number, $rack_level_number){

    $book_rate = 0;

    $query = "INSERT INTO book 
    (department_id, book_title, title_photo_location, overview_photo_location, 
    table_of_contents_location, ISBN_number, author, date_published, number_of_stocks, book_rate, rack_number, rack_level_number)
    VALUES
    ('$departmentId', '$bookTitle', '$titlePhotoLocation', '$overviewPhotoLocation', 
    '$tableOfContentsLocation', '$ISBNNumber', '$author', '$datePublished', '$numberOfStocks', '$book_rate', '$rack_number', '$rack_level_number')";

    $queryResult = mysqli_query($con,$query);
    return $queryResult;
}
?>