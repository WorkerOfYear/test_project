<?php
if (isset($_POST['name'])) $name = $_POST['name'];
else $name = "(Не введене)";
echo <<<_END
<html>
    <head>
        <title>Form Test</title>
    </head>
    <body>
    Вас зовут: $name<br>
    <form method="post", action="formset.php">
        Как вас зовут?
        <input type="text" name="name">
        <input type="submit">
    </form>
    </body>
</html>
_END;

