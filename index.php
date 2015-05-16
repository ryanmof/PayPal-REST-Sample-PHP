<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PayPal REST API Test</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="container">
        <div class="payment-container">
            <h1 class="header">PayPal REST API EC Tester</h1>
            
            <form action="checkout.php" class="form-horizontal" method="post" autocomplete="off">
                <div class="form-group">
                <label for="item" class="col-sm-2 control-label">Product</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="product" placeholder="Enter Product Name">
                    </div>
                </div>
                <div class="form-group">
                <label for="amount" class="col-sm-2 control-label">Price</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="price" placeholder="1.00">
                    </div>
                </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <input type="image" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/checkout-logo-large.png" alt="Submit"></button>
                </div>
            </div>
            </form>
        </div>
    </div>
    </body>
</html>