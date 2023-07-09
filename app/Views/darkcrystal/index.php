<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
        border: 1px solid #ccc;
    }

    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    tbody tr:hover {
        background-color: #f9f9f9;
    }

    a {
        display: inline-block;
        margin-right: 5px;
        color: #333;
        text-decoration: none;
        padding: 5px 10px;
        border-radius: 3px;
    }

    a:hover {
        background-color: #333;
        color: #fff;
    }
</style>

<h1>Daftar Topup Diamond</h1>

<a href="/darkcrystal/create">Tambah Topup Diamond</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>UID</th>
            <th>Nickname</th>
            <th>Server</th>
            <th>Amount</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($darkcrystal as $dc) : ?>
            <tr>
                <td><?= $dc['id']; ?></td>
                <td><?= $dc['uid']; ?></td>
                <td><?= $dc['nickname']; ?></td>
                <td><?= $dc['server']; ?></td>
                <td><?= $dc['amount']; ?></td>
                <td><?= $dc['created_at']; ?></td>
                <td><?= $dc['updated_at']; ?></td>
                <td>
                    <a href="/darkcrystal/edit/<?= $dc['id']; ?>">Edit</a>
                    <a href="/darkcrystal/delete/<?= $dc['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus topup ini?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>