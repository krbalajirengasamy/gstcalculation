<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GST Calculator</title>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>GST Calculator</h1>
    
    <label for="basePrice">Base Price (in INR):</label>
    <input type="number" id="basePrice" min="0" step="0.01">
    
    <label for="gstRate">GST Rate:</label>
    <select id="gstRate">
        <option value="5">5%</option>
        <option value="12">12%</option>
        <option value="18">18%</option>
        <option value="28">28%</option>
    </select>
    
    <p>GST Amount: <span id="gstAmount">0</span> INR</p>
    <p>Total Price (Including GST): <span id="totalPrice">0</span> INR</p>

    <script>
        // Calculate GST and Total Price when input changes
        $(document).ready(function () {
            $("#basePrice, #gstRate").change(function () {
                var basePrice = parseFloat($("#basePrice").val());
                var gstRate = parseFloat($("#gstRate").val());

                if (!isNaN(basePrice) && !isNaN(gstRate)) {
                    var gstAmount = (basePrice * gstRate) / 100;
                    var totalPrice = basePrice + gstAmount;

                    $("#gstAmount").text(gstAmount);
                    $("#totalPrice").text(totalPrice);
                }
            });
        });
    </script>
</body>
</html>
