<?php
session_start();
require_once('config.php');
require_once ('dompdf/autoload.inc.php');
use Dompdf\Dompdf;
use Sabberworm\CSS\Property\Charset;

class Pdf extends Dompdf{
    public function __construct()
    {
        parent::__construct();
    }
}
?>
<?php 
    if(isset($_POST)){
        $film_name = $_POST['film_name'];
        $mtime = $_POST['mtime'];
        $mdate = $_POST['mdate'];
        $cost = $_POST['cost'];
        $seats = $_POST['selseats'];
        $output = '
        <html>
        <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <style type="text/css">
        body{
            font-family:Dejavu Sans;
        }
        td{
            pading:20px;
            border:1px solid;
        }
        tr{
            pading:20px;
            border:1px solid;
        }
      
        </style>
        </head>
        <body>
        <table>
        <tr>
            <td>Назва фільму</td>
            <td>Час</td>
            <td>Дата</td>
            <td>Ціна</td>
            <td>Місця</td>
        </tr>
        <tr>
            <td>'.$film_name.'</td>
            <td>'.$mtime.'</td>
            <td>'.$mdate.'</td>
            <td>'.$cost.'</td>
            <td>'.$seats.'</td>
        </tr>
        </table>
        </body>
        </html>
        ';
        $file_name = md5(rand()).'.pdf';
        $pdf = new Pdf();
        $pdf->charset = 'utf-8';
        $pdf->loadhtml($output);
        $pdf->render();
        $file = $pdf->output();
        file_put_contents($file_name, $file);
        
        require_once('PHPMailer/PHPMailerAutoload.php');
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->CharSet ='utf-8';
        $mail->SMTPAuth = true;
        $mail->SMTSecure = 'ssl';
        $mail->Host = 'ssl://smtp.gmail.com';
        $mail->Port = '465';
        $mail->IsHTML();
        $mail->Username = 'austriacinema@gmail.com';
        $mail->Password = 'austriacinema123';
        $mail->setFrom('austriacinema@gmail.com');
        $mail->AddAddress($_SESSION['userlogin']['email']);

        $mail->addAttachment($file_name);
        $mail->Subject='Білети в кіно';
        $mail->Body="Будь ласка перегляньте білети в pdf файлі.";
        if(!$mail->Send()) {
            unlink($file_name);
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            unlink($file_name);
            echo '1';
        }
        
    }
?>