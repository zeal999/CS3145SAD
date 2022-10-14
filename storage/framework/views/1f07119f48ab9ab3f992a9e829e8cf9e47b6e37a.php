<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#389af5",
                        },
                    },
                },
            };
        </script>
        <title>Uptown Corporate Hotel</title>
    </head>
    <body class="mb-48">
        <nav class="flex justify-between items-center mb-4">
<a href="/" class="hover:text-laravel"
                ><h1 class="flex space-x-6 mr-6 text-lg font-bold ">UptownCorporateHotel</h1></a>
            <ul class="flex space-x-6 mr-6 text-lg">
                <li>
                    <a href="/" class="hover:text-laravel"
                        >Home</a
                    >
                </li>
                <?php if(auth()->guard()->check()): ?>
                <li>
                    <a href="/salesorder" class="hover:text-laravel"
                        >Cashier</a
                    >
                </li>
                <li>
                    <a href="/saleshistory" class="hover:text-laravel"
                        >Sales</a
                    >
                </li>
                <li>
                    <a href="/inventory" class="hover:text-laravel"
                        > Inventory</a
                    >
                </li>
                <li>
                    <a href="/procurement" class="hover:text-laravel"
                        > Procurement</a
                    >
                </li>
                <li>
                    <a href="/supplier" class="hover:text-laravel"
                        > Supplier</a
                    >
                </li>
                <li>
                    <a href="/employee" class="hover:text-laravel"
                        > Employee</a
                    >
                </li>
                <?php endif; ?>
                <?php if(auth()->guard()->check()): ?>
                <li>
                    <i class="fa-solid fa-gear"></i>
                    <span class="font-bold">
                    <?php echo e(auth()->user()->name); ?>

                    </span>
                </li>

                <li>
                    <form class="inline" method="POST" action="/logout">
                    <?php echo csrf_field(); ?>
                    <button type="submit">
                       <i class="fa-solid fa-door-closed"></i>Log Out
                    </button>
                    </form>
                </li>

                <?php else: ?>
         
                <li>
                    <a href="login" class="hover:text-laravel"
                        ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a
                    >
                </li>
                <?php endif; ?>
            </ul>
        </nav>

        <main>
        
        <?php echo e($slot); ?>

        
        </main>

        <footer
            class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center"
        >
            <p class="ml-2">Uptown Corporate Hotel Store System</p>
        </footer>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.flash-message','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('flash-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </body>
</html>
 <?php /**PATH C:\Users\Nitro 5\Desktop\Uptown\Uptown\resources\views/components/layout.blade.php ENDPATH**/ ?>