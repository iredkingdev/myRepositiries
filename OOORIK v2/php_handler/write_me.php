<?php   
	use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $getName = htmlspecialchars(trim($_POST['your-name']));
    $getPhone = htmlspecialchars($_POST['your-phone']);
    $getEmail = htmlspecialchars($_POST['your-email']);
    $getTextarea = htmlspecialchars($_POST['your-message']);

    if(isset($_POST['send'])){
        if($getName == "" || !preg_match('/^[a-zA-Zа-яА-Я]+$/ui', $getName)){
            header('Refresh: 2, url = ../index.php');
            die('Поле имя заполнено не корректно');
        }
        if($getPhone == "" || !preg_match('/^[+7,8][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/', $getPhone)){
            header('Refresh: 2, url = ../index.php');
            die('Поле телефон заполнено не корректно');
        }
        if($getEmail == "" || !preg_match("/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/", $getEmail)){
            header('Refresh: 2 url = ../index.php');
            die('Поле Email заполнено не корректно');
        }
        if($_POST['checked'] == ""){
            header('Refresh: 3 url = ../index.php');
            die('Подтвердите ознакомление с обработкой персональных данных');
        }
    }
    

    $mail = new PHPMailer(true);        // "true" включает работу исключений (exceptions)

    try {
        //Настройки сервера
        $mail->SMTPDebug = 0;        // "2" включает подробный вывод отладки. Отключить - "0"
        $mail->isSMTP();        // Включаем SMTP
        $mail->Host = '';        // задаем адрес SMTP сервера
        $mail->SMTPAuth = true;        // Включаем SMTP аутентификацию
        $mail->Username = '';        // имя пользователя
        $mail->Password = '';        // Пароль (https://myaccount.google.com/apppasswords)
        $mail->SMTPSecure = '';        // Включаем SSL шифрование (или можно TLS для порта 587)
        $mail->Port = 465;        // Порт для подключения

        //Задаем получателей
        $mail->setFrom('ilya@iredkingdev.ru', 'С формы обратной связи');        //Задаем адрес и имя отправителя
        $mail->addAddress('katastrofa.zvl@gmail.com', 'Gmail User');        // И адрес и имя получателя
        //$mail->addAddress('katastrofa.zvl@gmail.com');        // Имя не обязательно
        //$mail->addReplyTo('katastrofa.zvl@gmail.com', 'Info');        // Сюда будут приходить ответы
        //$mail->addCC('cc@gmail.com');        // копия
        //$mail->addBCC('bcc@gmail.com');        //скрытая копия

        //Приложения
        //$mail->addAttachment('/var/tmp/file.tar.gz');        // Приложить файл
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');        // Задать файлу имя

        //Содержание
        $mail->CharSet = 'UTF-8';        // Задаем кодировку, иначе письмо будет нечитабельным
        $mail->isHTML(true);        // Задаем HTML формат письма
        $mail->Subject = 'Свяжитесь со мной.';
        $mail->Body    = 
        '<html>
            <body>
                <center>	
                <table border=1 cellpadding=6 cellspacing=0 width=90% bordercolor="#DBDBDB">
                    <tr><td colspan=2 align=center bgcolor="#E4E4E4"><b>Информация</b></td></tr>
                    <tr>
                    <td><b>Откуда</b></td>
                    <td>С формы обратной связи</td>
                    </tr>
                    <tr>
                    <td><b>От кого</b></td>
                    <td>'.$getName.'</td>
                    </tr>
                    <tr>
                    <td><b>Телефон</b></td>
                    <td>'.$getPhone.'</td>
                    </tr>
                    <tr>
                    <td><b>Адресат</b></td>
                    <td><a href="mailto:'.$getEmail.'">'.$getEmail.'</a></td>
                    </tr>
                    <tr>
                    <td><b>Сообщение</b></td>
                    <td>'.$getTextarea.'</td>
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
    
    
?>