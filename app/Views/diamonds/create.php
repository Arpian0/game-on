<style>
    .card {
        display: flex;
        padding: 50px;
        width: 600px;
        height: 30px;
        border-radius: 10px;
        background-color: wheat;
        text-align: center;
    }

    h1 {
        padding-left: 10px;
    }
</style>

<h1>Tambah Topup Diamond</h1>

<form class="card" action="/diamonds/store" method="post">
    <div>
        <label for="user_id">User ID:</label>
        <input type="text" name="user_id" id="user_id" placeholder="Contoh : 123XXXX(XXXX)" required>
    </div>

    <div style="padding-left: 20px;">
        <label for="amount">Amount:</label>
        <input type="number" name="amount" id="amount" required>
    </div>
    <div style="padding-left: 10px;">
        <button type="submit">Simpan</button>
    </div>
</form>