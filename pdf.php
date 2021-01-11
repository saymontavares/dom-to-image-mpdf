<?php
    require_once __DIR__ . '/vendor/autoload.php';
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML('
        <html>
            <head>
                <title>Teste de PDF</title>
            </head>
            <body>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Tempore quasi eos magni accusantium nesciunt ea laudantium repellendus eaque ipsam,
                    eligendi magnam ipsum repudiandae voluptas veritatis, recusandae modi deleniti. At, provident.
                </p>
                <table style="width:50%" border="1">
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Age</th>
                    </tr>
                    <tr>
                        <td>Jill</td>
                        <td>Smith</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Eve</td>
                        <td>Jackson</td>
                        <td>94</td>
                    </tr>
                </table>
                <br>
                <img src="'.$_POST['img_1'].'" alt="">
            </body>
        </html>
    ');
    $mpdf->Output();
?>