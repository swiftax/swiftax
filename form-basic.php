<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body>
<form action="#" method="POST" name="my_form">
    <fieldset>
        <legend>Important Information</legend>
        <label for="username">Username</label>
        <input type="text" name="username"><br/>
        <label for="password">Password</label>        
        <input type="password" name="password"><br/>
        <input type="radio" name="gender" value="male">Male<br>
        <input type="radio" name="gender" value="male">Female<br>    
        <input type="checkbox" name="foods" value="Banana">Bananas<br>
        <input type="checkbox" name="foods" value="Grapes">Grapes<br>
        <input type="checkbox" name="foods" value="Strawberries">Strawberries<br>
    </fieldset>
    <textarea name="essay" rows="15" cols="60" name="message"></textarea><br>
    <fieldset>
        <legend>Optional Items</legend>
        <label for="continent" id="continent">Where are you from?</label>
        <select name="continent">
            <optgroup label="Americas">
            <option>North America</option>
            <option>South America</option>           
            </optgroup>
            <optgroup label="Eurasia">
            <option>Europe</option>
            <option>Asia</option>  
            </optgroup>
            <option>Africa</option>        
        </select>
    </fieldset>
    <input type="submit" value="submit">  
</form>

</body>
</html>