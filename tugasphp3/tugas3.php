<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai Mahasiswa</title>
    <link rel="stylesheet" href="styletugas3.css">
    <style>
        body {
            background-color: #666;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .frame {
            background-color: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0px 0px 50px rgba(0, 0, 0, 0.1);
            max-width: 80%;
            width: 100%;
        }
    </style>

</head>
<body>
<div class="frame">
    <h3 align="center">Daftar Nilai Mahasiswa</h3>
    <table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
            <th>Nilai</th>
            <th>Keterangan</th>
            <th>Grade</th>
            <th>Predikat</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $mahasiswa = [
            ["M.Asroful Anam", "11111", 85, "lulus", "A", "Memuaskan"],
            ["Aisyah Farmawati", "22222", 70, "lulus", "B", "Baik"],
            ["Budi", "33333", 60, "lulus", "C", "Cukup"],
            ["bobi", "44444", 55, "lulus", "D", "Kurang"],
            ["farhan", "55555", 40, "tidak lulus", "E", "Gagal"],
            ["Alfan ghiffari", "66666", 90, "lulus", "A", "Memuaskan"],
            ["Mahez Arya", "77777", 75, "lulus", "B", "Baik"],
            ["Epi", "88888", 65, "lulus", "C", "Cukup"],
            ["Indra", "99999", 50, "tidak lulus", "D", "Kurang"],
            ["zidan", "100000", 95, "lulus", "A", "Memuaskan"]
        ];

        $totalNilai = 0;
        $nilaiTertinggi = $mahasiswa[0][2]; 
        $nilaiTerendah = $mahasiswa[0][2];

        foreach ($mahasiswa as $key => $data) {
            echo "<tr>";
            echo "<td>".($key+1)."</td>";
            foreach ($data as $item) {
                echo "<td>$item</td>";
            }
            echo "</tr>";
           
            $totalNilai += $data[2];
            
            
            if ($data[2] > $nilaiTertinggi) {
                $nilaiTertinggi = $data[2];
            }
            
            
            if ($data[2] < $nilaiTerendah) {
                $nilaiTerendah = $data[2];
            }
        }
        ?>
    </tbody>
    <tfoot S>
        <tr class="tfoot-row">
            <td colspan="4">Nilai Tertinggi</td>
            <td colspan="3"><?php echo $nilaiTertinggi; ?></td>
        </tr>
        <tr class="tfoot-row">
            <td colspan="4">Nilai Terendah</td>
            <td colspan="3"><?php echo $nilaiTerendah; ?></td>
        </tr>
        <tr class="tfoot-row">
            <td colspan="4">Nilai Rata-rata</td>
            <td colspan="3"><?php echo $totalNilai / count($mahasiswa); ?></td>
        </tr>
        <tr class="tfoot-row">
            <td colspan="4">Jumlah Mahasiswa</td>
            <td colspan="3"><?php echo count($mahasiswa); ?></td>
        </tr>
        <tr class="tfoot-row">
            <td colspan="4">Jumlah Keseluruhan Nilai</td>
            <td colspan="3"><?php echo $totalNilai; ?></td>
        </tr>
    </tfoot>
</table>
    <footer align="center" class="footer">
        <p>&copy; 2024 - KEL 1 _ M.ASROFUL ANAM</p>
    </footer>
            </div>
</body>
</html>
