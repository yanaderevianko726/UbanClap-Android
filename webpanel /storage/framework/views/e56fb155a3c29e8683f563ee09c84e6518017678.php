<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
    <ul class="nav sidebar-nav">
        <li>
            <a href="<?php echo e(route('provider.index')); ?>">Home</a>
        </li>
        <li>
            <a href="<?php echo e(route('provider.earnings')); ?>"><?php echo app('translator')->getFromJson('provider.profile.partner_earnings'); ?></a>
        </li>
        <li>
            <a href="<?php echo e(route('provider.transfer')); ?>"><?php echo app('translator')->getFromJson('provider.profile.transfer'); ?></a>
        </li>
        <li>
            <a href="<?php echo e(route('provider.wallet.transation')); ?>"><?php echo app('translator')->getFromJson('provider.profile.wallet_transaction'); ?></a>
        </li>
        <li>
            <a href="<?php echo e(route('provider.cards')); ?>"><?php echo app('translator')->getFromJson('provider.card.list'); ?></a>
        </li>
        <li>
            <a href="<?php echo e(route('provider.upcoming')); ?>"><?php echo app('translator')->getFromJson('provider.partner.upcoming'); ?></a>
        </li>
        <li>
            <a href="<?php echo e(route('provider.profile.index')); ?>"><?php echo app('translator')->getFromJson('provider.profile.profile'); ?></a>
        </li>
        <li>
            <a href="<?php echo e(route('provider.documents.index')); ?>"><?php echo app('translator')->getFromJson('provider.profile.manage_documents'); ?></a>
        </li>
        <li>
            <a href="<?php echo e(route('provider.location.index')); ?>"><?php echo app('translator')->getFromJson('provider.profile.update_location'); ?></a>
        </li>
        <li>
            <a href="<?php echo e(route('provider.change.password')); ?>"><?php echo app('translator')->getFromJson('provider.profile.change_password'); ?></a>
        </li>
        <!-- <li>
            <a href="<?php echo e(Setting::get('stripe_oauth_url')); ?>">Connect to Stripe</a>
        </li> -->
        <li>
            <a href="<?php echo e(url('/provider/logout')); ?>"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                <?php echo app('translator')->getFromJson('provider.profile.logout'); ?>
            </a>
            <form id="logout-form" action="<?php echo e(url('/provider/logout')); ?>" method="POST" style="display: none;">
                <?php echo e(csrf_field()); ?>

            </form>
        </li>
    </ul>
</nav><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/provider/layout/partials/nav.blade.php ENDPATH**/ ?>