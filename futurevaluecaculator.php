<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>future value caculator</title>
    <style>
        form{
            width: 400px;
            border: 1px solid #ccc;
            margin: auto;
        }
        h2{
            text-align: center;
            color: darkslateblue;
        }
    </style>
</head>
<body>
    <form method="post" action="display.php">
    <table>
        <h2>Future Value Caculator</h2>
        <tr>
            <td>Inventemen Amouse:</td>
            <td>
                <input type="text" name="txt"/>
            </td>
        </tr>
        <tr>
            <td>Year interest Rate:</td>
            <td>
                <input type="text" name="txt2"/>
            </td>
        </tr>
        <tr>
            <td>Number of Year:</td>
            <td>
                <input type="text" name="txt3"/>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="Caculate"/>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>