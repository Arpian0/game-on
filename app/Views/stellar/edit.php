<h1>Edit Topup Diamond</h1>

<form action="/stellar/update/<?= $sl['id']; ?>" method="post">
    <label for="nickname">Nickname:</label>
    <input type="text" name="nickname" id="nickname" value="<?= $sl['nickname']; ?>" required>

    <label for="uid">UID:</label>
    <input type="text" name="uid" id="uid" value="<?= $sl['uid']; ?>" required>

    <label for="server">Server:</label>
    <input type="text" name="server" id="server" value="<?= $sl['server']; ?>" required>

    <label for="amount">Amount:</label>
    <input type="number" name="amount" id="amount" value="<?= $sl['amount']; ?>" required>

    <button type="submit">Simpan</button>
</form>