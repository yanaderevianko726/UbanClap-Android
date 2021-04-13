 <div class="columns">
    <div class="column page_info">
        Showing {{($pagination->currentPage-1)*$pagination->perPage+1}} to {{$pagination->currentPage*$pagination->perPage}}
        of  {{$pagination->total}} entries                    
    </div>
    <div class="column pagination_cover">
        {{ $pagination->links}}
    </div>
</div>