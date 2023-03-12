<?php
require "connection.php";
require "functions.php";

$faqsQuery = "SELECT * FROM faqs";
$faqs = $conn->query($faqsQuery);
$contactsQuery = "SELECT * FROM contacts";
$contacts = $conn->query($contactsQuery);
$message = "";

if (isset($_POST['add_faq'])) {
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $questionQuery = "SELECT * FROM faqs WHERE question = '$question'";
    $questionResult = $conn->query($questionQuery);
    if ($questionResult->num_rows === 0) {
        $sql = "INSERT INTO faqs (question, answer) VALUES ('$question', '$answer' )";
        if (mysqli_query($conn, $sql)) {
            $message = "FAQ Registered successfully";
        } else {
            $message = "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        $message = "Question Already exist";
    }
    echo "<script>
        alert('$message');
        window.location.replace('faq.php');
    </script>";
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM faqs WHERE id=$id";

    if ($conn->query($sql) === true) {
        $message = "Faq Deleted";
    } else {
        $message = "Error deleting Faq: " . $conn->error;
    }
    echo "<script>
        alert('$message')
        window.location.replace('faq.php');
        </script>";
}
if (isset($_GET['delete_contact'])) {
    $id = $_GET['delete_contact'];
    $sql = "DELETE FROM contacts WHERE id=$id";

    if ($conn->query($sql) === true) {
        $message = "Question Deleted";
    } else {
        $message = "Error deleting Qusetion: " . $conn->error;
    }
    echo "<script>
        alert('$message')
        window.location.replace('contact.php');
        </script>";
}
