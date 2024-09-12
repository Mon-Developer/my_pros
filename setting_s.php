<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U&Jin - Settings</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header, footer {
            background-color: #444;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        header h1, header h2 {
            margin: 0;
            font-family: Algerian, sans-serif;
        }

        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .back-button a {
            padding: 10px 20px;
            background-color: #ccc;
            color: #333;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
            display: inline-block;
            font-size: 1em;
        }

        .back-button a:hover {
            background-color: #bbb;
        }

        .back-button a::before {
            content: '\2190 '; /* Left arrow HTML entity */
            font-size: 1.2em;
        }

        .container {
            flex: 1;
            width: 100%;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .settings-section {
            margin-bottom: 40px;
        }

        .settings-section h2 {
            margin-bottom: 20px;
            font-size: 1.5em;
            color: #444;
            text-align: center;
        }

        .settings-options {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-top: 20px;
        }

        .settings-option {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .settings-option:hover {
            background-color: #e0e0e0;
        }

        .settings-option a {
            color: #007bff;
            text-decoration: none;
            font-size: 1.2em;
            display: block;
        }

        .settings-option a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<header>
    <div class="back-button">
        <a href="#" onclick="history.go(-1);">Back</a>
    </div>
    <h1>U&Jin</h1>
    <h2>Tensei Diary In Mirrors</h2>
</header>

<div class="container">
    <section class="settings-section">
        <h2>Settings</h2>
        <div class="settings-options">
            <div class="settings-option">
                <a href="#">Log In</a>
            </div>
            <div class="settings-option">
                <a href="#">Inbox</a>
            </div>
            <div class="settings-option">
                <a href="#">Language</a>
            </div>
            <div class="settings-option">
                <a href="#">Delete Account</a>
            </div>
            <div class="settings-option">
                <a href="#">Profile Info</a>
                </div>
            <div class="settings-option">
                <a href="#">Reset Password</a>
            </div>
        </div>
        <div class="settings-option">
            <a href="#">Current Activities</a>
        </div>
        </div>
    </section>
</div>

<footer>
    <p>&copy; 2024 U&Jin. All rights reserved.</p>
</footer>

</body>
</html>