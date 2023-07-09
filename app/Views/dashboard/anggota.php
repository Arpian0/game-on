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

<?php include('header.php'); ?>

<div class="container">
    <div class="content" id="content">
        <h2>User</h2>
        <p>Ini adalah halaman user</p>
        <form action="<?= base_url('') ?>">
            <div>
                <table>
                    <tr>
                        <th>ID User</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach ($admin as $min) : ?>
                        <tr>
                            <td><?php echo $min['id']; ?></td>
                            <td><?php echo $min['nama']; ?></td>
                            <td><?php echo $min['email']; ?></td>
                            <td class="content">
                                <form method="post" action="<?php echo base_url('signup/delete/' . $min['id']); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna akun ini?')">
                                    <button type=" submit">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </form>
    </div>
</div>