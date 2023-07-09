<style>
    #containter .content {
        display: flex;
        flex-direction: row;
        max-width: 100%;
        padding: 0 2%;
        margin: 0 auto;
        box-sizing: border-box;
    }

    h2 {
        font-size: 2vw;
        text-align: center;
    }

    p {
        font-size: 2vw;
        text-align: justify;
    }

    @media (max-width: 768px) {
        h2 {
            font-size: 4vw;
        }

        p {
            font-size: 3vw;
        }
    }

    ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    li {
        background-color: orange;
        display: inline-block;
        margin-top: 10px;
        margin-right: 10px;
        border: 1px solid #ccc;
        padding: 5px;
    }

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
        color: white;
        background-color: #090580;
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

<?php include('header.php'); ?>

<div class="container">
    <div class="content" id="content">
        <h2>Admin</h2>
        <p>Ini adalah halaman admin</p>

        <h4 style="color:green;">Daftar Pembeli Mobile Legend</h4>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nickname</th>
                    <th>User ID</th>
                    <th>Amount</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($diamonds as $diamond) : ?>
                    <tr>
                        <td><?= $diamond['id']; ?></td>
                        <td><?= $diamond['nickname']; ?></td>
                        <td><?= $diamond['user_id']; ?></td>
                        <td><?= $diamond['amount']; ?></td>
                        <td><?= $diamond['created_at']; ?></td>
                        <td><?= $diamond['updated_at']; ?></td>
                        <td>
                            <a href="/diamonds/edit/<?= $diamond['id']; ?>">Edit</a>
                            <a href="/diamonds/delete/<?= $diamond['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus topup ini?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h4 style="color:green;">Daftar Pembeli Genshin Impact</h4>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nickname</th>
                    <th>UID</th>
                    <th>Amount</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($primogem as $primo) : ?>
                    <tr>
                        <td><?= $primo['id']; ?></td>
                        <td><?= $primo['nick_gi']; ?></td>
                        <td><?= $primo['user_uid']; ?></td>
                        <td><?= $primo['amount']; ?></td>
                        <td><?= $primo['created_at']; ?></td>
                        <td><?= $primo['updated_at']; ?></td>
                        <td>
                            <a href="/primogem/edit/<?= $primo['id']; ?>">Edit</a>
                            <a href="/primogem/delete/<?= $primo['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus topup ini?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h4 style="color:green;">Daftar Pembeli Honkai Star Rail</h4>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nickname</th>
                    <th>UID</th>
                    <th>Server</th>
                    <th>Amount</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stellar as $sl) : ?>
                    <tr>
                        <td><?= $sl['id']; ?></td>
                        <td><?= $sl['nickname']; ?></td>
                        <td><?= $sl['uid']; ?></td>
                        <td><?= $sl['server']; ?></td>
                        <td><?= $sl['amount']; ?></td>
                        <td><?= $sl['created_at']; ?></td>
                        <td><?= $sl['updated_at']; ?></td>
                        <td>
                            <a href="/stellar/edit/<?= $sl['id']; ?>">Edit</a>
                            <a href="/stellar/delete/<?= $sl['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus topup ini?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h4 style="color:green;">Daftar Pembeli Honkai Impact 3rd</h4>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nickname</th>
                    <th>UID</th>
                    <th>Server</th>
                    <th>Amount</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($crystal as $cs) : ?>
                    <tr>
                        <td><?= $cs['id']; ?></td>
                        <td><?= $cs['nickname']; ?></td>
                        <td><?= $cs['uid']; ?></td>
                        <td><?= $cs['server']; ?></td>
                        <td><?= $cs['amount']; ?></td>
                        <td><?= $cs['created_at']; ?></td>
                        <td><?= $cs['updated_at']; ?></td>
                        <td>
                            <a href="/crystal/edit/<?= $cs['id']; ?>">Edit</a>
                            <a href="/crystal/delete/<?= $cs['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus topup ini?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h4 style="color:green;">Daftar Pembeli Tower Of Fantasy</h4>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nickname</th>
                    <th>UID</th>
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
                        <td><?= $dc['nickname']; ?></td>
                        <td><?= $dc['uid']; ?></td>
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

        <h4 style="color:green;">Daftar Pembeli Nikke Goddess Of Victory</h4>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nickname</th>
                    <th>UID</th>
                    <th>Server</th>
                    <th>Amount</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($gem as $gm) : ?>
                    <tr>
                        <td><?= $gm['id']; ?></td>
                        <td><?= $gm['nickname']; ?></td>
                        <td><?= $gm['uid']; ?></td>
                        <td><?= $gm['server']; ?></td>
                        <td><?= $gm['amount']; ?></td>
                        <td><?= $gm['created_at']; ?></td>
                        <td><?= $gm['updated_at']; ?></td>
                        <td>
                            <a href="/gem/edit/<?= $gm['id']; ?>">Edit</a>
                            <a href="/gem/delete/<?= $gm['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus topup ini?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h4 style="color:green;">Daftar Pembeli Valorant</h4>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nickname</th>
                    <th>UID</th>
                    <th>Server</th>
                    <th>Amount</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($valorant as $valo) : ?>
                    <tr>
                        <td><?= $valo['id']; ?></td>
                        <td><?= $valo['nickname']; ?></td>
                        <td><?= $valo['uid']; ?></td>
                        <td><?= $valo['server']; ?></td>
                        <td><?= $valo['amount']; ?></td>
                        <td><?= $valo['created_at']; ?></td>
                        <td><?= $valo['updated_at']; ?></td>
                        <td>
                            <a href="/valorant/edit/<?= $valo['id']; ?>">Edit</a>
                            <a href="/valorant/delete/<?= $valo['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus topup ini?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h4 style="color:green;">Daftar Pembeli Apex Legends</h4>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nickname</th>
                    <th>UID</th>
                    <th>Server</th>
                    <th>Amount</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($apexcoin as $coin) : ?>
                    <tr>
                        <td><?= $coin['id']; ?></td>
                        <td><?= $coin['nickname']; ?></td>
                        <td><?= $coin['uid']; ?></td>
                        <td><?= $coin['server']; ?></td>
                        <td><?= $coin['amount']; ?></td>
                        <td><?= $coin['created_at']; ?></td>
                        <td><?= $coin['updated_at']; ?></td>
                        <td>
                            <a href="/apexcoin/edit/<?= $coin['id']; ?>">Edit</a>
                            <a href="/apexcoin/delete/<?= $coin['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus topup ini?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>