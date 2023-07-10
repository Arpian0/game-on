<style>
    .card {
        display: flex;
        padding: 50px;
        width: 900px;
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

<form class="card" action="/primogem/store" method="post">
    <div>
        <label for="nick_gi">Nickname:</label>
        <input type="text" name="nick_gi" id="nick_gi" required>
    </div>
    <div style="padding-left: 20px;">
        <label for="user_uid">UID:</label>
        <input type="text" name="user_uid" id="user_uid" placeholder="Contoh : 123XXXXXX" required>
    </div>

    <div style="padding-left: 20px;">
        <label for="amount">Amount:</label>
        <input type="number" name="amount" id="amount" required>
    </div>

    <div style="padding-left: 20px;">
        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="Diproses">Diproses</option>
            <option value="Selesai">Selesai</option>
            <option value="Dibatalkan">Dibatalkan</option>
        </select>
    </div>
    <div style="padding-left: 10px;">
        <button type="submit">Simpan</button>
    </div>
</form>