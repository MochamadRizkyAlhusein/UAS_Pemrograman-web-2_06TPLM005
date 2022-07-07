    <div class="kita">
        <h1>Selamat datang di BAZNAS <?= $data['nama']; ?></h1>

        <select name="" id="">
            <option value="">Zakat Penghasilan</option>
            <option value="">Zakat Maal</option>
            <option value="">Zakat Fitrah</option>
        </select>
        <table border="1px solid" cellspacing="0" cellpadding="3px">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Zakat</th>
                    <th>Nominal</th>
                    <th>Nama Lengkap</th>
                    <th>No HP</th>
                    <th>Email</th>
                    <th>Nama Bank</th>
                    <th>Nomor Rekening</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['amal'] as $zakat) : ?>
                    <?php for ($i = 2; $i <= 10; $i++) ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $zakat['jenis_zakat']; ?></td>
                        <td><?= $zakat['nominal']; ?></td>
                        <td><?= $zakat['nama_lengkap']; ?></td>
                        <td><?= $zakat['nomor_hp']; ?></td>
                        <td><?= $zakat['email']; ?></td>
                        <td><?= $zakat['nama_bank']; ?></td>
                        <td><?= $zakat['no_rek']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>