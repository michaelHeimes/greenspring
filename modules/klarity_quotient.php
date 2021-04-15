<?php
	$klarityTitle = get_sub_field( 'klarity_quotient_title' );
	$klarityIntro = get_sub_field( 'klarity_quotient_intro' );
	$klarityFormIntro = get_sub_field( 'klarity_quotient_form_lead-in' );
	$klarityDisclaimer = get_sub_field( 'klarity_quotient_disclaimer' );
	$numSections = count( get_sub_field( 'klarity_quotient_quiz_section' ) );
	$counter = 1;
?>


<section class="klarity module">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">

			<div class="cell small-12">
									
			<h2><?= $klarityTitle; ?></h2>
			<?= $klarityIntro; ?>
            <?php if( have_rows( 'klarity_quotient_quiz_section' )):
                //// arrays of data that will be localized for JavaScript
                $answersValuesArray = array();
                $sectionTitlesArray = array();
                $allFeedbackArray = array();
                $allQuestionsArray = array();
            ?>

				<form id="kquotient" name="kquotient">

					
					
					
					<?php while( have_rows( 'klarity_quotient_quiz_section' )): the_row(); ?>
                    <?php
                        $sectionTitle = get_sub_field( 'quiz_section_title' );
                        $sectionSubTitle = get_sub_field( 'quiz_section_subtitle' );
                        $formOrButtons = get_sub_field( 'freeform_or_radio_buttons' );
                        $formGraphic = get_sub_field( 'natural_language_form_graphic' );
                        //// mathematical values for quiz answers begin here
                        $valueYes = get_sub_field( 'value_for_yes' );
                        $valueYes = (int)$valueYes;
                        $valueNo = get_sub_field( 'value_for_no' );
                        $valueNo = (int)$valueNo;
                        $valueNotSure = get_sub_field( 'value_for_notsure' );
                        $valueNotSure = (int)$valueNotSure;
                        $tempAnswerValues = [ $valueYes, $valueNo, $valueNotSure ];
                        //// only push if there is a non-zero value present
                        $dowepush = false;
                        foreach ($tempAnswerValues as &$value) {
                            if($value !== 0){
                                $dowepush = true;
                            }
                        }
                        if( $dowepush ){
                            array_push($answersValuesArray, $tempAnswerValues);
                            array_push($sectionTitlesArray, $sectionTitle);
                        }
                        //// end storing mathematical values
                    ?>

                    <div id="quiz-section-<?=$counter;?>" class="form-section tab <?= $formOrButtons; ?>">
                        <h4 class="section-title"><?= $sectionTitle; ?></h4>
                        <?php echo "<h5>Section " . $counter . " of " . $numSections . "</h5>";  ?>
                        <?php
                            $eachPercent = 100/$numSections;
                            $fillPercent = $eachPercent*($counter-1);
                        ?>
                        <div class="status-bar">
                            <div class="status-bar-fill" style="width: <?=$fillPercent?>%;"></div>
                        </div>
                        <h5 class="section-subtitle"><?= $sectionSubTitle; ?></h5>

                        <?php if($formOrButtons == "freeform"): ?>
                            <?php if( have_rows( 'natural_language_form' )):
                                $output = "";
                                $interiorCounter = 0; //// will not be sequential necessarily, but will give unique numbers for ids
                                //// this code pulls data for segments of text or drop-downs or inputs
                                //// I think it's a pretty cool solution to allow end-users to build/edit a natural language form ?>
                                <div class="grid-x grid-padding-x">
                                    <div class="cell small-9 natural-language-content">
                                    <?php while( have_rows( 'natural_language_form' )): the_row();
                                        $pieceType = get_sub_field( 'text_or_list' );
                                        $nextSegment = "";

                                        if($pieceType == 'text'){
                                            $nextSegment = get_sub_field( 'nlf_text' );
                                            $nextSegment = $nextSegment . " ";
                                        }elseif($pieceType == 'list'){
                                            $listName = get_sub_field( 'list_name' );
                                            $nextSegmentPre = get_sub_field( 'nlf_list' );
	                                        $nextSegmentPre = str_replace("\,","&#44;",$nextSegmentPre);
                                            $nextSegmentArray = (explode(",",$nextSegmentPre));
	                                        $listPlaceholder = get_sub_field( 'nlf_list_placeholder' );

                                            $nextSegment = "<div class='select-wrapper'><input type='text' name='".$listName."' id='id-".$interiorCounter."' placeholder='".$listPlaceholder."'/><i class='fa fa-angle-down' aria-hidden='true'></i><ul class='select-list'>";
                                            foreach ($nextSegmentArray as &$value) {
                                                $nextSegment = $nextSegment . "<li data-value='".$value."' >".$value."</li>";
                                            }
                                            $nextSegment = $nextSegment . "</ul></div>";
                                        }else{
                                            $nextSegmentPre = get_sub_field( 'input' );
	                                        $formname = get_sub_field( 'input_name' );
                                            $nextSegment = "<input type='text' name='".$formname."' placeholder='".$nextSegmentPre."'>";
                                        }
                                        $output = $output . $nextSegment;
                                        $interiorCounter++;
                                        ?>
                                    <?php endwhile;  echo $output; ?>
                                    </div>
                                    <div class="cell small-3">
                                        <div><img src="<?= $formGraphic['url'] ?>" alt="<?= $formGraphic['url'] ?>"/></div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ///// end $formOrButtons = freeform ?>

                        <?php if($formOrButtons == "radio"): ?>
                            <?php if( have_rows( 'radio_button_questions' )):
                                $qcounter = 0;
                                $tempSectionFeedback = array();
                                $tempQuestions = array();
                                ?>
                                <div class="radio-question-header hidden-xs">
	                                <div class="radio-answers grid-x grid-padding-x align-right">
		                                <div class="pull-right cell small-6 medium-5 large-4">
			                                <div class="grid-x grid-padding-x">
				                                <div class="cell small-4 text-center">Yes</div>
				                                <div class="cell small-4 text-center">No</div>
				                                <div class="cell small-4 text-center">Not Sure</div>
			                                </div>
		                                </div>
	                            	</div>
	                            </div>
                                <?php while( have_rows( 'radio_button_questions' )): the_row();
                                    $tempFeedback = array();

                                    $radioQuestion = get_sub_field( 'question' );
                                    $radioYes = get_sub_field( 'feedback_yes' );
                                    $radioNo = get_sub_field( 'feedback_no' );
                                    $radioNotSure = get_sub_field( 'feedback_not_sure' );
                                    $radioName = $counter . "-" . $qcounter;
                                    //array_push($allFeedbackArray, $radioYes);
                                    array_push($tempFeedback, $radioYes);
                                    array_push($tempFeedback, $radioNo);
                                    array_push($tempFeedback, $radioNotSure);
                                    array_push($tempSectionFeedback, $tempFeedback);
                                    array_push($tempQuestions, $radioQuestion);

                                    ?>
                                    <div class="radio-question grid-x grid-padding-x">
                                        <div class="cell small-6 medium-7 large-8">
                                            <div class="question"><?= $radioQuestion; ?></div>
                                        </div>
                                        <div class="cell small-6 medium-5 large-4">
                                            <div class="radio-answers grid-x grid-padding-x"> <?php //// validation relies on this nesting so if you change structure test validation /// ?>
                                                <input type="radio" id="option-<?= $radioName; ?>-1" name="option-<?= $radioName; ?>" value="0" ><label class="cell small-4" for="option-<?= $radioName; ?>-1"><span class="radio-custom"><span></span></span><span class="show-for-sr">Yes</span></label>
                                                <input type="radio" id="option-<?= $radioName; ?>-2" name="option-<?= $radioName; ?>" value="1"><label class="cell small-4" for="option-<?= $radioName; ?>-2"><span class="radio-custom"><span></span></span><span class="show-for-sr">No</span></label>
                                                <input type="radio" id="option-<?= $radioName; ?>-3" name="option-<?= $radioName; ?>" value="2"><label class="cell small-4" for="option-<?= $radioName; ?>-3"><span class="radio-custom"><span></span></span><span class="show-for-sr">Not Sure</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $qcounter++;
                                    ?>
                                <?php endwhile;
                                    array_push($allFeedbackArray, $tempSectionFeedback);
                                    $tempSectionFeedback = [];
                                    array_push($allQuestionsArray, $tempQuestions);
                                    $tempQuestions = [];
                                ?>
                            <?php endif; ?>
                        <?php endif; //// end $formOrButtons == radio ?>

                        <?php if($counter < $numSections): ?>

                        <?php endif; ?>
					</div>

					<?php $counter++; endwhile;  ?>
					<div id="form-buttons" > <!--  -->
						<div>
							<button type="button" id="prevBtn" class="button">Previous</button>
							<button type="button" id="nextBtn" class="button">Next</button>
						</div>
					</div>
				</form>

				<div id="klarity-form-intro">
					<?php //// this gets populated dynamically ?>
				</div>

				<div id="final-form">
					<h5>Results</h5>
                    <div class="status-bar">
                        <div class="status-bar-fill" style="width: 100%;"></div>
                    </div>
					<?php //$prepShortcode = "[gravityform id=2 title=false description=true ajax=true tabindex=49 field_values='job-data=" . get_the_title() . "']";

					echo do_shortcode( '[gravityform id=3 title=false description=false ajax=true tabindex=49]' );
					//echo $klarityDisclaimer; ?>
				</div>

				<div id="klarity-disclaimer">
					<?php //// this gets populated dynamically ?>
				</div>
                <?php
                    wp_localize_script('site-js', 'kq_script_vars', array(
                        'answerValuesArray' => $answersValuesArray,
                        'sectionTitlesArray' => $sectionTitlesArray,
                        'allFeedbackArray' => $allFeedbackArray,
                        'allQuestionsArray' => $allQuestionsArray,
                        'klarityFormIntro' => $klarityFormIntro,
                        'klarityDisclaimer' => $klarityDisclaimer
                    )
                    );
                ?>
            <?php endif; ?>

			</div>
					
		</div>
	</div>
</section>