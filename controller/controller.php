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