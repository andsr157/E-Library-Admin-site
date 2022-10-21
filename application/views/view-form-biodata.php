<html>
    <head>
        <title>Form Input Data Siswa</title>
    </head>
    <body>
        <form action="<?= base_url('siswa/cetak');?>" method="POST">
        <center>
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Mata Kuliah
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                    <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama">
                        <?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>NIS</th>
                        <td>:</td>
                        <td>
                            <input type="text" name="nis" id="nis">
                            <?= form_error('nis','<small class="text-danger pl-3">','</small>'); ?>
                        </td>
                </tr>
                <tr>
                    <th>KELAS</th>
                        <td>:</td>
                        <td>
                            <input type="text" name="kelas" id="kelas">
                            <?= form_error('kelas','<small class="text-danger pl-3">','</small>'); ?>
                        </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                        <td>:</td>
                        <td>
                            <input type="date" name="tgl_lahir" id="tgl_lahir">
                            <?= form_error('tgl_lahir','<small class="text-danger pl-3">','</small>'); ?>
                        </td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                        <td>:</td>
                        <td>
                            <input type="text" name="lahir" id="lahir">
                            <?= form_error('lahir','<small class="text-danger pl-3">','</small>'); ?>
                        </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                        <td>:</td>
                        <td>
                            <input type="text" name="alamat" id="alamat">
                            <?= form_error('alamat','<small class="text-danger pl-3">','</small>'); ?>
                        </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                        <td>:</td>
                        <td>
                            <input type="radio" id="laki" name="kelamin" value="Laki-laki">
                            <label for="laki">Laki-laki</label><br>
                        </td>
                        <td>
                            <input type="radio" id="perempuan" name="kelamin" value="Perempuan">
                            <label for="perempuan">Perempuan</label><br>
                        </td>
                </tr>
                
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="sks" id="sks">
                            <option value="">Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
            </center>
        </form>
    </body>
</html>