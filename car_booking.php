<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Booking</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: black;
            color: white;
            text-align: center;
        }
        .header {
            background-color: red;
            padding: 20px;
            font-size: 28px;
            font-weight: bold;
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: red;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
        }
        .form-container label {
            display: block;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 5px;
            text-align: left;
            color: white;
        }
        .form-container input, .form-container select {
            display: block;
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: none;
            font-size: 18px;
            font-weight: bold;
            color: black;
        }
        .form-container button {
            background-color: black;
            color: white;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        .form-container button:hover {
            background-color: white;
            color: red;
        }
    </style>
</head>
<body>
    <div class="header">Car Booking</div>
    <div class="form-container">
        <form action="process_booking.php" method="post">
            <label for="name">Customer Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="address">Customer Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="car_name">Car Booked Name:</label>
            <input type="text" id="car_name" name="car_name" required>

            <label for="booking_method">Booking Method:</label>
            <select id="booking_method" name="booking_method" required>
                <option value="online">Online</option>
                <option value="offline">Offline</option>
            </select>

            <button type="submit">Book Now</button>
        </form>
    </div>
</body>
</html>
