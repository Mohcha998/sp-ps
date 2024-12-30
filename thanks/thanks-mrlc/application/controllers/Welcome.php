<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('rev_7_200718');
	}
	
	public function email()
	{
	
		if(!empty($_POST['email'])){
		
			$from_email = "andy@mri.co.id"; 
			$to_name = $this->input->post('name'); 
			$to_email = $this->input->post('email'); 
			
			$this->email->from($from_email, 'Merry Riana Indonesia'); 
			$this->email->to($to_email, $to_name);
			$this->email->subject('Merry Riana Indonesia - Stairway to Success');		
			$pesan = '<p>Hi Anda,<br/>
	Terima kasih banyak sekali lagi karena sudah tertarik untuk mendapatkan Video saya “stairway to success  “.</p>
	<p>Di dalam video ini  saya akan membagikan pengalaman saya bagaimana caranya meraih kesuksesan yang tentunya bisa berguna apabila  Anda aplikasikan juga di dalam kehidupan Anda.</p>
	 <p>Memang meraih kesuksesan tidak semudah membalikan telapak tangan  di butuhkan konsistensi dan strategi yang tepat dan apabila Anda mempraktekan semua yang ada di video ini maka Anda akan selangkah lagi lebih dekat dengan kesuksesan.</p>
	<br/>Selamat menikmati dan semoga bermanfaat.<br/> 
	<br/>Download sekarang!<br/>
	 
	<br/>Link';
			$pesan_show = str_replace("Anda",$to_name,$pesan);
			$this->email->set_mailtype('html');
			$this->email->message($pesan_show); 
			
			//Send mail 
			if($this->email->send()){ 
			
				$from_email = "andy@mri.co.id"; 
				$to_name = $this->input->post('name'); 
				$to_email = $this->input->post('email'); 
				$to_hp = $this->input->post('hp');
				
				$this->email->from($to_email, $to_name); 
				$this->email->to('andy@mri.co.id', 'Andy');
				$this->email->subject('Permintaan Video Stairway to Success');		
		
				$this->email->set_mailtype('html');
				$this->email->message('Hai, Andy<br/>Permintaan Link Video oleh :<br/>Name : '.$to_name.'<br/>Email : '.$to_email.'<br/>Hp : '.$to_hp); 
				$this->email->send();
			
			
			$this->session->set_flashdata("email_sent","Email sent successfully.");
			$data['show_psn'] = "Selamat, data Anda telah kami terima. Silahkan cek email Anda.";
			$this->load->view('landing_page',$data);
			} 
			else {
			$this->session->set_flashdata("email_sent","Error in sending Email.");
			redirect('index.php','refresh');
			}
			
		}else{
			redirect('index.php','refresh');
		}
		
	}
}
