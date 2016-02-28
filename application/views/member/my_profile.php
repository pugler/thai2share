
<?php 
$province_arr = array(
					"2"=>"กระบี่",
					"1"=>"กรุงเทพมหานคร",
					"3"=>"กาญจนบุรี",
					"4"=>"กาฬสินธุ์",
					"5"=>"กำแพงเพชร",
					"6"=>"ขอนแก่น",
					"8"=>"จันทบุรี",
					"7"=>"ฉะเชิงเทรา",
					"9"=>"ชลบุรี",
					"10"=>"ชัยนาท",
					"11"=>"ชัยภูมิ",
					"12"=>"ชุมพร",
					"13"=>"เชียงราย",
					"14"=>"เชียงใหม่",
					"16"=>"ตรัง",
					"15"=>"ตราด",
					"17"=>"ตาก",
					"18"=>"นครนายก",
					"19"=>"นครปฐม",
					"20"=>"นครพนม",
					"21"=>"นครราชสีมา",
					"22"=>"นครศรีธรรมราช",
					"23"=>"นครสวรรค์",
					"24"=>"นนทบุรี",
					"25"=>"นราธิวาส",
					"26"=>"น่าน",
					"77"=>"บึงกาฬ",
					"27"=>"บุรีรัมย์",
					"28"=>"ปทุมธานี",
					"29"=>"ประจวบคีรีขันธ์",
					"30"=>"ปราจีนบุรี",
					"31"=>"ปัตตานี",
					"32"=>"พระนครศรีอยุธยา",
					"33"=>"พะเยา",
					"39"=>"พังงา",
					"40"=>"พัทลุง",
					"34"=>"พิจิตร",
					"35"=>"พิษณุโลก",
					"37"=>"เพชรบุรี",
					"36"=>"เพชรบูรณ์",
					"38"=>"แพร่",
					"41"=>"ภูเก็ต",
					"43"=>"มหาสารคาม",
					"42"=>"มุกดาหาร",
					"44"=>"แม่ฮ่องสอน",
					"46"=>"ยโสธร",
					"45"=>"ยะลา",
					"47"=>"ร้อยเอ็ด",
					"48"=>"ระนอง",
					"49"=>"ระยอง",
					"50"=>"ราชบุรี",
					"51"=>"ลพบุรี",
					"52"=>"ลำปาง",
					"53"=>"ลำพูน",
					"54"=>"เลย",
					"55"=>"ศรีสะเกษ",
					"56"=>"สกลนคร",
					"57"=>"สงขลา",
					"58"=>"สตูล",
					"76"=>"สมุทรปราการ",
					"60"=>"สมุทรสงคราม",
					"59"=>"สมุทรสาคร",
					"61"=>"สระแก้ว",
					"62"=>"สระบุรี",
					"63"=>"สิงห์บุรี",
					"64"=>"สุโขทัย",
					"65"=>"สุพรรณบุรี",
					"66"=>"สุราษฎร์ธานี",
					"67"=>"สุรินทร์",
					"68"=>"หนองคาย",
					"69"=>"หนองบัวลำภู",
					"70"=>"อ่างทอง",
					"75"=>"อำนาจเจริญ",
					"73"=>"อุดรธานี",
					"74"=>"อุตรดิตถ์",
					"72"=>"อุทัยธานี",
					"71"=>"อุบลราชธานี"
				);

?>
                        <div class="tab-content">
							<div class="tab-content-item clearfix active">
							
