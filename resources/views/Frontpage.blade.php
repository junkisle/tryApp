<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontpage</title>
    <style>
        /* Full-screen image overlay */
        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8); /* Semi-transparent background */
            display: none; /* Hidden by default */
            justify-content: center;
            align-items: center;
            z-index: 1000; /* Ensure it's on top */
        }

        /* Image Animation */
        #overlay img {
            max-width: 100%;
            max-height: 100%;
            opacity: 0;
            transform: scale(0.8); /* Start smaller */
            animation: fadeInZoom 1s ease-in-out forwards;
        }

        /* Fade-in and zoom effect */
        @keyframes fadeInZoom {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Add fade-out animation for content */
        .fade-out {
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        /* Style for buttons */
        .animateButton {
            background: none;
            border: none;
            padding: 0;
            cursor: pointer;
            color: inherit;
            font: inherit;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>nextpage pala loading</h1>
        <h1>Page 1</h1>
        <button class="animateButton"><a href="/nextpage" style="text-decoration: none; color: inherit;">Go to Next Page</a></button>
    </div>
    <div class="content">
        <h1>Page 2</h1>
        <button class="animateButton"><a href="/Page2" style="text-decoration: none; color: inherit;">Go to Page 2</a></button>
    </div>
    <div class="content">
        <h1>Page 3</h1>
        <button class="animateButton"><a href="/Page3" style="text-decoration: none; color: inherit;">Go to Page 3</a></button>
    </div>

    <!-- Full-screen image overlay -->
    <div id="overlay">
        <img src="{{ asset('images/Avvanz.PNG') }}" alt="Transition Image">
    </div>

    <!--script src="{{ asset('js/animation.js') }}"></script>
</body>
</html>