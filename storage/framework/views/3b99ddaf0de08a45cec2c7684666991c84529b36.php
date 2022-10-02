<?php $__env->startComponent('mail::message'); ?>
# Contact Form Submission

From: <?php echo e($contact['name']); ?>


Email: <?php echo e($contact['email']); ?>


Phone: <?php echo e($contact['phone']); ?>


Message: <?php echo e($contact['message']); ?>


<?php $__env->startComponent('mail::button', ['url' => '']); ?>
Button Text
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /Users/muhammadsyaiful/Documents/Project/laraveltesting/resources/views/emails/contact-form-email.blade.php ENDPATH**/ ?>