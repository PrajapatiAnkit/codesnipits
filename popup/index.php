
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>POPUP Pure css</title>
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> 
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins');
.overlay { position: fixed; top: 0; bottom: 0; left: 0; right: 0; background: rgba(0, 0, 0, 0.7); transition: opacity 500ms; visibility: hidden; opacity: 0; z-index: 9999;}
.overlay:target { visibility: visible; opacity: 1;}
#popup1 { font-family:poppins;}
#popup1 .popup {margin: 0px auto; padding: 50px 20px;background: #fff; border-radius: 0px; height: 260px; width:690px; position: relative;    text-align: center;top: 50% !important;   position: fixed !important;-moz-transform: translateY(-50%);    -webkit-transform: translateY(-50%);  -o-transform: translateY(-50%);   -ms-transform: translateY(-50%);    transform: translateY(-50%);right: 0px; left: 0;}
#popup1 .popup h2 { margin-top: 0; color: #333;}
#popup1 .popup .close {position: absolute; top: 0px;  right: 0px; transition: all 200ms; font-size: 30px;  font-weight: normal; text-decoration: none;  text-align: center;    background: #333;  border-radius: 0;  cursor: pointer;  float: right;  padding: 0;  color: #fff;  margin-top: 0;  margin-right: 0;  height: 40px;  width: 40px;    line-height: 45px;}
#popup1 .popup .close:hover {color: #06D85F;}
#popup1 .popup .content {max-height: 30%;overflow: auto;}
#popup1 .newletter-title h2 {   font-size: 24px;  text-transform: uppercase;  color: #000;  font-weight: 700;  letter-spacing: 3px;  margin: 0 0 15px;}
#popup1 .box-content label {  font-weight: 400;  max-width: 560px;  display: inline-block;  margin-bottom: 5px;  font-size: 14px; line-height: 26px;}
.newletter-popup {  background: #fff;  top: 50% !important;   position: fixed !important; padding: 0;  text-align: center;  -moz-transform: translateY(-50%);    -webkit-transform: translateY(-50%);  -o-transform: translateY(-50%);   -ms-transform: translateY(-50%);    transform: translateY(-50%);}
#popup1 #frm_subscribe #subscribe_pemail {    background: #EBEBEB none repeat scroll 0% 0%;    border: medium none;    height: 40px;    width: 65%;    margin: 20px 0;    padding-left: 15px;}
#popup1 #frm_subscribe a {   cursor: pointer;   border: none;    background: #333;    padding: 3px 25px;    text-transform: uppercase;   font-size: 14px;    color: #fff;
    font-weight: 600;    line-height: 34px;    display: inline-block;    border-radius: 0;    letter-spacing: 2px;}
#popup1 .box-content .subscribe-bottom {   margin-top: 20px;}
#popup1 .box-content .subscribe-bottom #newsletter_popup_dont_show_again {    display: inline-block;    margin: 0;    vertical-align: middle;    margin-top: -1px;}
#popup1 .box-content .subscribe-bottom label {    margin: 0;    font-weight: 400;    max-width: 650px;    display: inline-block;    margin-bottom: 5px;    font-size: 12px;}
</style> 
</head>
<body>
<div id="popup1" class="overlay">
  <div class="popup"> <a class="close" href="#">&times;</a>
    <div id="dialog" class="window">
      
      <div class="box">
        <div class="newletter-title">
          <h2>Sign up &amp; get 10% off</h2>
        </div>
        <div class="box-content newleter-content">
          <label>Subscribe to our newsletters now and stay up-to-date with new collections, the latest lookbooks and exclusive offers.</label>
          <div id="frm_subscribe">
            <form name="subscribe" id="subscribe_popup">
              <div>
                <!-- <span class="required">*</span><span>Email</span>-->
                <input type="text" value="" name="subscribe_pemail" id="subscribe_pemail">
                <input type="hidden" value="" name="subscribe_pname" id="subscribe_pname">
                <div id="notification"></div>
                <a class="button" onclick="email_subscribepopup()"><span>Submit</span></a> </div>
            </form>
            <div class="subscribe-bottom">
              <input type="checkbox" id="newsletter_popup_dont_show_again">
              <label for="newsletter_popup_dont_show_again">Don't show this popup again</label>
            </div>
          </div>
          <!-- /#frm_subscribe -->
        </div>
        <!-- /.box-content -->
      </div>
    </div>
  </div>
</div>
<a class="btn btn-primary skip" href="#popup1" style="padding:6px 15px; background:#333; color:#fff; text-decoration:none; font-family:poppins; border-radius:3px; margin:25% 40%; display:inline-block;">OPEN POPUP</a>

</body>
</html>
