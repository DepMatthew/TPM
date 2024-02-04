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
            background: url('astronot.png') no-repeat;
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

        .form .input-box{
            width: 100%;
            margin-top: 20px;
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

        .input-box input:hover,
        .input-box input:focus {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .form .column{
            display: flex;
            column-gap: 20px;
            align-items: center;
        }

        .column .input-box {
            flex: 1; 
        }

        .column .symbol {
            font-size: 50px;
            color: white;
            margin-top: 50px;
        }

        .file-box {
            width: 100%;
            margin-top: 20px;
            display: flex;
            justify-content: center; 
            align-items: center; 
        }

        .file-box label {
            color: white;
            height: 250px;
            width: 700px; 
            display: flex;
            flex-direction: column;
            align-items: center; 
            justify-content: center; 
            border-radius: 6px;
            border: 3px dashed white;
            cursor: pointer; 
        }

        .form .file-box input {
            display: none;
        }

        label:hover {
            color: black;
            border: 3px dashed black;
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
            margin-top: 60px;
            margin-bottom: 20px;
        }

        .form button:hover{
            background-color: rgb(88, 56, 250);
        }

        .input-box input::placeholder {
            color: white; 
        }

        @media screen and (max-width: 500px) {
            .form .column{
                flex-wrap: wrap;
            }
        }

    </style>
</head>
<body>
    <section class="container">
        <h1>Leader</h1>
        <h1 style="margin-bottom: 50px;">Registeration</h1>
        <form action="#" class="form">
            <div class="input-box">
                <label for="">Full Name</label>
                <input type="text" placeholder="Enter full name" required>
            </div>

            <div class="input-box">
                <label for="">Email</label>
                <input type="text" placeholder="Enter email" requried>
            </div>

            <div class="input-box">
                <label for="">Whatsapp Number</label>
                <input type="text" placeholder="Enter whatsapp number" required>
            </div>

            <div class="input-box">
                <label for="">Line ID</label>
                <input type="text" placeholder="Enter line id" required>
            </div>

            <div class="input-box">
                <label for="">Github ID</label>
                <input type="text" placeholder="Enter github id" required>
            </div>

            <div class="input-box">
                <label for="">Birth Place</label>
                <input type="text" placeholder="Enter birth place" required>
            </div>

            <div class="column">
                <div class="input-box">
                    <label for="">Date</label>
                    <input type="text" placeholder="Enter date" required>
                </div>

                <span class="symbol">/</span>

                <div class="input-box">
                    <label for="">Month</label>
                    <input type="text" placeholder="Enter month" required>
                </div>

                <span class="symbol">/</span>

                <div class="input-box">
                    <label for="">Year</label>
                    <input type="text" placeholder="Enter year" required>
                </div>
            </div>

            <div class="file-box">
                <label for="cvFileUpload">
                    Upload CV
                    <span class="file-description" style="font-size: 13px; margin-top: 5px; color: gray;">Format file pdf, jpg, jpeg dan png</span>
                </label>
                <input type="file" id="cvFileUpload" name="cvFileUpload" accept=".pdf, .doc, .docx">
            </div>
            
            <div class="file-box">
                <label for="flazzCardFileUpload">
                    Upload Flazz Card (Binusian)
                    <span class="file-description" style="font-size: 13px; margin-top: 5px; color: gray;">Format file pdf, jpg, jpeg dan png</span>
                </label>
                <input type="file" id="flazzCardFileUpload" name="flazzCardFileUpload" accept=".pdf, .doc, .docx">
            </div>
            
            <div class="file-box">
                <label for="idCardFileUpload">
                    Upload ID Card (Non-Binusian)
                    <span class="file-description" style="font-size: 13px; margin-top: 5px; color: gray;">Format file pdf, jpg, jpeg dan png</span>
                </label>
                <input type="file" id="idCardFileUpload" name="idCardFileUpload" accept=".pdf, .doc, .docx">
            </div>
            
            <button>Submit</button>
        </form>

        <script>
            function validateFormAndSubmit() {
                var fullName = document.getElementById('fullName').value;
                var email = document.getElementById('email').value;
                var whatsapp = document.getElementById('whatsapp').value;
        
                var date = document.getElementById('date').value;
                var month = document.getElementById('month').value;
                var year = document.getElementById('year').value;
        
                if (fullName === '' || email === '' || whatsapp === '' || date === '' || month === '' || year === '') {
                    alert('Please fill in all fields.');
                    return false;
                }
        
                window.location.href = "homepage.html";
                return true;
            }
        </script>
        



    </section>
</body>
</html>