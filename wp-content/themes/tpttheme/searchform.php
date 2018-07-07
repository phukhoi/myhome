<form class="smart-search-form" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search..." />
    <input value="" type="submit">
</form>

