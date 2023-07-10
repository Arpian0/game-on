<h1>Edit Topup Diamond</h1>

<form action="/diamonds/update/<?= $diamond['id']; ?>" method="post">
    <label for="nickname">User ID:</label>
    <input type="text" name="nickname" id="nickname" value="<?= $diamond['nickname']; ?>" required>

    <label for="user_id">User ID:</label>
    <input type="text" name="user_id" id="user_id" value="<?= $diamond['user_id']; ?>" required>

    <label for="amount">Amount:</label>
    <input type="number" name="amount" id="amount" value="<?= $diamond['amount']; ?>" required>

    <label for="status">Status:</label>
    <select name="status" id="status">
        <option value="Diproses">Diproses</option>
        <option value="Selesai">Selesai</option>
        <option value="Dibatalkan">Dibatalkan</option>
    </select>

    <button type="submit">Simpan</button>
</form>