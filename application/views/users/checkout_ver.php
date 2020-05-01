<?php $this->load->view('_assets/U_header');
      $this->load->view('_assets/U_navbar');
?>

            <!-- BREADCRUMBS -->
            <div class="bcrumbs">
                <div class="container">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Keranjang</li>
                        <li>Verifikasi</li>
                    </ul>
                </div>
            </div>
            <div class="space10"></div>

            <!-- MAIN CONTENT -->
            <div class="shop-single">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-3 col-sm-4">
                            <div class="side-widget space50">
                                <h3> <span> Your order </span></h3>
                                <div>
                                    <table class="cart-table"> 
                                        <tbody></tbody>
                                        <tr>                                              
                                            <td>
                                                <div class="item-img col-md-5 col-sm-5">
                                                    <a href="#"><img src="images/products/fashion/5.jpg" class="img-responsive" alt=""/></a>
                                                </div>
                                                <div class="item-info col-md-7 col-sm-7">
                                                    <h4>Product fashion</h4>
                                                    <p>x2</p>
                                                    <p>Size: M</p>
                                                </div>
                                            </td>  
                                            <td>
                                                <a href="#"> <i class="fa fa-trash-o"></i> </a>
                                            </td>                                            
                                        </tr> 
                                        <tfoot>
                                            <tr>
                                                <th>Cart Subtotal</th>
                                                <td>
                                                    <div class="">$ 99.00</div>
                                                </td> 
                                            </tr>
                                            <tr>
                                                <th>Shipping and Handling</th>
                                                <td>
                                                    <div class="">Free Shipping</div>
                                                </td> 
                                            </tr>
                                            <tr>
                                                <th>Order Total</th>
                                                <td>
                                                    <div class="">$ 99.00</div>
                                                </td> 
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-9 col-sm-8">
                            <!-- HTML -->
                            <div>
                                <h4 class="account-title"><span class="fa fa-chevron-right"></span>Checkout Method</h4>
                                <div class="account-form">
                                    <form id="shipping-zip-form">                                        
                                        <ul class="form-list row">
                                            <li class="col-md-12 col-sm-12">
                                                <label>Country <em>*</em></label>
                                                <select required>
                                                    <option value="">Country 1</option>
                                                    <option value="1">Country 2</option>
                                                    <option value="2">Country 3</option>
                                                </select>
                                            </li> 
                                            <li class="col-md-6 col-sm-6">
                                                <label>First Name <em>*</em></label>
                                                <input type="text" class="input-text" required>
                                            </li>
                                            <li class="col-md-6 col-sm-6">
                                                <label>Last Name <em>*</em></label>
                                                <input type="text" class="input-text" required>
                                            </li>
                                            <li class="col-md-6 col-sm-6">
                                                <label >Address 1 <em>*</em></label>
                                                <input required type="text" class="input-text">
                                            </li>
                                            <li class="col-md-6 col-sm-6">
                                                <label >Address 2</label>
                                                <input type="text" class="input-text">
                                            </li>
                                            <li class="col-md-6 col-sm-6">
                                                <label >Company Name</label>
                                                <input type="text" class="input-text">
                                            </li>
                                            <li class="col-md-6 col-sm-6">
                                                <label>City</label>
                                                <select>
                                                    <option>City 1</option>
                                                    <option>City 2</option>
                                                    <option>City 3</option>
                                                </select>
                                            </li> 
                                            <li class="clearfix"></li>
                                            <li class="col-md-6 col-sm-6">
                                                <label>State</label>
                                                <select>
                                                    <option>State 1</option>
                                                    <option>State 2</option>
                                                    <option>State 3</option>
                                                </select>
                                            </li> 
                                            <li class="col-md-6 col-sm-6">
                                                <label >Zip/Postal Code <em>*</em></label>
                                                <input required type="text" class="input-text">
                                            </li>
                                            <li class="col-md-6 col-sm-6">
                                                <label >Email <em>*</em></label>
                                                <input required type="text" class="input-text">
                                            </li>
                                            <li class="col-md-6 col-sm-6">
                                                <label >Phone Number <em>*</em></label>
                                                <input required type="text" class="input-text">
                                            </li>
                                            <li class="col-md-12 col-sm-12">
                                                <input id="create-act" type="checkbox" class="input-chkbox">
                                                <label> Create an account?</label>
                                            </li>
                                            <li class="col-md-12 col-sm-12 create-account">
                                                <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                                <label > Account password <em>*</em></label>
                                                <input required type="text" class="input-text">
                                            </li>
                                            <li class="col-md-12 col-sm-12">
                                                <input id="diff-address" type="checkbox" class="input-chkbox">
                                                <label> Ship to a different address?</label>
                                            </li>
                                            <li class="col-md-12 col-sm-12 shipping-address">
                                                <ul class="form-list row">
                                                    <li class="col-md-12 col-sm-12">
                                                        <label>Country <em>*</em></label>
                                                        <select required>
                                                            <option value="">Country 1</option>
                                                            <option value="1">Country 2</option>
                                                            <option value="2">Country 3</option>
                                                        </select>
                                                    </li> 
                                                    <li class="col-md-6 col-sm-6">
                                                        <label>First Name <em>*</em></label>
                                                        <input type="text" class="input-text" required>
                                                    </li>
                                                    <li class="col-md-6 col-sm-6">
                                                        <label>Last Name <em>*</em></label>
                                                        <input type="text" class="input-text" required>
                                                    </li>
                                                    <li class="col-md-6 col-sm-6">
                                                        <label >Address 1 <em>*</em></label>
                                                        <input required type="text" class="input-text">
                                                    </li>
                                                    <li class="col-md-6 col-sm-6">
                                                        <label >Address 2</label>
                                                        <input type="text" class="input-text">
                                                    </li>
                                                    <li class="col-md-6 col-sm-6">
                                                        <label >Company Name</label>
                                                        <input type="text" class="input-text">
                                                    </li>
                                                    <li class="col-md-6 col-sm-6">
                                                        <label>City</label>
                                                        <select>
                                                            <option>City 1</option>
                                                            <option>City 2</option>
                                                            <option>City 3</option>
                                                        </select>
                                                    </li> 
                                                    <li class="clearfix"></li>
                                                    <li class="col-md-6 col-sm-6">
                                                        <label>State</label>
                                                        <select>
                                                            <option>State 1</option>
                                                            <option>State 2</option>
                                                            <option>State 3</option>
                                                        </select>
                                                    </li> 
                                                    <li class="col-md-6 col-sm-6">
                                                        <label >Zip/Postal Code <em>*</em></label>
                                                        <input required type="text" class="input-text">
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="col-md-12 col-sm-12 transfer-wrap">
                                                <p>
                                                    <input id="direct-transfer" type="radio" name="optradio" class="input-chkbox">
                                                    <label> Direct Bank Transfer </label>
                                                </p>
                                                <div id="direct-transfer-msg" class="transfer-guide">
                                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                </div>
                                                <p>
                                                    <input id="cheque-transfer" type="radio" name="optradio" class="input-chkbox">
                                                    <label> Cheque Payment </label>
                                                </p>
                                                <div id="cheque-transfer-msg" class="transfer-guide">
                                                    <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                                <p>
                                                    <input id="paypal-transfer" type="radio" name="optradio" class="input-chkbox">
                                                    <label class="pay-pal"> PayPal <img alt="PayPal Acceptance Mark" src="../../../../www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png"> 
                                                        <a title="What is PayPal?" onclick="javascript:window.open('https://www.paypal.com/gb/webapps/mpp/paypal-popup', 'WIPaypal', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700');
                                                                return false;" class="about_paypal" href="https://www.paypal.com/gb/webapps/mpp/paypal-popup">What is PayPal?</a>
                                                    </label>
                                                </p>
                                                <div id="paypal-transfer-msg" class="transfer-guide">
                                                    <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="buttons-set">
                                            <button class="btn-black" type="submit">Place Order</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="clearfix"></div>   
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