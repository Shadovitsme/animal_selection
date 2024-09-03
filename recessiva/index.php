<!DOCTYPE html>
<html lang="en">

<head>
    <link type="text/css" rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- CSS -->

    <div>
        <table>
            <tr id='0'>
                <td>имя</td>
                <td>цвет</td>
                <td>кол-во пятен</td>
                <td>особенности</td>
            </tr>
        </table>
    </div>
    <br>
    <div>
        <form action="./db_connection.php" method="POST">
            <input name="name" id="name" type="text">
            <input name="color" id="color" type="text">
            <input name="spots" id="spots" type="text">
            <input name="features" id="features" type="text">
            <input type="submit" value="Add to DB">
        </form>
    </div>

</body>

<!-- scripts -->
<script defer src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script defer src="recessiva_try.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</html>