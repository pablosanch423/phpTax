<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cost Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        body {
            background: #eee;
            font-family: 'Open Sans', sans-serif;
        }

        .form-container {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 1px 21px #acacac;
            margin-top: 20px;
            color: #333;
        }

        .form-group label {
            display: block;
            margin-top: 10px;
            color: #333;
        }

        .form-control {
            border-radius: 4px;
            border: 1px solid #ccc;
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #9f181c;
            color: white;
            border: 0;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #333333;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 form-container">
            <h2 class="text-center">Cost Calculator</h2>
            <p>Fill out this form to calculate the total cost:</p>

            <form action="calculate.php" method="post">
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" class="form-control" id="price" name="price" required>
                </div>
                
                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <select class="form-control" id="quantity" name="quantity">
                        <?php for ($i = 1; $i <= 10; $i++): ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="discount">Discount:</label>
                    <select class="form-control" id="discount" name="discount">
                        <option value="0" selected>0%</option>
                        <option value="0.05">5%</option>
                        <option value="0.10" >10%</option>
                        <option value="0.15">15%</option>
                        <option value="0.20">20%</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <p>Tax: (7.5%)</p>
                </div>
                
                <div class="form-group">
                    <label for="shipping">Shipping method:</label>
                    <select class="form-control" id="shipping" name="shipping">
                        <option value="5.00">Slow and steady ($5.00)</option>
                        <option value="10.00">Fast and furious ($10.00)</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="payments">Number of payments to make:</label>
                    <input type="number" class="form-control" id="payments" name="payments" min="1" value="1" required>
                </div>

                <input type="submit" value="Calculate!">
            </form>
        </div>
    </div>
</div>

</body>
</html>
