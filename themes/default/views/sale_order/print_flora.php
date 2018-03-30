<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="<?php echo $assets ?>styles/theme.css" rel="stylesheet">
    <style type="text/css">
        html, body {
            background: #FFF;
        }
        body:before, body:after {
            display: none !important;
			 
        }
        .btn {
            border-radius: 0 !important;
            margin-right: 10px;
        }
		.moul{
		  font-family: Khmer OS Muol;
		}
		p,li{
			font-family: Khmer OS Battambang;
			line-height: 1.8;
			font-size: 15px;
		}

		/*p{
    	text-align:justify;
		}
		p:after {
		    content: "";
		    display: inline-block;
		    width: 100%;    
		}*/
		@media print{
			#ftext{
				font-size: 12px !important;
				color: #2B4666 !important;
			}
			p{
				line-height: 20px !important;
			}
			body{
				background-color: black;
			}
		}
		.foot{
			 font-family: Khmer OS Battambang;
		}
		li{
		  text-indent: -2em;
		}
		input[type=checkbox]{
			 font-size:15px;
		}
    </style>
</head>

<body style="width: 620px;margin: 0 auto;line-height: 20px;">
<!-- <input type="button" value="Print Div" onclick="PrintElem('#mydiv')" /> -->
		<div class="container">
			<div class="row col-lg-12">
				<div class="col-lg-8">
					<h3 class='text-center moul'><b>ពាក្យស្នើរសុំទិញ-លក់ផ្ទះ</b></h3><br>
				</div>
				<div class="col-lg-8">
						<p>ធ្វើនៅថ្ងៃទី <b><?php echo $date_day ?> </b>ខែ <b><?php echo $date_month ?></b> ឆ្នាំ <b><?php echo $date_year ?></b></p>
						<p><span style="padding-right:31px">១. អ្នកទិញ : លោក/លោកស្រី</span>
							<span style="padding-right: 35px !important;"><b> 
								<?php
								if($customer->name_kh || $customer->name){
									if($customer->name_kh){
									echo $customer->name_kh;}else{echo $customer->name;}
								}else{
									echo "………………………";
								}
								?>
							</b></span>
							<span style="padding-right:20px">អត្ត/ប័ណ្ណ </span>
								<span style="padding-right: 30px !important;"><b> 
									<?php if($customer->cf1 == ""){echo "……………………";}else{echo $customer->cf1;} ?> 
								</b></span>
							<span>	និងឈ្មោះ </span>
								<span style="padding: 5px !important;"><b><?=($jl_data->name!=""?$jl_data->name:".................")?></b></span>
						</p>
						<p>
							<span style="padding-right:35px">អត្ត/ប័ណ្ណ</span>
								<span style="padding-right: 57px !important;"> <b><?=($jl_data->identify_card!=""?$jl_data->identify_card:"...........")?></b></span> 
							<span style="padding-right:21px">អាស័យដ្ឋានផ្ទះលេខ </span> 
								<span style="padding-right: 18px !important;"><b>
									<?php if($customer->address == ""){echo "………………";}else{echo $customer->address;} ?>	
								</b></span>
							<span style="padding-right:20px">ផ្លូវលេខ </span>
								<span style="padding-right: 18px !important;"><b>
									<?php if($customer->street == ""){echo "…………";}else{echo $customer->street;} ?>
								</b></span>
							ភូមិ
								<span style="padding: 18px !important;"><b>
									<?php
									if($customer->village == ""){echo "…………………………";}else{echo $customer->village;} ?>
								</b></span>
						</p>
						<p>
							<span style="padding-right:37px">	ឃុំ/សង្កាត់ </span>
							<span style="padding-right: 104px !important;"><b>
								<?php if($customer->sangkat == ""){echo "…………………";}else{echo $customer->sangkat;} ?>
							</b></span>
							<span style="padding-right:59px">ស្រុក/ខណ្ឌ</span>
								<span style="padding-right: 79px !important;"><b>
									<?php if($customer->district  == ""){echo "……………………………………";}else{echo $customer->district ;} ?>
								</b></span> 
							ខេត្ត/រាជធានី
								<span style="padding: 18px !important;"><b> 
									<?php
									if($customer->city || $customer->state){
										if($customer->city){
											echo $customer->city;}else{echo $customer->state;}
									}else{
										echo "………………………";
									}
									?>
								</b></span>	
						</p>
						<p>២. ការទិញលក់: ប្រភេទផ្ទះ
								<span><b><?php if($rows->cf1  == ""){echo ".....................";}else{echo $rows->cf1;}
								  ?></b></span>
								  
							ដែលមានទទឹង
								<span style="padding: 7px !important;"><b><?php
								if($height  == ""){echo "………………";}else{echo $height;}
								 ?></b></span>
							ម៉ែត្រ, បណ្ដោយ
							
								<span style="padding: 12px !important;"><b><?php if($width  == ""){echo "………………";}else{echo $width;}
								  ?></b></span>
							ម៉ែត្រ
						</p>
						<p><span style="padding-right:10px">ផ្ទះលេខ </span>
								<span style="padding-right:10px"><b><?php if($rows->cf3){ echo $product->cf3; }else{
									echo "………………";
								} ?></b></span>
							ផ្លូវលេខ
								<span><b><?php if($rows->cf4){ echo $rows->cf4; }else{
									echo "………………";
								} ?></b></span>
							ទីតាំង
								<span style="padding-right:20px"><b><?php if($rows->cf2){ echo $rows->cf2; }else{
									echo "………………";
								} ?></b></span>
							រយះពេលសាងសង់
								<span><b>………………………</b></span>
							ខែ
						</p>
						<p>តម្លៃដើម
								<span style="padding-right: 18px !important;"><b><?php if($rows->unit_price){ echo $this->erp->formatMoney($rows->unit_price); }else{
									echo "………………………";
								} ?></b></span>
							<span style="padding-right:20px;">US$ បញ្ចុះតម្លៃ</span>
								<span style="padding-right: 12px !important;"><b><?php if($product->order_discount){ echo $this->erp->formatMoney($product->order_discount); }else{
									echo "……………………………";
								} ?></b></span>
								
							<? 
							$sale_price = ($rows->unit_price - $product->order_discount);
							
							
							?>
							<span style="padding-right:36px">US$ តម្លៃលក់ </span>
								<span style="padding-right: 52px !important;"><b><?php if($sale_price){ echo $this->erp->formatMoney($sale_price); }else{
									echo "………………………";
								} ?></b></span>
							US$
						</p>
						<?php if($inv->note){ ?>
							<p>តាមរយ:
								<span style="padding-right: 18px !important;"><b>…………………………</b></span>
							បរិយាយ
								<span style="padding-right: 18px !important;"><b><?php echo $inv->note; ?></b></span>
							</p>
						<?php }else{ ?>
							<p>តាមរយ:
								<span style="padding-right: 18px !important;"><b>…………………………</b></span>
							បរិយាយ
								<span style="padding-right: 18px !important;"><b>…………………………………………………………………………………</b></span>
							</p>
							<p><b>………………………………………………………………………………………………………………………………………</b></p>
						<?php } ?>
						<form action="" method="get">
							<p>
								<span>៣. គោលការណ៍បង់ :    </span>	
									
									
								  
									<?if($jl_data->principle_type != 0){
										if($jl_data->term_name){
										?>
											<input type="checkbox" value="" checked="checked"> ដំណាក់កាល
											<span style="padding-right: 18px !important;">
											<b><?php echo $jl_data->term_name;?></b></span>
										<?}?>
											
									<?}else{?>
										
										<input type="checkbox" value=""> ដំណាក់កាល
											<span style="padding-right: 18px !important;">
											<b>……………………</b></span>
									<?}?>
										
										<input type="checkbox" value=""> ផ្ដាច់
										<span style="padding-right: 18px !important;"><b>……………………</b></span>
									<?if($jl_data->term_id !=0  && $jl_data->principle_type == 0){
									  
										if($jl_data->description){?>
											<input type="checkbox" value="" checked="checked"> រំលស់
											<span style="padding-right: 18px !important;"><b>
												<?php echo $jl_data->description;?></b>
											</span>
								       <?php }else{ ?>
												<input type="checkbox" value=""> រំលស់
												<span style="padding-right: 18px !important;"><b>………………</b>
												</span>
											<?}?>
									<?}else{?>
										<input type="checkbox" value=""> រំលស់
										<span style="padding-right: 18px !important;"><b>………………</b>
										</span>
									<?}?>
								 
							</p>
						</form>
						 <div class="col-lg-12 col-xs-12" style="padding-left: 0px;">
							<br>
							<table class="table table-bordered" style="width: 99%;margin: 0 auto;">
								<thead  style="font-size: 12px;font-family: 'Moul', cursive;">
									<tr>
										<td style="width: 5%;text-align: center;">
											<p><u>លេខ</u></p>
											<p><u>រៀង</u></p>
										</td>
										<td style="width: 15%;text-align: center;">
											<p><u>កាលបរិច្ឆេទ</u></p>
											<p><u>បង់ប្រាក់</u></p>
										</td>
										<td style="width: 15%;text-align: center;">
											<p><u>ទឹកប្រាក់បង់</u></p>
											<p><u>ប្រចាំខែ</u></p>
										</td>
										<td style="width: 8%;text-align: center;">
											<p></p>
											<p><u>ការប្រាក់</u></p>
										</td>
										<td style="width: 10%;text-align: center;">
											<p></p>
											<p><u>ប្រាក់ដើម</u></p>
										</td>
										<td style="width: 18%;text-align: center;">
											<p></p>
											<p><u>សមតុល្យ</u></p>
										</td>
										<td style="width: 10%;text-align: center;">
											<p><u>ចំណាយ</u></p>
											<p><u>ផ្សេងៗ</u></p>
										</td>
										<td style="width: 10%;text-align: center;">
											<p></p>
											<p><u>ថ្ងៃបង់ប្រាក់</u></p>
										</td>
										<td style="width: 10%;text-align: center;">
											<p></p>
											<p><u>ផ្សេងៗ</u></p>
										</td>
									</tr>
								</thead>
								<?php
											$total_principle = 0;
											$total_interest = 0;
											$total_payment = 0;
											$total_alls = 0 ;
											$total_haft = 0 ;
											$total_insurence = 0;
											$total_pay = 0;
											$countrows = count($countloans);
											$countrow  = count($countloans) /2;
											$counter = 1;
											
											if(array($loan)) {
												foreach($loan as $pt){
														$total_schedule += $pt->interest+$pt->principle;
														$total_prin += $pt->principle;
													
														$princ           = $this->erp->formatMoney($pt->principle);
														$interest        = $this->erp->formatMoney($pt->interest);                                  
														$overdue_amt     = (($pt->paid_amount > 0)? $pt->overdue_amount : 0);
														$payment         = $pt->payment + $overdue_amt;
														$paid            = $pt->paid_amount? $pt->paid_amount : 0;
														
														$paid_amount     = $paid + (($pt->paid_amount > 0)? $overdue_amt : 0);
														$balance         = $payment - $paid_amount;
														$balance_moeny   = $this->erp->formatMoney($pt->balance);
														
														$Principles      = $this->erp->formatMoney($pt->payment-$pt->interest);
														$interests       = $this->erp->formatMoney($pt->interest);
														
													echo '<tr class="row-data" '.(($pt->paid_amount > 0)? 'style="pointer-events:none;" disabled="disabled"':'').'>
														<td class="t_c" style="padding-left:5px; padding-right: 5px; height: 25px;text-align:center;">'. $pt->period .'</td>
														<td class="t_c" style="padding-left:5px; padding-right:5px;text-align:center;">'. $this->erp->hrsd($pt->dateline) .'</td>
														<td class="t_r" style="padding-left:5px; padding-right:5px;text-align:center;">'. $Principles .'</td>
														<td class="t_r" style="padding-left:5px; padding-right:5px;text-align:center;">'. $interests .'</td>';
														$balances = (($pt->balance > 0)? $pt->balance : 0);
														$balances = str_replace(',', '', $this->erp->formatMoney($balances));
														$principle_amt = str_replace(',', '', $Principles);
														$loan_balance = $balances + $principle_amt;
														$haft_paid = 0;
														$insurences_paid = 0;
														$all_paid = 0;
													
														$Principles_amount = str_replace(',', '', $Principles);
														$interests_amount = str_replace(',', '', $interests);
														if($pt->period >= 1 && $pt->period <= $countrow){
															$payment = $Principles_amount + $interests_amount + $all_paid + $haft_paid + $insurences_paid;
														}else{
															$payment = $Principles_amount + $interests_amount + $all_paid;
														}
														$balances = (($pt->balance > 0)? $pt->balance : 0);
													echo '<td class="t_r" style="padding-left:5px;padding-right:5px;text-align:center;">'. $this->erp->formatMoney($payment) .'</td>
														  <td class="t_r" style="padding-left:5px;padding-right:5px;text-align:center;">'. $this->erp->formatMoney($balances) .'</td><td></td><td></td><td></td>
														 '; 
													$sum_payment  += $pt->payment;
												}
											}
										?>
							 </table>
							 <br>
						</div>
						<div>
							<p>
								
								**បង់ផ្តាច់
									<span style="padding-right: 18px !important;"><?php echo $sum_payment ;?></span>
								$ក្រោយពេលផ្ទះសាងសង់រួចរាល់<span style="padding-right: 18px !important;"> </span>
							</p>
							<p>
								
								**បង់ដំណាក់កាល
									<span style="padding-right: 18px !important;"><?php echo $sum_payment ;?></span>
								$រហូតដល់ផ្ទះសាងសង់រួចរាល់​ ដោយគិតចាប់ពីថ្ងៃទី
									<span style="padding-right: 18px !important;"><?= $this->erp->KhmerNumDate($date_day); ?></span>
								ខែ
									<span style="padding-right: 18px !important;"><?= $this->erp->KhmerMonth($date_month); ?></span>
								ឆ្នាំ
									<span style="padding-right: 18px !important;"><?= $date_year; ?></span>
							</p>
							<p>
								
								**រំលស់
									<span style="padding-right: 41px !important;"><?php echo $sum_payment ;?></span>
								$សំរាប់រយះពេល<span style="padding-right: 18px !important;"> <?= $inv->term / 365 ?></span>ឆ្នាំ(<span style="padding-right: 18px !important;"> <?= ($inv->term / 365) * 12 ?></span>ខែ) ដោយគិតចាប់ពីថ្ងៃទី
									<span style="padding-right: 18px !important;"><?= $this->erp->KhmerNumDate($date_day); ?></span>
								ខែ
									<span style="padding-right: 18px !important;"><?= $this->erp->KhmerMonth($date_month); ?></span>
								ឆ្នាំ
									<span style="padding-right: 18px !important;"><?= $date_year; ?></span>
							</p>
						</div>
						<div class='row col-lg-12'>
							<br/>
							<p><span style='margin-left: 7%'>អ្នកទិញ</span>
							<span style='margin-left: 14%'>អ្នកលក់</span>
							<span style='margin-left: 21%'>អ្នកពិនិត្យ</span>
							<span style='margin-left: 15%'>អ្នកអនុញ្ញាត</span></p>
						</div><br><br><br><br><br><br><br>
						
						<div>
							<table style="width:95%">
								<tr>
									<td>ឈ្មោះ</td>
									<td><b><?= ($customer->name?$customer->name:"………………"); ?></b></td>
									<td>ឈ្មោះ</td>
									<td><b><?= ($seller->username?($seller->first_name).' '.($seller->last_name):"………………"); ?></b></td>
									<td>ឈ្មោះ</td>
									<td>………………</td>
									<td>ឈ្មោះ</td>
									<td>………………</td>
									<td>ឈ្មោះ</td>
									<td>………………</td>
								</tr>
								<tr style="height:20px">
									<td></td>
								</tr>
								<tr>
									<td>ទូរស័ព្ទ</td>
									<td><b><?=($customer->phone?$customer->phone:"………………"); ?></b></td>
									<td>ទូរស័ព្ទ</td>
									<td><b><?=($seller->phone?$seller->phone:"………………"); ?></b></td>
									<td>ទូរស័ព្ទ</td>
									<td>………………</td>
									<td>ទូរស័ព្ទ</td>
									<td>………………</td>
									<td>ទូរស័ព្ទ</td>
									<td>………………</td>
								</tr>
									<tr style="height:20px">
									<td></td>
								</tr>
								<tr>
									<td>ថ្ងៃទី</td>
									<td><b><?=date("d/m/Y",strtotime($jl_data->down_date?$jl_data->down_date:"………………")); ?></b></td>
									<td>ថ្ងៃទី</td>
									<td><b><?=date("d/m/Y",strtotime($jl_data->down_date?$jl_data->down_date:"………………")); ?></b></td>
									<td>ថ្ងៃទី</td>
									<td>………………</td>
									<td>ថ្ងៃទី</td>
									<td>………………</td>
									<td>ថ្ងៃទី</td>
									<td>………………</td>
								</tr>
								<tr style="height:20px">
									<td></td>
								</tr>
							</table>
						
						
						</div>
						
						<p><u>បញ្ជាក់</u> : ប្រាក់ដែលកក់រួច មិនអាចដកវិញបានទេ ។</p>
						<p class='foot'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ប្រសិនបើអ្នកទិញមិនបានបង់ប្រាក់បន្ថែមតាមកំណត់នោះ​ ប្រាក់កក់នឹងចាត់ទុកជាមោឃៈដោយស្វ័យប្រវិិត្ត</p>
						<br>
						<div style="font-size: 12px;color:#2B4666" class='foot'>
							<span id='ftext'>បុរី អាទាំងមាស​ ( គំរោងឌឹផ្លរ៉ា )</span><br>
							<span id='ftext'>ការិយាល័យកណ្ដាល: សង្កាត់បាក់ខែង ខ័ណ្ឌជ្រោយចង្វា រាជធានីភ្នំពេញ</span><br>
							<span id='ftext'>ទូរស័ព្ទលេខ: 061 77 67 67 / 097 777 0678 គេហទំព័រ : www.boreytheflora.com</span>
						</div>
				</div>
               </div>
            </div>
</body>
</html>