<?php  include 'includes/header.php';  ?>

<div class="breadcrumbs">
    <div class="container2" data-aos="fade-left" data-aos-delay="100">
        <h2>Contact Us</h2>
    </div>  
</div>

<?php
$fname = $sname = $city = $course = $nationality = $phone = $email = '';
$fnameErr = $snameErr = $cityErr = $courseErr = $nationalityErr = $phoneErr = $emailErr = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['fname'])) {
        $fnameErr = 'Firstname is required';
    } else {
        $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($_POST['sname'])) {
        $snameErr = 'Surname is required';
    } else {
        $sname = filter_input(INPUT_POST, 'sname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($_POST['city'])) {
        $cityErr = 'City is required';
    } else {
        $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($_POST['course'])) {
        $courseErr = 'Course Type is required';
    } else {
        $course = filter_input(INPUT_POST, 'course', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($_POST['nationality'])) {
        $nationalityErr = 'Nationality is required';
    } else {
        $nationality = filter_input(INPUT_POST, 'nationality', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($_POST['phone'])) {
        $phoneErr = 'Phone Number is required';
    } else {
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($_POST['email'])) {
        $emailErr = 'Email is required';
    } else {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = 'Invalid email format';
        }
    }

    if (empty($fnameErr) && empty($snameErr) && empty($cityErr) && empty($courseErr) && empty($nationalityErr) && empty($phoneErr) && empty($emailErr)) {
        // Database operations
        $sql = "INSERT INTO students (fname, sname, city, course, nationality, phone, email) VALUES ('$fname', '$sname', '$city', '$course', '$nationality', '$phone', '$email') ";
        if (mysqli_query($con, $sql)) {
            // Success
            header('Location: students.php');
        } else {
            // Error
            echo 'Error: ' . mysqli_error($con);
        }
    }
}
?>

<?php echo isset($fname) ? $fname : ''; ?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <div class="contactbox">
        <div class="column-contact">
            <table>
                <tr>
                    <td>Firstname</td>
                    <td><input type="text" <?php echo !$fnameErr ?: 'class="is-invalid"'; ?> id="fname" name="fname" placeholder="Enter your firstname" value="<?php echo $fname; ?>"></td>
                </tr>
                <tr>
                    <td>Surname</td>
                    <td><input type="text" <?php echo !$snameErr ?: 'class="is-invalid"'; ?> id="sname" name="sname" placeholder="Enter your surname" value="<?php echo $sname; ?>"></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><input type="text" <?php echo !$cityErr ?: 'class="is-invalid"'; ?> id="city" name="city" placeholder="Enter your city" value="<?php echo $city; ?>"></td>
                </tr>
                <tr>
                    <td>Course Type</td>
                    <td><input type="text" <?php echo !$courseErr ?: 'class="is-invalid"'; ?> id="course" name="course" placeholder="Enter your course type" value="<?php echo $course; ?>"></td>
                </tr>
                <tr>
                    <td>Nationality</td>
                    <td><input type="text" <?php echo !$nationalityErr ?: 'class="is-invalid"'; ?> id="nationality" name="nationality" placeholder="Enter your nationality" value="<?php echo $nationality; ?>"></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td><input type="text" <?php echo !$phoneErr ?: 'class="is-invalid"'; ?> id="phone" name="phone" placeholder="Enter your phone number" value="<?php echo $phone; ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" <?php echo !$emailErr ?: 'class="is-invalid"'; ?> id="email" name="email" placeholder="Enter your email" value="<?php echo $email; ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" class="submit-btn" value="Send" onclick="showPopup(event)"></td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div class="api-google-wrapper">
            <iframe class="api-google" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2382.1518461448577!2d-6.26768068416179!3d53.34053797997777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e9de863ce97%3A0xd5fd5a41e4548a27!2sDublin%20Business%20School!5e0!3m2!1sen!2sie!4v1666645622115!5m2!1sen!2sie" width="500" height="515" style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</form>


<?php  include 'includes/footer.php';  ?>