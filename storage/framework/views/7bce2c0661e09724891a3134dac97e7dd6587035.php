<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.8.10/tailwind.min.css">

    <!-- Include the Livewire styles -->
    <?php echo \Livewire\Livewire::styles(); ?>

	
</head>
<body class="antialiased overflow-x-hidden">

    <!-- CONTACT FORM -->

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('contact-form')->html();
} elseif ($_instance->childHasBeenRendered('ZZBGF86')) {
    $componentId = $_instance->getRenderedChildComponentId('ZZBGF86');
    $componentTag = $_instance->getRenderedChildComponentTagName('ZZBGF86');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ZZBGF86');
} else {
    $response = \Livewire\Livewire::mount('contact-form');
    $html = $response->html();
    $_instance->logRenderedChild('ZZBGF86', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <!-- END CONTACT FORM SECTION -->

    <!-- Include the Livewire Scripts -->
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>
</html><?php /**PATH C:\xampp\htdocs\laravelstudent\resources\views/contact.blade.php ENDPATH**/ ?>