<html>
	<head>
        <!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<title>CheckOut</title>
	</head>
	<body class="bg-light">
		<div class='container'>
            <?php 
                $this->view('Subviews/navigation');
            ?>
		    <h1>CheckOut</h1>
            <p>Enter Payment Information Below</p>
            <div class="container col-8 my-5 br-2 rounded">
        <div class="row g-3">
            <div class="col-4 order-md-last">
                <h4 class="d-flex justify-content-between align-item-center">
                    <span class="text-muted">Your Checkout</span>
                    <span class="badge bg-secondary rounded-pill">Pay</span>
                </h4>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <h6>For your information</h6>
                            <span class="text-muted">Private Information is protected</span>
                        </div>
                        
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <h6>Reminder</h6>
                            <span class="text-muted">Verify information inputted into Payment </span>
                        </div>
                        
                    </li>
                   
                   
                </ul>
            </div>
            <div class="col-8">
                <h4>Billing Address</h4>
                <form>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label" for="firstname">First Name</label>
                            <input type="text" id="firstname" class="form-control">
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="lastname">Middle name<span class="text-muted"> (Optional)</span></label>
                            <input type="text" id="lastname" class="form-control">
                        </div>
                        <div class="col-12">
                            <label class="from-label" for="username">Last Name</label>
                            <div class="input-group">
                                
                                <input type="text" class="form-control" id="usrname">
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="email">Email
                                <span class="text-muted"> (Optional)</span>
                            </label>
                            <input type="text" id="email" class="form-control">
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="address">Address </label>
                            <input type="text" id="address" class="form-control">
                        </div>
                        <div class="col-5">
                            <label class="form-label" for="country">Country </label>
                            <select class="form-select" id="country">
                                <option>Choose</option>
                                <option>Canada</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label class="form-label" for="state">Province </label>
                            <select class="form-select" id="state">
                                <option>Choose</option>
                                <option>Quebec</option>
                                <option>Ontario</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label class="form-label" for="zip">Zip </label>
                            <input type="text" id="zip" class="form-control">
                        </div>
                    </div>
                    <hr>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input">
                        <label class="form-check-label">Shipping address is the same as my billing address</label>
                    </div>
                    <hr>
                    <h4>Payment</h4>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input">
                        <label input class="form-check-label" style:text-align:left>Credit Card</label>
                    </div>
                    
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label" for="cardname">Name on Card </label>
                            <input type="text" class="form-control">
                            <small class="text-muted">Full name as displayed on card</small>
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="creditcard">Credit Card Number </label>
                            <input type="text"  class="form-control">
                        </div>
                        <div class="col-3">
                            <label class="form-label" for="expiration">Expiration </label>
                            <input type="text" id="expiration" class="form-control">
                        </div>
                        <div class="col-3">
                            <label class="form-label" for="cvv">CVV </label>
                            <input type="text" id="cvv" class="form-control">
                        </div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary btn-block mb-4">Pay!</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>