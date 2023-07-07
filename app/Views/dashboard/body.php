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
        background-color: white;
        border-radius: 100px;
        color: black;
        border: 5px solid #000;
        padding: 10px;
        display: inline-block;
        font-size: 2vw;
    }

    p {
        color: wheat;
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

    body {
        background-image: url('<?php echo base_url('path/background/Fv2nKR5aYAsDVCf.jpeg') ?>');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<body class="body">
    <div class="content" id="content" style="text-align: center;">
        <h2>Dashboard</h2>
        <p>Ini adalah halaman dashboard</p>
    </div>
</body>