<?php
//аналогичную проверку на заполнение полей моно сделать через JS, но через PHP будет более эффективнее
// передачу информации на почту получателя можно осуществлять через функцию mail() или через расширение для PHP PHPMAILER
    if(isset($_POST['submit'])){
        $getEmail = htmlspecialchars(trim($_POST['email'])); //email отправитееля
        $getPass = htmlspecialchars(trim($_POST['pwd']));
        if($getEmail == "" || !preg_match("/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/", $getEmail)){ //проверка на пустоту
            header('Refresh: 2, url = contact.php');
            die('Поле email заполнено не корректно');
        }
        if($getPass == "" || !preg_match('/^[+7,8][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/', $getPass)){ //проверка на пустоту
            header('Refresh: 2, url = contact.php');
            die('Поле телефон заполнено не корректно');
        }
        if($_POST['remember'] == ''){
            header('Refresh: 2, url = contact.php');
            die('Согласитесь с обработкой персональных данных');
        }
    $myEmail = "<example@mail.ru>"; // кому отправляется форма или "example@пmail.ru"
    $subject = 'Свяжитесь сомною!'; //тема письма
    $page = 'С формы обратной связи'; //от куда пришло письмо
    $message = '
        <html>
        <body>
        <center>	
        <table border=1 cellpadding=6 cellspacing=0 width=90% bordercolor="#DBDBDB">
        <tr><td colspan=2 align=center bgcolor="#E4E4E4"><b>Информация</b></td></tr>
        <tr>
        <td><b>Откуда</b></td>
        <td>'.$page.'</td>
        </tr>
        <tr>
        <td><b>От кого</b></td>
        <td>'.$email.'</td>
        </tr>
        <tr>
        <td><b>Адресат</b></td>
        <td><a href="mailto:'.$email.'">'.$email.'</a></td>
        </tr>
        <tr>
        <td><b>Тема</b></td>
        <td>'.$subject.'</td>
        </tr>
        </table>
        </center>	
        </body>
        </html>'; 
        
    $headers  = "Content-type: text/html; charset=utf-8\r\n"; // устанорвка кодировки письма
    $result = mail($myEmail, $subject, $message, $headers); //отправка осуществляется через функцию mail
    echo $result;
    }
    /*  use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\Exception;
      require 'PHPMailer/src/Exception.php';
      require 'PHPMailer/src/PHPMailer.php';
      require 'PHPMailer/src/SMTP.php';
      



    if(isset($_POST['submit'])){
        $getEmail = htmlspecialchars(trim($_POST['email']));
        $getPass = htmlspecialchars(trim($_POST['pwd']));
        if($getEmail == "" || !preg_match("/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/", $getEmail)){ //проверка на пустоту
            header('Refresh: 2, url = contact.php');
            die('Поле email заполнено не корректно');
        }
        if($getPass == "" || !preg_match('/^[+7,8][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/', $getPass)){ //проверка на пустоту
            header('Refresh: 2, url = contact.php');
            die('Поле телефон заполнено не корректно');
        }
        if($_POST['remember'] == ''){
            header('Refresh: 2, url = contact.php');
            die('Согласитесь с обработкой персональных данных');
        }
  
        $mail = new PHPMailer(true);        // "true" включает работу исключений (exceptions)
  
        try {
            //Настройки сервера
            $mail->SMTPDebug = 0;        // "2" включает подробный вывод отладки. Отключить - "0"
            $mail->isSMTP();        // Включаем SMTP
            $mail->Host = 'mail.iredkingdev.ru';        // задаем адрес SMTP сервера
            $mail->SMTPAuth = true;        // Включаем SMTP аутентификацию
            $mail->Username = 'ilya@iredkingdev.ru';        // имя пользователя
            $mail->Password = '*****************';        // Пароль (https://myaccount.google.com/apppasswords)
            $mail->SMTPSecure = 'ssl';        // Включаем SSL шифрование (или можно TLS для порта 587)
            $mail->Port = 465;        // Порт для подключения
  
            //Задаем получателей
            $mail->setFrom('ilya@iredkingdev.ru', 'С формы обратной связи');        //Задаем адрес и имя отправителя
            $mail->addAddress('opt.samson@bk.ru', 'Gmail User');        // И адрес и имя получателя
            $mail->addAddress('katastrofa.zvl@gmail.com');        // Имя не обязательно
            //$mail->addReplyTo('info@gmail.com', 'Info');        // Сюда будут приходить ответы
            //$mail->addCC('cc@gmail.com');        // копия
            //$mail->addBCC('bcc@gmail.com');        //скрытая копия
  
            //Приложения
            //$mail->addAttachment('/var/tmp/file.tar.gz');        // Приложить файл
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');        // Задать файлу имя
  
            //Содержание
            $mail->CharSet = 'UTF-8';        // Задаем кодировку, иначе письмо будет нечитабельным
            $mail->isHTML(true);        // Задаем HTML формат письма
            $mail->Subject = 'Позвоните мне!.';
            $mail->Body    = '<html>
                    <body>
                        <center>	
                        <table border=1 cellpadding=6 cellspacing=0 width=90% bordercolor="#DBDBDB">
                            <tr><td colspan=2 align=center bgcolor="#E4E4E4"><b>Информация</b></td></tr>
  
                            <tr>
                            <td><b>От кого</b></td>
                            <td>'.$getEmail.'</td>
                            </tr>
  
                        </table>
                        </center>	
                    </body>
                </html>';
  
            //$mail->AltBody = 'Здесь будет обычный текст письма для раритетных не-HTML клиентов.';
  
            $mail->send();
              echo 'Сообщение было отправлено';
              header('Refresh: 1, url = ../index.php');
            } catch (Exception $e) {
              echo 'Сообщение не отправлено.';
              echo 'Ошибка: ' . $mail->ErrorInfo;
            }
    }  
    */
?>