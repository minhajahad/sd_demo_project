
<?php $__env->startSection('title', 'Add new students'); ?>
<?php $__env->startSection('page-content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>Add new Student</h4>
            <?php if(session('status')): ?>
            <?php endif; ?>
            <h4 class="aler alert-primary"><?php echo e(session('status')); ?></h4>
        </div>
        <div class="card-body">
            <form action="<?php echo e(url('/addstudent')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" >
            </div>
            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <input type="text" class="form-control" name="department">
            </div>
            <div class="mb-3">
                <label for="Gender" class="form-label">Gender</label><br>
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="male">Female
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">photo</label>
                <input type="file" class="form-control" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
      </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('students.studentmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\demo_project\resources\views/students/add_student.blade.php ENDPATH**/ ?>