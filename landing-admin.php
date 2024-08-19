<?php
    include "header-admin.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            background-image: url('img/landing-bg.jpg'); 
            background-size: cover; 
            background-repeat: no-repeat; 
            background-position: center center; 
        }

        .header {
            background-color: rgba(0, 123, 255, 0.98); 
            color: white;
            padding: 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 600;
        }
        #landingCon {
            flex: 1;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff; 
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .dashboard {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .card {
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            flex: 1 1 calc(33.333% - 20px);
            box-sizing: border-box;
        }
        .card h2 {
            font-size: 20px;
            color: #007bff; 
            margin-bottom: 10px;
        }
        .card p {
            font-size: 14px;
            color: #555555; 
            margin-bottom: 10px;
        }
        .product-guidelines {
            flex: 1 1 100%;
        }
        .product-guidelines h2 {
            font-size: 20px;
            color: #007bff; 
            margin-bottom: 10px;
        }
        .product-guidelines p {
            font-size: 14px;
            color: #555555; 
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Welcome to Admin Control Deck!</h1>
    </div>
    <div class="container" id="landingCon">
        <div class="dashboard">
            <div class="product-guidelines card">
                <h2>Product Guidelines</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet eros eu lectus ultrices facilisis. Curabitur eu quam vehicula, consequat urna at, pharetra eros. Integer sit amet quam vehicula, elementum sem id, pulvinar ex. Nam commodo erat sit amet magna ultricies tincidunt. Quisque vitae turpis vel justo consequat aliquam non et odio.</p>
                <p>Morbi tincidunt massa sit amet ex ornare, et laoreet nunc sodales. Vivamus venenatis nibh a justo ullamcorper, sit amet scelerisque mi scelerisque. Aliquam erat volutpat. Etiam non ligula auctor, luctus est at, facilisis arcu. In hac habitasse platea dictumst.</p>
            </div>
            <div class="card">
                <h2>Inventory Summary</h2>
                <p>Number of Products: 150</p>
                <p>Low Stock Products: 5</p>
                <p>Products Sold Today: 20</p>
            </div>
            <div class="card">
                <h2>Upcoming Events</h2>
                <p>Annual Inventory Review: September 25, 2024</p>
                <p>New Product Training: October 5, 2024</p>
                <p>Stock Audit: October 20, 2024</p>
                <p>Inventory System Upgrade: November 15, 2024</p>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?> 
</body>
</html>
