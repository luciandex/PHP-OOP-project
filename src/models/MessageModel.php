<?php

namespace App\Models;

use App\core\Model;
use App\objects\Message;

class MessageModel extends Model
{
    public function saveMessage(Message $message)
    {
        $stmt = $this->conn->getPdo()->prepare("INSERT INTO `messages` (`name`, `email`, `subject`, `message`, `sent_date`) VALUES (:name, :email, :subject, :message, :sentDate)");
        var_dump($stmt);
        try {
            return $stmt->execute([
                'name' => $message->getName(),
                'email' => $message->getEmail(),
                'subject' => $message->getSubject(),
                'message' => $message->getMessage(),
                'sentDate' => $message->getSentDate()
            ]);

        } catch (\PDOException $e) {
            throw $e;
//            echo $e->getMessage();
            error_log($e->getMessage());
            return false;
        }
    }
}