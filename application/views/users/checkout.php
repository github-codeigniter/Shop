<?php $this->load->view('_assets/U_header');
      $this->load->view('_assets/U_navbar');
?>

            <!-- BREADCRUMBS -->
            <div class="bcrumbs">
                <div class="container">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>

            <div class="space10"></div>

            <!-- MAIN CONTENT -->
            <div class="shop-single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-sm-8">
                            <!-- HTML -->
                            <div id="accordion">
                                <h4 class="accordion-toggle"><span>01</span>Checkout Method</h4>
                                <div class="accordion-content default">
                                    <div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>Checkout as a Guest or Register</h3>
                                                <div class="space10"></div>
                                                <p>Register with us for future convenience:</p>
                                                <div class="cbox">
                                                    <input name="checkout_method" class="radio" type="radio"><span>Checkout as Guest</span><br>
                                                    <div class="space10"></div>
                                                    <input name="checkout_method" class="radio" type="radio"><span>Register</span>
                                                </div>
                                                <div class="space20"></div>
                                                <h4>Register and save time!</h4>
                                                <div class="space10"></div>
                                                <p>Register with us for future convenience:</p>
                                                <ul class="ul">
                                                    <li><i class="fa fa-check"></i> Fast and easy check out</li>
                                                    <li><i class="fa fa-check"></i> Easy access to your order history and status</li>
                                                </ul>
                                                <div class="space10"></div>
                                                <a href="<?= base_url('web/checkoutVer') ?>"><button type="button" class="btn-black"><span><span>Continue</span></span></button>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>Login</h3>
                                                <div class="space10"></div>
                                                <form id="login-form">
                                                    <fieldset>
                                                        <h4>Already registered?</h4>
                                                        <div class="space20"></div>
                                                        <p>Please log in below:</p>
                                                        <ul class="form-list">
                                                            <li>
                                                                <label for="login-email" class="required">Email Address <em>*</em></label>
                                                                <div class="input-box">
                                                                    <input class="input-text required-entry validate-email" id="login-email" name="login[username]" value="" type="text">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <label for="login-password" class="required">Password <em>*</em></label>
                                                                <div class="input-box">
                                                                    <input class="input-text required-entry" id="login-password" name="login[password]" type="password">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <span class="pull-left">
                                                            <button type="submit" class="btn-black"><span><span>Login</span></span></button>
                                                        </span>
                                                        <span class="pull-right" style="text-align:right;">
                                                            <span class="required no-margin">* Required Fields</span><br>
                                                            <a href="#" class="f-left">Forgot your password?</a>
                                                        </span>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <h4 class="accordion-toggle"><span>02</span>Billing Information</h4>
                                <div class="accordion-content">
                                    <p>Lorem ipsum dolor sit amet mauris eu turpis.</p>
                                </div>
                                <h4 class="accordion-toggle"><span>03</span>Shipping information</h4>
                                <div class="accordion-content">
                                    <p>Vivamus facilisisnibh scelerisque laoreet.</p>
                                </div>
                                <h4 class="accordion-toggle"><span>04</span>Shipping Method</h4>
                                <div class="accordion-content">
                                    <p>Vivamus facilisisnibh scelerisque laoreet.</p>
                                </div>
                                <h4 class="accordion-toggle"><span>05</span>Payment information</h4>
                                <div class="accordion-content">
                                    <p>Vivamus facilisisnibh scelerisque laoreet.</p>
                                </div>
                                <h4 class="accordion-toggle"><span>06</span>Order Review</h4>
                                <div class="accordion-content">
                                    <p>Vivamus facilisisnibh scelerisque laoreet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 checkout-steps">
                            <h6>Checkout Process</h6>
                            <div>
                                <p><i class="fa fa-edit"></i> Billing Address</p>
                                <p><i class="fa fa-edit"></i> Shipping Address</p>
                                <p><i class="fa fa-edit"></i> Shipping Address</p>
                                <p><i class="fa fa-edit"></i> payment Address</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix space20"></div>

<?php
    $this->load->view('_assets/U_footer');
    //$this->load->view('_assets/U_modal');
    $this->load->view('_assets/U_footjs');
?>