<div class='box'>
<h1>Student Information</h1>
<p>Student ID: <?= $student['student_id']; ?></p>
<p>Name: <?= $student['name']; ?></p>
<p>Course: <?= $student['course']; ?></p>
<p>Year Level: <?= $student['year']; ?></p>
<p>Section: <?= $student['section']; ?></p>
<p>Email: <?= $student['email']; ?></p>

<a href="<?= site_url('student'); ?>">Back to Home</a>
</div>
<link rel="stylesheet" href="<?= base_url('public/css/style.css'); ?>">
