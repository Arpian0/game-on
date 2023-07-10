<h1>Edit Topup Diamond</h1>

<form action="/primogem/update/<?= $primogem['id']; ?>" method="post">
    <label for="nick_gi">User ID:</label>
    <input type="text" name="nick_gi" id="nick_gi" value="<?= $primogem['nick_gi']; ?>" required>

    <label for="user_uid">UID:</label>
    <input type="text" name="user_uid" id="user_uid" value="<?= $primogem['user_uid']; ?>" required>

    <label for="amount">Amount:</label>
    <input type="number" name="amount" id="amount" value="<?= $primogem['amount']; ?>" required>

    <label for="status">Status:</label>
    <select name="status" id="status">
        <option value="Diproses">Diproses</option>
        <option value="Selesai">Selesai</option>
        <option value="Dibatalkan">Dibatalkan</option>
    </select>

    <button type="submit">Simpan</button>
</form>