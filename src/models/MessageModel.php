<?php

namespace App\Models;

use App\core\Model;
use App\objects\Message;

class MessageModel extends Model
{
    public function saveMessage(Message $message)
    {
        $stmt = $this->conn
            ->getPdo()
            ->prepare("INSERT INTO `messages` (`name`, `email`, `subject`, `message`) VALUES (:name, :email, :subject, :message)");


        try {
            $stmt->execute([
                'name' => $message->getName(),
                'email' => $message->getEmail(),
                'subject' => $message->getSubject(),
                'message' => $message->getMessage()
            ]);

            // $_POST['name'] = $_POST['email'] = $_POST['subject'] = $_POST['message'] = null;
            unset ($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message']);

        } catch (\PDOException $e) {
            error_log($e->getMessage());
            $messageStatus = <<<_MSG
                            <h3>Your message could not be sent. We are sorry for the inconvenience!<h3> <br><br><br>
                            <h4>Possible reasons for this are:</h4> <br>
                            <ul> Database is not ready. <br>
                            Trying to send same informations two times (duplicate occured) <br>
                            The server is busy </ul>
                            _MSG;
        }

        if(isset($messageStatus)) {
            return $messageStatus;
        }
    }
}