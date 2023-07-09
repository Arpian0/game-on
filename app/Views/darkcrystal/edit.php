<h1>Edit Topup Diamond</h1>

<form action="/darkcrystal/update/<?= $dc['id']; ?>" method="post">
    <label for="uid">UID:</label>
    <input type="text" name="uid" id="uid" value="<?= $dc['uid']; ?>" required>

    <label for="nickname">Nickname:</label>
    <input type="text" name="nickname" id="nickname" value="<?= $dc['nickname']; ?>" required>

    <label for="server">Server:</label>
    <input type="text" name="server" id="server" value="<?= $dc['server']; ?>" required>

    <label for="amount">Amount:</label>
    <input type="number" name="amount" id="amount" value="<?= $dc['amount']; ?>" required>

    <button type="submit">Simpan</button>
</form>