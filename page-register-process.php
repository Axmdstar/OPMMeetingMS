<?php
// Include database connection
include 'db_connection.php';

// Input sanitization function
function sanitize_input($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

// Initialize an error array
$errors = [];

// Handle the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = sanitize_input($_POST['name']);
    $email = sanitize_input($_POST['email']);
    $tel = sanitize_input($_POST['tel']);
    $password = sanitize_input($_POST['password']);
    $profile = $_FILES['Profile'];

    // Validation for phone number
    if (strlen($tel) !== 12 || substr($tel, 0, 3) !== '252') {
        $errors[] = 'Phone number must be 12 digits starting with 252!';
    }

    // Validation for password
    if (strlen($password) < 8) {
        $errors[] = 'Password must be greater than 8 digits!';
    }

    // Check if email already exists
    $stmt = $conn->prepare("SELECT email FROM admin WHERE email = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $errors[] = 'This email is already registered! Please use another email.';
    }

    // Check file upload (profile)
    if ($profile['error'] !== UPLOAD_ERR_OK) {
        $errors[] = 'Profile picture upload failed!';
    } else {
        // Move uploaded file to "uploads" directory
        $profile_path = 'uploads/' . basename($profile['name']);
        move_uploaded_file($profile['tmp_name'], $profile_path);
    }

    $stmt->close();

    // If no errors, insert into the database
    if (empty($errors)) {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO admin (full_name, email, tel, password, profile) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param('sssss', $full_name, $email, $tel, $hashed_password, $profile_path);
        
        // Execute and check if it was successful
        if ($stmt->execute()) {
            echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>";
            echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js'></script>";
            echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css'/>";
            echo "<style>
                /* Custom Toastr Styles */
                #toast-container {
                    top: 10px;
                    left: 0;
                    right: 0;
                    position: fixed;
                    width: 100%;
                    display: flex;
                    justify-content: center;
                }
                #toast-container > .toast {
                    max-width: 90%; /* Slightly narrower */
                    width: 90%; /* Ensure messages wrap and don't take full width */
                    word-wrap: break-word; /* Ensure long words wrap properly */
                    text-align: center;
                }
                /* For larger screens, cut the width */
                @media (max-device-width: 480px) {
                #toast-container > .toast {
                    max-width: 90%;
                    width: 70% !important;
                }
                #toast-container .toast-message {
                    font-size: 2em !important;
                }
                }
                #toast-container > .toast-success {
                    background-color: green !important; /* Green for success */
                }
                #toast-container > .toast-error {
                    background-color: red !important; /* Red for error */
                }
            </style>";
            echo "<script>
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    positionClass: 'toast-top-full-width',
                    timeOut: 10000, // 10 seconds
                    extendedTimeOut: 10000
                };
                window.onload = function() {
                    toastr.success('Registration successful!');
                    setTimeout(function() {
                        window.location.href = 'pages-login.php';
                    }, 100000);
                };
            </script>";
        } else {
            echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>";
            echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js'></script>";
            echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css'/>";
            echo "<style>
                #toast-container {
                    top: 10px;
                    left: 0;
                    right: 0;
                    position: fixed;
                    width: 100%;
                    display: flex;
                    justify-content: center;
                }
                #toast-container > .toast {
                    
                    width: 90%;
                    word-wrap: break-word;
                    text-align: center;
                }
                @media (max-device-width: 480px) {
                #toast-container > .toast {
                    max-width: 90%;
                    width: 70% !important;
                }
                #toast-container .toast-message {
                    font-size: 2em !important;
                }
            }
                }
                #toast-container > .toast-success {
                    background-color: green !important;
                }
                #toast-container > .toast-error {
                    background-color: red !important;
                }
            </style>";
            echo "<script>
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    positionClass: 'toast-top-full-width',
                    timeOut: 10000,
                    extendedTimeOut: 10000
                };
                window.onload = function() {
                    toastr.error('Registration failed! Please try again.');
                };
            </script>";
        }

        $stmt->close();
    } else {
        // If there are errors, display them
        $error_message = implode(', ', $errors);
        echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>";
        echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js'></script>";
        echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css'/>";
        echo "<style>
            #toast-container {
                top: 10px;
                left: 0;
                right: 0;
                position: fixed;
                width: 100%;
                display: flex;
                justify-content: center;
            }
            #toast-container > .toast {
                max-width: 90%;
                width: 90%;
                word-wrap: break-word;
                text-align: center;
            }
            @media (max-device-width: 480px) {
                #toast-container > .toast {
                    max-width: 90%;
                    width: 70% !important;
                }
                #toast-container .toast-message {
                    font-size: 2em !important;
                }
            }
            #toast-container > .toast-success {
                background-color: green !important;
            }
            #toast-container > .toast-error {
                background-color: red !important;
            }
        </style>";
        echo "<script>
            toastr.options = {
                closeButton: true,
                progressBar: true,
                positionClass: 'toast-top-full-width',
                timeOut: 100000,
                extendedTimeOut: 100000
            };
            window.onload = function() {
                toastr.error('Error: $error_message');
                setTimeout(function() {
                    window.location.href = 'pages-register.php';
                }, 100000);
            };
        </script>";
    }
}

$conn->close();

