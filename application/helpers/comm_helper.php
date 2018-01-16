<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
#########################################################################################################
## echo sprintf
#########################################################################################################
if(!function_exists('var_list'))
{
    function var_list($string) {
        echo sprintf("<pre>%s</pre>", print_r($string, TRUE))."<br>";
    }
}

#####################################################################################################################
### 암호화 관련
#####################################################################################################################
if(!function_exists('en_code'))
{
	function en_code ($string) {
		$CI = & get_instance();
		$CI->load->library('GibberishAES');
		return @$CI->gibberishaes->enc_aes128_ecb($string);
	}

	function de_code ($string) {
		$CI =& get_instance();
		return @$CI->gibberishaes->dec_aes128_ecb($string);
	}
}

if(!function_exists('filehash'))
{
    function filehash ($string) {
        return hash('md5', $string.random_string('sha1', 16));
    }
}

#####################################################################################################################
### CSRF SET
#####################################################################################################################
if(!function_exists('set_csrf'))
{
    function set_csrf ()
    {
        $CI =& get_instance();
        $CI->load->library('encrypt');
        $CI->load->library("session");
        $val_newpw = @$CI->encrypt->encode(str_shuffle('baboyamerong'));

        $CI->session->set_userdata("csrf",$val_newpw);

        echo "<input type='hidden' id='csrf' name='csrf' value='".$val_newpw."' />";
    }
}

if(!function_exists('unset_csrf'))
{
    function unset_csrf()
    {
        $CI =& get_instance();
        $CI->load->library("session");
        if($CI->session->userdata("csrf") !== $CI->input->post('csrf'))
        {
            echo $CI->session->userdata("csrf");
            echo "<br>";
            echo $CI->input->post('csrf');
            die();
        }
    }
}

#####################################################################################################################
### alert 관련
#####################################################################################################################
function alert_back($msg='', $url='') {
 $CI =& get_instance();
 
 if (!$msg) $msg = '올바른 방법으로 이용해 주십시오.';
 
 echo "<meta http-equiv=\"content-type\" content=\"text/html; charset=".$CI->config->item('charset')."\">";
 echo "<script type='text/javascript'> alert('".$msg."');";
    if ($url)
        echo "location.replace('".$url."');";
 else
  echo "history.go(-1);";
 echo "</script>";
 exit;
}
 
function alert_close($msg) {
 $CI =& get_instance();
 
 echo "<meta http-equiv=\"content-type\" content=\"text/html; charset=".$CI->config->item('charset')."\">";
 echo "<script type='text/javascript'> alert('".$msg."'); window.close(); </script>";
 exit;
}
 
function alert_only($msg) {
 $CI =& get_instance();
 
 echo "<meta http-equiv=\"content-type\" content=\"text/html; charset=".$CI->config->item('charset')."\">";
 echo "<script type='text/javascript'> alert('".$msg."'); </script>";
 exit;
}
 
function alert_continue($msg){
 $CI =& get_instance();

 echo "<meta http-equiv=\"content-type\" content=\"text/html; charset=".$CI->config->item('charset')."\">";
 echo "<script type='text/javascript'> alert('".$msg."'); </script>";
 exit;
}