<?php
$c = $f = '';

if (isset($_POST['f'])) $f = sanitizeString($_POST['f']);
if (isset($_POST['c'])) $c = sanitizeString($_POST['c']);

if ($f != '')
{
    $c = intval((5/9) * ($f - 32));
    $out = "$f °f равно $c °c";
}
 elseif($c != '')
{
    $f = intval((9/5) * $c + 32);
    $out = "$c °c равно $f °f";
}
else $out = "";

echo <<<_END
<html>
    <head>
        <title>Программа перевода температуры</title>
    </head>
    <body>
        <pre>
            Введите температуру по Фаренгейту и Цельсию и 
            нажмите кнопку Перевести
            <b>$out</b>
            <form method="post" action="convert.php">
                По Фаренгейту <input type="text" name="f" size="7">
                По Цельсию <input type="text" name="c" size="7" required='required'>
                <input type="submit" value="Перевести">
            </form>
            <input type='url' name='site' list='links'>
            <label>
                <datalist id='links'>
                <option label='Google' value='http://google.com'>
                <option label='Yahoo!' value='http://yahoo.com'>
                <option label='Bing' value='http://bing.com'>
                <option label='Ask' value='http://Ask.com'>
                </datalist>
                <input type='time' name='alarm' value='07:00'>
            </label>
        </pre>
    </body>
</html>
_END;

function sanitizeString($var)
{
    $var = stripslashes($var);
    $var = strip_tags($var);
    $var = htmlentities($var);
    return $var;
}