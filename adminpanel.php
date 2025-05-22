<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <style>
        body {
            background-color: #f1f1f1;
            font-family: Arial, sans-serif;
        }
        .container {
            margin: 50px auto;
            max-width: 500px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
        }
        .panel-heading {
            color: #333;
            padding: 10px;
            background-color: #fff;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }
        .panel-heading a {
            color: #333;
            text-decoration: none;
        }
        .panel-heading a:hover {
            color: #666;
        }
        .panel-link {
            display: block;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }
        .panel-link:last-child {
            border-bottom: none;
        }
        .panel-link a {
            color: #333;
            text-decoration: none;
            display: block;
            padding: 5px 0;
            margin-left: 20px;
        }
        .panel-link a:hover {
            color: #98b2c7;
        }
        .password-form {
            margin-top: 20px;
            text-align: center;
        }
        .password-input {
            padding: 5px;
            margin: 10px;
        }
        .password-submit {
            padding: 5px 10px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
    <script>
        function checkPassword() {
            var passwordInput = document.getElementById('password').value;
            var correctPassword = '12345';
            if (passwordInput === correctPassword) {
                window.location.href = 'index.html'; 
            } else {
                alert('Parolni xato kiritdingiz!'); 
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="panel-heading">
            <h2>Admin Panelga kirish</h2>
        </div>
        <div class="panel-body">
            <div class="password-form">
                <input type="password" id="password" class="password-input" placeholder="Kirish uchun Parol tering">
                <button class="password-submit" onclick="checkPassword()">Tekshirish</button>
            </div>
        </div>
    </div>
</body>
</html>
