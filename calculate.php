<?php
$price = $_POST['price'] ?? 0;
$quantity = $_POST['quantity'] ?? 1;
$discount = $_POST['discount'] ?? 0.10; 
$tax = 0.075; 
$shipping = $_POST['shipping'] ?? 5.00;
$payments = $_POST['payments'] ?? 1;

function calculateTotalCost($price, $quantity, $discount, $tax, $shipping, $payments) {
    $discountedPrice = $price - ($price * $discount);
    $subtotal = $discountedPrice * $quantity;
    $taxAmount = $subtotal * $tax;
    $totalWithTax = $subtotal + $taxAmount;
    $finalTotal = $totalWithTax + $shipping;
    $totalPerPayment = $finalTotal / $payments;
    return $totalPerPayment;
}

$totalCost = calculateTotalCost($price, $quantity, $discount, $tax, $shipping, $payments);
$currentDate = date("m-d-Y");
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
    <link rel="stylesheet" href="./style.css" />
</head>
<body>

<div class="col-md-12">   
    <div class="row">
        <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="receipt-header">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="receipt-left">
                            <img class="img-responsive" alt="iamgurdeeposahan" src="https://bootdey.com/img/Content/avatar/avatar6.png" style="width: 71px; border-radius: 43px;">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                        <div class="receipt-right">
                            <h5>Company Name.</h5>
                            <p>+1 3649-6589 <i class="fa fa-phone"></i></p>
                            <p>company@gmail.com <i class="fa fa-envelope-o"></i></p>
                            <p>USA <i class="fa fa-location-arrow"></i></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="receipt-header receipt-header-mid">
                    <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                        <div class="receipt-right">
                            <h5>Customer Name </h5>
                            <p><b>Mobile :</b> +1 12345-4569</p>
                            <p><b>Email :</b> customer@gmail.com</p>
                            <p><b>Address :</b> New York, USA</p>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="receipt-left">
                            <h3>INVOICE # 102</h3>
                        </div>
                    </div>
                </div>
            </div>
            
            <div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td class="col-md-9">Payment <?php echo $currentDate ?></td>
                        </tr>
                        <tr>
                            <td class="text-right">
                                <p>
                                    <strong>Amount: </strong>
                                </p>
                                <p>
                                    <strong>Shipping: </strong>
                                </p>
                                <p>
                                    <strong>Discount: </strong>
                                </p>
                                <p>
                                    <strong>Tax (7.5%): </strong>
                                </p>
                            </td>
                            <td>
                                <p>
                                    <strong><i class="fa fa-inr"></i> $<?php echo number_format($price, 2); ?></strong>
                                </p>
                                <p>
                                    <strong><i class="fa fa-inr"></i> $<?php echo number_format($shipping, 2); ?></strong>
                                </p>
                                <p>
                                    <strong><i class="fa fa-inr"></i> $<?php echo number_format($price * $discount, 2); ?></strong>
                                </p>
                                <p>
                                    <strong><i class="fa fa-inr"></i> $<?php echo number_format((($price - ($price * $discount)) * $quantity) * $tax, 2); ?></strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right"><h2><strong>Total: </strong></h2></td>
                            <td class="text-left text-danger"><h2><strong><i class="fa fa-inr"></i> $<?php echo number_format($totalCost, 2); ?></strong></h2></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="row">
                <div class="receipt-header receipt-header-mid receipt-footer">
                    <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                        <div class="receipt-right">
                            <p><b>Date :</b> <?php echo $currentDate; ?> </p>
                            <h5 style="color: rgb(140, 140, 140);">Thanks for shopping.!</h5>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="receipt-left">
                            <h1>Stamp</h1>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>    
    </div>
</div>

</body>
</html>
