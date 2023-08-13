<?php
    function ordinal_suffix($num){
        $num = $num % 100; // protect against large numbers
        if ($num < 11 || $num > 13) {
            switch ($num % 10) {
                case 1:
                    return $num . 'st';
                case 2:
                    return $num . 'nd';
                case 3:
                    return $num . 'rd';
            }
        }
        return $num . 'th';
    }

    $rid = '';
    $faculty_id = '';
    $subject_id = '';
    if (isset($_GET['rid']))
        $rid = $_GET['rid'];
    if (isset($_GET['fid']))
        $faculty_id = $_GET['fid'];
    if (isset($_GET['sid']))
        $subject_id = $_GET['sid'];
    $restriction = $conn->query("SELECT r.id,s.id as sid,f.id as fid,concat(f.firstname,' ',f.lastname) as faculty,s.code,s.subject FROM restriction_list r inner join faculty_list f on f.id = r.faculty_id inner join subject_list s on s.id = r.subject_id where academic_id ={$_SESSION['academic']['id']} and class_id = {$_SESSION['login_class_id']} and r.id not in (SELECT restriction_id from evaluation_list where academic_id ={$_SESSION['academic']['id']} and student_id = {$_SESSION['login_id']} ) ");
?>

<div class="col-lg-12">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <?php
                while ($row = $restriction->fetch_array()) :
                    if (empty($rid)) {
                        $rid = $row['id'];
                        $faculty_id = $row['fid'];
                        $subject_id = $row['sid'];
                    }
                ?>
                    <a style="background-color: #f74780;" class="list-group-item list-group-item-action <?php echo isset($rid) && $rid == $row['id'] ? 'active' : '' ?>" href="./index.php?page=evaluate&rid=<?php echo $row['id'] ?>&sid=<?php echo $row['sid'] ?>&fid=<?php echo $row['fid'] ?>">Professor: <?php echo ucwords($row['faculty']) . ' <br> Subject: (' . $row["code"] . ') ' . $row['subject'] ?></a>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card card-outline card-info rounded-lg" style="border-top: #f74780">
                <div class="card-header">
                    <b>Evaluation Questionnaire for Academic: <?php echo $_SESSION['academic']['year'] . ' | ' . (ordinal_suffix($_SESSION['academic']['semester'])) ?> Semester</b>
                </div>
                <div class="card-body">
                    <!-- ... RATING LEGEND ... -->
                    <fieldset class="border border-info p-2 w-100 mb-4">
                        <legend class="w-auto">Rating Legend</legend>
                        <div class="space-x-2 text-center mb-4">
                            <span class="font-bold">0</span>
                            <span>Not Observed</span>
                            <span class="font-bold">1</span>
                            <span>Small Extent</span>
                            <span class="font-bold">2</span>
                            <span>Fair Extent</span>
                            <span class="font-bold">3</span>
                            <span>Moderate Extent</span>
                            <span class="font-bold">4</span>
                            <span>Great Extent</span>
                            <span class="font-bold">5</span>
                            <span>Very Great Extent</span>
                        </div>
                    </fieldset>

                    <!-- MAIN FORM FOR THE EVALUATION -->
                    <form id="manage-evaluation">
                    <div class="fixed inset-0 flex items-center justify-center z-50 hidden" id="alertModal">
                        <!-- Modal Overlay with Background Color and Opacity -->
                        <div class="absolute inset-0 bg-gray-100 opacity-75"></div>

                        <!-- Modal Content -->
                        <div class="bg-white p-8 rounded shadow-md w-1/3 relative">
                            <div class="mb-4">
                                <h3 class="text-lg font-semibold">Alert</h3>
                            </div>
                            <p class="text-gray-700">Please answer all questions before proceeding.</p>
                            <div class="mt-6 flex justify-end">
                                <button type="button" class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400" id="closeAlertBtn">Close</button>
                            </div>
                        </div>
                    </div>
                        <!-- ... Your existing hidden input fields ... -->
                        <input type="hidden" name="class_id" value="<?php echo $_SESSION['login_class_id'] ?>">
						<input type="hidden" name="faculty_id" value="<?php echo $faculty_id ?>">
						<input type="hidden" name="restriction_id" value="<?php echo $rid ?>">
						<input type="hidden" name="subject_id" value="<?php echo $subject_id ?>">
						<input type="hidden" name="student_name" value="<?php echo $_SESSION['login_name'] ?>">
						<input type="hidden" name="academic_id" value="<?php echo $_SESSION['academic']['id'] ?>">
						<div class="clear-fix mt-2"></div>

                        <div class="clear-fix mt-2"></div>
                        <?php
                        $q_arr = array();
                        $criteria = $conn->query("SELECT * FROM criteria_list where id in (SELECT criteria_id FROM question_list where academic_id = {$_SESSION['academic']['id']} ) order by abs(order_by) asc ");
                        while ($crow = $criteria->fetch_assoc()) :
                        ?>
                        <div class="form-step">
                            <div class="form-step-content">
                                <table class="table table-condensed">
                                    <!-- ... Your existing table headers ... -->
                                    <thead>
									    <tr class="bg-gradient-to-br from-rose-200 via-rose-100 to-rose-50">
									    	<th class=" p-1" style="vertical-align:middle;"><b><?php echo $crow['criteria'] ?></b></th>
									    	<th class="text-center">1</th>
									    	<th class="text-center">2</th>
									    	<th class="text-center">3</th>
									    	<th class="text-center">4</th>
									    	<th class="text-center">5</th>
									    </tr>
								    </thead>
                                    <tbody class="tr-sortable">
                                        <?php
                                        $questions = $conn->query("SELECT * FROM question_list where criteria_id = {$crow['id']} and academic_id = {$_SESSION['academic']['id']} order by abs(order_by) asc ");
                                        while ($row = $questions->fetch_assoc()) :
                                            $q_arr[$row['id']] = $row;
                                        ?>
                                        <tr class="bg-white question-row">
                                            <td class="p-1" width="40%">
                                                <?php echo $row['question'] ?>
                                                <input type="hidden" name="qid[]" value="<?php echo $row['id'] ?>">
                                            </td>
                                            <?php for ($c = 1; $c <= 5; $c++) : ?>
                                                <td class="text-center">
                                                    <div class="icheck-success d-inline">
                                                        <input type="radio" name="rate[<?php echo $row['id'] ?>]" <?php echo $c == "" ? "checked" : '' ?> id="qradio<?php echo $row['id'] . '_' . $c ?>" value="<?php echo $c ?>">
                                                        <label for="qradio<?php echo $row['id'] . '_' . $c ?>">
                                                        </label>
                                                    </div>
                                                </td>
                                            <?php endfor; ?>
                                        </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <?php endwhile; ?>

                        <!-- NAVIGATION BUTTONS -->
                        <div class="flex space-x-2 mt-4">
                            <button type="button" class="px-4 py-2 rounded-full bg-pink-300 text-white text-base font-semibold hover:bg-pink-200" id="nextStepBtn">Next Step</button>
                            <button type="button" class="px-4 py-2 rounded-full bg-pink-300 text-white text-base font-semibold hidden hover:bg-pink-200" id="submitBtn" style="display: none;">Submit</button>
                            <button type="button" class="px-4 py-2 rounded-full bg-pink-300 text-white text-base font-semibold hidden hover:bg-pink-200" id="prevStepBtn" style="display: none;">Previous</button>
                        </div>
                        <!-- END OF NAVIGATION BUTTONS -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        var currentStep = 0;
        var maxStep = $('.form-step').length - 1;
        var formSteps = $('.form-step');
        var prevButton = $('#prevStepBtn');

        formSteps.hide().eq(currentStep).show();
        
		if ('<?php echo $_SESSION['academic']['status'] ?>' == 0) {
			uni_modal("Information", "<?php echo $_SESSION['login_view_folder'] ?>not_started.php")
		} else if ('<?php echo $_SESSION['academic']['status'] ?>' == 2) {
			uni_modal("Information", "<?php echo $_SESSION['login_view_folder'] ?>closed.php")
		} else if ('<?php echo $_SESSION['academic']['status'] ?>' == 2) {
			uni_modal("Information", "<?php echo $_SESSION['login_view_folder'] ?>closed.php")
		}
		if (<?php echo !empty($rid) ? 1 : 0 ?> == 1){
            uni_modal("Information", "<?php echo $_SESSION['login_view_folder'] ?>done.php")
        }

        $('#nextStepBtn').on('click', function() {
            console.log("Next button clicked");

            // Add your form validation logic here
            var currentForm = formSteps.eq(currentStep);
            var questionRows = currentForm.find('.question-row');

            // Check if all questions have at least one checked radio button
            var allQuestionsChecked = questionRows.toArray().every(function(row) {
                return $(row).find('input[type="radio"]:checked').length > 0;
            });

            if (!allQuestionsChecked) {
                $('#alertModal').removeClass('hidden'); // Show the modal
                return;
            }

            // Rest of your existing code
            if (currentStep < maxStep) {
                formSteps.eq(currentStep).hide();
                currentStep++;
                formSteps.eq(currentStep).show();
                console.log("Current step:", currentStep);
                if (currentStep >= 1) {
                    prevButton.show();
                }
                if (currentStep === maxStep - 1) {
                    $('#nextStepBtn').hide();
                    $('#submitBtn').show();
                }
            }
        });

        $('#closeAlertBtn').on('click', function() {
            $('#alertModal').addClass('hidden'); // Hide the modal
        });

        $('#prevStepBtn').on('click', function() {
            if (currentStep > 0) {
                formSteps.eq(currentStep).hide();
                currentStep--;
                formSteps.eq(currentStep).show();
                if (currentStep === 0) {
                    prevButton.hide();
                }
                if (currentStep < maxStep - 1) {
                    $('#nextStepBtn').show();
                    $('#submitBtn').hide();
                }
            }
        });

        $('#manage-evaluation').submit(function(e) {
            e.preventDefault();
            start_load()
            $.ajax({
                url: 'ajax.php?action=save_evaluation&' + new Date().getTime(),
                method: 'POST',
                data: $(this).serialize(),
                success: function(resp) {
                    if (resp == 1) {
                        alert_toast("Data successfully saved.", "success");
                        setTimeout(function() {
                            location.reload()
                        }, 1750)
                        console.log("Success!" , resp);
                    }
                }
            })
        })        
    });
</script>



