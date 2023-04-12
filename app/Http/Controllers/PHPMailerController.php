<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\OTP;
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
class PHPMailerController extends Controller {
 
    // =============== [ Email ] ===================
    public function email() {
        return view("email");
    }
 
 
    // ========== [ Compose Email ] ================
    public function composeEmail(Request $request) {
        $request->validate(['Password' => 'required|confirmed|min:6']);
        $account = new Account;
        $account->Email = $request->Email;
        $account->Number = $request->Number;
        $account->Password = sha1($request->Password);
        $account->Photo = "account-logo.png";
        $account->save();

        require base_path("vendor/autoload.php");
        $PASS = $_ENV['PASS'];
        $MAIL = $_ENV['EMAIL'];
        $judul = "Your OTP Code is Here!";
        $pesan = rand(100000, 999999);
        $email = $request->Email;
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions
 
        try {
 
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = $MAIL;                     //SMTP username
            $mail->Password   = $PASS;                               //SMTP password
            $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
            //pengirim
            $mail->setFrom('email@gmail.com', 'Your OTP Code is Here!');
            $mail->addAddress($email);     //Add a recipient
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $judul;
            $mail->Body    = $pesan;
            $mail->AltBody = '';
            //$mail->AddEmbeddedImage('gambar/logo.png', 'logo'); //abaikan jika tidak ada logo
            //$mail->addAttachment(''); 
    
            $mail->send();
        } catch (Exception $e) {
            //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    
        }
        $OTP = new OTP;
        $OTP->OTP = $pesan;
        session(['OTP'=>$OTP]);
        return redirect('/inputotp')->with('otp', $pesan)->with('data', $account);
    } 
    
}
