<?php

namespace App\controllers;

use App\core\Controller;
use App\Models\MessageModel;
use App\objects\Message;

class ContactController extends Controller
{
    protected $messageModel;

    public function __construct()
    {
        $this->messageModel = new MessageModel();
    }

    public function index()
    {
        try {
            if ($_POST != [] && isset($_POST['submit'])) {
                $message = $this->processForm($_POST);

                if (!isset($_POST['errors'])) {
                    $messageStatus = $this->messageModel->saveMessage($message);
                }
            }
        } catch (\InvalidArgumentException $invalidArgumentException) {
            error_log($invalidArgumentException->getMessage());
            echo 'Something went wrong. Please try again.';
        }

        $this->render('contact', [
            'messageStatus' => $messageStatus ?? null
        ]);
    }


    private function processForm(array $input): Message
    {
        try {
            $this->validateName($input);
        } catch (\LengthException $lengthException) {
            $_POST['errors'][] = $lengthException->getMessage();
        }


        try {
            $this->validateSubject($input);
        } catch (\LengthException $lengthException) {
            $_POST['errors'][] = $lengthException->getMessage();
        }


        try {
            $this->validateMessage($input);
        } catch (\LengthException $lengthException) {
            $_POST['errors'][] = $lengthException->getMessage();
        }

        return (new Message())
            ->setName(htmlentities(trim("{$input['name']}")))
            ->setEmail(htmlentities(trim("{$input['email']}")))
            ->setSubject(htmlentities(trim("{$input['subject']}")))
            ->setMessage(htmlentities(trim("{$input['message']}")));
    }


    private function validateName(array $input)
    {
        if (isset($input['name']) && (strlen(trim("{$input['name']}")) < 3)) {
            throw new \LengthException('Name too short (under 3 chars).');
        }
    }

    private function validateSubject(array $input)
    {
        if (isset($input['subject']) && (strlen(trim("{$input['subject']}")) < 5)) {
            throw new \LengthException("Subject too short (under 5 chars).");
        }
    }

    private function validateMessage(array $input)
    {
        if (isset($input['message']) && (strlen(trim("{$input['message']}")) < 20)) {
            throw new \LengthException("Message too short (under 20 chars).");
        }

    }
}
