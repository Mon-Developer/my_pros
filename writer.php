<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U&Jin - Upload Novel/Book Information</title>
    <style>
        * {
            box-sizing: border-box;
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
            content: '\2190 ';
            /* Left arrow HTML entity */
            font-size: 1.2em;
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
            content: '\2190 ';
            /* Left arrow HTML entity */
            font-size: 1.2em;
        }
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        
        header,
        footer {
            background-color: #444;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
        
        header h1 {
            margin: 0;
            font-family: Algerian, sans-serif;
        }
        
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        
        .form-group input[type="text"],
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        .form-group input[type="file"] {
            padding: 5px;
        }
        
        .form-group textarea {
            height: 100px;
            resize: vertical;
        }
        
        .form-group button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
        }
        
        .form-group button:hover {
            background-color: #0056b3;
        }
        
        .form-group .options {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        
        .form-group .options label {
            flex: 1;
        }
    </style>
</head>

<body>

    <header>
        <div class="back-button">
            <a href="index10.html" onclick="history.go(-1);">Back</a>
        </div>
        <h1>U&Jin</h1>
    </header>

    <div class="container">
        <h2>Upload Novel/Book Information</h2>
        <form>
            <div class="form-group">
                <label for="photo">Upload Photo</label>
                <input type="file" id="photo" name="photo">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="abbreviation">Abbreviation (0/15)</label>
                <input type="text" id="abbreviation" name="abbreviation" maxlength="15" required>
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select id="type" name="type" required>
                <option value="book">Book</option>
                <option value="novel">Novel</option>
                <option value="fanfic">Fan-Fic</option>
            </select>
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <select id="genre" name="genre" required>
                <option value="action">Action</option>
                <option value="adventure">Adventure</option>
                <option value="fantasy">Fantasy</option>
                <option value="games">Games</option>
                <option value="history">History</option>
                <option value="magic">Magic</option>
                <option value="sci-fi">Sci-Fi</option>
                <option value="sports">Sports</option>
                <option value="school-life">School-Life</option>
                <option value="realistic">Realistic</option>
                <option value="war">War</option>
                <option value="fanfic">Fanfic</option>
            </select>
            </div>
            <div class="form-group">
                <label for="length">Length</label>
                <select id="length" name="length" required>
                <option value="100">100</option>
                <option value="1000">1000</option>
                <option value="10000">10000</option>
            </select>
            </div>
            <div class="form-group">
                <label for="language">Language</label>
                <select id="language" name="language" required>
                <option value="english">English</option>
                <option value="hindi">Hindi</option>
                <option value="bengali">Bengali</option>
                <option value="marathi">Marathi</option>
                <option value="telugu">Telugu</option>
                <option value="tamil">Tamil</option>
                <option value="gujarati">Gujarati</option>
                <option value="urdu">Urdu</option>
                <option value="kannada">Kannada</option>
                <option value="odia">Odia</option>
                <option value="malayalam">Malayalam</option>
                <option value="punjabi">Punjabi</option>
                <option value="assamese">Assamese</option>
            </select>
            </div>
            <div class="form-group">
                <label for="writing-notice">Writing Notice**</label>
                <select id="writing-notice" name="writing-notice" required>
                <option value="general-audience">General Audience</option>
                <option value="parental-guidance">Parental Guidance Suggested</option>
                <option value="none-under-18">None Under 18</option>
                <option value="restricted">Restricted</option>
            </select>
            </div>
            <div class="form-group">
                <label for="synopsis">Synopsis</label>
                <textarea id="synopsis" name="synopsis" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Create</button>
            </div>
        </form>
    </div>

    <footer>
        <p>&copy; 2024 U&Jin. All rights reserved.</p>
    </footer>

</body>

</html>