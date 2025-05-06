<?php
include "header.php";

include "student_action.php";
?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 style="text-align:center;">Student Admission Form</h2>  
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php if ($message): ?>
                    <p class="message"><?= htmlspecialchars($message) ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="post" action="">
                    <div class="form-group">
                        <label for="student_name" class="text-light">Full Name:</label>
                        <input type="text" name="student_name" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="student_email" class="text-light">Email:</label>
                        <input type="email" name="student_email" class="form-control"  required>
                    </div>

                    <div class="form-group">
                        <label for="student_phone" class="text-light">Phone:</label>
                        <input type="text" name="student_phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="student_dob" class="text-light">Date of Birth:</label>
                        <input type="date" name="student_dob" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="student_address" class="text-light">Address:</label>
                        <textarea name="student_address" rows="4" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="clg_id" class="text-light">Select College:</label>
                        <select name="clg_id" required class="form-control">
                            <option value="na" disabled selected>-- Select College --</option>
                            <?php
                            if ($college_result->num_rows > 0) {
                                while($row = $college_result->fetch_assoc()) {
                                    echo "<option value='" . $row['clg_id'] . "'>" . htmlspecialchars($row['clg_name']) . "</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="course_applied" class="text-light">Course Applied For:</label>
                        <select name="course_applied" id="course_applied" class="form-control" required>
                            <option value="">-- Select Course --</option>
                        </select>
                    </div>

                    <input type="submit" class="btn btn-success" value="Submit">
                </form>
            </div>
        </div>
    </div>
    

<?php

include "footer.php";

?>


<script>
document.querySelector('select[name="clg_id"]').addEventListener('change', function () {
    const clgId = this.value;
    const courseSelect = document.getElementById('course_applied');
    
    // Clear old options
    courseSelect.innerHTML = '<option value="">Loading...</option>';

    fetch('get_courses.php?clg_id=' + clgId)
        .then(response => response.json())
        .then(data => {
            courseSelect.innerHTML = '<option value="">-- Select Course --</option>';
            data.forEach(course => {
                const option = document.createElement('option');
                option.value = course.course_name;
                option.textContent = course.course_name;
                courseSelect.appendChild(option);
            });
        })
        .catch(error => {
            courseSelect.innerHTML = '<option value="">Error loading courses</option>';
            console.error('Error:', error);
        });
});
</script>
