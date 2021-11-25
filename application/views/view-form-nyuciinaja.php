<html>

<head>
    <title>TOKO NYUCIIN AJA</title>

    <style>
        .error1 {
            color: black;
        }
    </style>
</head>

<body>
    <center>
        <form action="<?= base_url('nyuciinaja/cetak'); ?>" method="post">
            <table bgcolor='pink' width="200px">
                <tr>
                    <th>
                        <h3>NYUCIIN AJA</h3>
                        <hr>
                    </th>
                </tr>

                <tr>
                    <td colspan="5"><input type="text" name="nama" id="nama" placeholder="Nama"></td>
                </tr>
                <tr>
                    <td class="error1"><b> <?= form_error('nama'); ?></b></td>
                </tr>
                <tr>
                    <td> <input type="text" name='no' id='no' placeholder="No HP"></td>
                </tr>
                <tr>
                    <td class="error1"><b> <?= form_error('no'); ?></b></td>
                </tr>
               
                <tr>
                    <td>
                        <select name="treatment" id="treatment">
                            <option value="">--PILIH TREATMENT SEPATU--</option>
                            <option value="Fast Cleaning">FAST CLEANING</option>
                            <option value="Deep Cleaning">DEEP CLEANING</option>
                            <option value="Unyellowing Cleaning">UNYELLOWING CLEANING</option>
                            <option value="Other Cleaning">OTHER CLEANING</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="error1"><b> <?= form_error('treatment'); ?></b></td>
                </tr> 
                <tr>
                    <td align="center" colspan="3">
                        <input type="submit" name="KONFIRMASI">
                        <input type="reset" name="BATAL">
                    </td>
                </tr>
            </table>
    </center>
</body>

</html>