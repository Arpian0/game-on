<!-- mobile_legend.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Form Top Up Diamond Mobile Legends</title>
</head>

<body>
    <h1>Form Top Up Diamond Mobile Legends</h1>

    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required><br>

    <label for="server">Server:</label>
    <select name="server" id="server" required>
        <option value="1">Server 1</option>
        <option value="2">Server 2</option>
        <option value="3">Server 3</option>
    </select><br>

    <label for="amount">Jumlah Diamond:</label>
    <input type="number" name="amount" id="amount" min="1" required><br>

    <form action="<?php echo site_url('game/view_ml') ?>">
        <input type="submit" name="submit" value="Submit">
    </form>

</body>

</html>