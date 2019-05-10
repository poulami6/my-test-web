<div class="login-outer">
        <div class="container">
            <div class="contact-from-inr">
                <ul class="contact-from">
                    <li class="control radiobox">
                        <input type="radio" name="user_type" data-id="partner" class="user_type" value="operator" checked> Become a Partner<br>
                        <input type="radio" name="user_type" data-id="customer" class="user_type" value="customer"> Customer
                    </li>
                </ul>

                <div class="partner commondiv">
                <form class="user-form" id="signup_partnet" action="" method="post">
                <ul class="contact-from">
                    <li>
                        <input name="business_name" id="business_name" class="text-fild" type="text" placeholder="Business name" />
                    </li>
                    <li>
                        <input name="first_name" id="first_name" class="text-fild" type="text" placeholder="First name" />
                    </li>
                    <li>
                        <input name="last_name" id="last_name" class="text-fild" type="text" placeholder="Last name" />
                    </li>
                    <li class="filds">
                        <p>Address</p>
                        <input name="apt_no" id="apt_no" class="text-fild" type="text" placeholder="Apt no" />
                    </li>
                    <li>
                        <input name="street_name" id="street_name" class="text-fild" type="text" placeholder="Street address" />
                    </li>
                    <li>
                        <input name="city_name" id="city_name" class="text-fild" type="text" placeholder="City/Town" />
                    </li>                   
                    <li>
                        <input name="country_name" id="country_name" class="text-fild" type="text" placeholder="Country" />
                    </li>
                    
                    <li>
                        <input name="phone_number" id="phone_number" class="text-fild" type="text" placeholder="Phone Number/s" onblur="validate_Phone_Number();" />
                    </li>
                    <li>
                        <input name="user_password" id="user_password" class="text-fild" type="password" placeholder="Password" />
                    </li>
                    <li>
                        <input name="email_address" id="email_address" class="text-fild" type="text" placeholder="Email address" />
                    </li>
                    <li class="massage-show">
                        <input name="email_confirm" id="email_confirm" class="text-fild" type="text" onblur="confirmEmail()" placeholder="Confirm email address" />
                        <p>(By submission you consent to our Terms & Conditions and Privacy Policy.)</p>
                    </li>                   
                    <li>
                        <input class="submit" type="submit" id="partnerSubmit" value="Submit" />
                    </li>
                </ul>
                </form>
                </div>

                <div class="customer commondiv" style="display: none;">
                <form name="custform" class="user-form" id="signup_customer" action="" method="post">
                    <ul class="contact-from">
                        <li>
                            <input name="cust_first_name" id="cust_first_name" class="text-fild" type="text" placeholder="First name" />
                        </li>
                        <li>
                            <input name="cust_last_name" id="cust_last_name" class="text-fild" type="text" placeholder="Last name" />
                        </li>
                        <li>
                            <input name="cust_password" id="cust_password"  class="text-fild" type="password" placeholder="Password" />
                        </li>
                        <li>
                            <input name="cust_email_address" id="cust_email_address" class="text-fild" type="text" placeholder="Email address" />
                        </li>
                        <li>
                            <input name="cust_confirm_email" id="cust_confirm_email" class="text-fild" type="text" placeholder="Confirm email address" onblur="confirmEmail_customer()"/>
                        </li>
                        <li>
                            <input name="cust_company_name" id="cust_company_name" class="text-fild" type="text" placeholder="Company name (optional)" />
                        </li>
                        <li>
                            <input name="cust_phone_number" id="cust_phone_number" class="text-fild" type="text" placeholder="Phone number" />
                        </li>
                        <li class="filds">
                            <p>Address</p>
                            <input name="cust_apt_no" id="cust_apt_no" class="text-fild" type="text" placeholder="Apt no" />
                        </li>
                        <li>
                            <input name="cust_street_address" id="cust_street_address" class="text-fild" type="text" placeholder="Street address" />
                        </li>
                        <li>
                            <input name="cust_town" id="cust_town" class="text-fild" type="text" placeholder="Town" />
                        </li>                       
                        <li>
                            <input name="cust_country" id="cust_country" class="text-fild" type="text" placeholder="Country" />
                        </li>
                        <li>
                            <input class="submit" type="submit" value="Submit" />
                        </li>
                    </ul>
                </form>
                </div>
                <span id="email_status"></span>
            </div>  
        </div>
    </div>
  