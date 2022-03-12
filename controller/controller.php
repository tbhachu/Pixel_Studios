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

        $title = "";
        $link = "";

        //if the form has been posted
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $title = $_POST['title'];
            $link = $_POST['link'];

            //instantiate item object
            $_SESSION['item'] = new Item();

            $_SESSION['item']->setTitle($title);
            $_SESSION['item']->setLink($link);

            $this->_f3->reroute('addToCart');

        }

        $view = new Template();
        echo $view->render('views/products.html');
    }

    function addToCart()
    {
        //Get the data from the model
        $products = $GLOBALS['dataLayer']->getProducts();
        $this->_f3->set('products', $products);

        //Initialize input variables
        //$title = "";
        //$link = "";
        $size = "";
        $frame = "";
        $finish = "";
        $price = 49.99;

        //if the form has been posted
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {

            //title and link will already be generated
            /*$title = $_POST['title'];
            $link = $_POST['link'];*/

            $size = $_POST['size'];
            $frame = $_POST['frame'];
            $finish = $_POST['finish'];

            //$price = $_POST['price'];

            //Validate the data
            if(Validator::validSizes($size)) {

                //Add the data to the session variable
                $_SESSION['item']->setSize($size);
            }
            else {

                //Set an error
                $this->_f3->set('errors["size"]', 'Please enter a valid image size');
            }

            //Validate the data
            if(Validator::validFrames($frame)) {

                //Add the data to the session variable
                $_SESSION['item']->setFrame($frame);
            }
            else {

                //Set an error
                $this->_f3->set('errors["frame"]', 'Please enter a valid frame type');
            }


            //Redirect user to product page if there are no errors
            if (empty($this->_f3->get('errors'))) {
                $this->_f3->reroute('products');
            }

        }


        $this->_f3->set('size', DataLayer::getSizes());
        $this->_f3->set('frame', DataLayer::getFrames());
        $this->_f3->set('finish', $finish);
        $this->_f3->set('price', $price);

        $view = new Template();
        echo $view->render('views/addToCart.html');
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