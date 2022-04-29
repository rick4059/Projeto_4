<?php

namespace App\Http;

use Illuminate\Support\Facades\Auth;
use PhpImap\Mailbox;

class EmailRepository
{
    private $mailbox;

    public function __construct()
    {
        $this->mailbox = new Mailbox(
            '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX', // IMAP server and mailbox folder
            'ricky19ferreira@gmail.com', // Username for the before configured mailbox
            '36CMLwQtc&orcti$OfJm', // Password for the before configured username
            __DIR__, // Directory, where attachments will be saved (optional)
            'UTF-8', // Server encoding (optional)
            true, // Trim leading/ending whitespaces of IMAP path (optional)
            false // Attachment filename mode (optional; false = random filename; true = original filename)
        );

        $this->mailbox->setConnectionArgs(
            CL_EXPUNGE // expunge deleted mails upon mailbox close
             // don't do non-secure authentication
        );
    }

    public function getMails(){
        try {
            // Get all emails (messages)
            // PHP.net imap_search criteria: http://php.net/manual/en/function.imap-search.php
            $this->mailbox->setAttachmentsIgnore(true);
            $mailsIds = $this->mailbox->searchMailbox('ALL');
            if(!$mailsIds) {
                die('Mailbox is empty');
            }

            $mails = [];

            for ($i = 0; $i<=10; $i++){
                array_push($mails, $this->mailbox->getMail($mailsIds[$i])->subject);
            }
            return $mails;

        } catch(PhpImap\Exceptions\ConnectionException $ex) {
            echo "IMAP connection failed: " . implode(",", $ex->getErrors('all'));
            die();
        }
    }

}
