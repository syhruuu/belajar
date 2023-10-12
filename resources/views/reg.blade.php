<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
        <h2>Buat Account Baru!</h2>

        <!-- <form action="/halaman yes.blade.php"> -->
            <label><b>First Name:</b></label><br>
            <input type="text" name="Name"><br><br>
            <label><b>Last Name:</b></label><br>
            <input type="text" name="Name"><br><br>
            <label><b>Gender:</b></label><br>
            <input type="radio">Male<br>
            <input type="radio">Female<br>
            <input type="radio">Other<br><br>

            <label><b>Nationaly:</b></label> <br><br>
            <select name="Country">
                <option value="Indonesia">Indonesia</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Singapura">Singapura</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Thailan">Thailan</option>
                <option value="Other">Other</option>
            </select>
            <br>
            <br>

            <label><b>Language Spoken:</b></label><br><br>
            <Input type="checkbox" name="skill">Indonesian</Input><br>
            <Input type="checkbox" name="skill">English</Input><br>
            <Input type="checkbox" name="skill">Other</Input><br><br>

            <label><b>Bio:</b></label><br><br>
            <textarea name="message" rows="10" cols="30"></textarea><br><br>

            <a href="yes"><button>Sign Up</button></a>
        </form>
</body>
</html>