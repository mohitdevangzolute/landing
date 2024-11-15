<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }
        .main-container {
            padding: 20px;
            background-color: white;
        }
        .heading {
            font-size: 40px;
            font-weight: bold;
        }
        .highlight {
            color: #007bff;
        }
        .sebi-badge {
            font-size: 14px;
            color: #28a745;
            font-weight: bold;
        }
        .info-stats {
            font-size: 1.25rem;
            color: #007bff;
            font-weight: bold;
        }
        .info-box {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f1f9ff;
            font-size: 14px;
            height: 250px;
            border-top-left-radius: 14% 16%;
        }
        .form-box {
            padding: 30px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        .submit-btn {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }
        .submit-btn:hover {
            background-color: #0056b3;
        }
        .disclaimer {
            font-size: 12px;
            color: #888;
            background-color: #F9F9F9;
            padding: 10px;
            border: 1px solid #EAEAEA;
            border-radius: 8px;
            border-top-left-radius: 8% 0%;
        }
    </style>
</head>
<body>
    <div class="container main-container">
        <div class="row">
            <!-- Left Content -->
            <div class="col-md-8">
                <img src="https://d9hhrg4mnvzow.cloudfront.net/ad.ambientresearch.co/klse-stocks-stocks/f4a9f916-04ff0f35-screenshot-2022-05-11-113620-100000000000000000001o_105p01q05p01d00000601o.jpg" alt="StreetGains Logo" class="mb-3">
                <h1 class="heading">KLSE<br>Live <span class="highlight">Stocks</span> On<br>Your Finger Tips</h1>
                <p class="text-secondary"><span class="highlight">We Believe in Empowering Our Customers </span><br>With Proper Training and Timely Guidance.</p>
                
                <div class="row text-center mb-4">
                    <div class="col-md-4">
                        <h4 class="info-stats">53,068,700. MYR</h4>
                        <p>Total Gains in Y23</p>
                    </div>
                    <div class="col-md-4">
                        <h4 class="info-stats">30,000+ Lacs</h4>
                        <p>Our Subscribers</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="info-box">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="https://trades.streetgains.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2FProfitImage.b96f74c5.png&w=640&q=75" width="50">
                                </div>
                                <div class="col-md-10">
                                    <h6 class="text-center"><b>Daily KLSE Stocks Researched by Professionals</b></h6>
                                    <ul>
                                        <li>Trade Directly from Calls, SMSs and<br>Whatsapp Notifications</li>
                                        <li>Dedicated risk management</li>
                                        <li>Focused Market analysis</li>
                                        <li>Limited trades for maximum gains</li>
                                        <li>Online research support</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="info-box">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="https://trades.streetgains.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2FMask%20group.33c2867b.png&w=640&q=75" width="50">
                                </div>
                                <div class="col-md-10">
                                    <h6 class="text-center"><b>Researched by Professionals</b></h6>
                                    <ul>
                                        <li>Dedicated risk management</li>
                                        <li>Focused market analysis</li>
                                        <li>Limited trades for maximum gains</li>
                                        <li>Online research support</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Form -->
            <div class="col-md-4">
                <div class="form-box">
                    <h4 class="text-center mb-4">Get <span class="highlight">Free 3</span> Profitable Calls Now</h4>
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone No.</label>
                            <input type="tel" class="form-control" id="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email ID</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="service">Service Interested</label>
                            <select class="form-control" id="service" required>
                                <option value="">- Select Service -</option>
                                <option value="option1">Service 1</option>
                                <option value="option2">Service 2</option>
                                <option value="option3">Service 3</option>
                            </select>
                        </div>
                        <!-- <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="terms" required>
                            <label class="form-check-label" for="terms">I'm not a robot</label>
                        </div> -->
                        <button type="submit" class="btn submit-btn btn-block">Get Free Calls</button>
                        <div class="form-check text-center mt-2">
                            <input type="checkbox" class="form-check-input" id="termsConditions" required>
                            <label class="form-check-label" for="termsConditions">Terms & Conditions*</label>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-12 mt-2">
                <p class="disclaimer">
                    <b>Disclaimer:</b> All data and reports provided at Ambient Research are only information services for customers and are not individualized recommendations to buy or sell securities, nor
                    offers to buy or sell securities. under any circumstances the subscription amount paid to Ambient Research are not refundable (Please refer to our Sales and no Refunds policy for more details).
                </p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
