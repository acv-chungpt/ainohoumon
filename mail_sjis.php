<?php
/**  
 * @title				mail.php
 * @copyright           2009 
 * @version               
 * @description			mail sending
 * 						
 * @author              N. Murugan
 * @version				1.0
 * Created on 			2009�N09��24��
 */ 
//To ���[��ID
$to =$_POST['mail'];
//����
$subject = '�y�����̖K��}�b�T�[�W�T�[�r�X�zContact';
//���b�Z�[�W
$message="���̓x�́A�u�����̖K��}�b�T�[�W�T�[�r�X�v�̃z�[���y�[�W���\n";
$message.="���₢���킹�����A���肪�Ƃ��������܂��B\n\n";
//�����O 
$message.="�u���₢���킹���e�v"."\n";
$message.="�����O :".$_POST['fullname']."\n";
//���Z��
$message.="���Z�� :".$_POST['office']."\n";
//���[��
$message.="���[��  :".$_POST['mail']."\n";
//���d�b�ԍ� 
$message.="���d�b�ԍ� :".$_POST['telephone']."\n";
//���e�E�Ǐ� 
$message.="���e�E�Ǐ�   :".$_POST['contents']."\n\n";



//���e
$message.="���ǂ����A�ǂ��čēx�A�������Ē����܂��B"."\n\n";
$message.="�����̖K��}�b�T�[�W�T�[�r�X"."\n";
$message.="�@���@�쑽"."\n\n";

$message.="*�|�|�|�|�|�|�|�|�|�|*"."\n";
$message.="URL:http://ainohoumon.com"."\n";
$message.="TEL:0120-931-397"."\n";
$message.="Mail:kisei.gz21@iris.eonet.ne.jp"."\n";
$message.="*�|�|�|�|�|�|�|�|�|�|*"."\n";


$from = "kisei.gz21@iris.eonet.ne.jp";
	
$headers .= "From: " . $from . "\r\n";
$headers .= 'bcc: senshiki@gmail.com' . "\r\n";

mb_language("ja");
$subject = mb_convert_encoding($subject, "ISO-2022-JP","AUTO");
$subject = mb_encode_mimeheader($subject);

//���[�������PHP�@�\
if (mail($to, $subject, $message, $headers)) 
	{header("location:thanks.html"); 
   } 
else{
   }	
?>
