<!DOCTYPE html>
<html lang="en">

<head>
    <title>I'M IN CHINUCH</title>
    <link rel="shortcut icon" type="image/jpeg" href="favcon.jpg" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" charset="utf-8" src="toggleBars.js?<?=time()?>"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=David+Libre&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css?<?=time()?>">
    <?php
include 'menu.php';
include 'dbconnect.php';
$grabQuote = mysqli_query($conn, 'SELECT `quote` FROM `quotes` WHERE `day` = DAYOFYEAR(CURRENT_DATE())') or die();
$quote = mysqli_fetch_array($grabQuote);

?>
</head>

<body>
    <div class="pageContainer">
        <div class="contentWrap">

            <div class="header2">
                <h1 class="bigHeader2">Quote of the Day: <?php print $quote['quote'];?>.</h1>
                <h1>Send me your own Quote of the Day!</h1>
            </div>

            <div class='form' autocomplete="off">
                <?php

$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $quote = $_POST['quote'];

    if (empty($name)) {
        $errors[] = 'Name is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($quote)) {
        $errors[] = 'You forgot to write the quote.';
    }

    if (empty($errors)) {
        $toEmail = 'misszacks@iminchinuch.org';
        $emailSubject = 'New email from your Quote of the Day form';
        $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
        $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Quote:", $quote];
        $body = join(PHP_EOL, $bodyParagraphs);

        if (mail($toEmail, $emailSubject, $body, $headers)) {
            header('Location: thankYouForm.php');
        }

    } else {
        $errorMessage = 'Oops, something went wrong. Please try again later! Or, email me directly at misszacks@iminchinuch.org';
    }
} else {

    $allErrors = join('<br/>', $errors);
    $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
}

?>

                <form method="post" id="contact-form">
                    <h2>Quote of the Day form:</h2>
                    <?php echo ((!empty($errorMessage)) ? $errorMessage : '') ?>
                    <p>
                        <label class="formLabel">Name:</label>
                        <input name="name" type="text" class="formInput" />
                    </p>
                    <p>
                        <label class="formLabel">Email Address:</label>
                        <input name="email" type="text" class="formInput" />
                    </p>
                    <p>
                    <label class="formLabel">Quote:</label>
                        <textarea name="quote" class="formInput"></textarea>
                    </p>
                    <p class="submitButton">
                        <input type="submit" value="Send" class="formSend buttonStyles" />
                    </p>
                </form>

                <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
                <script>
                    const constraints = {
                        name: {
                            presence: {
                                allowEmpty: false
                            }
                        },
                        email: {
                            presence: {
                                allowEmpty: false
                            },
                            email: true
                        },
                        quote: {
                            presence: {
                                allowEmpty: false
                            }
                        }
                    };

                    const form = document.getElementById('contact-form');
                    form.addEventListener('submit', function(event) {

                        const formValues = {
                            name: form.elements.name.value,
                            email: form.elements.email.value,
                            quote: form.elements.quote.value
                        };


                        const errors = validate(formValues, constraints);
                        if (errors) {
                            event.preventDefault();
                            const errorMessage = Object
                                .values(errors)
                                .map(function(fieldValues) {
                                    return fieldValues.join(', ')
                                })
                                .join("\n");

                            alert(errorMessage);
                        }
                    }, false);
                </script>


            </div>

            <!-- bottom footer -->
            <?php include "footer.php";?>
        </div>

</body>

</html>

