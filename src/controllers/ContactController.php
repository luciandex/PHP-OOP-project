<?php

namespace App\controllers;

use App\core\Controller;
use App\core\database\Connection;
use App\Models\MessageModel;

class ContactController extends Controller
{
    use \App\traits\getControllerNameTrait;
    use \App\traits\getMenuItemsTrait;

    protected PageController $pageController;
    protected MessageModel $messageModel;


    public function index()
    {
        $this->pageController = new PageController();
        $page = $this->pageController->getPage($this->getControllerName());

        $menuItems = $this->pageController->getMenuItems();

        if (!isset($this->pageController)) {
            (new DefaultController())->errorPage404();
        }

        try {
            if ($_POST != [] && isset($_POST['submit'])) {
                $this->messageModel = $this->processForm($_POST);

                if (!isset($_POST['errors'])) {
                    $messageStatus = $this->saveMessage($this->messageModel);
                }
            }
        } catch (\InvalidArgumentException $invalidArgumentException) {
            error_log($invalidArgumentException->getMessage());
            echo 'Something went wrong. Please try again.';
        }

        $this->render(
            $this->getControllerName(),
            [
                'page' => $page,
                'messageStatus' => $messageStatus ?? null,
                'socialMediaItems' => $menuItems['socialMedia'],
                'menuItems' => $menuItems['mainMenu'],
                'footerMenuItems' => $menuItems['footerLinks']
            ]);
    }


    public function saveMessage(MessageModel $message)
    {
        $stmt = (Connection::getConn())
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
                            <h3>Your message could not be sent. <br> We are sorry for the inconvenience!<h3> <br>
                            <h4>Possible reasons for this are:</h4> <br>
                            <ul> Database is not ready. <br>
                                 The server is busy <br>
                                 Trying to send same informations two times (duplicate occured)</ul>
                            _MSG;
        }

        return $messageStatus ?? null;
    }


    private function processForm(array $input): MessageModel
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

        return (new MessageModel())
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
