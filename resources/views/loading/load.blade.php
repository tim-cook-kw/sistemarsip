<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loading Animation</title>
    <style type="text/css">
        body{
            background: #34495e;
        }

        .square{
            width: 5rem;
            height: 5rem;
            background: transparent;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation: expand 3s infinite;
        }

        .square-1{
            animation-delay: 0.5s;
        }

        .square-2{
            animation-delay: 1s;
        }

        .square-3{
            animation-delay: 1.5s;
        }

        @keyframes expands{
            0%{
                transform: scale(0.1) rotate(45deg);
                border: 0.3rem #fff solid;
            }
            50%{
                border: 0.3rem #e67e22 solid;
            }
            100%{
                transform: scale(1) rotate(270deg);
                border: 0.3rem transparent solid;
            }
        }

    </style>
</head>
<body>
    <div class="square square-1"></div>
    <div class="square square-2"></div>
    <div class="square square-3"></div>
</body>
</html>