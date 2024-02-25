<div class="w-full flex justify-center h-screen items-center">
    <form id="login-form" class="mt-10 space-y-4" method="POST" action="<?php echo e(route('login_handle')); ?>">
        <?php echo csrf_field(); ?>
        <?php if($errors->any()): ?>
            <div class="text-red-500 text-sm" style="font-size: 10px">
                <?php echo e($errors->first()); ?>

            </div>
        <?php endif; ?>
        <?php if(session('success')): ?>
            <p class="text-green-700"><?php echo e(session('success')); ?></p>
        <?php endif; ?>
        <div>
            <input name="email" type="email" autocomplete="email" required class="w-full text-sm px-4 py-3 rounded outline-none border-2 focus:border-blue-500" placeholder="Email address" />
        </div>

        <div>
            <input name="password" type="password" autocomplete="current-password" required class="w-full text-sm px-4 py-3 rounded outline-none border-2 focus:border-blue-500" placeholder="Password" />
        </div>

        <div class="flex items-center justify-between gap-4">
            <div class="flex items-center">
                <label for="remember-me" class="ml-3 block text-sm">
                    Don't have an account yet ?
                </label>
            </div>
            <div>
                <a href="<?php echo e(route('register')); ?>" class="text-sm text-blue-600 hover:text-blue-500">
                    Register ?
                </a>
            </div>
        </div>
        <div class="!mt-10">
            <button type="submit" class="w-full py-2.5 px-4 text-sm rounded text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                Log in
            </button>
        </div>
    </form>
</div>
<?php /**PATH C:\Users\YouCode\Desktop\Team-A-News_Aggregator\Aggregator_App\resources\views/components/sign_in.blade.php ENDPATH**/ ?>