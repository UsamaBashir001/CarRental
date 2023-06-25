<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rent</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.js">

     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
     <!-- 
        style
      -->
      <style>

       @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap');

*{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    box-sizing: border-box;
    text-decoration: none;
    font-size: 18px;
}
.sidebar {
      background-color: #f4f4f4;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 5px;
    }

    .sidebar h2 {
      font-size: 20px;
      margin-bottom: 15px;
    }

    #cart-items {
      list-style-type: none;
      padding: 0;
    }

    #cart-items li {
      margin-bottom: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
  
    #cart-items li button {
      background-color: #007bff;
      color: white;
      margin-left: 20px;
      border: none;
      padding: 5px 10px;
      border-radius: 5px;
      cursor: pointer;
    }

    .quantity {
      display: flex;
      align-items: center;
    }

    .quantity button {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 5px 10px;
      border-radius: 5px;
      cursor: pointer;
    }

    .quantity input {
      width: 40px;
      text-align: center;
    }

    #cart-total {
      font-weight: bold;
      font-size: 18px;
    }
    .card {
    transition: transform 0.3s;
  }

  .card:hover {
    transform: scale(1.05);
  }

  .sidebar {
  background-color: #007bff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

#cart-items li {
  margin-bottom: 10px;
  padding: 5px;
  border-bottom: 1px solid #ccc;
}

#checkout-btn {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

#checkout-btn:hover {
  background-color: #45a049;
}

/* Add animation effects */
@keyframes slideIn {
  0% {
    opacity: 0;
    transform: translateY(20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}
.slide-in {
  animation: slideIn 0.5s ease-in-out;
}
.sidebar {
  background-color: #007bff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  animation: slideIn 0.5s ease-in-out;
}

.sidebar h2 {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 10px;
}

.sidebar p {
  margin-top: 20px;
}

#cart-items li {
  margin-bottom: 10px;
  padding: 5px;
  border-bottom: 1px solid #ccc;
  font-size: 14px;
}

#checkout-btn {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  font-weight: bold;
  transition: background-color 0.3s ease;
}

#checkout-btn:hover {
  background-color: #45a049;
}
.container {
      margin-top: 2rem;
    }

    .card {
      background-color: blue;
      color: white;
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }

    .card-img-top {
      width: 100%;
      height: auto;
    }

    .quantity {
      margin-bottom: 1rem;
    }

    .sidebar {
      background-color: #f8f9fa;
      padding: 1rem;
    }
