<?php namespace App\Controllers;

use CodeIgniter\Controller;

class TestMail extends BaseController
{
	
	public function mailView(){
		return view('MailForm.php');
    }
    

	/**
	 * Sends mail to posted email.
	 * @author B001
	 */
	public function mailProccess(){

        //dd($this->request->getPost());
        
		$email = \Config\Services::email();

        //dd($email);

		$to = $this->request->getPost('to');
		$from = $this->request->getPost('form');
		$subject = $this->request->getPost('subject');
		$message = $this->request->getPost('msg');

		$email->setTo($to);
		$email->setFrom($from);
		$email->setSubject($subject);
		$email->setMessage($message);

		if($email->send() == false){
            echo "Failed";
            $data = $email->printDebugger(['headers']);
            print_r($data);
		}else echo "Mail sent successfully !";
	}

}
