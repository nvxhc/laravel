<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['name']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['name']); ?>
<?php foreach (array_filter((['name']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div x-data="{ linkHover: false, linkActive: false }">
    <div @mouseover="linkHover = true" @mouseleave="linkHover = false" @click="linkActive = !linkActive"
        class="flex items-center justify-between text-gray-400 hover:text-gray-100 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
        :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200"
                :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            <span class="ml-3"><?php echo e($name); ?></span>
        </div>
        <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none"
            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
    </div>
    <!-- start::Submenu -->
    <ul x-show="linkActive" x-cloak x-collapse.duration.300ms class="text-gray-400">
        <?php echo e($slot); ?>

    </ul>
    <!-- end::Submenu -->
</div><?php /**PATH C:\xampp\htdocs\laravel\resources\views/components/dropdown/dropdown.blade.php ENDPATH**/ ?>