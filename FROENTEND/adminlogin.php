<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login page</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'poppins', sans-serif;
      background-color: #f5f5f5;
    }

    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .content {
      width: 80%;
      max-width: 500px;
      text-align: center;
      border: 1px solid #adff2f;
      background-color: #DCF9D26E;
      padding: 30px;
      border-radius: 30px;
    }

    img {
      width: 100%;
      height: auto;
      margin-bottom: 20px;
    }

    h1 {
      margin-top: 20px;
      color: #058217;
    }

    .label {
      margin-bottom: 20px;
      font-size: 18px;
      font-weight: bold;
      color: green;
    }

    input {
      padding: 10px;
      width: 100%;
      margin-bottom: 15px;
      border-radius: 20px;
      border: 2px solid gray;
    }

    button {
      padding: 10px 40px;
      background-color: #1A7703;
      color: white;
      border-radius: 20px;
      border: none;
      margin-top: 20px;
      cursor: pointer;
    }

    input:focus {
      outline: none;
      border: 2px solid green;
    }

    p {
      font-size: 14px;
      margin-top: 10px;
    }

    @media screen and (max-width: 768px) {
      .content {
        padding: 20px;
      }
    }

    @media screen and (max-width: 480px) {
      h1 {
        font-size: 24px;
      }
      .label {
        font-size: 16px;
      }
      input,
      button {
        padding: 8px 20px;
        font-size: 14px;
      }
    }
  </style>
</head>

<body>
  
  <form action="adminlogin1.php" method="post" target="_self">
    <div class="container">
     
      <div class="content">
        <h1>LOGIN</h1>
        <div class="label">
          <label>Enter Username:</label>
          <input type="text" id="mn" placeholder="Enter your Username" name="user" required><br><br>
          <label>Enter Password:</label>
          <input type="password" id="mn" placeholder="Enter your Password" name="pass" required>
        </div>
        <button type="submit">Login</button>
      
      </div>
    </div>
  </form>
</body>

</html>
