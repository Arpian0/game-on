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

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    button {
        padding: 6px 12px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
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
</style>

<?php include('header.php'); ?>

<div class="container">
    <div class="content" id="content">
        <h2>Top Up Game</h2>
        <p style="font-size:larger;">Hanya di Website Ini Kalian Bisa Dapatkan Harga Termurah</p>
        <form action="" style="text-align: center;">
            <div>
                <ul>
                    <li style="background-color: white;">
                        <a href="diamonds/create">
                            <img src="<?php echo base_url('path/ke/Logo-Mobile-Legends.png'); ?>" alt="image" width="300" height="150">
                        </a>
                    </li>
                    <li style="background-color: white;">
                        <a href="primogem/create">
                            <img src="<?php echo base_url('path/ke/Genshin_Impact_logo.png'); ?>" alt="image" width="300" height="150">
                        </a>
                    </li>
                    <li style="background-color: white;">
                        <a href="stellar/create">
                            <img src="<?php echo base_url('path/ke/Honkai_Star_Rail.png'); ?>" alt="image" width="300" height="150">
                        </a>
                    </li>
                    <li style="background-color: white;">
                        <a href="crystal/create">
                            <img src="<?php echo base_url('path/ke/Honkai_Impact_3rd_logo.png'); ?>" alt="image" width="300" height="150">
                        </a>
                    </li>
                    <li style="background-color: white;">
                        <a href="darkcrystal/create">
                            <img src="<?php echo base_url('path/ke/tower-of-fantasy-logo.png'); ?>" alt="image" width="300" height="150">
                        </a>
                    </li>
                    <li style="background-color: white;">
                        <a href="gem/create">
                            <img src="<?php echo base_url('path/ke/nikke-gov.jpg'); ?>" alt="image" width="300" height="150">
                        </a>
                    </li>
                    <li style="background-color: white;">
                        <a href="valorant/create">
                            <img src="<?php echo base_url('path/ke/valorant-logo.png'); ?>" alt="image" width="300" height="150">
                        </a>
                    </li>
                    <li style="background-color: white;">
                        <a href="apexcoin/create">
                            <img src="<?php echo base_url('path/ke/apex-legends.png'); ?>" alt="image" width="300" height="150">
                        </a>
                    </li>
                </ul>
            </div>
        </form>
        <form action="<?= base_url('image') ?>"><button>Top Up Game</button></form>
    </div>
</div>