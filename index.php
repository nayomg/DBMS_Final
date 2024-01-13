<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="donoStyle.css">
    <title>Document</title>
</head>

<body>


    <div class="wrapper">
        <div class="linker">
        <a style="text-decoration: none" href="topDonors.php">Click Here to see the Top Donors This Year!</a>
            
        </div>
        <form action="formhandler.inc.php" method="POST">
            <h2>Donation Form</h2>
            <h4>Contact Information</h4>

            <div class="input-group">
                <br>
                <div class="input-box1">
                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName" name="firstName">
                </div>
                <div class="input-box1">
                    <label for="lastName">Last Name</label>
                    <input type="text" id="lastName" name="lastName">
                </div>
            </div>
            <div class="input-group">
                <div class="input-box1">
                    <label for="email">Email</label>
                    <br>
                    <input required type="email" id="email" name="email">
                </div>
                <div class="input-box4">
                    <label for="phoneNum">Phone Number</label>
                    <br>
                    <input required type="text" id="phoneNum" name="phoneNum">
                </div>
            </div>
            <br>
            <div class="input-group">
                <div class="input-box1">
                    <label id="anon" for="anonymous">Please check the box if you would like to be an anonymous
                        donor</label>
                    <input type="checkbox" id="anon" name="anon" value="1">
                </div>
            </div>
            <h4>Address</h4>
            <div class="addPar">
                <div class="input-group">
                    <div class="input-box1">
                        <label for="street">Street</label>
                        <br>
                        <input type="text" id="street" name="street">
                    </div>
                    <div class="input-box1">
                        <label for="city">City</label>
                        <br>
                        <input type="text" id="city" name="city">
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box1">
                        <label for="stateA">State</label>
                        <br>
                        <input type="text" id="stateA" name="stateA">
                    </div>

                    <div class="input-box1">
                        <label for="zip">Zip Code</label>
                        <br>
                        <input type="text" id="zip" name="zip">
                    </div>
                </div>
            </div>
            <h4>Check all that apply</h4>
            <div class="set12">
                <div class="child">
                    <label for="gradSen">Graduating Seniors</label>
                    <input type="checkbox" id="gradSen" name="gradSen" value="1">
                    <br>
                    <label for="alum">Alumni</label>
                    <input type="checkbox" id="alum" name="alum" value="1">
                    <br>
                    <label for="parents">Parents</label>
                    <input type="checkbox" id="parents" name="parents" value="1">
                </div>
                <div class="child">
                    <label for="Faculty">Faculty</label>
                    <input type="checkbox" id="Faculty" name="Faculty" value="1">
                    <br>
                    <label for="admin">Administrators</label>
                    <input type="checkbox" id="admin" name="admin" value="1">
                    <br>

                    <label for=" Corporation">Corporation</label>
                    <input type="checkbox" id=" Corporation" name="Corporation" value="1">

                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <br>
                    <label id="gradYear" for="gradYear">Graduation Year (If Applicable)</label>
                    <input type="text" id="gradYear" name="gradYear">
                </div>
            </div>
            <h4>Your Pledge</h4>
            <div class="pledgeP">
                <div class="input-group">
                    <div class="input-box2">
                        <label for="number">Amount</label>
                        <br>
                        <input required type="number" id="amount" name="amount">
                    </div>
                    <div class="input-box2">
                        <label for="pledgeDate">Pledge Date</label>
                        <br>
                        <input required type="date" id="pledgeDate" name="pledgeDate">
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box2">
                        <label for="Payment Method">Payment Method</label>
                        <br>
                        <select type="text" id="Payment Method" name="Payment_Method">
                            <option value="">-----------------------------</option>
                            <option value="Credit Card">Credit Card</option>
                            <option value="Cash">Cash</option>
                            <option value="Check">Check</option>
                        </select>
                    </div>
                    <div class="input-box2">
                        <label for="Payment Plan">Payment Plan</label>
                        <br>
                        <select type="text" id="Payment Plan" name="Payment_Plan">
                            <option value="">-----------------------</option>
                            <option value="1">1</option>
                            <option value="3">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>
                </div>
                <div class="credC">
                    <h4>Credit Card Information</h4>

                    <div class="input-group">
                        <div class="input-box">
                            <label for="ccName">Name on Credit Card</label>
                            <br>
                            <input type="text" id="ccName" name="ccName">
                        </div>
                        <div class="input-boxC">
                            <label for="ccNum">Credit Card Number</label>
                            <br>
                            <input type="text" id="ccNum" name="ccNum">
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="input-box1">
                            <label for="expire">Expiration Date</label>
                            <br>
                            <input type="text" id="expire" name="expire">
                        </div>
                        <div class="input-box1">
                            <label for="cvv">CVV</label>
                            <br>
                            <input type="text" id="cvv" name="cvv">
                        </div>
                    </div>
                </div>
                <br><br>
                <button type="submit" id="submit">SUBMIT</button>

                

            </div>
        </form>
    </div>
</body>
</html>