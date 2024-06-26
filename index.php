<?php
include __DIR__ . "/function.php";

$result = '';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET['userEmail'])) {
    // Email validation
    $result = validateEmail($_GET['userEmail']);
    
    // Reset the email field
    $_GET['userEmail'] = '';
}

?>

<!doctype html>
<html lang="en">
    <head>
        <title>NewsLetter</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.3.2 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>
<body>
<div class="container my-5">
    <h1>Subscribe to our newsletter</h1>
    <form method="GET" action="index.php">
        <div class="mb-3">
            <input type="text" class="form-control" id="userEmail" name="userEmail" value="<?= isset($_GET['userEmail']) ? $_GET['userEmail'] : '' ?>">
            <?php if ($result): ?>
                <div class="alert <?= strpos($result, "Invalid") !== false ? 'alert-danger' : 'alert-success' ?> mt-2" role="alert">
                    <?= $result ?>
                </div>
            <?php endif; ?>
        </div>
        <button type="submit" class="btn btn-primary">Subscribe</button>
    </form>
</div>
<!-- Bootstrap JavaScript Libraries -->
<script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>