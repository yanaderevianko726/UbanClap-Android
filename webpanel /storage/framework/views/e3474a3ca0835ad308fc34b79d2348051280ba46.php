 <div class="columns">
    <div class="column page_info">
        Showing <?php echo e(($pagination->currentPage-1)*$pagination->perPage+1); ?> to <?php echo e($pagination->currentPage*$pagination->perPage); ?>

        of  <?php echo e($pagination->total); ?> entries                    
    </div>
    <div class="column pagination_cover">
        <?php echo e($pagination->links); ?>

    </div>
</div><?php /**PATH /Users/apple/Documents/code/2020/thinkinservice2020/serviceadmin 2/resources/views/common/pagination.blade.php ENDPATH**/ ?>