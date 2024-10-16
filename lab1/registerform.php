<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="card p-4 shadow-lg">
            <h2 class="text-center mb-4">Registration Form</h2>
            <form action="./submit.php" method="post">
                <div class="mb-3">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" name="firstName" id="firstName" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" name="lastName" id="lastName" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea name="address" id="address" class="form-control" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="country" class="form-label">Country</label>
                    <select name="country" id="country" class="form-select" required>
                        <option value="Egypt">Egypt</option>
                        <option value="USA">USA</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Gender</label><br>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="gender" id="male" value="male" class="form-check-input" required>
                        <label for="male" class="form-check-label">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="gender" id="female" value="female" class="form-check-input" required>
                        <label for="female" class="form-check-label">Female</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Skills</label><br>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="skills[]" id="html" value="html" class="form-check-input">
                        <label for="html" class="form-check-label">HTML</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="skills[]" id="css" value="css" class="form-check-input">
                        <label for="css" class="form-check-label">CSS</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="skills[]" id="php" value="php" class="form-check-input">
                        <label for="php" class="form-check-label">PHP</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="skills[]" id="js" value="js" class="form-check-input">
                        <label for="js" class="form-check-label">JavaScript</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="skills[]" id="laravel" value="laravel" class="form-check-input">
                        <label for="laravel" class="form-check-label">Laravel</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="department" class="form-label">Department</label>
                    <select id="department" name="department" class="form-select" required>
                        <option value="">Select Department</option>
                        <option value="HR">HR</option>
                        <option value="Engineering">Engineering</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Opensource">Opensource</option>
                    </select>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
