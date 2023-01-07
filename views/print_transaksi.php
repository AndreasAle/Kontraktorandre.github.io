<html>
    <head>
        
    </head>

    <body>
        <table>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>No Resi</th>
                <th>Waktu</th>
                <th>Pemesan</th>
                <th>Total Harga</th>
                <th>Status Bayar</th>
                <th>Status</th>
            </tr>

            <?php
            $no=1;
            foreach ($pesanan as $pesanan): ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $pesanan->code?></td>
                <td><?php echo $pesanan->date_time?></td>

            </tr>

        <?php endforeach; ?>
        </table>

        <script type="text/javascript">
                window.print();
        </script>
    </body>
</html>