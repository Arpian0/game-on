<h1>Edit Topup Diamond</h1>

<form action="/stellar/update/<?= $stellar['id']; ?>" method="post">
    <label for="nickname">Nickname:</label>
    <input type="text" name="nickname" id="nickname" value="<?= $stellar['nickname']; ?>" required>

    <label for="uid">UID:</label>
    <input type="text" name="uid" id="uid" value="<?= $stellar['uid']; ?>" required>

    <label for="server">Server:</label>
    <input type="text" name="server" id="server" value="<?= $stellar['server']; ?>" required>

    <label for="amount">Amount:</label>
    <input type="number" name="amount" id="amount" value="<?= $stellar['amount']; ?>" required>

    <label for="status">Status:</label>
    <select name="status" id="status">
        <option value="Diproses">Diproses</option>
        <option value="Selesai">Selesai</option>
        <option value="Dibatalkan">Dibatalkan</option>
    </select>

    <button type="submit">Simpan</button>
</form>