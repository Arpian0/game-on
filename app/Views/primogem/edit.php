<h1>Edit Topup Diamond</h1>

<form action="/primogem/update/<?= $primo['id']; ?>" method="post">
    <label for="nick_gi">User ID:</label>
    <input type="text" name="nick_gi" id="nick_gi" value="<?= $primo['nick_gi']; ?>" required>

    <label for="user_uid">UID:</label>
    <input type="text" name="user_uid" id="user_uid" value="<?= $primo['user_uid']; ?>" required>

    <label for="amount">Amount:</label>
    <input type="number" name="amount" id="amount" value="<?= $primo['amount']; ?>" required>

    <button type="submit">Simpan</button>
</form>