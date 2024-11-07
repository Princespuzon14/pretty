<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My First Ubuntu Server PHP Deployment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            padding-top: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
            color: #007bff; /* Blue for the main title */
        }

        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-top: 5px solid #007bff; /* Blue border at the top */
        }

        .form-heading {
            font-size: 20px;
            font-weight: 600;
            color: #007bff;
            margin-bottom: 30px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            color: #333; /* Darker text for labels */
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #ccc; /* Light gray border */
            padding: 10px;
            font-size: 16px;
        }

        .form-control:focus {
            border-color: #007bff; /* Blue border on focus */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Light blue glow */
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: white;
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            font-size: 16px;
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
            border-color: #0056b3;
        }

        .form-container p {
            color: #6c757d; /* Light gray text for instructions or descriptions */
            text-align: center;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h1>My First Ubuntu Server PHP Deployment</h1>

            <form>
                <div class="form-group">
                    <label for="firstname">First Name:</label>
                    <input type="text" name="firstname" class="form-control" id="firstname">
                </div>

                <div class="form-group">
                    <label for="middlename">Middle Name:</label>
                    <input type="text" name="middlename" class="form-control" id="middlename">
                </div>

                <div class="form-group">
                    <label for="lastname">Last Name:</label>
                    <input type="text" name="lastname" class="form-control" id="lastname">
                </div>

                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="text" name="age" class="form-control" id="age">
                </div>

                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" name="address" class="form-control" id="address">
                </div>

                <div class="form-group">
                    <label for="coursec">Course & Section:</label>
                    <input type="text" name="coursec" class="form-control" id="coursec">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

            <p>Fill out the form and submit your details.</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
