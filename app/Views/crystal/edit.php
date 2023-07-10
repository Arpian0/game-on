<h1>Edit Topup Diamond</h1>

<form action="/crystal/update/<?= $crystal['id']; ?>" method="post">
    <label for="uid">UID:</label>
    <input type="text" name="uid" id="uid" value="<?= $crystal['uid']; ?>" required>

    <label for="nickname">Nickname:</label>
    <input type="text" name="nickname" id="nickname" value="<?= $crystal['nickname']; ?>" required>

    <label for="server">Server:</label>
    <input type="text" name="server" id="server" value="<?= $crystal['server']; ?>" required>

    <label for="amount">Amount:</label>
    <input type="number" name="amount" id="amount" value="<?= $crystal['amount']; ?>" required>

    <label for="status">Status:</label>
    <select name="status" id="status">
        <option value="Diproses">Diproses</option>
        <option value="Selesai">Selesai</option>
        <option value="Dibatalkan">Dibatalkan</option>
    </select>

    <button type="submit">Simpan</button>
</form>