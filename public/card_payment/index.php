<!DOCTYPE html>
<html>
<head>
    <title>Payment Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
    <!-- End Bootstrap CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        /* Style the form container */
        body {
            font-family: 'Poppins', sans-serif;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh; /* Use min-height for responsiveness */
    background-image: url('pay.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover; /* Make the background image responsive */
        }

        #payment-form {
            
            padding-top: 60px; 
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 20px; /* Improved border-radius */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
          
            padding-top: 40px; 
          
            
        }

        /* Style form rows */
        .form-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .form-field {
            flex: 1;
            margin-bottom: 10px;
            margin-right: 10px;
        }

        /* Style the submit button row */
        .submit-row {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        /* Style form errors */
        #card-errors {
            color: #ff0000;
            margin-top: 10px;
        }

        /* Add a simple animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        #payment-form {
            animation: fadeIn 0.5s;
        }

        /* Media query for small screens */
        @media (max-width: 768px) {
            input[type="text"],
            input[type="number"]
            {
        width: 100%;
    }
    .form-row {
        
        margin-bottom: 10px;
    }
    .form-field {
        flex: 100%; /* Use 100% to take up the full width */
    }
  
    /* ... Other responsive styles ... */
}

        /* Style form inputs */
        input[type="text"],
        input[type="number"]
         {  
            
            width: 100%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px; /* Improved border-radius */
        }

            #submit {
        background-color: #e0072f;
        color: #fff;
        border: none;
        border-radius: 10px; /* Adjust border-radius */
        padding: 15px 30px; /* Adjust padding */
        cursor: pointer;
        transition: background-color 0.3s ease;
        width: 98.2%; /* Full width on small screens */
        margin: 0 auto; /* Center the submit button */
        }

       



    </style>
</head>

<body>


    <form id="payment-form" method="post" action="process_payment.php">
    <h1 style="text-align: center;"><b style="color:grey; 
        text-align: center; "> Payment For Your Girl</b></h1> <br>
        <div class="form-row">
            <div class="form-field">
                <input type="hidden" id="amount" name="amount" placeholder="Amount" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-field">
                <input type="text" id="first_name" name="first_name" placeholder="First Name" required>
            </div>
            <div class="form-field">
                <input type="text" id="last_name" name="last_name" placeholder="Last Name" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-field">
                <input type="text" id="card_number" name="card_number" placeholder="Card Number" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-field">
                <input type="text" id="expire_date" name="expire_date" placeholder="Expiration Date (MM/YY)" required>
            </div>
            <div class="form-field">
                <input type="text" id="cvv" name="cvv" placeholder="CVV" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-field">
                <input type="text" id="address" name="address" placeholder="Address" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-field col-md-4">
                <input type="text" id="city" name="city" placeholder="City" required>
            </div>
            <div class="form-field col-md-4">
                <input type="text" id="state" name="state" placeholder="State" required>
            </div>
            <div class="form-field col-md-4">
                <input type="text" id="zip" name="zip" placeholder="ZIP Code" required>
            </div>
       
            </div>
            <input type="submit" id="submit" name="submit" value="Pay Now">
        </div>
       
    </form>

    <script>
        // JavaScript function to validate and format expiration date as MM/YY
        document.getElementById('expire_date').addEventListener('input', function () {
            let input = this;
            let value = input.value;

            // Remove non-numeric characters and limit the length to 4 characters
            value = value.replace(/\D/g, '').substring(0, 4);

            // Add slashes for MM/YY format
            if (value.length >= 2) {
                value = value.substring(0, 2) + '/' + value.substring(2);
            }

            // Update the input field with the formatted value
            input.value = value;
        });

        // JavaScript function to validate CVV as numeric and exactly 3 digits
        document.getElementById('cvv').addEventListener('input', function () {
            let input = this;
            let value = input.value;

            // Remove non-numeric characters
            value = value.replace(/\D/g, '');

            // Limit the length to 3 characters
            if (value.length > 3) {
                value = value.substring(0, 3);
            }

            // Update the input field with the formatted value
            input.value = value;
        });
    </script>
    <script>
  document.addEventListener("DOMContentLoaded", function () {
    const paymentAmountSelect = document.getElementById("payment-amount");
    const amountInput = document.getElementById("amount");

    // Add an event listener to the payment amount dropdown
    paymentAmountSelect.addEventListener("change", function () {
      const selectedAmount = paymentAmountSelect.value;

      // Update the value of the amount input field with the selected amount
      amountInput.value = selectedAmount;
    });
  });
</script>


    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
    <br>
</body>
</html>
