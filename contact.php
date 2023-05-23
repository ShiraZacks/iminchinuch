<!DOCTYPE html>
<html lang="en">

<head>
    <title>I'M IN CHINUCH</title>
    <link rel="shortcut icon" type="image/jpeg" href="favcon.jpg" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" charset="utf-8" src="toggleBars.js?<?= time() ?>"></script>
    <link rel="stylesheet" href="style.css?<?= time() ?>">
    <?php include 'menu.php'; ?>
</head>

<body>



    <!-- First section of text -->


    <div class="header2">
        <h1 class="bigHeader2">Did you enjoy the latest update?</h1>
        <h2 class="bigHeader2">Did you find a mistake?</h2><!-- TODO fix the text size-->
        <h3 class="bigHeader2">Let me know!</h3>
    </div>


    <div class='form'>
        <?php

        $errors = [];
        $errorMessage = '';

        if (!empty($_POST)) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            if (empty($name)) {
                $errors[] = 'Name is empty';
            }

            if (empty($email)) {
                $errors[] = 'Email is empty';
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = 'Email is invalid';
            }

            if (empty($message)) {
                $errors[] = 'Message is empty';
            }

            if (empty($errors)) {
                $toEmail = 'misszacks@iminchinuch.org';
                $emailSubject = 'New email from your contact form';
                $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
                $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
                $body = join(PHP_EOL, $bodyParagraphs);

                if (mail($toEmail, $emailSubject, $body, $headers))

                    header('Location: thankYouForm.php');
            } else {
                $errorMessage = 'Oops, something went wrong. Please try again later';
            }
        } else {

            $allErrors = join('<br/>', $errors);
            $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
        }

        ?>

        <form method="post" id="contact-form">
            <h2>Contact me!</h2>
            <?php echo ((!empty($errorMessage)) ? $errorMessage : '') ?>
            <p>
                <label class="formLabel">Name:</label>
                <input name="name" type="text" class="formInput"/>
            </p>
            <p>
                <label class="formLabel">Email Address:</label>
                <input style="cursor: pointer;" name="email" type="text" class="formInput"/>
            </p>
            <p>
                <label class="formLabel">Message:</label>
                <textarea name="message" class="formInput"></textarea>
            </p>
            <p>
                <label class="formLabel">Do you want a response?</label><br/>
                <label for="Yes" class="formLabel">Yes!</label>
                <input type="radio" name="response" value="Yes"class="formInput"><br/>
                <label for="Yes" class="formLabel">Nope!</label>
                <input type="radio" name="response" value="No" class="formInput">
            </p>
            <p>
                <input type="submit" value="Send" />
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
                message: {
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
                    message: form.elements.message.value
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
    <footer>
        <p class="footer">Website created by Shira Zacks. Please <a>contact me</a> if there are any mistakes; only Hashem
            is perfect!</p>
    </footer>
</body>

</html>