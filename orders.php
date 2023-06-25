<!DOCTYPE html>
<html>
<head>
  <title>Vehicle Rental</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      margin-top: 100px;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      color: #555;
    }

    .form-control {
      width: 100%;
      padding: 8px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
      transition: border-color 0.3s ease-in-out;
    }

    .form-control:focus {
      outline: none;
      border-color: #66afe9;
    }

    .btn {
      display: block;
      width: 100%;
      padding: 10px;
      font-size: 16px;
      text-align: center;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }

    .btn:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Vehicle Rental</h2>
    <form action="order.php" method="POST">
      <div class="form-group">
        <label for="vehicle" class="form-label">Choose a Vehicle</label>
        <select class="form-control" id="vehicle" name="vehicle" required>
          <option value="">Select a vehicle</option>
          <option value="Honda Civic">Civic</option>
          <option value="Hilux">Hilux</option>
          <option value="Wagonar">Wgonar</option>
        </select>
      </div>
      <div class="form-group">
        <label for="price" class="form-label">Rent per Day Price</label>
        <input type="number" class="form-control" id="price" name="price" min="10" required>
      </div>
      <button type="submit" class="btn">Place Order</button>
    </form>
  </div>
</body>
</html>
