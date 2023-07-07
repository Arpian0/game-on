<h1>Edit Topup Diamond</h1>

<form action="/diamonds/update/<?= $diamond['id']; ?>" method="post">
    <label for="user_id">User ID:</label>
    <input type="text" name="user_id" id="user_id" value="<?= $diamond['user_id']; ?>" required>

    <label for="amount">Amount:</label>
    <input type="number" name="amount" id="amount" value="<?= $diamond['amount']; ?>" required>

    <button type="submit">Simpan</button>
</form>