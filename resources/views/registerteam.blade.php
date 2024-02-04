<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background:url('{{ asset('Asset/astronot.png') }}') no-repeat;
            background-size: cover;
            background-position: center;
        }

        .container{
            position: relative;
            max-width: 700px;
            width: 100%;
            padding: 25px;
            border-radius: 20px;
            backdrop-filter: blur(15px);
            background-color: rgba(255, 255, 255, 0.1); 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); 
        }

        .container h1 {
            font-size: 55px;
            font-weight: bold;
            text-align: center;
            background-image: linear-gradient(to right, #36D9A8, #4CC1D0);
            -webkit-background-clip: text;
            color: transparent;
            letter-spacing: 5px;
        }

        .container .form{
            margin-top: 30px;
        }

        .form .input-box {
            width: 100%;
            margin-top: 20px;
            margin-bottom: 30px; 
        }

        .input-box label{
            color: white;
        }

        .form .input-box input {
            position: relative;
            height: 50px;
            width: 100%;
            outline: none;
            font-size: 1rem;
            color: white;
            margin-top: 8px;
            border: 1px solid white;
            border-radius: 6px;
            padding: 0 15px;
            background-color: transparent;
            transition: background-color 0.3s ease;
        }


        .form button{
            height: 50px;
            width: 215px;
            color: #fff;
            font-size: 1rem;
            border: none;
            margin-top: 30px;
            cursor: pointer;
            border-radius: 30px;
            font-weight: 400;
            background-color: rgb(130, 106, 251);
            align-items: center;
            justify-content: center;
            display: flex; 
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .form button:hover{
            background-color: rgb(88, 56, 250);
        }

        .input-box input::placeholder {
            color: white; 
        }

        .check_box {
            display: flex;
            align-items: center;
        }

        .check_box input[type="radio"] {
            display: none;
        }

        .check_box label {
            font-weight: 500;
            color: white;
            cursor: pointer;
            margin-right: 20px;
            align-items: center;
            display: flex;
        }

        .check_box label:before {
            content: "";
            width: 20px; 
            height: 20px; 
            border-radius: 50%;
            background-color: transparent;
            margin-right: 5px;
            cursor: pointer;
            border: 2px solid white;
        }

        .check_box input[type="radio"]:checked + label::before {
            content: '\2713';
            font-size: 16px; 
            line-height: 20px; 
            text-align: center;
            color: #fff; 
            background-color: #7F2EAA; ;
            border: transparent;
        }

        .check_box label {
            margin-top: 20px;
            margin-left: 140px;
            margin-right: 30px;
            margin-bottom: 30px;
        }

        .input-box input:hover,
        .input-box input:focus {
            background-color: rgba(255, 255, 255, 0.2); 
            transition: background-color 0.3s ease;
        }
    </style>
</head>
<body>
    <section class="container">
        <h1>Team</h1>
        <h1 style="margin-bottom: 40px;">Registeration</h1>
        <a href="{{route('team.leader')}}">register leader</a>
        <form action="#" class="form" onsubmit="return validateFormAndSubmit()">
            <div class="input-box">
                <label for="">Team Name</label>
                <input type="text" placeholder="Enter team name" required>
            </div>

            <div class="input-box">
                <label for="">Password</label>
                <input type="text" placeholder="Enter password" requried>
            </div>

            <div class="input-box">
                <label for="">Confirm Password</label>
                <input type="text" placeholder="Enter to confirm password" required>
            </div>

            <div class="check_box">
                <input type="radio" id="binusian" name="userType" />
                <label for="binusian">Binusian</label>

                <input type="radio" id="non-binusian" name="userType" />
                <label for="non-binusian">Non-Binusian</label>
            </div>

            <button type="button" onclick="submitForm()">Next</button>
        </form>

        <script>
            function validateFormAndSubmit() {
                var teamName = document.getElementById('teamName').value;
                var password = document.getElementById('password').value;
                var confirmPassword = document.getElementById('confirmPassword').value;
        
                if (teamName === '' || password === '' || confirmPassword === '') {
                    alert('Please fill in all fields.');
                    return false;
                }
        
                if (password !== confirmPassword) {
                    alert('Passwords do not match.');
                    return false;
                }
        
                window.location.href = "5Leader_Register.html";
                return true;
            }
        </script>
        
    </section>
</body>
</html>