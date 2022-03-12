<?php

//  328/dating/controller/controller.php

class Controller
{
    private $_f3; //F3 object

    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    function home()
    {
        //Get the data from the model
        $products = $GLOBALS['dataLayer']->getProducts();
        $this->_f3->set('products', $products);

        $view = new Template();
        echo $view->render('views/home.html');
    }

    function products()
    {
        //Get the data from the model
        $products = $GLOBALS['dataLayer']->getProducts();
        $this->_f3->set('products', $products);

        $view = new Template();
        echo $view->render('views/products.html');
    }

    function addToCart()
    {
        //Get the data from the model
        $products = $GLOBALS['dataLayer']->getProducts();
        $this->_f3->set('products', $products);

        //Initialize input variables
        $title = "";
        $link = "";
        $size = "";
        $frame = "";
        $finish = "";
        $price = 49.99;

        //if the form has been posted
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {

            //title and link will already be generated
            $title = $_POST['title'];
            $link = $_POST['link'];

            $size = $_POST['size'];
            $frame = $_POST['frame'];
            $finish = $_POST['finish'];

            //$price = $_POST['price'];

            //instantiate item object
            $_SESSION['item'] = new Item();


            //Validate the data
            if(Validator::validName($fname)) {

                //Add the data to the session variable
                $_SESSION['member']->setFirstName($fname);
            }
            else {

                //Set an error
                $this->_f3->set('errors["fname"]', 'Please enter a valid First Name');
            }

            //Validate the data
            if(Validator::validName($lname)) {

                //Add the data to the session variable
                $_SESSION['member']->setLastName($lname);
            }
            else {

                //Set an error
                $this->_f3->set('errors["lname"]', 'Please enter a valid Last Name');
            }

            //Validate the data
            if(Validator::validAge($age)) {

                //Add the data to the session variable
                $_SESSION['member']->setAge($age);
            }
            else {

                //Set an error
                $this->_f3->set('errors["age"]', 'Please enter a valid Age');
            }

            if(Validator::validCoat($coat)) {

                //Add the data to the session variable
                $_SESSION['member']->setCoat($coat);
            }

            //Validate the data
            if(Validator::validPhone($number)) {

                //Add the data to the session variable
                $_SESSION['member']->setPhone($number);
            }
            else {

                //Set an error
                $this->_f3->set('errors["number"]', 'Please enter a valid phone number');
            }

            //Redirect user to next page if there are no errors
            if (empty($this->_f3->get('errors'))) {
                $this->_f3->reroute('profile');
            }

        }

        $this->_f3->set('fname', $fname);
        $this->_f3->set('lname', $lname);
        $this->_f3->set('userCoat', $coat);
        $this->_f3->set('coats', DataLayer::getCoat());
        $this->_f3->set('age', $age);
        $this->_f3->set('number', $number);

        $view = new Template();
        echo $view->render('views/products.html');
    }

    function cart()
    {

        //If the form has been posted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Redirect user to Checkout Page
            $this->_f3->reroute('views/checkout.html');
        }



        $view = new Template();
        echo $view->render('views/cart.html');

    }

    function about()
    {

        $view = new Template();
        echo $view->render('views/about.html');

    }

    function checkout()
    {

        $view = new Template();
        echo $view->render('views/checkout.html');

    }

    function summary()
    {

        //TODO: Send data to the model
        $GLOBALS['dataLayer']->saveOrder($_SESSION['order']);

        $view = new Template();
        echo $view->render('views/summary.html');

        //Clear the session data
        session_destroy();
    }

    function admin()
    {
        //Get the data from the model
        $orders = $GLOBALS['dataLayer']->getOrders();
        $this->_f3->set('orders', $orders);

        //Display the view page
        $view = new Template();
        echo $view->render('views/admin.html');
    }
}