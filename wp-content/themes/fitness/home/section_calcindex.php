<?php /*section_calcindex.php*/ ?>

<!-- calculate section -->
<section id="bmi" class="darkbox section_bg_scroll">
    <div class="innerdarkbox pb-0">
		<div class="container">
			<div class="row">
			  <div class="bmi-image col-md-1"></div> 
			  <div class="bmi-data col-md-10" style="; top: 9em;">
				<div class="row dhtmlgoodies_bmi_calculator">
					<div class="col-md-8 col-sm-8 calculator_form">
						<h2 class="h2n">КАЛЬКУЛЯТОР ИНДЕКСА МАССЫ</h2>
						<form name="bmi_calculator">
						  <div class="row bmi-calculator py-3">
							<div class="col-md-6 col-sm-6 col-xs-6">
								<label for="bmi_weight">Вес (кг)</label>
								<input class="textInput" type="text" id="bmi_weight" name="bmi_weight" placeholder="значение...">
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6">
							  <label for="bmi_height">Рост (см.)</label>
							  <input class="textInput" type="text" id="bmi_height" name="bmi_height" placeholder="значение...">
							</div>
							<div class="clearfix"></div>
							<div class="col-md-12 text-center">
							  <input type="button" onclick="calculateBMI()" value="ИМТ КАЛЬКУЛЯТОР" class="bmi_button">
							</div>
							<div class="clearfix"></div>
						  </div>
						</form>
					</div>
					<div class="col-md-4 col-sm-4 bmi_result">ВАШ ИМТ
						<div id="bmi_results_graph">
							<div class="bmi_value">0.00</div>
							<p class="bmi_obese">(норм)</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clear"></div>
			  </div>
			</div>
		</div>
    </div>
</section><!-- eof  calculate section --> 

