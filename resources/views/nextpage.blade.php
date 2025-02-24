<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nextpage</title>
    <style>
        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgb(255, 255, 255); 
            display: flex; 
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        #overlay img {
            max-width: 100%;
            max-height: 100%;
            opacity: 0;
            transform: scale(0.8); 
            animation: fadeInOut 1.5s ease-in-out forwards;
        }

        @keyframes fadeInOut {
            from {
                opacity: 0;
                transform: scale(.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>
</head>

<body>

    <div id="overlay">
        <img src="{{ asset('images/Avvanz.PNG') }}" alt="Image to fade out">
        </div>
    <h1>This is the Nextpage</h1>
    <p>hello</p>


    <script>
    setTimeout(function() {
        document.getElementById('overlay').style.opacity = 0;
    }, 1500);
</script>

</body>
</html>