<div>
    <section class="relative py-6 bg-white bg-gray-200 min-w-screen animation-fade animation-delay">
        <div class="container h-full max-w-5xl mx-auto overflow-hidden rounded-lg shadow">
            <?php if($success): ?>
                <div class="inline-flex w-full ml-3 overflow-hidden bg-white rounded-lg shadow-sm">
                    <div class="flex items-center justify-center w-12 bg-green-500">
                    </div>
                    <div class="px-3 py-2 text-left">
                        <span class="font-semibold text-green-500">Berhasil</span>
                        <p class="mb-1 text-sm leading-none text-gray-500"><?php echo e($success); ?></p>
                    </div>
                </div>
            <?php endif; ?>
            <div class="h-full sm:flex">
                <div class="flex items-center justify-center w-full p-10 bg-white">
                    <form wire:submit.prevent="contactFormSubmit" action="/contact" method="POST" class="w-full">
                        <?php echo csrf_field(); ?>
                        <div class="pb-3">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-red-500 mt-1"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <input wire:model="email" class="w-full px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline" type="text" placeholder="Email Address" name="email" value="<?php echo e(old('email')); ?>" />
                        </div>
                        <div class="py-3">
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-red-500 mt-1"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <input wire:model="name" class="w-full px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline" type="text" placeholder="Name" name="name" value="<?php echo e(old('name')); ?>" />
                        </div>
                        <div class="py-3">
                            <?php $__errorArgs = ['comment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-red-500 mt-1"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <textarea wire:model="comment" row="4" class="w-full h-40 px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline" name="comment" placeholder="Your message here..."><?php echo e(old('comment')); ?></textarea>
                        </div>
                        <div class="pt-3">
                            <button class="flex px-6 py-3 text-white bg-indigo-500 rounded-md hover:bg-indigo-600 hover:text-white focus:outline-none focus:shadow-outline focus:border-indigo-300" type="submit">
                                <span class="self-center float-left ml-3 text-base font-medium">Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div><?php /**PATH C:\xampp\htdocs\laravelstudent\resources\views/livewire/contact-form.blade.php ENDPATH**/ ?>