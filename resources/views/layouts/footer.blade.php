


    <!-- Footer -->
    <footer class="footers">
        <!-- Left items -->
        <div class="left-items">
            <div>Madini</div>
            <div>Contact</div>
            <div>Email</div>
        </div>
        <!-- Currency converter icon -->
        <div class="currency-icon" onclick="toggleCurrency()">$</div>
    </footer>


    
    <style>
        /* Footer styles */
        .footers {
            background-color: #fff; /* White background */
            color: #000; /* Black text */
            padding: 10px 20px; /* Padding for content */
            display: flex; /* Use flexbox for layout */
            justify-content: space-between; /* Space between items */
            box-shadow: 0px -5px 10px rgba(0, 0, 0, 0.1); /* Border shadow */
            position: fixed; /* Fixed position at the bottom */
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 999; /* Ensure footer is on top of other content */
        }
        .footers .left-items {
            display: flex; /* Use flexbox for layout */
        }
        .footers .left-items div {
            margin-right: 20px; /* Space between items */
        }
        /* Currency converter icon */
        .currency-icon {
            width: 24px;
            height: 24px;
            background-color: #ccc; /* Gray background */
            border-radius: 50%; /* Circular shape */
            display: inline-flex; /* Use flexbox for centering */
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            cursor: pointer; /* Cursor pointer on hover */
        }
    </style>

    <!-- JavaScript for currency toggle -->
    <script>
        function toggleCurrency() {
            // Logic to toggle currency and change prices
            // Example: Change currency symbol and update prices on the website
            var currencyIcon = document.querySelector('.currency-icon');
            if (currencyIcon.textContent === '$') {
                // Change to different currency (e.g., €)
                currencyIcon.textContent = '€';
                // Update prices on the website
                // Example: Iterate through product prices and convert
            } else {
                // Change back to default currency (e.g., $)
                currencyIcon.textContent = '$';
                // Update prices on the website
                // Example: Revert prices to original currency
            }
        }
    </script>
