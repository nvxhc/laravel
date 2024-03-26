<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['href'=>'#','name']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['href'=>'#','name']); ?>
<?php foreach (array_filter((['href'=>'#','name']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
    <a 
        href="<?php echo e($href); ?>"
        class="flex items-center"
    >
        <span class="mr-2 text-sm">&bull;</span>
        <span class="overflow-ellipsis"><?php echo e($name); ?></span>
    </a>
</li><?php /**PATH C:\xampp\htdocs\laravel\resources\views/components/dropdown/dropdown2.blade.php ENDPATH**/ ?>