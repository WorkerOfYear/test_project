<?php
echo <<<_END
<html>
    <head>
        <title>Form Test</title>
    </head>
    <body>
    <select name="veg" size="5" multiple="multiple">
    <option value="Горох">Горох</option>
    <option value="Фасоль">Фасоль</option>
    <option value="Морковь">Морковь</option>
    <option selected="selected" value="Капуста">Капуста</option>
    <option value="Брокколи">Брокколи</option>
    </select>
    <label>8.00-12.00<input type="radio" name="time" value="1"></label>
    <input type="image" name="submit" src="image.gif">
    </body>
</html>
_END;
