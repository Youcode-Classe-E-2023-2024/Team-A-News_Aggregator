<div class="w-full flex justify-center h-screen items-center">
    <form id="registration-form" class="border border-gray-300 bg-white rounded-md p-8" method="POST" action="<?php echo e(route('register_handle')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="w-full">
            <div class="mb-6">
                <h3 class="text-2xl font-extrabold">Create an account</h3>
            </div>

            <div class="space-y-6">
                <div>
                    <label class="text-sm mb-2 block">Name</label>
                    <input name="name" type="text" required class="bg-white border border-gray-300 w-full text-sm px-4 py-2.5 rounded outline-blue-500" placeholder="Enter name" />
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div>
                    <label class="text-sm mb-2 block">Email</label>
                    <input name="email" type="email" required class="bg-white border border-gray-300 w-full text-sm px-4 py-2.5 rounded outline-blue-500" placeholder="Enter email" />
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div>
                    <label class="text-sm mb-2 block">Password</label>
                    <input name="password" type="password" required class="bg-white border border-gray-300 w-full text-sm px-4 py-2.5 rounded outline-blue-500" placeholder="Enter password" />
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div>
                    <label class="text-sm mb-2 block">Profile Image</label>
                    <input name="profile_image" type="file" class="bg-white border border-gray-300 w-full text-sm px-4 py-2.5 rounded outline-blue-500" />
                    <?php $__errorArgs = ['profile_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="!mt-10">
                <button type="submit" class="w-full py-3 px-4 text-sm font-semibold rounded text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                    Create an account
                </button>
            </div>
            <p class="text-sm mt-6 text-center">Already have an account? <a href="<?php echo e(route('login')); ?>" class="text-blue-600 font-semibold hover:underline ml-1">Login here</a></p>
        </div>
    </form>
</div>
<?php /**PATH C:\Users\YouCode\Desktop\Team-A-News_Aggregator\Aggregator_App\resources\views/components/sign_up.blade.php ENDPATH**/ ?>