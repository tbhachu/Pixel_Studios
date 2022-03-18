# Pixel_Studios
A Photo gallery and art printing storefront.

Created by Tarsem Bhachu and Nathan Arrowsmith



Our website features the following:

1. Validation functions and Database push/pull methods can be found in the model directory. All pages are routed through the Controller class in the Controller directory. 
2. Fat-Free object instantiated in the Controller class and all pages are routed through the Controller class in the Controller directory. 
3. Datalayer class in the model directory contains all database functions with prepared SQL statements. 
4. Calls to send/retrieve data to the database can be found in the controller. Dynamic table reads can be seen on the cart page. 
5. 124 total commits to this repo. 
6. This page makes use of 2 separate classes, a Customer object which stores all customer information and an Item object used for tracking individual products a customer picks out. 
7. Docblocks found in the datalayer are detailed and specific. 
8. Client side validation called from the script.js file, server side validation called in the controller. 
9. Code is commented as clearly as possible, and efforts were taken to condense code into as many functions as possible. 

CLASS DESCRIPTIONS

Item

Title
Link
Info
Size
Frame
Finish
price
+ getTitle
+ setTitle
+ getLink
+ setLink
+ getInfo
+ setInfo
+ getSize
+ setSize
+ getFrame
+ setFrame
+ getFinish
+ setFinish
+ getPrice
+ setPrice

Customer

fname
lname
phone
email
Address
state
sessionID
+ getSessionID
+ setSessionID
+ getFirstName
+ setFirstName
+ getLastName
+ setLastName
+ getEmail
+ setEmail
+ getPhone
+ setPhone
+ getAddress
+ setAddress
+ getState
+ setState






