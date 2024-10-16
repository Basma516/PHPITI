<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <h2 class="text-center mb-4">Thank You!</h2>
            <p class="text-center">
                Thanks 
                <?php if ($_REQUEST["gender"] === "male") {
                    echo "Mr. ";
                } else {
                    echo "Ms. ";
                } 
                echo $_REQUEST['firstName'].' '.$_REQUEST['lastName'] ."<br>"?>
            </p>
            <p class="text-center">Please review your information below:</p>
            <div class="border p-3">
                <div class="mb-2">
                    <strong>Name:</strong> <?php echo $_REQUEST["username"] ?>
                </div>
                <div class="mb-2">
                    <strong>Address:</strong> <?php echo $_REQUEST["address"] ?>
                </div>
                <div class="mb-2">
                    <strong>Skills:</strong> 
                    <?php foreach($_REQUEST['skills'] as $skill){
                        echo "<span class='badge bg-info me-1'>$skill</span> ";
                    } ?>
                </div>
                <div class="mb-2">
                    <strong>Department:</strong> <?php echo $_REQUEST["department"] ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
