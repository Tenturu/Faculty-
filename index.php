<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh; 
            background: url('https://scontent-atl3-1.xx.fbcdn.net/v/t1.15752-9/462642634_1187679528997395_4370695348860754869_n.png?_nc_cat=107&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeEli7lXihoiKee9rsxehgodx9AH7Jdq4-7H0Afsl2rj7gAzqc989U33eO6p6289OFfBA1Bx6KTKOE3hSsOTAKRc&_nc_ohc=epWfik2Mx98Q7kNvgFso9kY&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent-atl3-1.xx&oh=03_Q7cD1QHXK4wBDQMYxn8V_PO6bK_qFKZPy8a-L5hHOggtPkrNHA&oe=675FCAB6') no-repeat center center fixed;
            background-size: cover;
        }

        .content {
            flex: 1;
        }

        .top-right-logos {
            position: absolute;
            top: 20px;
            right: 20px;
            display: flex;
            gap: 10px;
        }

        .top-right-logos img {
            width: 30px;
            height: 30px;
        }

        .contact-us {
            position: fixed;
            bottom: -60px;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            transition: bottom 0.3s ease;
        }

        .contact-us a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .contact-us a:hover {
            text-decoration: underline;
        }

        body:hover .contact-us {
            bottom: 20px;
        }

   
        .footer {
            position: fixed;
            bottom: -150px;
            left: 0;
            width: 100%;
            background-color: #e0f0ff;
            color: #333;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.2);
            transition: bottom 0.3s ease;
        }

        .footer .footer-content {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .footer .footer-item {
            flex: 1;
            text-align: center;
        }

        .footer .footer-item img {
            width: 40px;
            height: 40px;
            margin-bottom: 10px;
        }

        .footer p {
            margin: 5px 0;
        }

        body:hover .footer {
            bottom: 0;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .social-icons img {
            width: 25px;
            height: 25px;
        }

    </style>
</head>
<body>

    <div class="top-right-logos">
        <img src="https://www.umak.edu.ph/wp-content/uploads/2024/05/OSHO-LOGO--180x180.png" alt="Logo 1">
        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/b/b2/University_of_Makati_logo.png/175px-University_of_Makati_logo.png" alt="Logo 2">
        <img src="https://www.umak.edu.ph/wp-content/uploads/2023/11/cite-logo-300x300.png" alt="Logo 3">
        <img src="https://www.umak.edu.ph/wp-content/uploads/2022/10/Higher-School-ng-Umak-logo-1-300x300.png" alt="Logo 4">
    </div>

    <div class="contact-us">
        <a href="mailto:ohso@umak.edu.ph">ohso@umak.edu.ph</a>
    </div>

    <div class="content"></div>

    <div class="footer">
        <div class="footer-content">
            <div class="footer-item">
                <img src="https://cdn-icons-png.flaticon.com/512/684/684908.png" alt="Location">
                <p>Office Location Temporary Basement Level, Administration Building, UMak Campus</p>
            </div>
            <div class="footer-item">
                <img src="https://cdn-icons-png.flaticon.com/512/724/724664.png" alt="Phone">
                <p>OHSO Direct Line: (02) 8882-0535
            </div>
            <div class="footer-item">
            <div class="footer-item" style="display: flex; flex-direction: column; justify-content: space-between; height: 120px;">
   
            <div style="display: flex; flex-direction: column; align-items: center; gap: 8px;">
 
            <div style="display: flex; align-items: center; justify-content: center; gap: 8px;">
    <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png" alt="Email" width="20" height="20">
    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=ohso@umak.edu.ph" target="_blank">Email: ohso@umak.edu.ph</a>
</div>

<div style="display: flex; align-items: center; justify-content: center; gap: 8px;">
    <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" width="20" height="20">
    <a href="https://www.facebook.com/profile.php?id=100076383932855" target="_blank">Facebook: UMak OHSO</a>
</div>
</div>
</div>
    </div>
</body>
</html>
