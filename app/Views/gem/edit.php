<h1>Edit Topup Diamond</h1>

<form action="/gem/update/<?= $gm['id']; ?>" method="post">
    <label for="uid">UID:</label>
    <input type="text" name="uid" id="uid" value="<?= $gm['uid']; ?>" required>

    <label for="nickname">Nickname:</label>
    <input type="text" name="nickname" id="nickname" value="<?= $gm['nickname']; ?>" required>

    <label for="server">Server:</label>
    <input type="text" name="server" id="server" value="<?= $gm['server']; ?>" required>

    <label for="amount">Amount:</label>
    <input type="number" name="amount" id="amount" value="<?= $gm['amount']; ?>" required>

    <button type="submit">Simpan</button>
</form>