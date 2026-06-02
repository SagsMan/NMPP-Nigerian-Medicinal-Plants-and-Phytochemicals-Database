<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('https://source.unsplash.com/1600x900/?nature,abstract') no-repeat center center/cover;
            text-align: center;
            color: white;
            font-family:verdana;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
        }
        .content {
            position: relative;
            z-index: 2;
        }
        h1 {
            font-size: 50px;
            margin-bottom: 10px;
        }
        p {
            font-size: 20px;
            margin-bottom: 20px;
        }
        .timer {
            font-size: 30px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="overlay"></div>
    <div class="content">
        <h1>Coming Soon</h1>
        <p>This Page  is under construction. Stay tuned!</p>
        <div class="timer" id="countdown"></div>
    </div>

    <script>
        function countdownTimer() {
            const targetDate = new Date("Dec 31, 2025 23:59:59").getTime();
            const timer = setInterval(() => {
                const now = new Date().getTime();
                const difference = targetDate - now;

                if (difference < 0) {
                    clearInterval(timer);
                    document.getElementById("countdown").innerHTML = "We're live!";
                    return;
                }

                const days = Math.floor(difference / (1000 * 60 * 60 * 24));
                const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((difference % (1000 * 60)) / 1000);
                
                document.getElementById("countdown").innerHTML = 
                    `${days}d ${hours}h ${minutes}m ${seconds}s`;
            }, 1000);
        }
        countdownTimer();
    </script>
</body>
</html>