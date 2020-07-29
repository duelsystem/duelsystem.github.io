<!DOCTYPE html> 
<html lang="en">
    <head>
        <title> SBStats </title>

        <style type="text/css">
        
        p1 {
            display: none;
            position: fixed;

            text-align: center;

            font-size: 20px;
            font-family: Arial, sans-serif;
            color: #1B1408;
            
            opacity: 0.8;
        }
        
        input[type="text"]#fname{
            font-size: 24px;
            font-family: Arial, sans-serif;

            width: 500px;
            padding: 10px;

            background-color: rgba(198, 149, 64, 1);

            opacity: 0;

            border-radius: 20px;
            border-color: #8a682c;
            border-width: 5px;

            outline: none;

            z-index: 10
        }

        ::placeholder{
            color: #1B1408;
            opacity: 0.7;
        }

        .background-wrap {
            position: fixed;
            z-index: -1000;
            width: 100%;
            height: 100%;
            overflow: hidden;
            top: 0;
            left: 0;
        }
        
        #video-bg-elem {
            position: absolute;
            top: 0;
            left: 0;

            min-height: 100%;
            min-width: 100%;
        }

        .center {
            margin: 0;
            position: absolute;
            top: 30%;
            left: 50%;

            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .button{
            font-size: 16px;
            font-family: Arial, sans-serif;
            color: #1B1408;

            cursor: pointer;

            width: 300px;
            height: 40px;

            margin: 0;
            position: absolute;
            top: 42.5%;
            left: 50%;

            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);

            background-color: rgba(198, 149, 64, 1);
            border-radius: 12.5px;
            border-width: 3px;
            border-color: #8a682c;
            opacity: 0;
            outline: none;
        }

        #usernotfound{
            font-size: 16px;
            font-family: Arial, sans-serif;
            color: #1B1408;

            position: absolute;
            top: 33.5%;
            left: 50%;

            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        </style>


    </head>

    <body>

        <div class="background-wrap">
            <video id="video-bg-elem" preload="auto" autoplay="true" loop="loop" muted="muted">
                <source src="Northmarch-Fever Ridge Skillpoint.mp4" type="video/mp4">
                Video not supported
            </video>    
        </div>

        <p id="usernotfound" style='display: none'>No user of that name found</p>

        <?php include 'connect.php';?>
        
        <div class="inputandbutton">
            <div class="center">
                <input type="text" autocomplete="off" placeholder="Enter Discord name (e.g. Shoppi#0368)" id="fname" name="fname">
            </div>

            <div>
                <button type="button" class="button" id="databutton" onclick="noUserFound()">Get profile</button>
            </div>
        </div>

        <script type="text/javascript">
            window.onload = function exampleFunction(){
                var inpbox = document.getElementById("fname");
                var but = document.getElementById("databutton");
                var op = 0
                var op2 = -0.05
                var id = setInterval(frame, 5);
                function frame(){
                    if (inpbox.style.opacity >= 0.8 && but.style.opacity >= 0.8) {
                        clearInterval(id);
                    } else {
                        op += 0.0055;
                        op2 += 0.0055;
                        inpbox.style.opacity = op;
                        but.style.opacity = op2;
                    }
                }
            }
        </script>

        <script type="text/javascript">
            document.getElementById("databutton").addEventListener("keyup", function(event){
                if (event.keycode === 13){
                    event.preventDefault();

                    document.getElementById("databutton").click();
                }
            });
        </script>

        <script>
            function noUserFound(){
                var text = document.getElementById("usernotfound");
                if (text.style.display == "none"){
                    text.style.display = "block";
                }
            }
        </script>
    </body>
</html>