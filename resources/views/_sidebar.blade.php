<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Routine Creation</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/app.css">
</head>

<body class="bg-gray-200 align-baseline">

    <div class="sidebar-navigation hidde-sm hidden-xs">
        <div class="logo">
            <a href="/">Routine<em>Creation</em></a>
        </div>
        <nav>
            <ul>
                <li>
                    <a href="/routine">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Home
                    </a>
                </li>
                <li>
                    <a href="/day" onclick="day()">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Day
                    </a>
                </li>
                <li>
                    <a href="/slot">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Slot
                    </a>
                </li>
                <li>
                    <a href="/room">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Room
                    </a>
                </li>
                <li>
                    <a href="/teacher">
                        <span class="rect"></span>
                        <span class="circle"></span>
                        Teacher
                    </a>
                </li>
            </ul>
        </nav>
    </div>

</body>

</html>