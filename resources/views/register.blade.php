<!DOCTYPE html>
<html>
    <head>
    <title> Sign Up Form </title>
    <meta charset="UTF-8">
    </head>

    <body>
        <div>
            <h1>Buat Account Baru!</h1>
            <h2>Sign Up Form</h2>
        </div>
        <!--membuat form-->
        <form action="/welcome" method="post">
        @csrf
            <label for="first_name">First Name:</label>
            <br><br>
            <input type="text" placeholder="" value="" id="first_name">
            <br><br>
            <label for="last_name">Last Name:</label>
            <br><br>
            <input type="text" placeholder="" value="" id="last_name">
            <br><br>
                
            <label>Gender:</label><br><br>
            <input type="radio" name="gender"value="0">Male<br>
            <input type="radio" name="gender"value="1">Female<br>
            <input type="radio" name="gender"value="1">Other<br><br>
            
            <label>Nationality:</label><br><br>
                <select>
                    <option value="indonesia">Indonesia</option>
                    <option value="malaysia">Malaysia</option>
                    <option value="singapore">Singapore</option>
                </select>

                <br><br>
                <abel>Language Spoken:</label><br>
                <input type="checkbox" name="language_spoken" value="0">Indonesia<br>
                <input type="checkbox" name="language_spoken" value="1">English<br>
                <input type="checkbox" name="language_spoken" value="2">Other
                <br><br>
                <label for="bio">Bio:</label><br><br>
                <textarea cols="50" rows="7" id="bio"></textarea>
                <br>
                
                <input type="submit" value="Sign Up">
                
            
        </form>
        <br>
    </body>
</html> 