/* Add animation effects */
@keyframes slideIn {
  0% {
    opacity: 0;
    transform: translateY(100px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

.header {
      background-color: #333;
      color: #fff;
      width: 54%;
      margin-left: 120px;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .header-title {
      font-size: 24px;
      margin: 0;
    }

    .header-icons {
      font-size: 24px;
      display: flex;
      align-items: center;
    }

    .header-icons i {
      margin-left: 15px;
      transition: color 0.3s ease;
      cursor: pointer;
    }

    .header-icons i:hover {
      color: #ff9800;
    }
    .header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .header-title {
      font-size: 24px;
      margin: 0;
    }

    .header-icons {
      font-size: 24px;
      display: flex;
      align-items: center;
    }

    .header-icons i {
      margin-left: 15px;
      transition: color 0.3s ease;
      cursor: pointer;
    }

    .header-icons i:hover {
      color: #ff9800;
    }

    /* Additional styles for pop-ups and offcanvas */

    .user-popup {
      display: none;
      position: absolute;
      top: 50px;
      background-color: #fff;
      padding: 10px;
      z-index: 999;
      width: 300px;
      height: auto;
      margin-left: 400px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .offcanvas {
      display: none;
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      width: 600px;
      background-color: red;
      padding: 20px;
      color: blue;
      z-index: 2;
    }

    .search-bar {
      display: none;
      padding: 10px;
      background-color: #007bff;
      margin-top: 10px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }
</style>
</head>
<body>
  <div class="header">
    <h1 class="header-title">Car Rental Website</h1>
    <div class="header-icons">
      <i class='bx bx-search' id="search-icon"></i>
      <i class='bx bx-user' id="user-icon"></i>
      <i class='bx bx-menu' id="offcanvas-icon"></i>
      <i class='bx bx-car' id="cars-icon"></i>
    </div>
  </div>

  <!-- Pop-ups and offcanvas -->

  <div class="user-popup" id="user-popup">
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <form id="myForm">
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Enter your password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
    </div>
  
    </div>
  

  <div class="offcanvas" id="offcanvas">
    Offcanvas Menu
  </div>

  <div class="search-bar" id="search-bar">
    <input type="text" placeholder="Search..." style="width: 55%;border-radius: 5px;padding: 5px; margin-left: 110px;outline: none;border: none;text-align: center;">
  </div>

 
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card bg-dark text-white shadow-lg">
              <img src="cars/civic.png" class="card-img-top w-75 h-50" alt="Image 1">
              <div class="card-body">
                <h5 class="card-title">Honda Civic</h5>
                <p>per day</p>
                <p class="card-text">$20</p>
                <div class="quantity">
                  <input type="number" class="qty-input" value="1" min="1" style="display: none;">
                </div>
                <button class="btn btn-primary add-to-cart">Add to Cart</button>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card bg-dark text-white shadow-lg">
              <img src="cars/corola.png" class="card-img-top w-100" alt="Image 1">
              <div class="card-body">
                <h5 class="card-title">Toyota Corolla</h5>
                <p>per day</p>
                <p class="card-text">$25</p>
                <div class="quantity">
                  <input type="number" class="qty-input" value="1" min="1" style="display: none;">
                </div>
                <button class="btn btn-primary add-to-cart">Add to Cart</button>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card bg-dark text-white shadow-lg">
              <img src="cars/fortuner.png" class="card-img-top w-100" alt="Image 1">
              <div class="card-body">
                <h5 class="card-title">Fortuner</h5>
                <p>per day</p>
                <p class="card-text">$40</p>
                <div class="quantity">
                  <input type="number" class="qty-input" value="1" min="1" style="display: none;">
                </div>
                <button class="btn btn-primary add-to-cart">Add to Cart</button>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card bg-dark text-white shadow-lg">
              <img src="cars/hilux.png" class="card-img-top w-100" alt="Image 1">
              <div class="card-body">
                <h5 class="card-title">Hilux</h5>
                <p>per day</p>
                <p class="card-text">$45</p>
                <div class="quantity">
                  <input type="number" class="qty-input" value="1" min="1" style="display: none;">
                </div>
                <button class="btn btn-primary add-to-cart">Add to Cart</button>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card bg-dark text-white shadow-lg" style="height: 360px;">
              <img src="cars/Mehran.png" class="card-img-top w-100" alt="Image 1">
              <div class="card-body">
                <h5 class="card-title">Mehran</h5>
                <p>per day</p>
                <p class="card-text">$15</p>
                <div class="quantity">
                  <input type="number" class="qty-input" value="1" min="1" style="display: none;">
                </div>
                <button class="btn btn-primary add-to-cart mt-4">Add to Cart</button>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card bg-dark text-white shadow-lg">
              <img src="cars/wagonar.png" class="card-img-top w-100" alt="Image 1" style="height: 150px;">
              <div class="card-body">
                <h5 class="card-title">Wagonar</h5>
                <p>per one hour</p>
                <p class="card-text">$10</p>
                <div class="quantity">
                  <input type="number" class="qty-input" value="1" min="1" style="display: none;">
                </div>
                <button class="btn btn-primary add-to-cart">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <!-- Sidebar Area -->
        <div class="sidebar">
          <h2>Cart</h2>
          <ul id="cart-items"></ul>
          <p>Total: <span id="cart-total">$0</span></p>
          <button id="confirm-purchase" class="btn btn-primary">Confirm Purchase</button>
        </div>
      </div>
    </div>
  </div>
  
  <script>
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const cartItemsList = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');
    const confirmPurchaseButton = document.getElementById('confirm-purchase');
    let cart = [];
  
    addToCartButtons.forEach(button => {
      button.addEventListener('click', addToCart);
    });
  
    function addToCart(event) {
      const cardBody = event.target.parentElement;
      const title = cardBody.querySelector('.card-title').innerText;
      const price = parseFloat(cardBody.querySelector('.card-text').innerText.replace('$', ''));
  
      const existingItem = cart.find(item => item.title === title);
  
      if (existingItem) {
        existingItem.quantity += 1;
      } else {
        const newItem = {
          title: title,
          price: price,
          quantity: 1
        };
        cart.push(newItem);
      }
  
      updateCart();
    }
  
    function updateCart() {
      cartItemsList.innerHTML = '';
      let total = 0;
  
      cart.forEach(item => {
        const li = document.createElement('li');
        li.innerHTML = `
          <span>${item.title} - $${item.price}</span>
          <div class="quantity">
            <input type="number" class="qty-input" value="${item.quantity}" min="1">
            <button class="remove-from-cart">Remove</button>
          </div>
        `;
        cartItemsList.appendChild(li);
        total += item.price * item.quantity;
      });
  
      cartTotal.innerText = `$${total.toFixed(2)}`;
  
      const removeFromCartButtons = document.querySelectorAll('.remove-from-cart');
      removeFromCartButtons.forEach(button => {
        button.addEventListener('click', removeFromCart);
      });
  
      const quantityInputs = document.querySelectorAll('.qty-input');
      quantityInputs.forEach(input => {
        input.addEventListener('change', updateQuantity);
      });
  
      updateConfirmPurchaseButton();
    }
  
    function removeFromCart(event) {
      const currentItem = event.target.closest('li');
      const itemIndex = Array.from(cartItemsList.children).indexOf(currentItem);
      const item = cart[itemIndex];
      cart.splice(itemIndex, 1);
      updateCart();
    }
  
    function updateQuantity(event) {
      const currentItem = event.target.closest('li');
      const itemIndex = Array.from(cartItemsList.children).indexOf(currentItem);
      const item = cart[itemIndex];
      item.quantity = parseInt(event.target.value);
      updateCart();
    }
  
    function updateConfirmPurchaseButton() {
      if (cart.length > 0) {
        confirmPurchaseButton.style.display = 'block';
      } else {
        confirmPurchaseButton.style.display = 'none';
      }
    }
  
    confirmPurchaseButton.addEventListener('click', confirmPurchase);
  
    function confirmPurchase() {
      // Logic to handle the purchase action
      alert('Purchase confirmed!');
      // Reset the cart
      cart = [];
      updateCart();
    }
  </script>
    <script>
      // Function to show/hide user popup
      function toggleUserPopup() {
        const userPopup = document.getElementById('user-popup');
        userPopup.style.display = userPopup.style.display === 'none' ? 'block' : 'none';
      }
  
      // Function to show/hide offcanvas
      function toggleOffcanvas() {
        const offcanvas = document.getElementById('offcanvas');
        offcanvas.style.display = offcanvas.style.display === 'none' ? 'block' : 'none';
      }
  
      // Function to show/hide search bar
      function toggleSearchBar() {
        const searchBar = document.getElementById('search-bar');
        searchBar.style.display = searchBar.style.display === 'none' ? 'block' : 'none';
      }
  
      // Function to show available cars
      function showAvailableCars() {
        alert('Cars available for rent!');
      }
  
      // Add click event listeners to the header icons
      document.getElementById('user-icon').addEventListener('click', toggleUserPopup);
      document.getElementById('offcanvas-icon').addEventListener('click', toggleOffcanvas);
      document.getElementById('search-icon').addEventListener('click', toggleSearchBar);
      document.getElementById('cars-icon').addEventListener('click', showAvailableCars);
    </script>
  <script>
    document.getElementById("myForm").addEventListener("submit", function(event) {
      event.preventDefault();

      var email = document.getElementById("email").value;
      var password = document.getElementById("password").value;

      if (email === "waleedch@gmail.com" && password === "1122") {
        alert("Submit successful");
        // Close the form
        document.getElementById("myForm").style.display = "none";
        // Redirect to index.html
        window.location.href = "index.html";
      } else {
        alert("Invalid email or password");
      }
    });
  </script>
>
  </body>
</html>