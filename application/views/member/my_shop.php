                        <div class="tab-content">
							<div class="tab-content-item clearfix">
							
<div class="grid_frame page-content">
            <div class="container_grid">
                <div class="mod-register">
                    <h3 class="rs title-mod">สวัสดี! ยินดีต้อนรับสู่เว็บ Thai2Share.com</h3>
                    <div class="desc-reg">กรุณาตรวจสอบข้อมูลร้านของคุณให้ถูกต้อง เพื่อประโยชน์ในการใช้งานระบบ และการซื้อ-ขายสินค้ากับลูกค้าคนพิเศษของคุณ</div>
                    <div class="wrap-form-reg clearfix">
                        <form action="#">
                            <div class="left-form">
                                <label class="wrap-txt" for="sys_email">
                                อีเมล : youremail@domain.com
                                </label>
								<label class="wrap-txt" for="sys_email">
                                ผู้จัดการร้าน : ธกร อิ่มลิ้มธาร
                                </label>
								<label class="wrap-txt" for="shop_name">
									ชื่อร้าน : 
                                    <input class="input-txt" id="shop_name" type="text" placeholder="Boomz Store (บูมซ์ สโตร์) - Shopping Online"/>
                                </label>							
								<label class="wrap-txt" for="shop_url">
									หน้าร้าน : 
                                    <input class="input-txt" id="shop_url" type="text" placeholder="<?php echo base_url(); ?>boomzstore"/>
                                </label>
								<label class="wrap-txt" for="shop_display">
									สถานะของร้าน : 
									<select class="input-txt" id="shop_display" onchange="get_shopdisplay()">
										<option value="">เลือก</option>
										<option value="1" selected="selected">เปิดขายสินค้า</option>
										<option value="2">ปิดปรับปรุง</option>
									</select>
                                </label>
								<label class="wrap-txt" for="shop_open">
									วันเริ่มเปิดร้าน : 25-12-2015
                                </label>
								<label class="wrap-txt" for="tax_number">
									เลขที่ผู้เสียภาษีร้าน : 
                                    <input class="input-txt" id="tax_number" type="text" placeholder="5555555555555"/>
                                </label>
								<label class="wrap-txt" for="reg_number">
									เลขทะเบียนพาณิชย์ร้าน : 
                                    <input class="input-txt" id="reg_number" type="text" placeholder="1111111111111"/>
                                </label>
								<label class="wrap-txt" for="shop_address">
									ที่อยู่ติดต่อร้าน : 
                                    <input class="input-txt" id="shop_address" type="text" placeholder="บ้านเลขที่ 999 หมู่ 8 ต.ปากช่อง"/>
                                </label>
								<label class="wrap-txt" for="shop_city">
									อำเภอ/เขต : 
                                    <input class="input-txt" id="shop_city" type="text" placeholder="ปากช่อง"/>
                                </label>
								<label class="wrap-txt" for="shop_province">
									จังหวัด : 
                                    <select class="input-txt" id="shop_province" onchange="get_shop_city()">
										<option value="">เลือก</option>
										<option value="2">กระบี่</option>
										<option value="1">กรุงเทพมหานคร</option>
										<option value="3">กาญจนบุรี</option>
										<option value="4">กาฬสินธุ์</option>
										<option value="5">กำแพงเพชร</option>
										<option value="6">ขอนแก่น</option>
										<option value="8">จันทบุรี</option>
										<option value="7">ฉะเชิงเทรา</option>
										<option value="9">ชลบุรี</option>
										<option value="10">ชัยนาท</option>
										<option value="11">ชัยภูมิ</option>
										<option value="12">ชุมพร</option>
										<option value="13">เชียงราย</option>
										<option value="14">เชียงใหม่</option>
										<option value="16">ตรัง</option>
										<option value="15">ตราด</option>
										<option value="17">ตาก</option>
										<option value="18">นครนายก</option>
										<option value="19">นครปฐม</option>
										<option value="20">นครพนม</option>
										<option value="21" selected="selected">นครราชสีมา</option>
										<option value="22">นครศรีธรรมราช</option>
										<option value="23">นครสวรรค์</option>
										<option value="24">นนทบุรี</option>
										<option value="25">นราธิวาส</option>
										<option value="26">น่าน</option>
										<option value="77">บึงกาฬ</option>
										<option value="27">บุรีรัมย์</option>
										<option value="28">ปทุมธานี</option>
										<option value="29">ประจวบคีรีขันธ์</option>
										<option value="30">ปราจีนบุรี</option>
										<option value="31">ปัตตานี</option>
										<option value="32">พระนครศรีอยุธยา</option>
										<option value="33">พะเยา</option>
										<option value="39">พังงา</option>
										<option value="40">พัทลุง</option>
										<option value="34">พิจิตร</option>
										<option value="35">พิษณุโลก</option>
										<option value="37">เพชรบุรี</option>
										<option value="36">เพชรบูรณ์</option>
										<option value="38">แพร่</option>
										<option value="41">ภูเก็ต</option>
										<option value="43">มหาสารคาม</option>
										<option value="42">มุกดาหาร</option>
										<option value="44">แม่ฮ่องสอน</option>
										<option value="46">ยโสธร</option>
										<option value="45">ยะลา</option>
										<option value="47">ร้อยเอ็ด</option>
										<option value="48">ระนอง</option>
										<option value="49">ระยอง</option>
										<option value="50">ราชบุรี</option>
										<option value="51">ลพบุรี</option>
										<option value="52">ลำปาง</option>
										<option value="53">ลำพูน</option>
										<option value="54">เลย</option>
										<option value="55">ศรีสะเกษ</option>
										<option value="56">สกลนคร</option>
										<option value="57">สงขลา</option>
										<option value="58">สตูล</option>
										<option value="76">สมุทรปราการ</option>
										<option value="60">สมุทรสงคราม</option>
										<option value="59">สมุทรสาคร</option>
										<option value="61">สระแก้ว</option>
										<option value="62">สระบุรี</option>
										<option value="63">สิงห์บุรี</option>
										<option value="64">สุโขทัย</option>
										<option value="65">สุพรรณบุรี</option>
										<option value="66">สุราษฎร์ธานี</option>
										<option value="67">สุรินทร์</option>
										<option value="68">หนองคาย</option>
										<option value="69">หนองบัวลำภู</option>
										<option value="70">อ่างทอง</option>
										<option value="75">อำนาจเจริญ</option>
										<option value="73">อุดรธานี</option>
										<option value="74">อุตรดิตถ์</option>
										<option value="72">อุทัยธานี</option>
										<option value="71">อุบลราชธานี</option>
									</select>
                                </label>
								<label class="wrap-txt" for="shop_postalcod">
									รหัสไปรษณีย์ : 
                                    <input class="input-txt" id="shop_postalcode" type="text" placeholder="30310"/>
                                </label>
								<label class="wrap-txt" for="shop_phone">
									โทรศัพท์ติดต่อร้าน : 
                                    <input class="input-txt" id="shop_phone" type="text" placeholder="081-9999999"/>
                                </label>
																
								<label class="wrap-txt" for="sys_pass">
									ยืนยันรหัสผ่านสำหรับการอัพเดทข้อมูล : 
                                    <input class="input-txt" id="sys_pass" type="password" placeholder="ยืนยันรหัสผ่าน"/>
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