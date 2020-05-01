
<?php $this->load->view('_assets/U_header');
      $this->load->view('_assets/U_navbar');
?>

            <!-- BREADCRUMBS -->
            <div class="bcrumbs">
                <div class="container">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
            <div class="space10"></div>

            <!-- MY ACCOUNT -->
            <div class="account-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <!-- HTML -->
                            <div id="account-id">
                                <h4 class="account-title"><span class="fa fa-chevron-right"></span>Login</h4>                                                                  
                                <div class="account-form">
                                    <form class="form-login" method="post" action="<?= base_url('login')?>">                                        
                                        <ul class="form-list row">
                                            <li class="col-md-6 col-sm-12"> 
                                                <a href="#" class="btn facebook"><i class="fa fa-facebook"></i>Sign in with Facebook</a>
                                            </li>
                                            <li class="col-md-6 col-sm-12"> 
                                                <a href="#" class="btn twitter"><i class="fa fa-twitter"></i>Sign in with Twitter</a>
                                            </li>
                                            <li class="col-md-12 col-sm-12">
                                                <label >User name or email <em>*</em></label>
                                                <input required type="text" name="input_username" class="input-text">
                                            </li>
                                            <li class="col-md-12 col-sm-12">
                                                <label >Your password <em>*</em></label>
                                                <input required type="password" name="input_password" class="input-text">
                                            </li> 
                                            <li class="col-md-6 col-sm-12">                                                
                                                <input class="input-chkbox" type="checkbox">
                                                <label >Remember me</label>
                                            </li>
                                            <li class="col-md-6 col-sm-12 pwd text-right">
                                                <label > <a href="#"> forgot password? </a> </label>                                               
                                            </li>
                                        </ul>
                                        <div class="buttons-set">
                                            <button class="btn-black" type="submit"><span>login</span></button>
                                        </div>
                                    </form>
                                </div>                                    
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <!-- HTML -->
                            <div id="account-id2">
                                <h4 class="account-title"><span class="fa fa-chevron-right"></span>Create New Account</h4>                                                                  
                                <div class="account-form create-new-account">
                                    <h3 class="block-title">Signup Today and You'll be able to</h3>
                                    <ul>
                                        <li> <i class="fa fa-edit"></i> Online Order Status</li>
                                        <li> <i class="fa fa-edit"></i> See Ready Hot Deals</li>
                                        <li> <i class="fa fa-edit"></i> Love List</li>
                                        <li> <i class="fa fa-edit"></i> Sign up to receive exclusive news and private sales</li>
                                        <li> <i class="fa fa-edit"></i> Quick Buy Stuffs</li>
                                    </ul>
                                    <div class="buttons-set">
                                        <button class="btn-black" type="submit"><span>Create Account</span></button>
                                    </div>
                                </div>                                    
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