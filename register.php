<?php 
    // Allow the config
    define('__CONFIG__', true);
    // Require the config.
    require_once "inc/config.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Title</title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/css/uikit.min.css" />


</head>
<body>

    <div class="uk-section uk-container">
        <div class="uk-grid uk-child-width-l-3@s uk-child-width-l-l" uk-grid>
            <form class="uk-form-stacked js-register">

                <h2>Register</h2>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-email">Email</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-email" autocomplete type="email" placeholder="email@email.com" required="required">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-pass">Password</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-pass" autocomplete type="password" placeholder="Your Password" required="required">
                    </div>
                </div>

                <div class="uk-margin">
                    <button class="uk-button uk-button-default" type="submit">Register</button>
                </div>

            </form>
        </div>

    </div>

<?php require_once "inc/footer.php"; ?>

    

</body>
</html>