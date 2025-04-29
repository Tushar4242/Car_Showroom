<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Booking System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1b1b1b;
            color: white;
        }

        header {
            background-color: #C0392B;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 24px;
        }

        .button {
            margin: 10px;
            padding: 12px 20px;
            background-color: #C0392B;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #e74c3c;
        }

        .car-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
            justify-content: center;
        }

        .car-card {
            border: 2px solid #333;
            padding: 20px;
            width: 240px;
            text-align: center;
            background-color: #333;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.5);
            cursor: pointer;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .car-card:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }

        .car-card img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        #booking-section, #payment-section {
            display: none;
            text-align: center;
            padding: 20px;
        }

        #selected-car {
            margin: 20px;
        }

        .payment-options {
            display: none;
            margin-top: 20px;
        }

        .payment-button {
            background-color: #C0392B;
            color: white;
            border: none;
            padding: 12px 20px;
            margin: 10px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .payment-button:hover {
            background-color: black;
            color: #C0392B;
            border: 2px solid #C0392B;
        }

        #upi-details, #bank-details {
            display: none;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<header>Car Booking System</header>

<!-- Displaying Suzuki Cars -->
<div id="car-list" class="car-container">
    <div class="car-card">
        <img src="Q3.jpg" alt="Audi Q3">
        <h4>Audi Q3</h4>
        <p>Price: Rs 70,00,000</p>
        <button class="button book-btn" data-car="Audi Q3" data-price="7000000" data-image="Q3.jpg">Book</button>
    </div>
    <div class="car-card">
        <img src="Q8.jpg" alt="Audi Q8">
        <h4>Audi Q8</h4>
        <p>Price: Rs 45,00,000</p>
        <button class="button book-btn" data-car="Audi Q8" data-price="4500000" data-image="Q8.jpg">Book</button>
    </div>
    <div class="car-card">
        <img src="Q2.jpg" alt="Audi Q2">
        <h4>Audi Q2</h4>
        <p>Price: Rs 19,00,000</p>
        <button class="button book-btn" data-car="Audi Q2" data-price="1900000" data-image="Q2.jpg">Book</button>
    </div>
    <div class="car-card">
        <img src="Tron.jpg" alt="Audi Tron">
        <h4>Audi Tron</h4>
        <p>Price: Rs 16,00,000</p>
        <button class="button book-btn" data-car="Audi Tron" data-price="1600000" data-image="Tron.jpg">Book</button>
    </div>
    <div class="car-card">
        <img src="Q7.jpg" alt="Audi Q7">
        <h4>Audi Q7</h4>
        <p>Price: Rs 11,55,000</p>
        <button class="button book-btn" data-car="Audi Q7" data-price="1155000" data-image="Q7.jpg">Book</button>
    </div>
</div>

<!-- Booking Section -->
<div id="booking-section">
    <h3>Book Your Car</h3>
    <div id="selected-car"></div>
    <button class="button" onclick="proceedToPayment()">Proceed to Payment</button>
</div>

<!-- Payment Section -->
<div id="payment-section">
    <h3>Payment for Booking</h3>
    <p>Your booking is confirmed. Please select a payment method.</p>
    
    <button class="button" onclick="showPaymentOptions()">Proceed to Payment</button>

    <div id="payment-options" class="payment-options">
        <button class="payment-button" onclick="payWithUPI()">Pay with UPI</button>
        <button class="payment-button" onclick="payWithBank()">Bank Transfer</button>
    </div>

    <div id="upi-details">
        <h4>Scan QR Code to Pay</h4>
        <img src="your_qr_code.jpg" alt="UPI QR Code" style="max-width: 200px;">
        <p>Or use UPI ID: <strong>8329254153@axi</strong></p>
        <label for="transaction-id">Enter Transaction ID:</label>
        <input type="text" id="transaction-id" placeholder="Transaction ID">
        <button class="button" onclick="confirmPayment()">Confirm Payment</button>
    </div>

    <div id="bank-details">
        <h4>Bank Transfer Details</h4>
        <p><strong>Bank Name:</strong> Axis Bank</p>
        <p><strong>Account Number:</strong> </p>
        <p><strong>IFSC Code:</strong> XYZB0001234</p>
        <p><strong>Account Holder:</strong> Car Services</p>
        <button class="button" onclick="confirmBankPayment()">Confirm Bank Transfer</button>
    </div>
</div>

<script>
    document.querySelectorAll(".book-btn").forEach(button => {
        button.addEventListener("click", function() {
            let carName = this.getAttribute("data-car");
            let price = this.getAttribute("data-price");
            let image = this.getAttribute("data-image");

            document.getElementById("car-list").style.display = "none";
            document.getElementById("booking-section").style.display = "block";
            document.getElementById("selected-car").innerHTML = `
                <img src="${image}" alt="${carName}" style="max-width: 200px; border-radius: 5px;">
                <h4>${carName}</h4>
                <p>Price: Rs ${parseInt(price).toLocaleString()}</p>
            `;
        });
    });

    function proceedToPayment() {
        document.getElementById("booking-section").style.display = "none";
        document.getElementById("payment-section").style.display = "block";
    }

    function showPaymentOptions() {
        document.getElementById("payment-options").style.display = "block";
    }

    function payWithUPI() {
        document.getElementById("upi-details").style.display = "block";
        document.getElementById("bank-details").style.display = "none";
    }

    function payWithBank() {
        document.getElementById("bank-details").style.display = "block";
        document.getElementById("upi-details").style.display = "none";
    }

    function confirmPayment() {
        alert("Your UPI payment has been confirmed. Thank you for booking!");
    }

    function confirmBankPayment() {
        alert("Your bank transfer has been confirmed. Thank you for booking!");
    }
</script>

</body>
</html>
