<?php $__env->startSection('content'); ?>
    <div>
        <div class="h-96"></div>
        <div class="h-96"></div>
    </div>

    <h2 class="text-lg font-semibold">Standard Contact Form</h2>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('contact-form', [])->html();
} elseif ($_instance->childHasBeenRendered('j7NcJHR')) {
    $componentId = $_instance->getRenderedChildComponentId('j7NcJHR');
    $componentTag = $_instance->getRenderedChildComponentTagName('j7NcJHR');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('j7NcJHR');
} else {
    $response = \Livewire\Livewire::mount('contact-form', []);
    $html = $response->html();
    $_instance->logRenderedChild('j7NcJHR', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/muhammadsyaiful/Documents/Project/laraveltesting/resources/views/examples.blade.php ENDPATH**/ ?>