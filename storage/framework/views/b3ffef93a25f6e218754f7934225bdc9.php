<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $__env->yieldContent('title'); ?> - Aplicación Nacho</title>

        <!-- Styles -->


        <style>[x-cloak] { display: none !important; }</style>
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
             
        <!-- Scripts -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    </head>
    <body>
        <div 
            x-data="{ menuOpen: false }" 
            class="flex min-h-screen custom-scrollbar"
        >
            <!-- start::Black overlay -->
            <div :class="menuOpen ? 'block' : 'hidden'" @click="menuOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>
            <!-- end::Black overlay -->

            <?php echo $__env->make('layouts.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="lg:pl-64 w-full flex flex-col">
                <!-- start::Topbar -->
             <?php echo $__env->make('layouts.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   
                <!-- end::Topbar -->

                <!-- start:Page content -->
                <div class="h-full bg-gray-200 p-8">
                <?php echo $__env->yieldContent('content'); ?>    
                </div>
                <!-- end:Page content -->
            </div>
        </div>

        <script>
            // Stats by category
            document.addEventListener('alpine:init', () => {
                Alpine.data('statsByCategory', () => ({
                    items: [{
                            'name': 'Project 1',
                            'percent': '71',
                        },
                        {
                            'name': 'Project 2',
                            'percent': '63',
                        },
                        {
                            'name': 'Project 3',
                            'percent': '92',
                        },
                        {
                            'name': 'Project 4',
                            'percent': '84',
                        },
                    ],
                    currentItem: {
                        'name': 'Project 1',
                        'percent': '71',
                    }
                }));
            });

            // Project overview stats
            document.addEventListener('alpine:init', () => {
                Alpine.data('productOverviewStats', () => ({
                    project: {
                        'completed': 149,
                        'in_progress': 42,
                    }
                }));
            });


            // start::Chart 1
            const labels = [
                'January',
                'February',
                'Mart',
                'April',
                'May',
                'Jun',
                'July'
            ];

            const data_1 = {
                labels: labels,
                datasets: [{
                    label: 'My First Dataset',
                    data: [65, 59, 80, 81, 56, 55, 40],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(201, 203, 207, 0.2)'
                    ],
                    borderColor: [
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)',
                        'rgb(54, 162, 235)',
                        'rgb(153, 102, 255)',
                        'rgb(201, 203, 207)'
                    ],
                    borderWidth: 1
                }]
            };

            const config_1 = {
                type: 'bar',
                data: data_1,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                },
            };

            var chart_1 = new Chart(
                document.getElementById('chart_1'),
                config_1
            );

            // end::Chart 1

            // start::Chart 2
            const data_2 = {
                labels: [
                    'Eating',
                    'Drinking',
                    'Sleeping',
                    'Designing',
                    'Coding',
                    'Cycling',
                    'Running'
                ],
                datasets: [{
                    label: 'My First Dataset',
                    data: [65, 59, 90, 81, 56, 55, 40],
                    fill: true,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgb(255, 99, 132)',
                    pointBackgroundColor: 'rgb(255, 99, 132)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(255, 99, 132)'
                }, {
                    label: 'My Second Dataset',
                    data: [28, 48, 40, 19, 96, 27, 100],
                    fill: true,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgb(54, 162, 235)',
                    pointBackgroundColor: 'rgb(54, 162, 235)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(54, 162, 235)'
                }]
            };
            
            const config_2 = {
                type: 'radar',
                data: data_2,
                options: {
                    elements: {
                        line: {
                            borderWidth: 3
                        }
                    }
                },
            };

            var chart_2 = new Chart(
                document.getElementById('chart_2'),
                config_2
            );
            // end::Chart 2
        </script>
        <?php echo $__env->yieldContent('scripts'); ?>
        <?php echo $__env->yieldPushContent('scripts'); ?>
        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

    </body>
</html><?php /**PATH C:\xampp\htdocs\laravel\resources\views/layouts/dash.blade.php ENDPATH**/ ?>