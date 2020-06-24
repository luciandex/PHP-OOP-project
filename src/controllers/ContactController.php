<?php

namespace App\controllers;

use App\core\Controller;
use App\Models\MessageModel;
use App\models\PageModel;
use App\objects\Message;

class ContactController extends Controller
{
    protected $model;
    protected $messageModel;

    public function __construct()
    {
        $this->model = new PageModel();
        $this->messageModel = new MessageModel();
    }

    public function index()
    {
        $page = $this->model->getPage('contact');

        if ($page->isEmpty()) {
            (new DefaultController())->errorPage404();
        }

        try {
            if ($_POST != [] && isset($_POST['submit'])) {
                $message = $this->processForm($_POST);

                if (!isset($_POST['errors'])) {
                    $this->messageModel->saveMessage($message);
                }
            }
        } catch (\InvalidArgumentException $invalidArgumentException) {
            error_log($invalidArgumentException->getMessage());
            echo 'Something went wrong. Please try again.';
        }

        $this->render('contact', ['errors' => ($_POST['errors'] ?? '')]);
    }


    private function processForm(array $input): Message
    {

        if ($input['submit']) {
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
        }
        if (!isset($_POST['errors'])) {

            $contactForm = (new Message())
                ->setName(htmlentities(trim("{$input['name']}")))
                ->setEmail(htmlentities(trim("{$input['email']}")))
                ->setSubject(htmlentities(trim("{$input['subject']}")))
                ->setMessage(htmlentities(trim("{$input['message']}")));
        }

        return $contactForm;
    }

    private function validateName(array $input)
    {

        if (isset($input['name']) && (strlen(trim("{$input['name']}")) < 3)) {
            throw new \LengthException('Name too short (under 3 chars) or empty.');
        }
    }

    private function validateSubject(array $input)
    {
        if (isset($input['subject']) && (strlen(trim("{$input['subject']}")) < 5)) {
            throw new \LengthException("Subject too short (under 5 chars) or empty.");
        }
    }

    private function validateMessage(array $input)
    {
        if (isset($input['message']) && (strlen(trim("{$input['message']}")) < 20)) {
            throw new \LengthException("Message too short (under 20 chars) or empty.");
        }

    }
}
