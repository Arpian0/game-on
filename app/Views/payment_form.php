<!DOCTYPE html>
<html>

<head>
    <title>Pembayaran</title>
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        padding: 20px;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="date"] {
        width: 100%;
        padding: 8px;
        border-radius: 3px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    button[type="submit"] {
        padding: 10px 20px;
        background-color: #4caf50;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }

    .error-message {
        color: #ff0000;
        margin-bottom: 10px;
    }

    .error-list {
        margin-top: 0;
        padding-left: 20px;
    }
</style>

<body>
    <?php if (session()->has('errors')) : ?>
        <div>
            <ul>
                <?php foreach (session('errors') as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="post" action="/payment/process">
        <div>
            <label for="customer_name">Nama Panjang:</label>
            <input type="text" id="customer_name" name="customer_name" value="<?= old('customer_name') ?>" placeholder="Sesuaikan dengan nama di bank mu" required>
        </div>
        <div>
            <label for="bank_name">Bank:</label>
            <input type="text" id="bank_name" name="bank_name" value="<?= old('bank_name') ?>" required>
        </div>
        <div>
            <label for="account_number">Nomor Rekening:</label>
            <input type="text" id="account_number" name="account_number" value="<?= old('account_number') ?>" required>
        </div>
        <div>
            <label for="amount">Jumlah Pembayaran:</label>
            <input type="text" id="amount" name="amount" value="<?= old('amount') ?>" required>
        </div>
        <div style="width: 200px;">
            <label for="payment_date">Tanggal Pembayaran:</label>
            <input type="date" id="payment_date" name="payment_date" value="<?= old('payment_date') ?>" required>
        </div>
        <div style="padding-top: 10px;">
            <button type="submit">Kirim Pembayaran</button>
        </div>
    </form>
</body>

</html>