<div class="grid_frame page-content">
            <div class="container_grid">
                <div class="mod-register">
                    <h3 class="rs title-mod">สวัสดี! ยินดีต้อนรับสู่เว็บ Thai2Share.com</h3>
                    <div class="desc-reg">กรุณาตรวจสอบข้อมูลของคุณให้ถูกต้อง เพื่อประโยชน์ในการใช้งานระบบ และการติดต่อรับรางวัล</div>
                    <div class="wrap-form-reg clearfix">
                        <form action="<?php echo base_url()?>mymember/update" id="update_info_form" name="update_info_form" method="post">
                            <div class="left-form">
                                <label class="wrap-txt" for="sys_email">
                                อีเมล : <?php echo $email; ?>
                                </label>
								<label class="wrap-txt" for="mem_nickname">
									นามปากกา : 
                                    <input class="input-txt" id="mem_nickname" name="username" type="text" placeholder="<?php echo $username;?>" />
                                </label>							
								<label class="wrap-txt" for="mem_firstname">
									ชื่อ : 
                                    <input class="input-txt" id="mem_firstname" name="firstname" type="text" placeholder="<?php echo $firstname ?>" />
                                </label>
								<label class="wrap-txt" for="mem_lastname">
									นามสกุล : 
                                    <input class="input-txt" id="mem_lastname" name="lastname" type="text" placeholder="<?php echo $lastname; ?>" />
                                </label>
								<label class="wrap-txt" for="mem_idcard">
									หมายเลขบัตรประชาชน : 
									<input class="input-txt" id="mem_idcard" name="identity_number" type="text" placeholder="<?php echo $identity_number; ?>" />
                                </label>
								<label class="wrap-txt" for="mem_gender">
									เพศ : 
									<select class="input-txt" id="mem_gender" name="gender" >
										<option value="0" <?php echo ($gender == 0)? 'selected' : ''; ?>>เลือก</option>
										<option value="1" <?php echo ($gender == 1)? 'selected' : ''; ?>>ชาย</option>
										<option value="2" <?php echo ($gender == 2)? 'selected' : ''; ?>>หญิง</option>
									</select>
                                </label>
								<label class="wrap-txt" for="mem_birthday">
									วันเกิด : 
                                    <input class="input-txt" id="mem_birthday" name="birthday" type="text" placeholder="<?php echo $birthday;?>" />
                                </label>
								<label class="wrap-txt" for="mem_address">
									ที่อยู่ติดต่อ : 
                                    <input class="input-txt" id="mem_address" name="address" type="text" placeholder="<?php echo $address; ?>" />
                                </label>
								<label class="wrap-txt" for="mem_city">
									อำเภอ/เขต : 
                                    <input class="input-txt" id="mem_city" name="city" type="text" placeholder="<?php echo $city;?>" />
                                </label>
								<label class="wrap-txt" for="mem_province">
									จังหวัด : 
                                    <select class="input-txt" id="mem_province" name="province" onchange="get_mem_province()">
										<option value="0">เลือก</option>
										<?php foreach($province_arr as $key=>$value) : ?>
										<option value="<?php echo $value;?>" <?php echo ($province == $value)? 'selected' : ''; ?>><?php echo $value; ?></option>
										<?php endforeach ?>
									</select>
                                </label>
								<label class="wrap-txt" for="mem_postalcod">
									รหัสไปรษณีย์ : 
                                    <input class="input-txt" id="mem_postalcod" name="postcode" type="text" placeholder="<?php echo $postcode;?>" />
                                </label>
								<label class="wrap-txt" for="mem_phone">
									โทรศัพท์ : 
                                    <input class="input-txt" id="mem_phone" name="telephone" type="text" placeholder="<?php echo $telephone;?>" />
                                </label>

                                <label class="wrap-txt" for="sys_newpass">
									เปลี่ยนรหัสผ่าน : 
                                    <input class="input-txt" id="sys_newpass" name="password" type="password" placeholder="กรอกรหัสผ่านใหม่"/>
                                </label>
																
								<label class="wrap-txt" for="sys_pass">
									ยืนยันรหัสผ่านสำหรับการอัพเดทข้อมูล : 
                                    <input class="input-txt" id="sys_pass" name="cpassword" type="password" placeholder="ยืนยันรหัสผ่าน"/>
                                </label>
								
                                <label class="wrap-check" for="sys_chk_news">
                                    <input id="sys_chk_news" class="input-chk" name="newsletter" type="checkbox" <?php echo ($newsletter == 1)? 'checked' : '';?>/> รับข่าวสารจาก Thai2Share.com
                                    <i class="icon iUncheck"></i>
                                </label>
                            </div>
                            <div class="right-connect">
                                <button class="btn-flat yellow btn-submit-reg" type="submit">อัพเดทข้อมูล</button>
                            </div>
                        </form>
                    </div>
                </div><!--end: .mod-register -->
            </div>
        </div>
		</div>
		</div>
