<!DOCTYPE html>
<html>

<head>
    <title>Top Up Game</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <style>
        .material-symbols-outlined {
            font-size: 90px;
        }

        .container {
            display: flex;
        }

        .sidebar {
            width: 20%;
            background-color: #f1f1f1;
        }

        .content {
            flex-grow: 1;
            padding: 2%;
        }

        header {
            border-radius: 2px;
            background-color: whitesmoke;
            color: black;
            padding: 1%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        header h1 {
            margin: 0;
            padding: 0;
            text-align: center;
            flex-grow: 1;
            font-size: 4vw;
        }

        header .material-icons {
            font-size: 3vw;
            margin-right: 2%;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
            }

            .content {
                margin-top: 2%;
            }

            header {
                flex-direction: column;
                align-items: flex-start;
            }

            header .material-icons {
                margin-right: 0;
                margin-bottom: 2%;
            }
        }

        .text {
            color: #f1f1f1;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            color: orange;
        }

        ul li {
            border-radius: 5px;
            display: inline-block;
        }

        ul li a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        ul li a:hover {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>

<body>
    <header>
        <span class="material-symbols-outlined">
            stadia_controller
        </span>
        <h1>Top Up Game</h1>
        <ul>
            <li><a href="dashboard">Dashboard</a></li>
            <li><a href="admin">Admin</a></li>
            <li><a href="anggota">User</a></li>
            <li><a href="topup">Top Up Game</a></li>
        </ul>
        <div style="padding-left: 350px;">
            <button style="background-color: red;">
                <a class="text" href="logout">Logout</a>
            </button>
        </div>
    </header>

</body>

</html>