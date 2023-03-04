
<?php $__env->startSection('title','Add New Student'); ?>
<?php $__env->startSection('page-content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <?php if(session('status')): ?>
                    <h6 class="alert alert-success"><?php echo e(session('status')); ?></h6>
                    <?php endif; ?>
                    <div class="card-header">
                        <h4>Add Students Info
                            <a href="<?php echo e(url('/')); ?>/student" class="btn btn-danger float-right">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(url('/')); ?>/add_student" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?> 

                            <div class="form-group mb-3">
                                <label for="">Student Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Gender</label><br>
                                <input type="radio" name="gender" id="gender" value="male">Male
                                <input type="radio" name="gender" id="gender" value="female">Female
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Course</label>
                                <input type="text" name="course" id="course" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Profile Photo</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Save Student</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('students.studentmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\demo_project\resources\views/students/create.blade.php ENDPATH**/ ?>