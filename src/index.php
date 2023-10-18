<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Message Form</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
    }

    .floating-contact-form {
      background-color: white;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
      width: 80%;
      max-width: 400px;
      text-align: center;
    }

    .floating-contact-form h2 {
      color: #003049;
      font-size: 24px;
      margin-bottom: 20px;
    }

    .floating-contact-form .form-container {
      margin-top: 20px;
    }

    .floating-contact-form .form-container textarea,
    .floating-contact-form .form-container input[type="text"] {
      width: calc(100% - 20px);
      padding: 14px;
      font-size: 16px;
      border: 1px solid rgba(0, 47, 73, 0.3);
      border-radius: 8px;
      color: #003049;
      margin-bottom: 20px;
      display: block;
      box-sizing: border-box;
    }

    .floating-contact-form .form-container .field-container {
      position: relative;
      margin-bottom: 20px;
    }

    .floating-contact-form .form-container .field-container label {
      position: absolute;
      top: 10px;
      left: 10px;
      color: #003049;
      font-size: 16px;
      background: #fff;
      padding: 0 5px;
      transition: all 0.3s ease;
      pointer-events: none;
    }

    .floating-contact-form .form-container .field-container textarea:focus+label,
    .floating-contact-form .form-container .field-container input[type="text"]:focus+label {
      top: -10px;
      font-size: 13px;
      background: #fff;
      padding: 0 2px;
    }

    .floating-contact-form .form-container .field-container i {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      left: 5px;
      color: rgba(0, 55, 85, 0.8);
    }

    .floating-contact-form .form-container input[type="submit"] {
      border: none;
      background: #003049;
      color: #fff;
      padding: 16px 0;
      width: 100%;
      border-radius: 24px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: all 500ms ease;
      display: block;
      text-align: center;
    }

    .floating-contact-form .form-container input[type="submit"]:hover {
      background: #00659b;
    }
  </style>
</head>

<body>
  <div class="floating-contact-form">
    <h2>Message Form</h2>
    <form action="connect.php" method="post" class="form-container">
      <div class="field-container">
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
        <label for="message">Message</label>
      </div>
      <input type="submit" value="Send" />
    </form>

    <?php
    if (isset($_GET['error'])) {
      echo "<p style='color: red;'>Error: " . htmlspecialchars($_GET['error']) . "</p>";
    }
    ?>
  </div>
</body>

</html>