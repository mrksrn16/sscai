<?php 
class Sms extends Admin_Controller
{
	
	function __construct() {
		parent::__construct();
        // $this->load->library('SmsGateway');
	}

    public function index() {
        $number = '09954196573';
        $message_post = 'Hello World 3-19';

        $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTU1MzQ5NzA2MSwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjY5MzY4LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.vRAvK0v3S7i_x1TsMjCipM5S_MDtNPvQ4MT0M9ZYqds";
        $phone_number = $number;
        $message = $message_post;
        $deviceID = 110283;
        $options = [];

        $smsGateway = new SmsGateway($token);
        $result = $smsGateway->sendMessageToNumber($phone_number, $message, $deviceID, $options);

        if($result){
            echo"Success!";
        }
        else{
            echo"Sending Failed";
        }
    }

    public function send_announcement($id) {
        $announcement = $this->M_Announcements->get($id);
        $smsContent = $announcement->title . ", \n";
        $smsContent .= strip_tags($announcement->content);
        $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTU1MzQ5NzA2MSwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjY5MzY4LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.vRAvK0v3S7i_x1TsMjCipM5S_MDtNPvQ4MT0M9ZYqds";
        $deviceID = 110283;
        $options = [];

        //get numbers
        $this->db->where('status', 'accepted');
        $admissions = $this->db->get('admissions')->result();
        $count = 0;
        foreach($admissions as $admission) {
            $phone_number = $admission->contact;
            $message = $smsContent;
            $smsGateway = new SmsGateway($token);
            $result = $smsGateway->sendMessageToNumber($phone_number, $message, $deviceID, $options);
            $count++;
            if($count == count($admissions)) {
                if($result){
                    $this->session->set_flashdata('statusSms', 'Message sent succesfully.');
                }
                else{
                    $this->session->set_flashdata('statusSms', 'Message failed. Please try again.');   
                }
                redirect('admin/announcements/view/'. $id);
            }
        }
        
        
    }

	
}
?>