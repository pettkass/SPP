# smart parking System




How To Install -
---------

1. Create Database parking.
2. Run parking.sql script provided.
3. Go to Users/login.php and try out our application. Sample user credentials can be found in users & wallet_details table.

# users logins
SPP/Users/login.php
email: user@gmail.com
password: @User12

# Admin logins
Go to Admin/login.php 
email: admin@gmail.com
password: @Tinda01


Note -
---------
1. This is not ready for PRODUCTION.
2. The username and password of sample users are stored in table `users`.
3. By default a new customer gets 2000 coins in Wallet on signing up, and a fake Credit card number & CVV number is generated and stored in SQL Table "wallet_details" with corresponding new customer's ID.
4. Use that Card Number & CVV while placing an order, else order won't be successful or use "Cash on delivery" option.
5. What's lacking? Dynamic payment(real payment system) and error reporting lacks in this project. And also one might wish for showing corresponding food item's photo and all that stuff.
